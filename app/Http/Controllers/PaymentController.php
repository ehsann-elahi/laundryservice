<?php

namespace App\Http\Controllers;

use App\Models\Notification;
use App\Models\ProductPayment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Session;

class PaymentController extends Controller
{
    public function pay(Request $request)
    {
        $cart = session()->get('cart', []);
        $total = 0;
        $productId = null;

        foreach ($cart as $item) {
            $total += $item['price'] * $item['quantity'];
            $productId = $item['id'];
        }

        // Create pending product payment record
        $paymentRecord = ProductPayment::create([
            'product_id'  => $productId,
            'first_name'  => $request->first_name,
            'last_name'   => $request->last_name,
            'email'       => $request->email,
            'phone'       => $request->phone,
            'amount'      => $total,
            'status'      => 'pending',
        ]);

        $response = Http::withToken(env('TAP_SECRET_KEY'))->post(env('TAP_API_URL') . '/charges', [
            "amount" => $total,
            "currency" => "AED",
            "threeDSecure" => true,
            "description" => "Product Purchase",
            "metadata" => ["payment_id" => $paymentRecord->id],
            "reference" => [
                "transaction" => "txn_" . uniqid(),
                "order" => "ord_" . uniqid()
            ],
            "receipt" => [
                "email" => true,
                "sms" => false
            ],
            "customer" => [
                "first_name" => $request->first_name,
                "last_name" => $request->last_name,
                "email" => $request->email,
                "phone" => [
                    "country_code" => "971",
                    "number" => $request->phone
                ]
            ],
            "source" => [
                "id" => "src_all"
            ],
            "redirect" => [
                "url" => route('payment.callback')
            ]
        ]);

        $responseData = $response->json();

        if (isset($responseData['id'])) {
            $paymentRecord->update([
                'tap_id' => $responseData['id']
            ]);
        }

        if (isset($responseData['transaction']['url'])) {
            return redirect($responseData['transaction']['url']);
        }

        return back()->with('error', 'Something went wrong while initiating the payment.');
    }

    public function callback(Request $request)
    {
        $tap_id = $request->tap_id;

        if (!$tap_id) {
            return view('payment.error', ['message' => 'Missing Tap payment ID.']);
        }

        $response = Http::withToken(env('TAP_SECRET_KEY'))
            ->get(env('TAP_API_URL') . '/charges/' . $tap_id);

        $payment = $response->json();

        $paymentRecord = ProductPayment::where('tap_id', $tap_id)->first();

        if (isset($payment['status']) && $payment['status'] === 'CAPTURED') {
            if ($paymentRecord) {
                $paymentRecord->update([
                    'status'        => 'captured',
                    'order_id'      => $payment['reference']['order'] ?? null,
                    'transaction_id' => $payment['reference']['transaction'] ?? null,
                    'raw_response'  => json_encode($payment)
                ]);
            }
            // ✅ Payment successful
            session()->forget('cart');

            Notification::create([
                'type' => 'New Product Purchase',
                'message' => 'A new product has been purchased. Payment ID# ' . $paymentRecord->id,
            ]);

            return view('payment.success', ['payment' => $payment]);
        }

        if ($paymentRecord) {
            $paymentRecord->update([
                'status'       => 'failed',
                'raw_response' => json_encode($payment)
            ]);
        }
        // ❌ Payment failed
        $errorCode = $payment['response']['code'] ?? null;

        $customMessage = match ($errorCode) {
            'invalid_card' => 'Your card is invalid. Please try another card.',
            'card_declined' => 'Your card was declined by the issuer.',
            'insufficient_funds' => 'Insufficient funds on your card.',
            'stolen_card' => 'This card has been reported as stolen.',
            'expired_card' => 'The card has expired.',
            default => $payment['response']['message'] ?? 'Payment failed. Please try again.',
        };

        return view('payment.error', [
            'payment' => $payment,
            'message' => $customMessage
        ]);
    }
}

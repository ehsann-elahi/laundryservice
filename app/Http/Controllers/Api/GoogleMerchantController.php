<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Str;
use Exception;

class GoogleMerchantController extends Controller
{
    public function productFeed(Request $request)
    {
        try {
            $products = Product::with('shopCategory')->get();

            if ($products->isEmpty()) {
                return response()->json([
                    'status' => 'success',
                    'total' => 0,
                    'data' => [],
                    'message' => 'No products found in database.'
                ]);
            }

            $feed = $products->map(function ($product) {
                $image = filter_var($product->main_image, FILTER_VALIDATE_URL)
                    ? $product->main_image
                    : asset('/assets/upload/shop/' . $product->main_image);

                return [
                    'id' => (string) $product->id,
                    'title' => $product->title ?? 'Untitled Product',
                    'description' => $product->description ?? 'High-quality product from Laundry Service UAE.',
                    'availability' => 'in stock',
                    'availability date' => now()->toDateString(),
                    'expiration date' => null,
                    'link' => route('product.detail', ['slug' => Str::slug($product->title ?? 'product')]),
                    'mobile link' => route('product.detail', ['slug' => Str::slug($product->title ?? 'product')]),
                    'image link' => $image,
                    'price' => $product->price ? number_format($product->price, 2) . ' AED' : null,
                    'sale price' => $product->old_price ? number_format($product->old_price, 2) . ' AED' : null,
                    'sale price effective date' => null,
                    'identifier exists' => true,
                    'gtin' => null,
                    'mpn' => 'LS-' . $product->id,
                    'brand' => 'Laundry Service UAE',
                    'product highlight' => 'Premium quality and best value for your money.',
                    'product detail' => $product->description ?? 'Crafted for comfort and durability.',
                    'additional image link' => null,
                    'condition' => 'new',
                    'adult' => false,
                    'color' => $product->color ?? null,
                    'size' => $product->size ?? null,
                    'size type' => null,
                    'size system' => 'AE',
                    'gender' => $product->gender ?? 'unisex',
                    'material' => $product->material ?? null,
                    'pattern' => $product->pattern ?? null,
                    'age group' => 'adult',
                    'multipack' => null,
                    'is bundle' => false,
                    'unit pricing measure' => null,
                    'unit pricing base measure' => null,
                    'energy efficiency class' => null,
                    'min energy efficiency class' => null,
                    'max energy efficiency class' => null,
                    'item group id' => 'LS-GROUP-' . ($product->shop_category_id ?? 0),
                    'sell on google quantity' => $product->quantity ?? 10,
                ];
            });

            return response()->json([
                'status' => 'success',
                'total' => $feed->count(),
                'data' => $feed
            ], 200, [], JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES);

        } catch (Exception $e) {
            return response()->json([
                'status' => 'error',
                'message' => $e->getMessage()
            ], 500);
        }
    }
}

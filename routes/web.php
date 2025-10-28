<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Artisan;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\ChatController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\PartnerController;
use App\Http\Controllers\FormController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/clear-cache', function () {
    Artisan::call('optimize:clear');
    return 'DONE'; //Return anything
});

Route::get('/', [FrontController::class, 'index'])->name('index');
// Route::get('/services', [FrontController::class, 'services'])->name('laundryservice');
Route::get('/wash-and-fold-abu-dhabi', [FrontController::class, 'washnFold'])->name('washnFold');
Route::get('/ironing-abu-dhabi', [FrontController::class, 'pressing'])->name('pressing');
Route::get('/washing-and-pressing-abu-dhabi', [FrontController::class, 'washNPress'])->name('washNPress');
Route::get('/curtain-cleaning', [FrontController::class, 'curtainCleaning'])->name('curtain-cleaning');
Route::get('/carpet-mattress-sofa-cleaning', [FrontController::class, 'carpet'])->name('carpet');
Route::get('/dry-cleaning-near-me', [FrontController::class, 'dryCleaning'])->name('dryCleaning');
Route::get('/blog', [FrontController::class, 'blog'])->name('blog');
Route::get('/blog/{slug}', [FrontController::class, 'blogShow'])->name('blog-single');

Route::get('/buy-laundry-products', [FrontController::class, 'shop'])->name('shop');

Route::get('/product-page/{slug}', [FrontController::class, 'itemDetail'])->name('product.detail');

Route::get('/laundry-price-list-abu-dhabi', [FrontController::class, 'price_abuDhabi'])->name('price_abuDhabi');
Route::get('/laundry-price-list-dubai', [FrontController::class, 'price_dubai'])->name('price_dubai');
Route::get('/laundry-price-list-ajman', [FrontController::class, 'price_ajman'])->name('price_ajman');

Route::get('/view-cart', [FrontController::class, 'viewCart'])->name('view.cart');
Route::post('/sync-cart', [FrontController::class, 'syncCart'])->name('sync.cart');
Route::delete('/cart/{id}', [FrontController::class, 'remove'])->name('cart.remove');
Route::post('/cart/update', [FrontController::class, 'cartUpdate'])->name('cart.update');

Route::get('/get-services', [FrontController::class, 'getServices']);

Route::get('/dubai', [FrontController::class, 'dubai'])->name('dubai');
Route::get('/ajman-sharjah', [FrontController::class, 'sharjah'])->name('sharjah');

Route::get('/book-laundry-online', [BookingController::class, 'bookingForm'])->name('booking-form');
Route::post('/get-dateTime', [BookingController::class, 'getDateTime']);
Route::post('/fetch-services', [BookingController::class, 'fetchServicesByCategory']);
Route::post('/create-order', [BookingController::class, 'bookOrder'])->name('order.create');

Route::get('/thank-you', [FrontController::class, 'thankYou'])->name('thankYou');
Route::get('/return-policy', [FrontController::class, 'returnPolicy'])->name('returnPolicy');
Route::get('/laundry-faqs', [FrontController::class, 'faq'])->name('faq');
Route::get('/enviornment-health-safety-policy', [FrontController::class, 'EHSPolicy'])->name('EHSPolicy');
Route::get('/privacy-policy', [FrontController::class, 'PrivacyPolicy'])->name('privacyPolicy');
Route::get('/laundry-abu-dhabi', [FrontController::class, 'healthcareLaundry'])->name('healthcareLaundry');
Route::get('/jobs', [FrontController::class, 'jobs'])->name('jobs');
Route::post('/job-apply', [FrontController::class, 'applyJob'])->name('job.store');

Route::get('/laundry-near-me', [FrontController::class, 'laundryNear'])->name('laundryNear');
Route::get('/laundry-near-me/{name}', [FrontController::class, 'laundryDetails'])->name('laundry.details');


Route::post('/chat/start', [ChatController::class, 'start'])->name('chat.start');
Route::post('/chat/send', [ChatController::class, 'sendMessage'])->name('chat.send');
Route::get('/chat/{chat_id}/messages', [ChatController::class, 'fetchMessages'])->name('chat.messages');

Route::post('/add-to-cart', [CartController::class, 'addToCart'])->name('add.to.cart');
Route::get('/cart/sidebar', function () {
    return view('partials.cart-sidebar');
})->name('cart.sidebar');
Route::post('/remove-from-cart', [CartController::class, 'removeFromCart'])->name('remove.from.cart');
Route::get('/linen-rental', [FrontController::class, 'linenrental'])->name('linen.rental');
Route::get('/laundry-partner', [FrontController::class, 'partner'])->name('partner');

// payment route
Route::get('/pay', [PaymentController::class, 'pay'])->name('payment.pay');
Route::get('/payment/callback', [PaymentController::class, 'callback'])->name('payment.callback');
Route::post('/partners/ajax', [PartnerController::class, 'ajaxStore'])->name('partners.ajaxStore');



// ----------------------------------------
// Requirement Form (slug-based dynamic form)
// ----------------------------------------

Route::get('/form/{slug}', [FormController::class, 'show'])->name('forms.show');
Route::post('/form/{slug}', [FormController::class, 'store'])->name('forms.store');

// Admin area (simple list)
Route::get('/admin/forms', [FormController::class, 'index'])->name('admin.forms.index');
Route::get('/admin/forms/{id}/submissions', [FormController::class, 'submissions'])->name('admin.forms.submissions');
Route::get('/admin/submission/{id}/download', [FormController::class, 'downloadPdf'])->name('admin.submissions.download');

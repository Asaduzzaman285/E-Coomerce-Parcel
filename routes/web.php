<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\StripePaymentController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;


// Route::get('/', function () {
//     return view('welcome');
// });
Route::get("/", [HomeController::class, 'index'])->name('home');

Route::get('redirect', [HomeController::class, 'redirect'])->name('redirect')->middleware('auth');

Route::get('view_category', [AdminController::class, 'view_category'])->name('view_category');
Route::post('add_category', [AdminController::class, 'add_category'])->name('add_category');
Route::get('view_product', [AdminController::class, 'view_product'])->name('view_product');
Route::get('show_product', [AdminController::class, 'show_product'])->name('show_product');
Route::get('delete_category/{id}', [AdminController::class, 'delete_category'])->name('delete_category');
Route::post('add_product', [AdminController::class, 'add_product'])->name('add_product');
Route::get('delete_product/{id}', [AdminController::class, 'delete_product'])->name('delete_product');
Route::get('edit_product/{id}', [AdminController::class, 'edit_product'])->name('edit_product');
Route::post('update_product_confirm/{id}', [AdminController::class, 'update_product_confirm'])->name('update_product_confirm');
Route::get('details_product/{id}',[HomeController::class,'details_product'])->name('details_product');
Route::post('add_to_cart/{id}',[HomeController::Class,'add_to_cart'])->name('add_to_cart');

Route::get('show_cart',[HomeController::Class,'show_cart'])->name('show_cart');

Route::get('remove_product/{id}',[HomeController::Class,'remove_product'])->name('remove_product');
Route::get('cash_order',[HomeController::class,'cash_order'])->name('cash_order');
Route::get('delivery/{id}', [AdminController::class, 'delivery'])->name('delivery');

Route::get('pdfprint/{id}', [AdminController::class, 'pdfprint'])->name('pdfprint');

// Route::get('stripe/{totalprice}',[HomeController::class,'stripe'])->name('stripe');

Route::get('search',[AdminController::class,'search'])->name('search');
Route::get('sendmail/{id}', [AdminController::class, 'sendmail'])->name('sendmail');

Route::post('send_user_email/{id}', [AdminController::class, 'send_user_email'])->name('send_user_email');
Route::controller(StripePaymentController::class)->group(function(){
    Route::get('stripe/{totalprice}', 'stripe')->name('stripe'); // Use this to show the form
    Route::post('stripe', 'stripePost')->name('stripe.post'); // Use this for payment processing
});
//merchant routes


Route::get('order',[AdminController::class,'order'])->name('order');
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

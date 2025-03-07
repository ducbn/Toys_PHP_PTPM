<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\PaymentController;

// 🟢 **Trang mặc định là trang sản phẩm**
Route::get('/', function () {
    return redirect()->route('products.index');
});

// 🟢 **Trang sản phẩm không yêu cầu đăng nhập**
Route::get('/products', [ProductController::class, 'index'])->name('products.index');
Route::get('/products/{id}', [ProductController::class, 'show'])->name('products.show');

// 🟢 **Trang welcome (dùng để đăng nhập, đăng ký)**
Route::get('/welcome', function () {
    return view('welcome');
})->name('welcome');

// 🛑 **Bắt buộc đăng nhập để vào các trang này**
Route::middleware('auth')->group(function () {
    Route::get('/cart', [CartController::class, 'index'])->name('cart.index');
    Route::post('/cart/{product}', [CartController::class, 'add'])->name('cart.add');
    Route::patch('/cart/{id}', [CartController::class, 'update'])->name('cart.update');
    Route::delete('/cart/{id}', [CartController::class, 'remove'])->name('cart.remove');

    Route::get('/orders/create', [OrderController::class, 'create'])->name('orders.create');
    Route::post('/orders/store', [OrderController::class, 'store'])->name('orders.store');
    Route::get('/orders/history', [OrderController::class, 'history'])->name('orders.history'); // 👈 **Sửa lỗi thiếu route**
    Route::get('/orders/{id}', [OrderController::class, 'show'])->name('orders.show');

    Route::post('/checkout', [PaymentController::class, 'checkout'])->name('checkout');
    Route::get('/payment/success', [PaymentController::class, 'success'])->name('payment.success');
    Route::get('/payment/cancel', [PaymentController::class, 'cancel'])->name('payment.cancel');
});

// 🟢 **Cấu hình đăng nhập, đăng ký (Laravel Breeze)**
require __DIR__.'/auth.php';


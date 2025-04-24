<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\OrderController;

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


// Replace the existing dashboard route with:
Route::get('/dashboard', [DashboardController::class, 'index'])
    ->middleware(['auth', 'verified'])
    ->name('dashboard');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Route::middleware(['auth'])->group(function () {
    // Cart Routes
Route::post('/cart', [CartController::class, 'store'])->name('cart.store');
Route::get('/cart', [CartController::class, 'index'])->name('cart.index');
    Route::delete('/cart/{pizzaId}', [CartController::class, 'destroy'])->name('cart.remove');

    Route::patch('/cart/increase/{pizzaId}', [CartController::class, 'increase'])->name('cart.increase');
Route::patch('/cart/decrease/{pizzaId}', [CartController::class, 'decrease'])->name('cart.decrease');
Route::delete('/cart/{pizzaId}', [CartController::class, 'destroy'])->name('cart.remove');

    // Order Routes (Placeholder for future functionality)
    Route::get('/order', [OrderController::class, 'index'])->name('order.index');
    Route::post('/order', [OrderController::class, 'store'])->name('order.store');
    Route::post('/order/cancel/{order}', [OrderController::class, 'cancel'])->name('order.cancel');
    
Route::get('/cancelled-orders', [OrderController::class, 'cancelledOrders'])->name('orders.cancelled');

// });

require __DIR__.'/auth.php';

<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('menu');
});

Route::get('/orders', function () {
    return view('orders');//eg: , view('orders', ["orders"=>$ordersData]);
});

Route::get('/order/{id}', function () {
    // use id (order id) to locate data
    return view('order');//eg: , ["order"=>$orderData]
});

Route::get('/dashboard', function () {
    return view('my_order');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

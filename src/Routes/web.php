<?php

use Illuminate\Support\Facades\Route;
use Ecommerce\ProductInventory\Http\Controllers\ProductController;

Route::prefix('inventory')->group(function () {
    // JSON APIs
    Route::get('products', [ProductController::class, 'index'])->name('inventory.products');
    Route::post('products/{product}/sale', [ProductController::class, 'sale']);
    Route::post('products/{product}/return', [ProductController::class, 'returnProduct']);
    Route::get('products/{product}/logs', [ProductController::class, 'logs'])->name('inventory.product.logs');
    Route::get('dashboard', [ProductController::class, 'dashboard'])->name('inventory.dashboard');
});



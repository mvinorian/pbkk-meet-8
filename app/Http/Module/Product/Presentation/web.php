<?php

use App\Http\Module\Product\Presentation\Controller\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('/products', [ProductController::class, 'index'])->name('product');

Route::get('ping', function () {
    return csrf_token();
});

Route::post('create_product', [\App\Http\Module\Product\Presentation\Controller\ProductController::class, 'createProduct']);

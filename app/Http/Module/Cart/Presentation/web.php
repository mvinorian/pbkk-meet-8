<?php

use App\Http\Module\Cart\Presentation\Controller\CartController;
use Illuminate\Support\Facades\Route;

Route::get('/carts', [CartController::class, 'index']);

Route::get('ping', function () {
    return csrf_token();
});

Route::post('create_product', [\App\Http\Module\Product\Presentation\Controller\ProductController::class, 'createProduct']);

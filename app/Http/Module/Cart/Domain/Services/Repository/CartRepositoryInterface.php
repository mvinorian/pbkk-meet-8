<?php

namespace App\Http\Module\Cart\Domain\Services\Repository;

use App\Http\Module\Product\Domain\Model\Product;

interface CartRepositoryInterface
{
    public function save(Product $product);
}

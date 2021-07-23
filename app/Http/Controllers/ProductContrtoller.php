<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductContrtoller extends Controller
{
    public function single_product()
    {
        $product = Product::where('id', 1)->first();
        return view('products.single-product', compact('product'));
    }
}

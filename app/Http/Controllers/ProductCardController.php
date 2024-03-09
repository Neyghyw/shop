<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductCardController extends Controller
{
    function show_product_card(int $id) {
        $product = Product::all() -> where('id', $id);
        return view('product_card') -> with('data', $product);
    }
}

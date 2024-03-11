<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\View\View;

class ProductController extends Controller
{
    function showProductCard(Product $product): View
    {
        return view('product_card', ['product' => $product]);
    }

    public function productsList(): View
    {
        $products = Product::paginate(15);
        return view('products_list', ['products' => $products]);
    }
}

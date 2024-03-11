<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\View\View;

class ProductController extends Controller
{
    function detail(Product $product): View
    {
        return view('products.detail', ['product' => $product]);
    }

    public function index(): View
    {
        $products = Product::paginate(15);
        return view('products.index', ['products' => $products]);
    }
}

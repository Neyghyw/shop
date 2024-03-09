<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;
use App\Models\Product;


class ProductsListController extends Controller
{
    public function products_list(): View
    {
        $products = Product::paginate(15);
        $products->withPath('/products');
        return view('products_list', ['products' => $products]);
    }
}

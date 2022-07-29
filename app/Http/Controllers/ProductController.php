<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function get_product(Request $request, $name)
    {
        return view('products.product_detail', compact('name'));
    }
}

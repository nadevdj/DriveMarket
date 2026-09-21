<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {

        $products = [
            (object) ['name' => 'Product 55'],
            (object) ['name' => 'Product 2'],
            (object) ['name' => 'Product 3'],
        ];
        return view('products', compact('products'));
    }
}

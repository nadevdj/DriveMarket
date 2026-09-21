<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{

      private array $products = 
     [
            [ 'key' => 0, 'name' => 'Product 56', 'price' => 100],
            [ 'key' => 1, 'name' => 'Product 4', 'price' => 200],
            [ 'key' => 2, 'name' => 'Product 21', 'price' => 300],
            [ 'key' => 3, 'name' => 'Product 7', 'price' => 400],
            [ 'key' => 4, 'name' => 'Product 9', 'price' => 500],
            
            
    ];

    public function index()
    {

       
        return view('products.index', ['products' => $this->products]);
    }
    public function show($key)
    {
        $other_products =  collect($this->products)->filter(function($product) use ($key) {
            return $product['key'] !== intval($key);
        })->random(3);
        
        return view('products.show', [
            'product' => $this->products[$key],
            'other_products' => $other_products,
        ]);
    }
}

<?php
namespace App\Http\Controllers;

use App\Product;

class ProductController extends Controller 
{

    public function getProducts() 
    {
        $products = Product::all();
        $response = [
            'products' => $products
        ];

        return response()->json($response, 200);
    }
}
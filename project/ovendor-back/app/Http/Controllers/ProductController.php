<?php
namespace App\Http\Controllers;

use App\Product;
use App;

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

    public function getProductsCarros() 
    {
        $products = Product::all()->where('categorie', '1');
        $response = [
            'products' => $products
        ];
        return response()->json($response, 200);
        
    }
}
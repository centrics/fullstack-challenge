<?php
namespace App\Http\Controllers;

use App\Product;
use App;
use Faker\Factory as Faker;

class ProductController extends Controller 
{
    
    public function getProducts() 
    {
        $faker = Faker::create('App\Product');

        $list = [];
        
        for($i = 0; $i < 33; $i++) {
            $list[$i] = ['title' => $faker->sentence($nbWords = 6, $variableNbWords = true), 
                        'price' => $faker->buildingNumber,
                        'description' => $faker->paragraph($nbSentences = 3, $variableNbSentences = true),
                        'categorie' => (rand(5, 15) % 5)]; 
        }

        $response = [
            'products' => $list
        ];

        
        return response()->json($response, 200);
    }
    
    public function getProductsCarros() 
    {
        $faker = Faker::create('App\Product');

        $list = [];
        
        for($i = 0; $i < 21; $i++) {
            $list[$i] = ['title' => $faker->sentence($nbWords = 6, $variableNbWords = true), 
                        'price' => $faker->buildingNumber,
                        'description' => $faker->paragraph($nbSentences = 3, $variableNbSentences = true),
                        'categorie' => 0]; 
        }

        $response = [
            'products' => $list
        ];

        
        return response()->json($response, 200);

        
    }
}
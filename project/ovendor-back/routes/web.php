<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/categoria/carro', function () {
    
    $list = [
        ["title" => "Carro 0 baratin só aqui", "price" => "120"],
        ["title" => "Bike da hora 0 baratin só aqui", "price" => "12"],
        ["title" => "nen sie oq é 0 baratin só aqui", "price" => "3122"],
        ["title" => "BMW loca baratin", "price" => "2122"],
        ["title" => "c mó caro 0 só aqui", "price" => "9999"],
    ];

    return response()->json($list, 200);
});

Route::get('/produtos/{id}', function ( $id ) {
    return 'Hellow word '. $id;
});

Route::get('/products', [ 'uses' => 'ProductController@getProducts']);
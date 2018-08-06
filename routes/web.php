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
 //domain/products
Route::get('products','ProductController@index');
// Route::get('products',['use'=>'ProductController', 'as'=>'products.index']);
// Route::get('products/create','ProductController@create')->name('products.create');
Route::get('products/create','ProductController@create');
Route::post('products','ProductController@store');
Route::get('products/{id}/edit','ProductController@edit');
Route::put('products/{id}','ProductController@update');
Route::get('products/{id}','ProductController@show');
Route::delete('products/{id}','ProductController@destroy');
// Route::resource('products', 'ProductController');
// Route::get('user/{name?}',function($name='Huong'){
// 	echo $name;
// });


// Route::get('products/{id}','ProductController@show'->name('products.show'));

// Route::prefix('admin')->group(function(){
// 	Route::resource('products', 'ProductController');
// });

//gib bash php artisan make:controller ProductCOntroller --resource tuwj sinh ra create...
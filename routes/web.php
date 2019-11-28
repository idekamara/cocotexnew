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
# appel static sur la methode anonyme qui retourne la methode view()
Route::get('/', function () 
{
    return view('home');
});

Route::get('/produits', function() 
{
	return "c'est un costume africain";

});

Route::get('/produits/{id}', function($id) 
{
	return "Je suis un $id";
});

Route::get('/{id}', 'HomeController@show');


Route::get('/categories/{id}', 'ProductsController@affiche');
Route::get('/', 'HomeController@index');

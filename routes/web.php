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
/*
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
//Route::get('/', 'HomeController@index');//*/

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/products/index','ProductsController@index')->name('products.index');
Route::get('/products/create','ProductsController@create');
Route::post('/products/store','ProductsController@store')->name('products.store');
Route::resource('categories', 'CategoriesController');
//Route::get('/c')
Route::get('/category/edit/{id}', 'CategoriesController@edit')->name('editer_category');

Route::get('/product/edit/{id}', 'ProductsController@edit')->name('editer_produit');

Route::patch("/product/edit/{id}", "ProductsController@update")->name('updater_produit');

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
//route page d'accueil
Route::get('/home', 'HomeController@index')->name('home');
//routes pour les differentes operations sur les produits
Route::get('/products/index','ProductsController@index')->name('products.index');
Route::get('/products/create','ProductsController@create')->name('products.create');
Route::post('/products/store','ProductsController@store')->name('products.store');
Route::post('/products/show','ProductsController@show')->name('products.show');
Route::get('/product/edit/{id}', 'ProductsController@edit')->name('editer_produit');
Route::patch('/product/edit/{id}', 'ProductsController@update')->name('updater_produit');
Route::delete('/product/product/{id}', 'ProductsController@destroy')->name('supprimer_produit');
Route::get('/product/product/{id}','ProductsController@show')->name('image_product');

//routes pour les differentes operations sur les categories

Route::resource('categories', 'CategoriesController');
Route::get('/category/edit/{id}', 'CategoriesController@edit')->name('editer_category');
Route::patch("/category/edit/{id}", "CategoriesController@update")->name('updater_category');



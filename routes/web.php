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
/*# appel static sur la methode anonyme qui retourne la methode view()
Route::get('/', function ()
{
    return view('home');
});*/

//Auth::routes(['verify'=>true]);
//route page d'accueil
Route::get('/home', 'HomeController@index')->name('welcome');
Route::get('/', 'HomeController@index')->name('home');
//Route::get('/home', 'HomeController@index')->name('home');
//routes pour les differentes operations sur les produits
Route::get('/products/index','ProductsController@index')->name('products.index')->middleware('auth');
Route::get('/products/pagnes','ProductsController@afficherPagnes')->name('products.pagnes');
Route::get('/products/costumes','ProductsController@afficherCostumes')->name('products.costumes');
Route::get('/products/chemises','ProductsController@afficherChemises')->name('products.chemises');
Route::get('/products/bombers','ProductsController@afficherBombers')->name('products.bombers');
Route::get('/products/shoes','CategoriesController@afficherShoes')->name('products.shoes');
Route::get('/products/biocos','CategoriesController@afficherBiocos')->name('products.biocos');
Route::get('/products/create','ProductsController@create')->name('products.create')->middleware('auth');
Route::post('/products/store','ProductsController@store')->name('products.store');
Route::post('/products/show','ProductsController@show')->name('products.show');
Route::get('/products/all','CategoriesController@all')->name('products.all');

//Route::get('category/{slug}/films', 'FilmController@index')->name('films.category');
//Route::get("/categories/{slug}/allproducts", 'ProductsController@all')->name('products.all');
Route::get('/product/edit/{id}', 'ProductsController@edit')->name('editer_produit');
Route::patch('/product/edit/{id}', 'ProductsController@update')->name('updater_produit');
Route::delete('/product/product/{id}', 'ProductsController@destroy')->name('supprimer_produit')->middleware('auth');
//Route::delete('/orders/panier/{id}', 'CartsContoller@destroy')->name('supprimer_produit')->middleware('auth');
Route::get('/product/product/{id}','ProductsController@show')->name('image_product');

Route::get('/contacts/create', 'ContactsController@create')->name('contacts.create')->middleware('auth');
Route::post('/contacts/store', 'ContactsController@store')->name('contacts.store');
Route::get('/contacts/confirmation', 'ContactsController@store')->name('confirmation');
Route::get('/contacts/index','ContactsController@index')->name('contacts.index')->middleware('auth');
Route::delete('/contacts/user/{id}', 'ContactsController@destroy')->name('supprimer_user')->middleware('auth');
Route::get('/contacts/edit/{id}', 'ContactsController@edit')->name('editer_user')->middleware('auth');
Route::patch('/contacts/edit/{id}', 'ContactsController@update')->name('updater_user');
//Route::get('/login','LoginController@showLoginForm')->name('login');
Route::get('products/search', 'CategoriesController@search_prod')->name('search_prod');
Route::get('products/resultats', 'CategoriesController@resultats_search')->name('resultats_search');
//routes pour les differentes operations sur les categories

Route::resource('categories', 'CategoriesController')->middleware('auth');
Route::get('/category/edit/{id}', 'CategoriesController@edit')->name('editer_category')->middleware('auth');
Route::patch("/category/edit/{id}", "CategoriesController@update")->name('updater_category');
Route::delete('/category/category/{id}', 'CategoriesController@destroy')->name('supprimer_caregory');

Route::get('/abonnement/expired', 'AbonnementController@expired');

Route::post('/getmsg', 'AjaxController@index');
Route::get('/orders/carts', 'CartsContoller@cart')->name('orders.carts');
Route::get('/carts/index', 'CartsContoller@create')->name('panier');
Route::post('/ajout_category', 'AjaxController@ajout_category');
Route::post('/panier/ajouter', 'CartsContoller@store')->name('add.carts')->middleware('auth');
Route::post('/panier/update', 'CartsContoller@update')->name('update.carts')->middleware('auth');
//Route::post('/product/add_to_cart', "AjaxController@add_to_cart")->name('add.carts')->middleware('auth');
Route::delete('/product/destroy/{id}', "CartsContoller@destroy")->name('delete.carts')->middleware('auth');
Route::get('/order/checkout', 'CartsContoller@checkout')->name('checkout');
Route::get('/videpanier', function(){
	Cart::destroy();
	return back();
})->name('vider');
Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');
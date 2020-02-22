<?php

namespace App\Http\Controllers;

use App\Category;
use App\Product;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
      public function __construct()
    {
        /*$this->middleware('verified');*/
        //$this->middleware(['can:admin', 'can:moderator']);
        //$this->authorize('seller');//*/
    }


    public function index()
    {
        $categories =\App\Category::all();
        return view('categories.index', compact('categories'));
    }
    public function all(Request $request)
    {
        $products = \App\Product::orderBy('created_at', 'DESC')->get();
        return view('products.all', compact('products'));
    }
    public function afficherShoes()
    {
        $products = \App\Product::where('category_id',41)->orderBy('created_at', 'DESC')->get();
        return view('products.shoes', compact('products'));
    }
    public function afficherBiocos()
    {
        $products = \App\Product::where('category_id',51)->orderBy('created_at', 'DESC')->get();
        return view('products.biocos', compact('products'));
    }

    public function search_prod(Request $request)
    {
        $categories = \App\Category::pluck('name','id');
        return view('products.search', compact('categories'));
    }

    public function resultats_search(Request $request){
    $nom_prod = $request->input('nom');
    //$prix_prod = $request->input('price');
    $category = $request->input('category_id');
    /* if(empty($nom_prod) && empty($category))
    {
    return redirect('/products/search')->with('info', 'Veuiller Renseigner les champs ');
    }*/
    if(($category!==null)&&($nom_prod!==null))
    {
    $products = \App\Product::Where("category_id", "$category")
    ->Where("name", "like", "%$nom_prod%")->get();
    // dd($products);
    //$categories = \App\Category::pluck('name','id');
    //return view('products.resultats', compact('nom_prod','products'));
    }
    else if(($category!==null)&&($nom_prod==null)){
    $products = \App\Product::Where("category_id", "$category")->get();
    //$categories = \App\Category::pluck('name','id');
    //return view('products.resultats', compact('products','nom_prod'));
    }
    else if(($category==null)&&($nom_prod!==null)){
    $products = \App\Product::Where("name", "like", "%$nom_prod%")->get();
    //$categories = \App\Category::pluck('name','id');
    //return view('products.resultats', compact('nom_prod','products'));
    }
    //dd($products[0]);
    //$products est un objet, une collection de tableau si la 1ere ligne (le 1er tableau) est vide
    if(!empty($products[0])){
    //dd($products);
    return view('products.resultats', compact('nom_prod','products'));
    }
    else /*if(($category==null)&&($nom_prod==null))*/{
    return redirect('/products/search')->with('info', 'Aucun résultat correspondant');
    }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = \App\Category::all();
        return view('categories.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'name'=>'required|min:5',
            'description' => 'required|max:1000000']);

        $categories = new Category();

        $categories->name = $request->input('name');
        $categories->description = $request->input('description');
        $categories->save();
        return redirect('/categories');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $categories = \App\Category::pluck('name','id');
        return view('categories.edit', compact('categories'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //$this->authorize('admin');
        $categories = \App\Category::find($id);
        //$categories = \App\Category::pluck('name','id');
        return view('categories.edit', compact('categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $categories = \App\Category::find($id);
        if($categories){
            $categories->name = $request->input('name');
            $categories->description = $request->input('description');
            $categories->save();
        }
        return redirect('/categories');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //$this->authorize('admin');
        $categories = \App\Category::find($id);
        if($categories)
        $categories->delete();
        //return redirect()->route('products.index');
        return redirect('/categories');
    }
}

<?php

namespace App\Http\Controllers;

use App\Product;

use Illuminate\Http\Request;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        # on recupere l'ensemble des produits
        #$products = Product::all();
       // dd($products);
        $products = \App\Product::orderBy('created_at', 'DESC')->get();

        return view('products.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   //On va recuperer les categories dans le model Category avec la methode pluck()
        $categories = \App\Category::pluck('name','id');
        $products = \App\Product::all();
        return view('products.create', compact('categories','products'));

        //return view('products.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    //le traitement du form se fera dans la méthode store().
    public function store(Request $request)
    {
        $data = $request->validate([
            'name'=>'required|min:5',
            'price' => 'required|numeric',
            'description' => 'max:1000000']);

        $product = new Product();

        $product->name = $request->input('name');
        $product->price = $request->input('price');
        $product->description = $request->input('description');
        $product->category_id = $request->input('category_id');

        $product->save();
        return redirect('/products/index');
       //return redirect()->back();

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $products = \App\Product::pluck('id','name');
        return view('products.show', compact('products'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //on recupere le produit avec la methode find()
        $product = \App\Product::find($id);
        $categories = \App\Category::pluck('name','id');
        return view('products.edit', compact('product','categories'));


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
        $product = \App\Product::find($id);
        if($product){
            $product->update([
                'name' => $request->input('name'),
                'price' => $request->input('price'),
                'description' => $request->input('description'),
                'category_id' => $request->input('category_id'),
            ]);
        }
        $product->save();
        return redirect('/products/index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

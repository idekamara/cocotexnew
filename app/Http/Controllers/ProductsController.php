<?php
namespace App\Http\Controllers;
//importe les classes
use App\Product;
use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
//use Illuminate\Support\Str;
class ProductsController extends Controller
{
    //ce construreur aura pour effet de fermer toutes les méthodes du contrôleur au utilisateurs non connectés.
    public function __construct()
    {
      //$this->middleware('auth');
    }
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
    public function afficherPagnes()
    {      
        $products = \App\Product::where('category_id',1)->orderBy('created_at', 'DESC')->get();
        return view('products.pagnes', compact('products'));
    }
    public function afficherCostumes()
    {
       $products = \App\Product::where('category_id',11)->orderBy('created_at', 'DESC')->get();
       return view('products.costumes', compact('products'));
    }
    public function afficherChemises()
    {
       $products = \App\Product::where('category_id',21)->orderBy('created_at', 'DESC')->get();
       return view('products.chemises', compact('products'));
    }
    public function afficherBombers()
    {
       $products = \App\Product::where('category_id',31)->orderBy('created_at', 'DESC')->get();
       return view('products.bombers', compact('products'));
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


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    { //$this->authorize('admin');    
     //On va recuperer les categories dans le model Category avec la methode pluck()
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
            'name'=>'required|max:300|min:3',
            'price' => 'required|numeric',
            'description' => 'max:1000000',
            'product_image' => 'nullable | max:4096']);
        $product = new Product();
          //On verfie si une image est envoyée
          if($request->has('product_image'))
          {
            //On enregistre l'image dans un dossier
            $image = $request->file('product_image');
            //Nous allons definir le nom de notre image en combinant le nom du produit et un timestamp
            $image_name = Str::slug($request->input('name')).'_'.time();
            //Nous enregistrerons nos fichiers dans public/uploads/images
            $folder = '/uploads/images/';
            //Nous allons enregistrer le chemin complet de l'image dans la BD
            $product->images = $folder.$image_name.'.'.$image->getClientOriginalExtension();
            //Maintenant nous pouvons enregistrer l'image dans le dossier en utilisant la methode uploadImage();
            $save_img = $this->uploadImage($image, $folder, 'public', $image_name);
             }
        $product->name = $request->input('name');
        $product->price = $request->input('price');
        $product->description = $request->input('description');
        $product->category_id = $request->input('category_id');
        $product->save();
        return redirect('/products/index')->with('info', 'Le produit a bien été ajouté');
        //return redirect(route('products.index'));
       //return redirect()->back();
    }
    //cette méthode gére l’enregistrement des fichiers uploadé
    public function uploadImage(UploadedFile $uploadedFile, 
                                                 $folder = null,
                                                 $disk = 'public',
                                                 $filename = null)
        {
            $name = !is_null($filename) ? $filename : str_random('25');
            $file = $uploadedFile->storeAs($folder, $name.'.'.$uploadedFile->getClientOriginalExtension(), $disk);
        return $file;
        }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $product = \App\Product::find($id);
        $products = \App\Product::pluck('id','images');
        return view('products.show',compact('product','products'));
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
        /* $product = \App\Product::find($id);
        if($product){
        $product->update([
        'name' => $request->input('name'),
        'price' => $request->input('price'),
        'description' => $request->input('description'),
        'category_id' => $request->input('category_id'),
        ]);
        }*/
        $data = $request->validate([
        'name'   => 'required',
        'price' => 'required | numeric',
        'product_image' => 'nullable | image | mimes:jpeg,png,jpg,gif | max:2048']);
        $product = \App\Product::find($id);
        if($product){
        if($request->has('product_image')){
        //On enregistre l'image dans une variable
        $image = $request->file('product_image');
        if(file_exists(public_path().$product->images))//On verifie si le fichier existe
           Storage::delete(asset($product->images));//On le supprime alors
        //Nous enregistrerons nos fichiers dans /uploads/images dans public
        $folder = '/uploads/images/';
        $image_name = Str::slug($request->input('name')).'_'.time();
        $product->images = $folder.$image_name.'.'.$image->getClientOriginalExtension();
        //Maintenant nous pouvons enregistrer l'image dans le dossier en utilisant la méthode uploadImage();
        $this->uploadImage($image, $folder, 'public', $image_name);
        }
        $product->name  = $request->input('name');
        $product->price = $request->input('price');
        $product->description = $request->input('description');
        $product->category_id = $request->input('category_id');
        $product->save();
        return redirect('/products/index')->with('info', 'Le produit a bien été modifié');
    }
}
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->authorize('admin');
        $product = Product::find($id);
        if($product)
        $product->delete();
        //return redirect()->route('products.index');
        return redirect('/products/index');
    
    }
}



































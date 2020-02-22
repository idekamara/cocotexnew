<?php

namespace App\Http\Controllers;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;
use App\Product;
use App\Category;

class AjaxController extends Controller
{ public function __construct()
    {
        $this->middleware('auth')->except('add_to_cart');
    }

    public function index(){
        $msg = "Ceci est le new message";
        return response()->json(array('msg' => $msg), 200);
    }
  //méthode ajout_category() du contrôlleur 
    public function ajout_category(Request $request){
   $data = $request->validate([
       'name' => 'required | min:3',
       'on_menu' => 'nullable | digits_between:0,1'
   ]);
   $category = new Category();
   $name = $request->input('name');
   $on_menu = $request->input('on_menu') ?? 0;
   if($saved = \App\Category::updateOrCreate(['name'=>$name,'on_menu' => $on_menu]))
      /*Nous retournons pas une view ici. Nous allons retourner un objet json.
        parce que nous allons faire un traitement en javascript. */
        return response()->json([
           'message'   => 'Categorie enregistrée',
           'data'   => ['id'=>$saved->id,'name'=>$name,'on_menu' => $on_menu],
           'errors'    => []
       ],
           200);
   else
       return response()->json(['message' => 'Erreur lors de la modification', 'status' => 401,'errors'=>$data->errors()->all()],200);
}
  //méthode add_to_cart() dans le contrôlleur Ajax
      public function add_to_cart(Request $request){
      //On recupere le produit dans la BD a partir de l'id qui est passe en parametre
      $product = Product::find($request->input('product_id'));
      //On s'assure qu'il y'a bien un produit qui est retourne
      if($product){
      //On enregistre la session cart dans une variable
      $cart = $request->session()->get('cart');
      //On verifie si la cle du produit est deja dans les produits de la session avant de l'ajouter
      if(!isset($cart['products'][$product->id])){
      //On prepare comment ajouter le produit dans les sessions. Chaque produit dans la sessoin set enregistre dans une cle cart. cette cle contient un
      $cart['products'][$product->id] = ['id' => $product->id, 'name' => $product->name, 'image'  => $product->images, 'price' => $product->price, 'quantite' => 1, "total" => $product->price];    
      $count=0; 
      //On ajoute la variable $cart dans les sessions
      $request->session()->put('cart',$cart);
      $count = count($cart['products']);
      //dd($count);
      //return response()->json(['success' => true,], 200);
      return redirect()->route('products.all',compact('count'))->with('success','Le produit a été bien ajouter au panier');
      }
      else{
        return redirect()->route('products.all',compact('count'))->with('danger','Ce produit est déjà ajouter au panier');
      } 

      }
    }
    
  public function destroy(Request $request,$id){
   
          $id=(int)$id;
          Cart::remove($id);
          return back()->with('success','le produit a ete supprimer');
    }
    

  

}

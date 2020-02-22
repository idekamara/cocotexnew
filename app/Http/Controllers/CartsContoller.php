<?php
namespace App\Http\Controllers;

use App\Order;
use Illuminate\Contracts\Session\Session;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;
use App\Product;
use Illuminate\Support\Facades\Auth;

class CartsContoller extends Controller
{
   public function cart(Request $request){
   if(!$request->session()->has('cart'))
    return redirect('/');
   $cart = $request->session()->get('cart')['products'];
   //dd($cart);
   return view('orders.carts', compact('cart'));
}


public function checkout(Request $request){
   if(!$request->session()->has('cart') || empty($request->session()->get('cart'))){
       return redirect('/');
   }
   $carts = $request->session()->get('cart');
   $cart_total = 0;
   foreach ($carts['products'] as $cart){
       $cart_total += $cart['total'];
   }
   $order = Order::create(['user_id' => Auth::id(), 'prix_total' => $cart_total]);
   if($order){
       foreach($carts['products'] as $key => $cart){
           $order_product = $order->products()->sync([$key]);
       }
       $request->session()->forget('cart');
       $message = "Votre commande a été enregistrée. Nous vous reviendrons dans les plus brefs délais.<br>CocoTex vous remercie de votre confiance.";
       return view('orders.checkout')->withMessage($message);
   }
   return redirect('/');
}

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('carts.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
   return view('carts.index');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   
         $product=Product::find($request->product_id);

         $duplicata = Cart::search (function ($cartItem, $rowId) use($request) {
          //  dd( (int) $request->product_id);
          return $cartItem->id=== (int)$request->product_id;
        });

        if($duplicata->isNotEmpty()){
           return redirect()->route('products.all')->with('danger','Ce produit est déjà ajouter au panier');
        }

        Cart::add($product->id, $product->name,1,$product->price, ['image'  =>  $product->images]) 
        ->associate(' App\Product');
        //dd(Cart::content());
        return redirect()->route('products.all')->with('success','Le produit a été bien ajouter au panier');

    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id,$qty)
    {
        Cart::update($id, ['qty' => $qty]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Cart::remove($id);
        return redirect('/carts/index')->with('success','le produit a été supprimer');
        
    }
}

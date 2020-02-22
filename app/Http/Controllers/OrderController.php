<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OrderController extends Controller
{
    /*méthode cart() vérifie si le panier virtuel n’est pas vide. 
    Elle récupère le contenu du panier puis  retourne la vue orders/carts.blade.php
    */
    public function cart(Request $request){
   if(!$request->session()->has('cart'))
       //return redirect('/');
   $cart = $request->session()->get('cart');
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
       $message = "Votre commande a ete enregistree. Nous vous reviendrons dans un instant.<br>CocoTex vous remercie de votre confiance.";
       return view('orders.checkout')->withMessage($message);
   }
   return redirect('/');
}

}

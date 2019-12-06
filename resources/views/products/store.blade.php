<?php

use \App\Product;

public function store(Request $request)
{
$product = new Product();
$product->name = $request->input('name');
$product->price = $request->input('price');
$product->description = $request->input('description');
$product->save();
return redirect()->back();


}
?>

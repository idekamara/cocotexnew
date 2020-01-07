<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AjaxController extends Controller
{
    public function ajout_category(Request $request){
   $data = $request->validate([
       'name' => 'required | min:3',
       'on_menu' => 'nullable | digits_between:0,1'
   ]);
   $category = new Category();
   $name = $request->input('name');
   $on_menu = $request->input('on_menu') ?? 0;
   if($saved = \App\Category::updateOrCreate(['name'=>$name,'on_menu' => $on_menu]))
       return response()->json([
           'message'   => 'Categorie enregistrée',
           'data'   => ['id'=>$saved->id,'name'=>$name,'on_menu' => $on_menu],
           'errors'    => []
       ],
           200);
   else
       return response()->json(['message' => 'Erreur lors de la modification', 'status' => 401,'errors'=>$data->errors()->all()],200);
}

}

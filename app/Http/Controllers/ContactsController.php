<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;
use App\Http\Requests\ContactsRequest;

use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class ContactsController extends Controller
{
    
    public function index()
    {
        # on recupere l'ensemble des produits
        #$products = Product::all();
       // dd($products);
        $this->authorize('admin');
        $users = \App\User::orderBy('created_at', 'DESC')->get();
        return view('contacts.index', compact('users'));
    }



    public function create()
    {
        
       // $products = \App\Product::orderBy('created_at', 'DESC')->get();

        return view('contacts.create');
    }

    public function edit($id)
    {
        $this->authorize('admin');
        //on recupere le produit avec la methode find()
        $users = \App\User::find($id);
        //$categories = \App\Category::pluck('name','id');
        return view('contacts.edit', compact('users'));
    }

    public function update(Request $request, $id)
    {
        $users = \App\User::find($id);
        if($users){
            $users->name = $request->input('name');
            $users->email = $request->input('email');
            $users->roles = $request->input('role');
            $users->save();
        }
        return redirect('/contacts/index')->with('info', 'Le User a bien été modifié');
    }

    public function store(ContactsRequest $request)
    {
       /* 'firstname'=>'bail|required|between:3, 30|alpha',
            'lastname'=>'bail|required|max:50|min:2|alpha',
            'email' => 'bail|required|email',
            'phone'=>'bail|required|between:9,14|numeric',
            'adresse'=>'bail|alpha_num',
            'description' => 'bail|required|max:1000000'
		*/
        $costumer = new \App\Costumer();

        $costumer->firstname = $request->input('firstname');
        $costumer->lastname = $request->input('lastname');
        $costumer->email = $request->input('email');
        $costumer->phone = $request->input('phone');
        $costumer->adress = $request->input('adresse');
        $costumer->message = $request->input('description');
        $costumer->save();

        return view('/contacts/confirmation');
	}

    public function destroy($id)
    {
        $this->authorize('admin');
        $users = User::find($id);
        if($users)
        $users->delete();
        //return redirect()->route('products.index');
        return redirect('/contacts/index');
    
    }

}

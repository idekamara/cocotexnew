<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ContactsRequest;


class ContactsController extends Controller
{
    public function create()
    {
        
       // $products = \App\Product::orderBy('created_at', 'DESC')->get();

        return view('contacts.create');
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

}

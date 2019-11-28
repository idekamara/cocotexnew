<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
    	return view("home");
    }

#la methode show retourne grace a la methode view la page index.blade.php avec ses variables a l'aide de compact
    public function show($id)
    {
    	return view("index", compact("id"));
    }
}

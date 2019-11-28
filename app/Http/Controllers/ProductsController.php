<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function index()
    {
    	return "ceci est ma page index";
    }

    public function affiche($id)
    {
    	return "ceci est ma page accueil des $id";
    }
}

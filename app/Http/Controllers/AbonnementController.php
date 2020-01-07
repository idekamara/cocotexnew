<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\AbonnementMail;

class AbonnementController extends Controller
{
   public function expired(){
   $name = "Kamou";
   $date = "31 - 12 -2019";
   \Illuminate\Support\Facades\Mail::to('idekamara@gmail.com')->send(new AbonnementMail($name, $date));
   return "Message envoyé";
}

}

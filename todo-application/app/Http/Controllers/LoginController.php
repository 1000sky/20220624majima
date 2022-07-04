<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;



class LoginController extends Controller
{
     public function index()
     {
       /* $login = \Auth::user()->applications;*/

        return view('/login');
     }
}

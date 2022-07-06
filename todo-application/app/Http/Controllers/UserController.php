<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\User;


class UserController extends Controller
{
    /* public function __construct()
    {
        $this->middleware('auth');

    }

     public function index()
     {
       /*$user = User::where ('user_id', Auth::id()->id)->get();
       $user = Auth::id();
       
       return redirect('/login' , $user);
     }*/
}



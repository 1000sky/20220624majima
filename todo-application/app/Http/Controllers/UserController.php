<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Models\User;


class UserController extends Controller
{
    
    /* public function __construct()
    {
        $this->middleware('auth');

    }

     public function index()
     {
       
       $user = Auth::id();
       
       return redirect('/login' , $user);
     }*/


    public function create(Request $request){
        $user = $request->all();
        User::create($user);
        return redirect('/');
    }

    public function login(Request $request)
     {
        
        User::create([
          'user_id' => Auth::id()]);

        return redirect('/');
      
     }
    

    /* public function create(Request $request)
     {
            
            $tasks = new Application;
            $tasks->user_id = auth()->id();
            $tasks->save();
            return redirect('/');
     }
    */

    /* public function store(Request $request)
     {
         
         $task = new Application();
         $task->user_id = \Auth::id(); // 一行追加
         $task->save();
 
         return redirect('/');
     }*/

}



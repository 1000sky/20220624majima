<?php

namespace App\Http\Controllers;

use App\Models\Application;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class TodoController extends Controller
{
    public function index()
    {
        $items = Application::all();
        return view ('index', ['items' => $items]);

    }

    public function post(Request $request)
    {
        $validate_rule = [
           
            'content' => 'required|max:20'
        ];
        $this->validate($request, $validate_rule);
        return view('index');
    } 

    public function add(Request $request)
    {
        $validate_rule = [
           
            'content' => 'required|max:20'
        ];
        $this->validate($request, $validate_rule);

        Application::create([
            'content' => $request->content
        ]);
        return redirect('/');

    }

   /* public function edit(Request $request)
    {
        $todo = Application::find($request->id);
        return redirect('/', ['form' => $todo]);
    }
*/



    public function update(Request $request)
    {

        /*$param = Application::find($request->id);  */ 
        
        /*$param->save();
        $param->update();
        return redirect('/');*/

        $validate_rule = [
           
            'content' => 'required|max:20'
        ];
        $this->validate($request, $validate_rule);
        
        $param = $request->all();
        unset($param['_token']);
        Application::where('id', $request->id)->update($param);
        return redirect('/');



    }

   
    public function remove(Request $request)
    {
        /*$validate_rule = [
           
            'content' => 'required'
        ];
        $this->validate($request, $validate_rule);*/

        $todo = Application::find($request->id);
        $todo->delete();
        return redirect('/');

        
    }
    
    /*public function login()
    {
        $user = Auth::user();
        return view('/', $user);
    }*/
    
   /* public function __construct()
    {
        $this->middleware('auth');

    }*/

     public function login()
     {
    
       $user = Auth::id();
       
       return view('/login' ,['user' => $user]);
     }

}
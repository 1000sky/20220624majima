<?php

namespace App\Http\Controllers;

use App\Models\Application;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


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
           
            'content' => 'required'
        ];
        $this->validate($request, $validate_rule);
        return view('index');
    } 

    public function add(Request $request)
    {
        Application::create([
            'content' => $request->content
        ]);
        return redirect('/');

    }

    public function update(Request $request)
    {
       
        $this->validate($request, [
            'content' => 'request'
        ]);
        $param = Application::find($request->id);
        
        $param->save();
        return redirect('/');


    }

   
    public function remove(Request $request)
    {
        
        $todo = Application::find($request->id);
        $todo->delete();
        return redirect('/');

        
    }
    

}
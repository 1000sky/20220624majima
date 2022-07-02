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
        
        $param = $request->all();
        unset($param['_token']);
        Application::where('id', $request->id)->update($param);
        return redirect('/');



    }

   
    public function remove(Request $request)
    {
        
        $todo = Application::find($request->id);
        $todo->delete();
        return redirect('/');

        
    }
    

}
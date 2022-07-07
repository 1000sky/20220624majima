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
           
            'content' => 'required|max:20',
            
        ];
        $this->validate($request, $validate_rule);

        Application::create([
            'user_id' => 'id',
            'content' => $request->content]);

        /*$task= new Application();
        $task -> user_id = Auth::user();
        $task -> save();*/

        /*$post = Application::where('user_id', Auth::user()->id)->get();
        return view('index', ['post' => $post]);*/
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
    
    /*public function login(Request $request)
     {
        $user = Auth::user();
        $userID= $user->id;
        
        Application::create([
          'user_id' => $userID]);

        return redirect('/');
      
     }*/
    

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
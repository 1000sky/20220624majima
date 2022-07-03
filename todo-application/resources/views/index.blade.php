<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ToDo-Application</title>
    <link rel="stylesheet" href="/css/reset.css" />
    <link rel="stylesheet" href="css/index.css" />
</head>

<body>
  <div class="card"> 
    <h1 class="title">Todo List</h1>
    @if (count($errors) > 0)
        <ul class="error">
            @foreach ($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
    @endif

    <form action="/todo/create" method="POST">
        <table class="table">
         @csrf
         <tr>
            <td><input type="text" name="content" size=90 class="create_text"></td>
            <td><input type="submit" value="追加" class="create_button"></td>
         </tr>
        </table>
    </form>
           
    <table>  
         <tr>   
            <th>作成日</th>
            <th>タスク名</th>
            <th>更新</th>
            <th>削除</th>
         </tr>            
         <tr>
            @foreach ($items as $item)
              <td>
                 {{$item->created_at}}
              </td>
               
            <form action="/todo/update" method="POST" >     
              @csrf 
                    {{-- <input type="text" name="content" size=20 value='{{$item->id , $item->content}}'> --}}
                  {{-- <button type="submit" name="id" onClick="window.location.reload();" value="{{$item->id}}">更新</button> --}}
                  {{-- <button type="submit" name="id" onClick="window.location.reload();" value='{{$item->id , $item->content}}'>更新</button>  --}}

              <td>
                  <input type="text" name="content" size=40 value='{{$item->content}}' class=task_text>
              </td>
              <td>
                  <button type="submit" name="id" onClick="window.location.reload();" value="{{$item->id}}" class=update_button>更新</button>
              </td>
            </form>  
              
              <td> 
                  <form action="/todo/delete" method="POST">
                    @csrf        
                    <button type="submit" name="id" onClick="resetForm()" value='{{$item->id}}' class="remove_button">削除</button>
                  </form>
              </td>
             
         </tr>
            @endforeach
    </table> 
   </div>      

</body>
</html>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ToDo-Application</title>
    <link rel="stylesheet" href="../css/reset.css" />
</head>
<body>
    <h1>Todo List</h1>
    @if (count($errors) > 0)
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
    @endif

    <form action="/" method="POST">
        <table>
         @csrf
         <tr>
            <td><input type="text" name="content" size=50></td>
            <td></td>
            <td></td>
            <td></td>
            <td><input type="submit" value="追加"></td>
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
                
              <td>
                 <input type="text" name="content" size=20 value='{{$item->content}}'>
              </td>
              
              <td>
                    <form action='/' method="POST">
                        @csrf
                        
                        <button type="submit" name="content" value='{{$item->content}}'>更新</button>
                    </form>   
              </td>
                
                <td>
                    <form action='/' method="DELETE">
                        @csrf
                    
                    <button type="submit" name="content" value='{{$item->content}}'>削除</button>
                    </form>
                </td>
                
            </tr>
            @endforeach 
        </table> 
         

</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>
<body>
    <h2 class="text-center">
        Shopping Mall BBSM
    </h2>
    

    <form action="{{route('saveTodo')}}" method="post" class="form-control p-3 text-center">
        @csrf
        <input type="text" name="todo" class="form-control">
        <button type="submit" class="btn btn-success">Add</button>
    </form>
    <table class="table table-hover w-75 mx-auto my-3">
        <thead>
            <tr class="table-primary">
                <th>Sn</th>
                <th>Title</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <tr class="table-danger">
            @foreach($items as $value)
            <tr class="table-primary">
                <th scope="row">{{$loop->index+1}}</th>
                <td>{{$value->title}}</td>
                <td>
                        <a class="btn btn-primary" href="/edit/{{$value->id}}">Edit</button>
                        <a class="btn btn-danger" href="/delete/{{$value->id}}">Delete</a>

                </td>
                </tr>

            @endforeach
            </tr>
        </tbody>
    
</body>
</html>
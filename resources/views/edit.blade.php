<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=<h1, initial-scale=1.0">
    <title>Document</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

</head>
<body>
    <h1 class="text-center">Edit the item page</h1>
    

    <form action="/edit/{{$item->id}}" method="post" class="form-control p-3 text-center">
    @csrf
        <input type="text" name="todo" value="{{$item->title}}" class="form-control">
        <button type="submit" class="btn btn-success">Update</button>
</form>
</body>
</html>
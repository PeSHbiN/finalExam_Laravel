<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    
    <h1>{{ $data->title }}</h1>
        <h2>{{ $data->published_at }}</h2>
        <h2>{{ $data->author }}</h2>

        <p>{{ $data->body }}</p>
    

        <hr>
            @foreach ($comments as $comment)
                {{ $comment->comment }}
                <br>
                <hr>
            @endforeach

        <hr>

        <form action="addcomment" method="post"> 
            @csrf
            <input type="hidden" name="id" value="{{ $data->id }}">
            Comment: <input type="text" name="comment">
            <input type="submit">
        </form>

    
</body>
</html>
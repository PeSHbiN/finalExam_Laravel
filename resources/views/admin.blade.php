<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="addNews" method="post">
        @csrf
        Title: <input type="text" name="title"><br><br>
        Publish at: <input type="date" name="publish_at"><br><br>
        Author: <input type="text" name="author"><br><br>
        Body: <textarea name="body"cols="30" rows="10"></textarea>
        <br><br>
        <input type="submit" value="Publish">
    </form>
</body>
</html>
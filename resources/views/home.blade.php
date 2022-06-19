<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <style>
        table, tr, td{
            border: 1px solid black;
            
        }
    </style>
    <title>Home Page</title>
</head>
<body>
    <h3><a href="admin">Admin</a></h3>
    <hr>
    <table>
        <thead>
            <tr>
                
                <th>title</th>
                <th>published_at</th>
                <th>author</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($datas as $data)
                <tr>
                    <td><a href="news?id={{ $data->id  }}">{{ $data->title }}</a></td>
                    <td>{{ $data->published_at }}</td>
                    <td>{{ $data->author }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
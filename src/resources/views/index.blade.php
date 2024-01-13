<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>get-username</title>
</head>
<body>
    おはようございます！
    {{$status}}
    {{$time}}
    <div>
        @foreach($datas as $data)
        {{$data->name}}
        @endforeach
    </div>
    <div>
        @foreach($tweets as $tweet)
        {{$tweet}}
        @endforeach
    </div>
</body>
</html>
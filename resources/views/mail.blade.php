<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    {{--  <h1>Welcome to the email system {{ $name }} {{ $email }} {{ $comment }}</h1>  --}}
    {{--  This is a template of how the mail will look when sent to me  --}}
    <div>
        <h2>{{ $name }} sent you some input about Munro Tech Repairs</h2>
        <span>{{ $email }}</span>
        <p>{{ $comment }}</p>
    </div>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet")> 
    <link href="https://use.fontawesome.com/releases/v5.0.8/css/all.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    {{--  @include('inc.navbar')  --}}

    <div class="container">
        <h1>Customer Info</h1>
    </div>

    <div class="container">
        @foreach($repairs as $repair)
            <h1>{{ $repair->iphone }}</h1>
            <h1>{{ $repair->problem }}</h1>
            <h3>{{ $repair->first_name }}</h3>
            <h3>{{ $repair->last_name }}</h3>
            <h3>{{ $repair->email }}</h3>
            <h3>{{ $repair->address }}</h3>
            <h3>{{ $repair->zip_code }}</h3>
        @endforeach
    </div>

    

    {{--  @include('inc.footer')  --}}
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>  
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</body>
</html>
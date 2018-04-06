<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>About Us</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet")> 
    <link href="https://use.fontawesome.com/releases/v5.0.8/css/all.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    @include('inc.navbar')

        <div class="container about-title">
            <h1 class="text-center">About Us</h1>
        </div>

        <div class="container-fluid what-we-do">
            <h1 class="text-center">What We Do</h1>
            <p>Here at Munro Tech Repairs we fix most of the latest Iphones. We will be expandin as we grow and move onto more devices to fix. We repair iphone screens/LCD's, batteries, and coming soon...charging ports! We work as a team to fix the phones as efficient and fast as possible so you won't have to come back unless your phone is damaged and needs another repair.</p>
        </div>

    @include('inc.footer')
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>  
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</body>
</html>
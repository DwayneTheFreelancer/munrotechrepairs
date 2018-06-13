<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Reviews</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet")> 
    <link href="https://use.fontawesome.com/releases/v5.0.8/css/all.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    @include('inc.navbar')

    <div class="reviews-title">
        <h1 class="text-center">Customer Reviews</h1>
    </div>

    <div class="container" id="reviews">
        <div class="row second-review">
            <div class="col-md-12 col-xs-12">
                <video width="100%" height="400px" controls>
                    <source src="videos/vashawnreview.mp4" type="video/mp4">
                    <source src="videos/vashawnreview.ogg" type="video/ogg">
                    Your browser does not support the video tag.
                </video>
                <h2 id="comment">iPhone 7+ repair June 8, 2018</h2>
            </div>
        </div>
        <div class="row first-review">
            <div class="col-md-6 col-xs-6" id="photo">
                <img src="/img/clarinebrokeniphonese.jpg" alt="Broken iPhone">
            </div>
            <div class="col-md-6 col-xs-6" id="photo">
                <img src="/img/clarineiphonefixed.jpg" alt="iPhone getting fixed">
            </div>
            <div class="col-md-12 col-sm-12 col-xs-12" id="photo">
                <img src="img/clarinereview.jpg" alt="Fix iPhone">
                <h2 id="comment">iPhone SE repair June 11, 2018</h2>
                <hr>
            </div>
        </div>
    </div>

    @include('inc.footer')
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>  
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</body>
</html>
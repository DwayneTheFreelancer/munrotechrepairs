<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Our Story</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet")> 
    <link href="https://use.fontawesome.com/releases/v5.0.8/css/all.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    @include('inc.navbar')

    <div class="container faq-title">
        <h1 class="text-center">Frequent Asked Questions</h1>
    </div>

    <div class="container faq-main">
        <div class="row">
            <div class="col-md-12">
                <h1>Common Questions</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <h3>How long does it take to do a repair?</h3>
                <p>Repairs should take about 30 minutes to an 1 hour at most.</p>
                <hr>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <h3>Can a repair only be done at my house?</h3>
                <p>The answer is no if you don't want us to fix your device at your home we can fix it at the nearest store by you.</p>
                <hr>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <h3>What if the problem is a lot worse and the device can't be fixed?</h3>
                <p>No problem we'll just stop the repair and let you know</p>
                <hr>
            </div>
        </div>
    </div>

    @include('inc.footer')
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>  
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</body>
</html>
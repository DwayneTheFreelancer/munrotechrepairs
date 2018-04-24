<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet")> 
    <link href="https://use.fontawesome.com/releases/v5.0.8/css/all.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    @include('inc.navbar')

    <div id="banner">
        <h1>Got A Cracked iphone No Problem!</h1>
        <h3 class="text-center"><a href="{{ url('repairs/') }}">Repair Device</a></h3>
    </div>

    <div class="coming-soon">
        <h1 class="text-center"><a href="https://www.facebook.com/munrotechrepiars/">Like and Follow Us On FaceBook</a></h1>
        <span><a class="text-center" href="https://www.facebook.com/munrotechrepiars/"><i class="fab fa-facebook-square fa-3x"></i></a></span>
    </div>

    <h1 class="text-center">How It Works</h1>

    <div class="main">
        <div class="parallaxImg-1">
            <div class="row">
                <div class="col-md-8 col-xs-12 col-img">
                    
                </div>
                <div class="col-md-4 col-xs-12 col-details">
                    <h2 class="text-center">Tell Us whats wrong with the phone</h2>
                    <span><h3 class="text-center">Choose Through The Different Options We Have Of Problems That May Be Wrong With Your Phone</h3></span>
                </div>
            </div>
        </div>
        <div class="parallaxImg-2">
            <div class="row">
                <div class="col-md-4 col-sm-12 col-xs-12 col-details">
                    <h2 class="text-center">We come To You No Need For A Trip To The Mall Or Store</h2>
                    <span><h3 class="text-center">We Have All The Tools And Parts To Fix Your Device On The Spot Within Less Than An Hour</h3></span>
                </div>
                <div class="col-md-8 col-sm-12 col-xs-12 col-img">

                </div>
            </div>
        </div>
        <div class="parallaxImg-3">
            <div class="row">
                <div class="col-md-8 col-sm-12 col-xs-12 col-img">
                    
                </div>
                <div class="col-md-4 col-sm-12 col-xs-12 col-details">
                    <h2 class="text-center">Within Minutes Your Phone Is Fixed</h2>
                    <span><h3 class="text-center">Let Us Know What You Think About Our Service</h3></span>
                </div>
            </div>
        </div>
    </div>

    <div class="container mapsApi">
        <h1 class="text-center">Locations Where Our Service Is Provided</h1>
        <p>We are only available in New York for now but we will be coming to different states soon!</p>
        <strong><h3>New York</h3></strong>
        <ul>
            <li>Brooklyn</li>
            <li>Manhattan</li>
            <li>Long Island</li>
            <li>Queens</li>
        </ul>
        <div id="map"></div>
    </div>

    <div class="container whyUs">
        {{--  Why Munro Tech Repairs  --}}
        <h1 class="text-center">Why Munro Tech Repairs?</h1>
        <div class="row why-content">
            <div class="col-md-4 reasons">
                <h3 class="text-center">Great Customer Service</h3>
                <p>We have one of the best customer services in business because our customers are able to reach us from more than one source. There is no need ot just contact us through a phone call or email we make sure customers are able to contact us through our site too.</p>
            </div>
            <div class="col-md-4 reasons">
                <h3 class="text-center">Affordable Prices</h3>
                <p>Compared to other phone repair businesses we have the most afforable prices you can get our prices will make you not worry about the next time your phone needs a repair because <strong>NONE OF OUR PRICES ARE $300 OR EVEN $200</strong> like the other companies if the problem is bigger than expected and can cost more we'll make sure to come up with an afforable price.</p>
            </div>
            <div class="col-md-4 reasons">
                <h3 class="text-center">Because We Come To You</h3>
                <p>Why worry about hassling to go and find a repair shop also not being sure you'll make it on time before they closed due to your working hours and or busy schedule. You set the time tell us when you want us to come, if you want to reschedule the appointment no problem.</p>
            </div>
        </div>
    </div>

    {{--  <div class="container">
        @foreach($repairs as $repair)
            <h1>{{ $repair->iphone }}</h1>
            <h1>{{ $repair->problem }}</h1>
            <h3>{{ $repair->first_name }}</h3>
            <h3>{{ $repair->last_name }}</h3>
            <h3>{{ $repair->email }}</h3>
            <h3>{{ $repair->address }}</h3>
            <h3>{{ $repair->zip_code }}</h3>
        @endforeach
    </div>  --}}

    <div class="container start-repair-btn">
        <h3 class="text-center"><a href="{{ url('repairs/') }}">Start A Repair</a></h3>
    </div>

    @include('inc.footer')
<script src="js/index.js"></script>
<script async defer
src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB2Z01jThhQ0ik_4APfuObd0RDP6wp1Ohk&callback=initMap">
</script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>  
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet")> 
    <link href="https://use.fontawesome.com/releases/v5.0.8/css/all.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    @include('inc.navbar')

    <div class="container notice">
        <h1>All payments are in <strong>CASH</strong></h1>
        <h1><span>iphone 8+:</span> $95</h1>
        <h1><span>iphone 8:</span> $90</h1>
        <h1><span>iphone 7+:</span> $85</h1>
        <h1><span>iphone 7:</span> $80</h1>
        <h1><span>iphone 6s+:</span> $75</h1>
        <h1><span>iphone 6s:</span> $70</h1>
        <h1><span>iphone 6+:</span> $65</h1>
        <h1><span>iphone 6:</span> $60</h1>
        <h1><span>iphone SE:</span> $55</h1>
        <h1><span>iphone 5s:</span> $50</h1>
    </div>

    <form class="container form-comp" action="/repairs" method="POST">
        {{ csrf_field() }}
        <div class="form-group">
            <label for="phone" class="col-sm-2 control-label">iPhone</label>
            <div class="col-sm-10">
                <select name="iphone" id="phone">
                    <option name="iphone8plus" value="iphone8plus">Iphone 8 Plus</option>
                    <option name="iphone8" value="iphone8">Iphone 8</option>
                    <option name="iphone7plus" value="iphone7plus">Iphone 7 Plus</option>
                    <option name="iphone7" value="iphone7">Iphone 7</option>
                    <option name="iphone6splus" value="iphone6splus">Iphone 6s Plus</option>
                    <option name="iphone6s" value="iphone6s">Iphone 6s</option>
                    <option name="iphone6plus" value="iphone6plus">Iphone 6 Plus</option>
                    <option name="iphone6" value="iphone6">Iphone 6</option>
                    <option name="iphoneSe" value="iphoneSe">Iphone SE</option>
                    <option name="iphone5s" value="iphone5s">Iphone 5s</option>
                </select>
            </div>
        </div>
        <div class="form-group">
            <label for="problem" class="col-sm-2 control-label">Problem</label>
            <div class="col-sm-10">
                <select name="problem" id="problem">
                    <option name="screen" value="screen">Screen</option>
                    <option name="battery" value="battery">Battery</option>
                </select>
            </div>
        </div>
        <div class="form-group">
            <label for="first_name" class="col-sm-2 control-label">First Name</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="first_name" name="first_name" placeholder="First Name">
            </div>
        </div>
        <div class="form-group">
            <label for="last_name" class="col-sm-2 control-label">Last Name</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="last_name" name="last_name" placeholder="Last Name">
            </div>
        </div>
        <div class="form-group">
            <label for="email" class="col-sm-2 control-label">Email</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="email" name="email" placeholder="Email">
            </div>
        </div>
        <div class="form-group">
            <label for="number" class="col-sm-2 control-label">Phone Number</label>
            <span>*optional</span>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="number" name="number" placeholder="Phone Number">
            </div>
        </div>
        <div class="form-group">
            <label for="address" class="col-sm-2 control-label">Address</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="address" name="address" placeholder="Address">
            </div>
        </div>
        <div class="form-group">
            <label for="zip_code" class="col-sm-2 control-label">Zip Code</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="zip_code" name="zip_code" placeholder="Zip Code">
            </div>
        </div>
        <div class="form-group">
            <label for="note" class="control-label">Note</label>
            <textarea class="form-control" id="note" name="note" rows="3"></textarea>
        </div>
        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="btn btn-default">Submit</button>
            </div>
        </div>
    </form>

    @include('inc.footer')
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>  
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</body>
</html>
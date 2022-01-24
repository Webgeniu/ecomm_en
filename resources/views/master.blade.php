<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>E-com Project</title>

        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>

        <!-- //Latest compiled and minified CSS -->
        <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"> -->
        
        <!-- //jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        
        <!-- //Latest compiled JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </head>
    <body>
        {{View::make('header')}}
        @yield('content')
        {{View::make('footer')}}
    </body>
    <style>
        .custom-login{
            height:500px;
            padding-top:100px;
        }
        img.slider-img{
            height:400px !important;
        }
        .custom-product{
            height:600px !important;
        }
        .carousel-caption{
            background: #182418f2;
        }
        .trending-image{
            height:100px !important;
        }
        .trending-item{
            float:left;
            width:20%;
        }
        .trending-wrapper{
            margin:50px;
        }
        .detail-img{
            height:200px;
        }
        .cart-list-devider{
            border-bottom:1px solid black;
            margin-bottom:20px;
            padding-bottom:20px;
        }
        .navbar-right li{
            padding-left:20px;
        }
    </style>
</html>
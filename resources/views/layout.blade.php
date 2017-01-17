<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="RV Park">
    <meta name="author" content="Jason Sinn">
    <link rel="shortcut icon" href="../public/css/images/favicon.ico">

    <title>@yield('title')</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
    <!-- Custom Fonts -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <!-- Bootstrap Core CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="{{asset('css/jquery-ui.min.css')}}">
     <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.8/css/materialize.min.css">
    <!-- <link rel="stylesheet" href="{{asset('css/style.css')}}"> -->
</head>

<body>
<style>
<?php include ('../public/css/style.css') ?>
</style>
    <!-- Navigation -->
  <div class="navbar-fixed">
   <nav>
    <div class="nav-wrapper">
      <a href="/" class="brand-logo right">Calhoun's Riverside RV Retreat</a>
      <a href="/" data-activates="mobile-demo" class="button-collapse"><i href="../public/css/images/circleC.png">menu</i></a>
      <ul class="left hide-on-med-and-down">
        <li><a href="sass.html">Sass</a></li>
        <li><a href="badges.html">Components</a></li>
        <li><a href="collapsible.html">Javascript</a></li>
        <li><a href="mobile.html">Mobile</a></li>
      </ul>
      <ul class="side-nav" id="mobile-demo">
        <li><a href="sass.html">Sass</a></li>
        <li><a href="badges.html">Components</a></li>
        <li><a href="collapsible.html">Javascript</a></li>
        <li><a href="mobile.html">Mobile</a></li>
      </ul>
    </div>
   </nav>
 </div>
          
<!--     <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <div id='logo'>
            <a href="/">
                <img id="logo" src="./images/circleC.png">
            </a>
            </div>

            <!-- Brand and toggle get grouped for better mobile display -->
            <!-- <div class="navbar-header">
                
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
               
                <a class="navbar-brand" href="/">Calhoun's Riverside RV Retreat</a>

            </div> -->

            <!-- Collect the nav links, forms, and other content for toggling -->
           <!--  <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="/">About</a>
                    </li>
                    
                    <li>
                        <a href="contact">Contact</a>
                    </li>
                   
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Additional Information<b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="rates">Current Rates</a>
                            </li>
                            <li>
                                <a href="cabins">Cabins</a>
                            </li>
                            <li>
                                <a href="rules">Rules</a>
                            </li>
                            <li>
                                <a href="cabinLease">Rental Agreements</a>
                            </li>
                            <li>
                                <a href="rvSiteAgreement">Rental Agreements</a>
                            </li>
                            <li>
                                <a href="boatramp">Boat Ramp</a>
                            </li>
                            <li>
                                <a href="meetCalhoun">Meet Calhoun</a>
                            </li>
                            <li>
                                <a href="http://www.lacrossealertsmobile.com/v1.2/#device-7FFF4349485CC4E6">Current Weather</a>
                            </li>
                            <li>
                                <a href="http://www.accuweather.com/en/us/port-lavaca-tx/77979/weather-forecast/335931">Local Weather Radar</a>
                            </li>
                            <li>
                                <a href="riverLevel">River Level Info</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div> -->
            <!-- /.navbar-collapse -->
        <!-- </div> -->
        <!-- /.container -->
    <!-- </nav> -->
    
    <div class="container">
    @yield('content')
    </div>

    <footer class="navbar-fixed-bottom">
    <div class="row">
        <div class="social col-sm-4 col-sm-offset-4">         
            <a href="https://twitter.com/CalhounsRV?lang=en" class="icon-button twitter"><i class="fa fa-twitter"></i><span></span></a>
            <a href="http://facebook.com" class="icon-button facebook"><i class="fa fa-facebook"></i><span></span></a>
            <a href="http://plus.google.com" class="icon-button google-plus"><i class="fa fa-google-plus"></i><span></span></a> 
        </div>
    </div>
    <div class="row">
        <div class="social col-lg-12">
            </br>
            </br>
                <p>Copyright &copy; Calhoun's Riverside RV Retreat 2016</p>
        </div>
    </div>
    </footer>
    
    <script src="{{asset('js/external/jquery/jquery.js')}}"></script>

    <script src="{{asset('js/jquery-ui.min.js')}}"></script>

    <script src="{{asset('js/main.js')}}"></script>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

      <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.8/js/materialize.min.js"></script>

      <!-- <script>
        $('.carousel').carousel({
        interval: 5000 //changes the speed
        })
      </script> -->
    </body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="RV Park">
    <meta name="author" content="Jason Sinn">
    <link rel="shortcut icon" href="../public/css/images/favicon.ico" />

    <title>@yield('title')</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <!-- Bootstrap Core CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <!-- Custom CSS -->
    <link href="style.php" rel="stylesheet" type="text/css">
    <!-- @yeild(css) -->
</head>

<body>
    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <div id='logo'>
            <a href="index.html">
                <img id="logo" src="./images/circleC.png">
            </a>
            </div>

            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
               
                <a class="navbar-brand" href="index.html">Calhoun's Riverside RV Retreat</a>

            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="index.html">About</a>
                    </li>
                    
                    <li>
                        <a href="contact.html">Contact</a>
                    </li>
                   
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Additional Information<b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="rates.html">Current Rates</a>
                            </li>
                            <li>
                                <a href="cabins.html">Cabins</a>
                            </li>
                            <li>
                                <a href="rules.html">Rules</a>
                            </li>
                            <li>
                                <a href="rentalAgreements.html">Rental Agreements</a>
                            </li>
                            <li>
                                <a href="boatramp.html">Boat Ramp</a>
                            </li>
                            <li>
                                <a href="meetCalhoun.html">Meet Calhoun</a>
                            </li>
                            <li>
                                <a href="http://www.lacrossealertsmobile.com/v1.2/#device-7FFF4349485CC4E6">Current Weather</a>
                            </li>
                            <li>
                                <a href="http://www.accuweather.com/en/us/port-lavaca-tx/77979/weather-forecast/335931">Local Weather Radar</a>
                            </li>
                            <li>
                                <a href="riverLevel.html">River Level Info</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
    
    <div class="container">
    @yield('content')
    </div>

    <footer>
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

      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js">
      </script>

      <script>
        $('.carousel').carousel({
        interval: 5000 //changes the speed
        })
      </script>
    </body>
</html>
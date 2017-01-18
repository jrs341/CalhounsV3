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

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <!-- Compiled and minified jQuery -->

    <link rel="stylesheet" href="{{asset('css/jquery-ui.min.css')}}">

     <!-- Compiled and minified CSS -->

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.8/css/materialize.min.css">

    <!-- Stylesheet is not working every blade after welcome adding an extra css directory? -->

    <!-- <link rel="stylesheet" href="{{asset('css/style.css')}}"> -->

    
</head>

<body>
    <style><?php include ('../public/css/style.css') ?></style>

    <!-- Navigation Bar -->

      <div class="navbar-fixed">
       <nav>
        <div class="nav-wrapper">
          <a href="/" class="brand-logo right">Calhoun's Riverside RV Retreat</a>
          <a href="/" data-activates="mobile-demo" class="button-collapse"><i href="../public/css/images/circleC.png">menu</i></a>
          <ul class="left hide-on-med-and-down">
            <li><a href="rates">Rates</a></li>
            <li><a href="makeReservation">Make a Reservation</a></li>
            <li><a href="contact">Contact Us</a></li>
            <li><a href="admin">Admin</a></li>
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

    <!-- Main content container -->

    <div class="container">
    @yield('content')
    </div>

    <!-- Need to add the CSS from materialize for sticky footer, currently CSS for bootstrap -->

    <footer class="page-footer">
        <div class="container">
            <div class="row">
              <div class="col l6 s12">
                <h5 class="white-text">Footer Content</h5>
                <p class="grey-text text-lighten-4">You can use rows and columns here to organize your footer content.</p>
              </div>
              <div class="col l4 offset-l2 s12">
                <h5 class="white-text">Links</h5>
                <ul>
                  <li><a class="grey-text text-lighten-3" href="https://twitter.com/CalhounsRV?lang=en">Twitter</a></li>
                  <li><a class="grey-text text-lighten-3" href="http://facebook.com">Facebook</a></li>
                  <li><a class="grey-text text-lighten-3" href="http://plus.google.com">Google +</a></li>
                  <li><a class="grey-text text-lighten-3" href="#!">Link 4</a></li>
                </ul>
              </div>
            </div>
        </div>
        <div class="footer-copyright">
            <div class="container">
            Copyright &copy; Calhoun's Riverside RV Retreat 2016
            <a class="grey-text text-lighten-4 right" href="#!">More Links</a>
            </div>
        </div>
    </footer>
    
    <script src="{{asset('js/external/jquery/jquery.js')}}"></script>

    <script src="{{asset('js/jquery-ui.min.js')}}"></script>

    <script src="{{asset('js/main.js')}}"></script>

    <!-- Compiled and minified JavaScript -->

    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.8/js/materialize.min.js"></script>

    <!-- React CDN for makeReservation page from makeReservation blade -->
    
    <div>
    @yield('CDN')
    </div>
</body>
</html>
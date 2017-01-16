/* Global Styles */

html,
body {
    height: 100%;
}

body {
    font-family: adobe-garamond-pro;
    padding-top: 50px; /* Required padding for .navbar-fixed-top. Remove if using .navbar-static-top. Change if height of navigation changes. */
    background-image: url('../images/background/old_map/old_map.png');
}

h3 {
    color: #5a4130;
    text-decoration: underline;
}

p {
    line-height: 1.6;
    font-size: 1.6em;
    color: #5a4130; 
}

header {
    height: 400px;
}

label {
    color: #5a4130;
    font-size: 20px;
}

a {
    color: #213fd9;
}

a:hover, a:focus {
    color: #337ab7;
}

table {
    color: #5a4130;
    border-color: #213fd9;
}

.table>thead>tr>th {
    border-color: #213fd9;
    } 

.table>tbody>tr>th, .table>tbody>tr>td {
    border-color: #213fd9;
    border-bottom: 1px;
}

.table-hover>tbody>tr:hover {
    background-color: #F5DEB3;
}
#logo {
    float: left;
    height: 45px;
    margin-top: 2px;
}

.mainImageLoading {
    height: 400px;
    background: url('../images/general/loading.gif') 50% no-repeat;
}

.headerImage {
    background: url('../images/general/P6191146.jpg') no-repeat center center; 
    -webkit-background-size: 100% 100%;
    -moz-background-size: 100% 100%;
    -o-background-size: 100% 100%;
    background-size: 100% 100%;
    margin-top: .6em;
    height: 400px;
    background-size: cover;
}

.navbar {
    background-color: #F5DEB3;
    /*border-color: #213fd9;*/
    border: none;
}

.navbar-inverse .navbar-brand {
    color: #213fd9;
    font-size: 1.8em;
}

.navbar-inverse .navbar-toggle {
    border-color: #5a4130;
    background-image: url('../images/background/old_map/old_map.png');
    /*background-color: #F5DEB3;*/
}

.navbar-inverse .navbar-toggle .icon-bar {
    background-color: #5a4130;
}

.navbar-inverse .navbar-toggle:hover, .navbar-inverse .navbar-toggle:focus {
    /*background-color: #5a4130;*/
    border: 2.4px;
    border-color: #5a4130;
}

.navbar-inverse .navbar-header>a:hover {
    color: #5a4130;
}

.navbar-inverse .navbar-nav>li>a {
   color: #5a4130; 
   font-size: 1.4em;
   display: inline-block;
}

.navbar-inverse .navbar-nav>li>a:hover{
  background-color: none;
  text-decoration: none;
  color: #213fd9;
}

.navbar-inverse .navbar-nav>.open>a, .navbar-inverse .navbar-nav>.open>a:hover, .navbar-inverse .navbar-nav>.open>a:focus {
    background-color: transparent;
    color: #5a4130;
}

.dropdown-menu {
    background-image: url('../images/background/old_map/old_map.png'); 
}

.dropdown-menu>li>a {
    color: #5a4130;
}

.dropdown-menu>li>a:hover {
    color: #213fd9;
    background-color: #F5DEB3; 
}

/* 404 Page Styles */

.error-404 {
    font-size: 100px;
}

/* Pricing Page Styles */

.price {
    display: block;
    font-size: 50px;
    line-height: 50px;
}

.price sup {
    top: -20px;
    left: 2px;
    font-size: 20px;
}

.period {
    display: block;
    font-style: italic;
}

.page-header {
    text-align: center;
    color: #5a4130; 
    border-bottom: none;
    font-size: 3.5em;
}

.btn-primary {
    color: #fff;
    background-color: #213fd9;
    border-color: #2e6da4;
}
/* Footer Styles */

footer {
    font-size: .7em;
    /*border-top: 1.5px;
    border-color: blue;*/
    /*margin: 50px 0px 50px 30px;*/
}

.social {
    text-align: center;
}

/* Wrapper #F5DEB3 #5a4130 */
.icon-button {
    background-color: #F5DEB3;
    border-radius: 3.6rem;
    cursor: pointer;
    display: inline-block;
    font-size: 3rem;
    height: 3.6rem;
    line-height: 3.6rem;
    margin: 0 5px;
    position: relative;
    text-align: center;
    -webkit-user-select: none;
       -moz-user-select: none;
        -ms-user-select: none;
            user-select: none;
    width: 3.6rem;
}

/* Circle */
.icon-button span {
    border-radius: 0;
    display: block;
    height: 0;
    left: 50%;
    margin: 0;
    position: absolute;
    top: 50%;
    -webkit-transition: all 0.3s;
       -moz-transition: all 0.3s;
         -o-transition: all 0.3s;
            transition: all 0.3s;
    width: 0;
}
.icon-button:hover span {
    width: 3.7rem;
    height: 3.7rem;
    border-radius: 3.7rem;
    margin: -1.85rem;
}
.twitter span {
    background-color: #4099ff;
}
.facebook span {
    background-color: #3B5998;
}
.google-plus span {
    background-color: #db5a3c;
}

/* Icons */
.icon-button i {
    background: none;
    color: white;
    height: 3.6rem;
    left: 0;
    line-height: 3.6rem;
    position: absolute;
    top: 0;
    -webkit-transition: all 0.3s;
       -moz-transition: all 0.3s;
         -o-transition: all 0.3s;
            transition: all 0.3s;
    width: 3.6rem;
    z-index: 10;
}
.icon-button .fa-twitter {
    color: #4099ff;
}
.icon-button .fa-facebook {
    color: #3B5998;
}
.icon-button .fa-google-plus {
    color: #db5a3c;
}
.icon-button:hover .fa-twitter,
.icon-button:hover .fa-facebook,
.icon-button:hover .fa-google-plus {
    color: white;
}

/* Responsive Styles */

@media (max-width: 992px) {
    .navbar-header {
        float: none;
    }
    .navbar-left,.navbar-right {
        float: none !important;
    }
    .navbar-toggle {
        display: block;
    }
    .navbar-collapse {
        border-top: 1px solid transparent;
        box-shadow: inset 0 1px 0 rgba(255,255,255,0.1);
    }
    .navbar-fixed-top {
        top: 0;
        border-width: 0 0 1px;
    }
    .navbar-collapse.collapse {
        display: none!important;
    }
    .navbar-nav {
        float: none!important;
        margin-top: 7.5px;
    }

    /*below query will offset the nav bar drop downs at medium screen sizes*/
    /*.navbar-nav>li {
        float: none;
    }*/
    
    .navbar-nav>li>a {
        padding-top: 10px;
        padding-bottom: 10px;
    }
    .collapse.in{
        display:block !important;
    }
}

@media(min-width:768px) {
    .navbar>.container .navbar-brand {
        margin-left: 0px;
    }
}

@media(max-width: 767px) {
    .navbar-inverse .navbar-nav .open .dropdown-menu>li>a {
        color: #5a4130;
        /*background-color: #F5DEB3;*/
    }

    .navbar-inverse .navbar-nav .open .dropdown-menu>li>a:hover {
        color: #213fd9; 
        background-color: #F5DEB3;
    }
}

@media(max-width:490px) {
    .navbar-inverse .navbar-brand {
        font-size: 1.5em;
    }
}

@media(max-width:437px) {
    .navbar-inverse .navbar-brand {
        font-size: 1.3em;
    }
}

@media(max-width:402px) {
    .navbar-inverse .navbar-brand {
        font-size: 1.0em;
    }
}


<!DOCTYPE html>
<html lang="en">
 <head>
 <meta charset="UTF-8">
 
 <title>Revaluta</title>
 <meta name="author" content="Revaluta team">
  <link rel="icon" sizes="16x16 32x32 64x64" href="{{asset('images/revaluta.png')}}">
  <!--<base href="/">--><base href=".">

<link href="{{asset('css/font-face.css')}}" rel="stylesheet" type="text/css">
<!--<link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet" type="text/css">-->
<link href="{{asset('css/materialdesignicons.css')}}" rel="stylesheet" type="text/css">
<link href="{{asset('css/materialize.css')}}" rel="stylesheet" type="text/css">
<!--<link href="{{asset('css/materialdesignicons.css')}}" rel="stylesheet" type="text/css">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet"> -->

<link href="{{asset('css/main-styles.css')}}" rel="stylesheet" type="text/css">
<script type="text/javascript" src="{{asset('js/jquery-1.11.3.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/materialize.js')}}"></script>
<script type="text/javascript" src="{{asset('form-validator/jquery.form-validator.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/angular.min.js')}}"></script>

 </head>

 <body>


<div class="hiddendiv common"></div>

<!--<nav class="white" role="navigation">
    <div class="nav-wrapper container">

      <a id="logo-container" href="/" class="brand-logo">
        <img style="margin-top: 0.1em" height="50px" src="{{asset('images/revaluta-header-full.jpg')}}" alt="">
      </a>
      <ul id="dropdown1" class="dropdown-content">
        <li><a href="/">one</a></li>
        <li><a href="/">two</a></li>
        <li class="divider"></li>
        <li><a href="/">three</a></li>
      </ul>
      <ul class="right hide-on-med-and-down">
        <li><a class="dropdown-button" href="/" data-activates="dropdown1">Currency types<i class="mdi-navigation-arrow-drop-down right"></i></a></li>
        <li><a href="/info" >Info</a></li>
        <li><a href="/shop">Get/Give Shop</a></li>
        <li><a href="/contact">Contact</a></li>
        <li><a href="/admin">Admin</a></li>
      </ul>

      <ul id="nav-mobile" class="side-nav" style="left: -250px;">
        <li><a href="/info">Info</a></li>
        
        <li><a href="/shop">Get/Give Shop</a></li>
        <li><a href="/contact">Contact</a></li>
        <li><a href="/admin">Admin</a></li>
      </ul>
      <a href="/#" data-activates="nav-mobile" class="button-collapse"><i class="mdi-navigation-menu"></i></a>
    </div>
  </nav>-->
  <div id="nav">
    <div class="navbar-fixed">
        <nav class="white">
            <div class="nav-wrapper container">
                <a id="logo-container" href="{{ url('/') }}" class="brand-logo">
                  <img style="margin-top: 0.1em" height="50px" src="{{asset('images/revaluta-header-full.jpg')}}" alt="">
                </a>
                <ul id="dropdown1" class="dropdown-content" style="marging-top:100px;">
                  <li><a href="wal">One Worthalot</a></li>
                  <li><a href="zte">Zero Trillion Euro</a></li>
                 <!-- <li class="divider"></li> -->
                  <li><a href="oma">One Man Army</a></li>
                </ul>
                <ul class="right hide-on-med-and-down">
                  <li><a class="dropdown-button" href="/" data-activates="dropdown1">Currency types<i class="mdi-navigation-arrow-drop-down right"></i></a></li>
                  <li><a href="info" >Info</a></li>
                  <li><a href="shop">Get/Give Shop </a> </li>
                  
                  <li><a href="contact">Contact</a></li>
                 <!-- <li><a href="/admin">Admin</a></li> -->
                </ul>

                <ul id="nav-mobile" class="side-nav" style="left: -250px;">
                  <li><a href="info">Info</a></li>
                  
                  <li><a href="shop">Get/Give Shop</a></li>
                  <li><a href="contact">Contact</a><i class="mdi mdi-access-point"></i></li>
                  <!--<li><a href="/admin">Admin</a></li>-->
                </ul>
                <a href="/#" data-activates="nav-mobile" class="button-collapse"><i class="mdi-navigation-menu"></i></a>
            </div>
        </nav>
    </div>
</div>


 @yield('content') 
  
     <script>


     (function($){
        $(function(){

          $('.button-collapse').sideNav();
          $('.parallax').parallax();
          $('.modal-trigger').leanModal();
          //$('#types .card h5').matchHeight();
          //$('#types .card-action-modal').matchHeight();

      }); // end of document ready
    })(jQuery) 


  </script><div class="drag-target" style="left: 0px; touch-action: pan-y; -webkit-user-drag: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></div>
  <div class="row"></div>
  <footer style="position: fixed;bottom: 0;width: 100%;z-index: 20" class="page-footer green">
    <div class="footer-copyright">
      <div class="container" style="text-align: center">
        Revaluta Bank of Value Exchanges © 2015 
    </div>
  </footer>

 </body>
</html>

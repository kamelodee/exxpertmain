<!DOCTYPE html>
<html>

<!-- Mirrored from askbootstrap.com/preview/exxpert/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 10 Dec 2020 18:42:18 GMT -->
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="Gurdeep singh osahan">
<meta name="author" content="Gurdeep singh osahan">
<title>exxpert</title>

<link rel="icon" type="image/png" href="images/fav.svg">

<link href="{{asset('assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

<link href="{{asset('assets/vendor/fontawesome/css/font-awesome.min.css')}}" rel="stylesheet">

<link href="{{asset('assets/vendor/icons/css/materialdesignicons.min.css')}}" media="all" rel="stylesheet" type="text/css">

<link href="{{asset('assets/vendor/slick-master/slick/slick.css')}}" rel="stylesheet" type="text/css">
<link href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" rel="stylesheet" type="text/css">

<link href="{{asset('assets/vendor/lightgallery-master/dist/css/lightgallery.min.css')}}" rel="stylesheet">

<link href="{{asset('vendor/select2/css/select2-bootstrap.css')}}" />
<link href="{{asset('assets/vendor/select2/css/select2.min.css')}}" rel="stylesheet">
<link rel="stylesheet" href="{{asset('assets/vendor/owl-carousel/assets/owl.carousel.css')}}">
<link href="{{asset('assets/css/style.css')}}" rel="stylesheet">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light topbar static-top shadow-sm bg-white osahan-nav-top px-0">
<div class="container-fluid">

<a class="navbar-brand" href="/"><img src="{{asset('assets/images/exxpert-logo2.png')}}" alt=""></a>

<form class="d-none d-sm-inline-block form-inline mr-auto my-2 my-md-0 mw-100 navbar-search">
<div class="input-group">
<input type="text" class="form-control bg-white small" placeholder="Find Services..." aria-label="Search" aria-describedby="basic-addon2">
<div class="input-group-append">
<button class="btn btn-success" type="button">
<i class="fa fa-search fa-sm"></i>
</button>
</div>
</div>
</form>

<ul class="navbar-nav align-items-center ml-auto">
<li class="nav-item dropdown no-arrow no-caret mr-3 dropdown-notifications d-sm-none">
<a class="btn btn-icon btn-transparent-dark dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
<i class="fa fa-search fa-fw"></i>
</a>

<div class="dropdown-menu dropdown-menu-right p-3 shadow-sm animated--grow-in" aria-labelledby="searchDropdown">
<form class="form-inline mr-auto w-100 navbar-search">
<div class="input-group">
<input type="text" class="form-control bg-light border-0 small" placeholder="Find Services..." aria-label="Search" aria-describedby="basic-addon2">
<div class="input-group-append">
<button class="btn btn-primary" type="button">
<i class="fa fa-search fa-sm"></i>
</button>
</div>
</div>
</form>
</div>
</li>

@guest
@if (Route::has('login'))
    <li class="nav-item">
        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
    </li>
@endif

@if (Route::has('register'))
    <li class="nav-item">
        <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
    </li>
@endif
@else




<li class="nav-item dropdown no-arrow no-caret mr-3 dropdown-notifications">
    <a class="btn btn-icon btn-transparent-dark dropdown-toggle" id="navbarDropdownAlerts" href="javascript:void(0);" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-bell">
    <path d="M18 8A6 6 0 0 0 6 8c0 7-3 9-3 9h18s-3-2-3-9"></path>
    <path d="M13.73 21a2 2 0 0 1-3.46 0"></path>
    </svg>
    </a>
    <div class="dropdown-menu dropdown-menu-right border-0 shadow animated--fade-in-up" aria-labelledby="navbarDropdownAlerts">
    <h6 class="dropdown-header dropdown-notifications-header">
    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-bell mr-2">
    <path d="M18 8A6 6 0 0 0 6 8c0 7-3 9-3 9h18s-3-2-3-9"></path>
    <path d="M13.73 21a2 2 0 0 1-3.46 0"></path>
    </svg>
    Alerts Center
    </h6>
    
    <a class="dropdown-item dropdown-notifications-footer" href="alerts.html">View All Alerts</a>
    </div>
    </li>
    
    
    <li class="nav-item dropdown no-arrow no-caret mr-3 dropdown-notifications">
    <a class="btn btn-icon btn-transparent-dark dropdown-toggle" id="navbarDropdownMessages" href="javascript:void(0);" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-mail">
    <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path>
    <polyline points="22,6 12,13 2,6"></polyline>
    </svg>
    </a>
    
    <div class="dropdown-menu dropdown-menu-right border-0 shadow animated--fade-in-up" aria-labelledby="navbarDropdownMessages">
    <h6 class="dropdown-header dropdown-notifications-header">
    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-mail mr-2">
    <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path>
    <polyline points="22,6 12,13 2,6"></polyline>
    </svg>
    Message Center
    </h6>
    
    <a class="dropdown-item dropdown-notifications-item" href="#!">
    <img class="dropdown-notifications-item-img" src="images/user/s8.png">
    <div class="dropdown-notifications-item-content">
    <div class="dropdown-notifications-item-content-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</div>
    <div class="dropdown-notifications-item-content-details">Diane Chambers · 2d</div>
    </div>
    </a>
    <a class="dropdown-item dropdown-notifications-footer" href="messages.html">Read All Messages</a>
    </div>
    </li>
    
    <li class="nav-item dropdown no-arrow no-caret dropdown-user">
    <a class="btn btn-icon btn-transparent-dark dropdown-toggle" id="navbarDropdownUserImage" href="javascript:void(0);" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img class="img-fluid" src="images/user/s4.png"></a>
    <div class="dropdown-menu dropdown-menu-right border-0 shadow animated--fade-in-up" aria-labelledby="navbarDropdownUserImage">
    <h6 class="dropdown-header d-flex align-items-center">
    <img class="dropdown-user-img" src="{{asset('assets/images/user/s4.png')}}">
    <div class="dropdown-user-details">
    <div class="dropdown-user-details-name">{{ Auth::user()->name }}</div>
    <div class="dropdown-user-details-email"><a href="https://askbootstrap.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="127b737f7d61737a737c52757f737b7e3c717d7f">[email&#160;protected]</a></div>
    </div>
    </h6>
    <div class="dropdown-divider"></div>
    <a class="dropdown-item" href="account.html">
    <div class="dropdown-item-icon">
    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-settings">
    <circle cx="12" cy="12" r="3"></circle>
    <path d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 0 1 0 2.83 2 2 0 0 1-2.83 0l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 0 1-2 2 2 2 0 0 1-2-2v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 0 1-2.83 0 2 2 0 0 1 0-2.83l.06-.06a1.65 1.65 0 0 0 .33-1.82 1.65 1.65 0 0 0-1.51-1H3a2 2 0 0 1-2-2 2 2 0 0 1 2-2h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 0 1 0-2.83 2 2 0 0 1 2.83 0l.06.06a1.65 1.65 0 0 0 1.82.33H9a1.65 1.65 0 0 0 1-1.51V3a2 2 0 0 1 2-2 2 2 0 0 1 2 2v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 0 1 2.83 0 2 2 0 0 1 0 2.83l-.06.06a1.65 1.65 0 0 0-.33 1.82V9a1.65 1.65 0 0 0 1.51 1H21a2 2 0 0 1 2 2 2 2 0 0 1-2 2h-.09a1.65 1.65 0 0 0-1.51 1z"></path>
    </svg>
    </div>
    Account
    </a>
    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
        <a class="dropdown-item" href="{{ route('logout') }}"
           onclick="event.preventDefault();
                         document.getElementById('logout-form').submit();">
            {{ __('Logout') }}
        </a>

        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
            @csrf
        </form>
    </div>
    </div>
    </li>

   
</li>
@endguest




</ul>
</div>
</nav>

<nav class="navbar navbar-expand-lg navbar-light bg-white osahan-nav-mid px-0 border-top shadow-sm">
<div class="container">
<button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
<span class="navbar-toggler-icon"></span>
</button>
<div class="collapse navbar-collapse" id="navbarResponsive">
<ul class="navbar-nav">
<li class="nav-item dropdown">
<a class="nav-link " href="#" id="navbarDropdownPortfolio" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
Home
</a>
</li>
<li class="nav-item">
<a class="nav-link" href="about.html">About</a>
</li>
<li class="nav-item">
<a class="nav-link" href="contact.html">Contact</a>
</li>
<li class="nav-item">
<a class="nav-link" href="contact.html">Events</a>
</li>
<li class="nav-item dropdown">
<a class="nav-link dropdown-toggle" href="#" id="navbarDropdownPortfolio" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
explore
</a>
<div class="dropdown-menu menu1" aria-labelledby="navbarDropdownPortfolio">
    <div>
    <div class="dropdown-item">
        <div class="col">
          <a href="#"> Cheap Movers</a>
        </div>  
        <div class="col">
          <a href="#">  Ethernet Wiring Services</a>
        </div>  
        <div class="col">
          <a href="#"> Electricians</a>
        </div>  
        <div class="col">
          <a href="#"> TV Wall Mount Installation Services</a>
        </div> 
        </div>  
      <div class="dropdown-item">
         
        <div class="col">
          <a href="#">  Ethernet Wiring Services</a>
        </div>  
        <div class="col">
          <a href="#"> Plumbers</a>
        </div>  
        <div class="col">
          <a href="#">  General Contractors</a>
        </div>  
          
        <div class="col">
          <a href="#">  Single Item Movers</a>
        </div>
        </div>  
        
      <div class="dropdown-item">
        <div class="col">
          <a href="#"> Handyman Services</a>
        </div>  
        <div class="col">
          <a href="#">Christmas Light Installers</a>
        </div>  
        <div class="col">
          <a href="#">Small Moving Companies</a>
        </div>  
        <div class="col">
          <a href="#">Residential Movers</a>
        </div>  
        </div>  
      <div class="dropdown-item">
        <div class="col">
          <a href="#"> Handyman Services</a>
        </div>  
        <div class="col">
          <a href="#">House Cleaning Services</a>
        </div>  
        <div class="col">
          <a href="#">Last Minute Movers</a>
        </div>  
        <div class="col">
          <a href="#">Security Camera Installers</a>
        </div> 
        </div>  
      <div class="dropdown-item">
         
        <div class="col">
          <a href="#"> Affordable Roofers</a>
        </div>  
        <div class="col">
          <a href="#">Events and more</a>
        </div>  
        <div class="col">
          <a href="#">App Developers</a>
        </div>  
        <div class="col">
          <a href="#">Roofing Contractors</a>
        </div> 
        </div>  
      <div class="dropdown-item">
         
        <div class="col">
          <a href="#">Leaf Removal Services</a>
        </div>  
          
        <div class="col">
          <a href="#">Affordable Attorneys</a>
        </div>  
        <div class="col">
          <a href="#">Roofing Contractors</a>
        </div>  
        <div class="col">
          <a href="#"> Personal Trainers</a>
        </div> 
        </div>  
       
      <div class="dropdown-item">
        <div class="col">
          <a href="#">Local Roofers</a>
        </div>  
        <div class="col">
          <a href="#">Movers</a>
        </div> 
          
        <div class="col">
          <a href="#">Freelance Web Designers</a>
        </div>  
        <div class="col">
          <a href="#"> Personal Trainers</a>
        </div>  
        </div>  
        </div>  
</div>
</li>

</ul>
</div>
<ul class="navbar-nav ml-auto">
<li class="nav-item">
<a class="btn btn-success" href="{{route('becomeExxpert.index')}}">
<i class="fa fa-fw fa-trophy"></i>
<span >Become An exxpert</span></a>
</li>

</ul>
</div>
</nav>

<main class="">
    @yield('content')
</main>


<footer class="bg-white">
<div class="container">
<div class="d-flex justify-content-between">
<div class="footer-list">
<h2>Categories</h2>
<ul class="list">
<li><a href="#">Graphics &amp; Design</a></li>
<li><a href="#">Digital Marketing</a></li>
<li><a href="#">Writing &amp; Translation</a></li>
<li><a href="#">Video &amp; Animation</a></li>
<li><a href="#">Music &amp; Audio</a></li>
<li><a href="#">Programming &amp; Tech</a></li>
<li><a href="#">Business</a></li>
<li><a href="#">Lifestyle</a></li>
<li><a href="#">Sitemap</a></li>
</ul>
</div>
<div class="footer-list">
<h2>About</h2>
<ul class="list">
<li><a href="#">Careers</a></li>
<li><a href="#">Press &amp; News</a></li>
<li><a href="#">Partnerships</a></li>
<li><a href="#">Privacy Policy</a></li>
<li><a href="#">Terms of Service</a></li>
<li><a href="#">Intellectual Property Claims</a></li>
<li><a href="#" target="_blank">Investor Relations</a></li>
</ul>
</div>
<div class="footer-list">
<h2>Support</h2>
<ul class="list">
<li><a href="#">Help &amp; Support</a></li>
<li><a href="#">Trust &amp; Safety</a></li>
<li><a href="#">Selling on exxpert
</a>
</li>
<li><a href="#">Buying on exxpert
</a>
</li>
</ul>
</div>
<div class="footer-list">
<h2>Community</h2>
<ul class="list">
<li><a href="#">Events</a></li>
<li><a href="#">Blog</a></li>
<li><a href="#">Forum</a></li>
<li><a href="#">Community Standards</a></li>
<li><a href="#">Podcast</a></li>
<li><a href="#">Affiliates</a></li>
<li><a href="#">Invite a Friend</a></li>
<li><a href="#">Become a Seller</a></li>
<li><a href="#">exxpert
Elevate<small>Exclusive Benefits</small></a>
</li>
</ul>
</div>
<div class="footer-list">
<h2>More From exxpert</h2>
<ul class="list">
<li><a href="#">exxpert
Pro</a>
</li>
<li><a href="#">exxpert
Studios</a>
</li>
<li><a href="#">exxpert
Logo Maker</a>
</li>
<li><a href="#">Get Inspired</a></li>
<li><a href="#">ClearVoice<small>Content Marketing</small></a></li>
<li><a href="#">AND CO<small>Invoice Software</small></a></li>
<li><a href="#">Learn<small>Online Courses</small></a></li>
</ul>
</div>
</div>
<div class="copyright">
<div class="logo">
<a href="index.html">
<img src="{{asset('assets/images/exxpert-logo2.png')}}">
</a>
</div>
<p>© Copyright 2020 Exxpert. All Rights Reserved
</p>
<ul class="social">
<li>
<a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
</li>
<li>
<a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
</li>
<li>
<a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
</li>
<li>
<a href="#"><i class="fa fa-pinterest-p" aria-hidden="true"></i></a>
</li>
<li>
<a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
</li>
</ul>
</div>
</div>
</footer>

<script src="{{asset('assets/vendor/jquery/jquery.min.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/vendor/slick-master/slick/slick.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/vendor/owl-carousel/owl.carousel.min.js')}}"></script>
<script src="{{asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}" type="text/javascript"></script>



<script src="{{asset('assets/vendor/slick-master/slick/slick.js')}}" type="text/javascript" charset="utf-8"></script>

<script src="{{asset('assets/vendor/lightgallery-master/dist/js/lightgallery-all.min.js')}}" type="text/javascript"></script>

<script src="{{asset('assets/vendor/select2/js/select2.min.js')}}" type="text/javascript"></script>

<script src="{{asset('assets/js/custom.js')}}" type="text/javascript"></script>
</body>
</html>
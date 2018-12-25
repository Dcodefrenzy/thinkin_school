<?php session_start(); ?>
<!doctype html>
<html lang="en">

<!-- Mirrored from themezinho.net/uon/about-us.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 14 Dec 2018 14:03:12 GMT -->
<head>
<!-- META TAGS -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Thinking | School</title>
<meta name="author" content="Themezinho">
<meta name="description" content="Uon Corp | Business Solutions Consulting Companies">
<meta name="keywords" content="business, corporate, uon, corps, template, carousel, parallax, office, team">

<!-- SOCIAL MEDIA META -->
<meta property="og:description" content="Uon Corp | Business Solutions Consulting Companies">
<meta property="og:image" content="preview.html">
<meta property="og:site_name" content="uon">
<meta property="og:title" content="uon">
<meta property="og:type" content="website">
<meta property="og:url" content="http://www.themezinho.net/uon">

<!-- TWITTER META -->
<meta name="twitter:card" content="summary">
<meta name="twitter:site" content="@uon">
<meta name="twitter:creator" content="@uon">
<meta name="twitter:title" content="uon">
<meta name="twitter:description" content="Uon Corp | Business Solutions Consulting Companies">
<meta name="twitter:image" content="preview.html">

<!-- FAVICON FILES -->
<link href="ico/apple-touch-icon-144-precomposed.png" rel="apple-touch-icon" sizes="144x144">
<link href="ico/apple-touch-icon-114-precomposed.png" rel="apple-touch-icon" sizes="114x114">
<link href="ico/apple-touch-icon-72-precomposed.png" rel="apple-touch-icon" sizes="72x72">
<link href="ico/apple-touch-icon-57-precomposed.png" rel="apple-touch-icon">
<link href="ico/favicon.png" rel="shortcut icon">

<!-- CSS FILES -->
<link rel="stylesheet" href="/css/animate.min.css">
<link rel="stylesheet" href="css/font-awesome.min.css">
<link rel="stylesheet" href="css/flipbox.min.css">
<link rel="stylesheet" href="css/timeline.css">
<link rel="stylesheet" href="css/odometer.min.css">
<link rel="stylesheet" href="css/fancybox.min.css">
<link rel="stylesheet" href="css/swiper.min.css">
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/style.css">
</head>
<body>
<div class="search-box">
  <div class="close-btn"> <span></span> <span></span> </div>
  <!-- end close-btn -->
  <form>
    <input type="search" placeholder="Type here to search...">
    <h6>Type above and press enter or press close to cancel.</h6>
  </form>
</div>
<!-- end search-box -->
<aside class="sandwich-menu">
  <div class="logo"> <img src="images/logo.png" alt="Image"> </div>
  <!-- end logo -->
      <ul class="nav-menu">
       <li><a href="home">Home</a></li>
        <li><a href="#">Corpration</a>
          <ul class="dropdown">
            <li><a href="about">About Us</a></li>
            <li><a href="team-members">Team Members</a></li>
            <li><a href="clients">Clients</a></li>
            <li><a href="projects">Projects</a></li>
            <li><a href="#">Career</a></li>
          </ul>
        </li>
        <li><a href="#">Services</a>
          <ul class="dropdown">
           <?php 
              $services = getServices($conn); 
              foreach ($services as $key => $service) {
                  extract($service);
           ?>
        <li><a <?php echo 'href=service?hid='.$hash_id.''; ?>><?php echo $title; ?></a></li>
          <?php } ?>
          </ul>
        </li>
        <li><a href="events">Events</a></li>
        <li><a href="training">Trainings</a></li>
        <li><a href="blogs">Blog</a>
        <ul class="dropdown">
        <?php $category = getCat($conn); 
        foreach ($category as $key => $categories) {
          extract($categories);
          ?>
         <li><a <?php echo 'href=blog?hid='.$hash_id.''; ?>><?php echo $category_name; ?></a></li>
       <?php } ?>
          </ul>
          </li>
        <li><a href="#">Contact</a></li> 
        <?php if (isset($_SESSION['username'])) {
          echo '<li><a href="#">Welcome '.$_SESSION['username'].'</a>
        <ul class="dropdown">';
        echo '<li><a href="logout">Logout</a></li>
        </ul></li>';

        }else{
          echo '<li><a href="user-registration">Sign-Up</a>
        <ul class="dropdown">
           <li><a href="user-login">Loigin</a></li>
          </ul>
          </li>';
        } ?>
     
      </ul>
      <!-- end nav-menu -->
  <p>Uon is a creative multi-concept Themeforest layout will help business owners create awesome websites.</p>
  <ul class="photo-gallery">
    <li><a href="images/image04.jpg" data-fancybox><img src="images/image04.jpg" alt="Image"></a></li>
    <li><a href="images/image05.jpg" data-fancybox><img src="images/image05.jpg" alt="Image"></a></li>
    <li><a href="images/image06.jpg" data-fancybox><img src="images/image06.jpg" alt="Image"></a></li>
    <li><a href="images/image07.jpg" data-fancybox><img src="images/image07.jpg" alt="Image"></a></li>
  </ul>
  <address>
  <p>Boryssa Himry 124 B Block Pozniaky <br>
    IvanaFrankovsk - Ukraine</p>
  <p>+38 (98) 294 80 86<br>
    E-mail <a href="#">info@uon-corp.com</a></p>
  </address>
  <ul class="social-media">
    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
    <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
    <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
    <li><a href="#"><i class="fa fa-youtube-play"></i></a></li>
  </ul>
  <!-- end social-media --> 
  <span class="copyright">© 2018 Uon Corp - Business & Financial Solutionss</span> </aside>
<!-- end sandwich-menu -->
<header class="header">
  <div class="topbar">
    <div class="container">
      <div class="tagline"> Although : no-one wants to be knocked back or told their <u>idea is unworkable</u></div>
      <!-- end tagline -->
      <ul class="social-media">
        <li><a href="#" data-toggle="tooltip" data-placement="bottom" title="Facebook"><i class="fa fa-facebook"></i></a></li>
        <li><a href="#" data-toggle="tooltip" data-placement="bottom" title="Twitter"><i class="fa fa-twitter"></i></a></li>
        <li><a href="#" data-toggle="tooltip" data-placement="bottom" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
        <li><a href="#" data-toggle="tooltip" data-placement="bottom" title="Google+"><i class="fa fa-google-plus"></i></a></li>
        <li><a href="#" data-toggle="tooltip" data-placement="bottom" title="Youtube"><i class="fa fa-youtube-play"></i></a></li>
      </ul>
      <!-- end social-media -->
      <div class="phone"><img src="images/icon-phone.png" alt="Image"> <span><b>UA</b> +38 062 431 8086</span></div>
      <!-- end phone --> 
    </div>
    <!-- end container --> 
  </div>
  <!-- end topbar -->
  <nav class="navbar">
    <div class="container">
      <div class="logo"> <a href="#"> <img src="images/logo.png" alt="Image"> </a> </div>
      <!-- end logo -->
      <ul class="nav-menu">
       <li><a href="home">Home</a></li>
        <li><a href="#">Corpration</a>
          <ul class="dropdown">
            <li><a href="about">About Us</a></li>
            <li><a href="team-members">Team Members</a></li>
            <li><a href="clients">Clients</a></li>
            <li><a href="projects">Projects</a></li>
            <li><a href="#">Career</a></li>
          </ul>
        </li>
        <li><a href="#">Services</a>
          <ul class="dropdown">
           <?php 
              $services = getServices($conn); 
              foreach ($services as $key => $service) {
                  extract($service);
           ?>
        <li><a <?php echo 'href=service?hid='.$hash_id.''; ?>><?php echo $title; ?></a></li>
          <?php } ?>
          </ul>
        </li>
        <li><a href="events">Events</a></li>
        <li><a href="training">Trainings</a></li>
        <li><a href="blogs">Blog</a>
        <ul class="dropdown">
        <?php $category = getCat($conn); 
        foreach ($category as $key => $categories) {
          extract($categories);
          ?>
         <li><a <?php echo 'href=blog?hid='.$hash_id.''; ?>><?php echo $category_name; ?></a></li>
       <?php } ?>
          </ul>
          </li>
        <li><a href="#">Contact</a></li> 
        <?php if (isset($_SESSION['username'])) {
          echo '<li><a href="#">Welcome '.$_SESSION['username'].'</a>
        <ul class="dropdown">';
        echo '<li><a href="logout">Logout</a></li>
        </ul></li>';

        }else{
          echo '<li><a href="user-registration">Sign-Up</a>
        <ul class="dropdown">
           <li><a href="user-login">Loigin</a></li>
          </ul>
          </li>';
        } ?>
     
      </ul>
      <!-- end nav-menu -->
      <ul class="language">
        <li><a href="#" class="active">EN</a></li>
        <li><a href="#">RU</a></li>
      </ul>
      <!-- end language -->
      <div class="search-btn"> <i class="fa fa-search"></i> </div>
      <!-- end search-btn -->
      <div class="sandwich-btn"> <span></span> <span></span> <span></span> </div>
      <!-- end sandwich-btn -->
      <div class="bottom-bar"></div>
      <!-- end bottom-bar --> 
    </div>
    <!-- end container --> 
  </nav>
  <!-- end navbar --> 
</header>
<!-- end header -->
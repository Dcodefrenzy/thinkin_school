<?php
ob_start();
// include "includes/header.php";
session_start();
$redirection = "";
if (isset($msg)) {
  $redirection = "podcast";
}else{
  $redirection = "index";
}

  $error = [];
if(array_key_exists('submit', $_POST)){

  if(empty($_POST['email'])){
    $error['email']="Enter a email";
  }

  if(empty($_POST['pword'])){
    $error['pword']="Enter a password";
  }

  if(empty($error)){
    $clean = array_map('trim', $_POST);
    userLogin($conn, $clean, $redirection );
  }
}


 ?>

 <!DOCTYPE html>
 <html lang="en">
 <!-- Mirrored from demo.graygrids.com/themes/classix-template/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 16 Nov 2017 11:40:54 GMT -->
 <head>
 <meta charset="UTF-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <meta http-equiv="content-type" content="text/html; charset=utf-8">
 <meta name="author" content="">
 <title>TS Users Login</title>
 <link rel="shortcut icon" href="assets/img/favicon.png">
 <link rel="stylesheet" href="assets/css/bootstrap.min.css" type="text/css">
 <link rel="stylesheet" href="assets/css/jasny-bootstrap.min.css" type="text/css">
 <link rel="stylesheet" href="assets/css/jasny-bootstrap.min.css" type="text/css">
 <link rel="stylesheet" href="assets/css/material-kit.css" type="text/css">
 <link rel="stylesheet" href="assets/css/font-awesome.min.css" type="text/css">
 <link rel="stylesheet" href="assets/fonts/line-icons/line-icons.css" type="text/css">
 <link rel="stylesheet" href="assets/css/main.css" type="text/css">
 <link rel="stylesheet" href="assets/extras/animate.css" type="text/css">
 <link rel="stylesheet" href="assets/extras/owl.carousel.css" type="text/css">
 <link rel="stylesheet" href="assets/extras/owl.theme.css" type="text/css">
 <link rel="stylesheet" href="assets/extras/settings.css" type="text/css">
 <link rel="stylesheet" href="assets/css/responsive.css" type="text/css">
 <link rel="stylesheet" href="assets/css/bootstrap-select.min.css">
 </head>
 <body>


<div class="page-header" style="background: url(assets/img/banner1.jpg);">
<div class="container">
<div class="row">
<div class="col-md-12">
<div class="breadcrumb-wrapper">
<h2 class="page-title">Login to your Thinking School account</h2>
</div>
</div>
</div>
</div>
</div>


<section id="content">
<div class="container">
<div class="row">

<?php
if (isset($_GET['err'])){
$msg = str_replace('_', ' ', $_GET['err']);

  echo '<div class="col-md-12">
<div class="inner-box posting">
<div class="alert alert-danger alert-lg" role="alert">
<h2 class="postin-title">x Ops! '.$msg.' </h2>
<p>Please use correct password</p>
</div>
</div>
</div>';
}
if (isset($_GET['wn'])){
$msg = str_replace('_', ' ', $_GET['wn']);

  echo '<div class="col-md-12">
<div class="inner-box posting">
<div class="alert alert-warning alert-lg" role="alert">
<h2 class="postin-title">Warning! '.$msg.' </h2>
<p>Thinking School will verify your account once you are confirmed as a Thinking School Admin. You will be Notified via mail. Thanks</p>
</div>
</div>
</div>';
}
if (isset($_GET['msg'])){
$msg = str_replace('_', ' ', $_GET['msg']);

  echo '<div class="col-md-12">
<div class="inner-box posting">
<div class="alert alert-warning alert-lg" role="alert">
<h2 class="postin-title">Warning! '.$msg.' </h2>
<p>Thinking School  Podcast page cannot be accessed without signin. Thanks</p>
</div>
</div>
</div>';
}
if (isset($_GET['ssp'])){
$msg = str_replace('_', ' ', $_GET['ssp']);

  echo '<div class="col-md-12">
<div class="inner-box posting">
<div class="alert alert-warning alert-lg" role="alert">
<h2 class="postin-title">Warning! '.$msg.' </h2>
<p>Contact Thinking School Admin. Thanks</p>
</div>
</div>
</div>';
}

 ?>

<div class="col-sm-6 col-sm-offset-4 col-md-4 col-md-offset-4">
<div class="page-login-form box">
<h3>
Login
</h3>
<form role="form" class="login-form" method="POSt" action="">
<div class="form-group">
<div class="input-icon">
<i class="icon fa fa-user"></i>
<input type="text" id="sender-email" class="form-control" name="email" placeholder="Email">
</div>
</div>
<div class="form-group">
<div class="input-icon">
<i class="icon fa fa-unlock-alt"></i>
<input type="password" name="pword" class="form-control" placeholder="Password">
</div>
</div>
<div class="checkbox">
<input type="checkbox" id="remember" name="rememberme" value="forever" style="float: left;">
<label for="remember">Remember me</label>
</div>
<input class="btn btn-common log-btn" type="submit" name="submit" value="submit">
</form>
<ul class="form-links">
<li class="pull-left"><a href="user-registration">Don't have an account?</a></li>
<li class="pull-right"><a href="forgot-password">Lost your password?</a></li>
</ul>
<br/>
<a href="index">
<button class="btn btn-common red-btn">Go to home</button>
</a>
</div>
</div>
</div>
</div>
</section>




<script type="text/javascript" src="assets/js/jquery-min.js"></script>
<script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
<script type="text/javascript" src="assets/js/material.min.js"></script>
<script type="text/javascript" src="assets/js/material-kit.js"></script>
<script type="text/javascript" src="assets/js/jquery.parallax.js"></script>
<script type="text/javascript" src="assets/js/owl.carousel.min.js"></script>
<script type="text/javascript" src="assets/js/wow.js"></script>
<script type="text/javascript" src="assets/js/main.js"></script>
<script type="text/javascript" src="assets/js/jquery.counterup.min.js"></script>
<script type="text/javascript" src="assets/js/waypoints.min.js"></script>
<script type="text/javascript" src="assets/js/jasny-bootstrap.min.js"></script>
<script type="text/javascript" src="assets/js/form-validator.min.js"></script>
<script type="text/javascript" src="assets/js/contact-form-script.js"></script>
<script type="text/javascript" src="assets/js/jquery.themepunch.revolution.min.js"></script>
<script type="text/javascript" src="assets/js/jquery.themepunch.tools.min.js"></script>
<script src="assets/js/bootstrap-select.min.js"></script>
</body>

<!-- Mirrored from demo.graygrids.com/themes/classix-template/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 16 Nov 2017 11:40:55 GMT -->
</html>

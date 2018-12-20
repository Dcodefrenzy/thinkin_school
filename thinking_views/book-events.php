<?php
ob_start();
session_start();

if (isset($_GET['hid'])|| ($_GET['t'])) {
  $hid = $_GET['hid'];
  $booking = $_GET['t'];
}

  $error = [];
if(array_key_exists('submit', $_POST)){

  if(empty($_POST['email'])){
    $error['email']="Enter a email";
  }

  if(empty($_POST['number'])){
    $error['number']="Enter a Phone Number";
  }

  if(empty($_POST['name'])){
    $error['name']="Enter your Full Name";
  }

  if(empty($error)){
    $_POST['verification'] = 'not verified';
    $clean = array_map('trim', $_POST);
    checkBooking($conn, $clean, $hid, $booking);
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
<meta name="author" content="BoardSpeck">
<title>BoardSpeck Web Office </title>

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
<h2 class="page-title">Welcome To Our Booking Page</h2>
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
<p>Have Registered for this '.$booking.'</p>
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
<p>BoardSpeck will verify your account once you are confirmed as a BoardSpeck Admin. You will be Notified via mail. Thanks</p>
</div>
</div>
</div>';
}
if (isset($_GET['sgn'])){
$msg = str_replace('_', ' ', $_GET['success']);

  echo '<div class="col-md-12">
<div class="inner-box posting">
<div class="alert alert-sucess alert-lg" role="alert">
<h2 class="postin-title">Success! '.$msg.' </h2>
<p>You have been successfully verified. Thanks</p>
</div>
</div>
</div>';
}
if (isset($_GET['note'])){
$msg = str_replace('_', ' ', $_GET['note']);

  echo '<div class="col-md-12">
<div class="inner-box posting">
<div class="alert alert-warning alert-lg" role="alert">
<h2 class="postin-title">Note! '.$msg.' </h2>
<p>A link will be send to your mail to, please click the link for verification.Note: Only the verified are allowed to partake in this '.$booking.' Thanks</p>
</div>
</div>
</div>';
}



 ?>


<div class="col-sm-6 col-sm-offset-4 col-md-4 col-md-offset-4">
<div class="page-login-form box">
<h3>
Book
</h3>
<form role="form" class="login-form" method="POST" action="">
<div class="form-group">
  <?php $display = displayErrors($error, 'email'); echo $display?>
<div class="input-icon">
<i class="icon fa fa-user"></i>
<input type="text" id="sender-email" class="form-control" name="email" placeholder="Email" required="">
</div>
</div>
<?php $display = displayErrors($error, 'name'); echo $display?>
<div class="form-group">
<div class="input-icon">
<i class="icon fa fa-user"></i>
<input type="text" id="sender-email" class="form-control" name="name" placeholder="Name" required="">
</div>
</div>
<div class="form-group">
  <?php $display = displayErrors($error, 'number'); echo $display?>
<div class="input-icon">
<i class="icon fa fa-user"></i>
<input type="number" id="sender-email" class="form-control" name="number" placeholder="Phone Number" required="">
</div>
</div>
<input class="btn btn-common log-btn" type="submit" name="submit" value="submit">
</form>

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

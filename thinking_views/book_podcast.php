<?php
ob_start();
session_start();
 if (isset($_GET['hid'])) {
    $booking_id = $_GET['hid'];
 }
 
//if no user session send them to login page.
//if session fetch user and
if (isset($_SESSION['hash_id'])) {
  $hash_id = $_SESSION['hash_id'];
   $user = getUser($conn, $hash_id);
  //get user.
}else{
  header("Location: user-login");
}
if (isset($_GET['preSub'])) {
    $invoice_code = $_GET['preSub'];
}else{
$clean['email']= $user['email'];
$clean['name'] = $user['lastname']." ".$user['firstname'];
$clean['phone_number'] = $user['phone_number'];
$clean['verification'] = $user['verification'];
$clean['payment_status'] = 'not paid';
$clean['subscription_status'] = 'pre-subscription';
$rnd = rand(0000000000,9999999999);
$invoice_code = str_shuffle("podcast".$rnd);
$clean['invoice_code'] = $invoice_code;
/*var_dump($clean);*/
checkPodBooking($conn, $clean, $booking_id, "podcast");
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
<meta name="author" content="Thinking School">
<title>Thinking School Web Office </title>

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
$message = str_replace('_', ' ', $_GET['err']);

  echo '<div class="col-md-12">
<div class="inner-box posting">
<div class="alert alert-danger alert-lg" role="alert">
<h2 class="postin-title">x Ops!  </h2>
<p>'.$message.'</p>
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
if (isset($_GET['hash_id'])){


  echo '<div class="col-md-12">
<div class="inner-box posting">
<div class="alert alert-warning alert-lg" role="alert">
<h2 class="postin-title">Note! '.$user['lastname']." ".$user['firstname'].'</h2>
<p>A link will be send to your mail to so if you are not will Thanks</p>
</div>
</div>
</div>';
}



 ?>

<?php if (!isset($_GET['sub'])) {
  
 ?>
<div class="col-sm-6 col-sm-offset-4 col-md-4 col-md-offset-4">
<div class="page-login-form box">
     <h4 align="center"><b>Subscribe For Our Podcast</b></h4><br/>
     <p align="center">Email: <?php echo $user['email']; ?></p>
      <p align="center">Name: <?php echo $user['lastname']." ".$user['firstname']; ?></p>
       <p align="center">Phone Number: <?php echo $user['phone_number']; ?></p>
  <div align="center">
  <a href=<?php echo 'pay?paybooking='.$invoice_code.'?hash_id='.$booking_id.''; ?>>
    <button  class="btn btn-common red-btn">Make Payment</button>
</a>
</div>
<?php }if (isset($_GET['sub'])) {

 ?>
<div class="col-sm-6 col-sm-offset-4 col-md-4 col-md-offset-4">
<div class="page-login-form box">
     <h4 align="center"><b>You have already subscribed for podcast</b></h4><br/>
     <p align="center">Email: <?php echo $user['email']; ?></p>
      <p align="center">Name: <?php echo $user['lastname']." ".$user['firstname']; ?></p>
       <p align="center">Phone Number: <?php echo $user['phone_number']; ?></p>
     </div>

</div>
</div>
</div>
</div>
</section>
<?php } ?>




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

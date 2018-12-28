<?php
ob_start();
session_start();
include("include/link_include.php");
include("include/authentication.php");
include("include/levelcheck.php");
include("include/student_limit.php");
include("include/level1_limit.php");
authenticate();
if(isset($_SESSION['id'])){
  $session = $_SESSION['id'];
}
$info = adminInfo($conn,$session);
extract($info);


$error = [];
if(array_key_exists('submit', $_POST)){
  $ext = ["image/jpg", "image/JPG", "image/jpeg", "image/JPEG", "image/png", "image/PNG"];
  if(empty($_FILES['upload']['name'])){
    $error['upload'] = "Please choose file";
  }
  if(empty($_POST['header_title'])){
    $error['header_title'] = "Enter Header Title";
  }
  if(empty($_POST['txt'])){
    $error['txt'] = "Enter Text";
}
  if(empty($error)){
    $ver = compressImage($_FILES,'upload',50, 'uploads/' );
    $clean =  array_map('trim',$_POST );
    addFrontage($conn, $clean, $ver,$hash_id);
  }
}


?>







<section id="content">
<div class="container">
<div class="row">
<?php

if (isset($_GET['success'])){
$msg = str_replace('_', ' ', $_GET['success']);

  echo '<div class="col-md-12">
<div class="inner-box posting">
<div class="alert alert-success alert-lg" role="alert">
<h2 class="postin-title">✔ Successful! '.$msg.' </h2>
<p>Thank you '.ucwords($firstname).', Thinking school is happy to have you around. </p>
</div>
</div>
</div>';
}

 ?>





 <h3>Manage Client Home Page</h3>
 <hr>
 <h5>MANAGE FRONTAGE</h5>
 <div  class="alert alert-info" role="alert">
  <strong>NOTE</strong>
  <p><strong>*</strong>This page can not be deleted because it appears on the home page of Thinking School page But is can be edited.</p>
 </div>
 <div class="bs-docs-example">
   <table class="table table-striped table-hover" >
     <tr>
       <th >Content</th>
       <th>IMAGE</th>
        <th>Created By</th>
         <th>Date Created</th>
          <th>Edit</th>
     </tr>
     <tbody>
       <?php
       $vis = "show";
       viewFrontage($conn) ?>
     </tbody>
   </table>
 </div>
 <hr>






















<script src="assets/js/jquery-min.js" type="text/javascript">
  </script>
<script src="assets/js/bootstrap.min.js" type="text/javascript">
  </script>
<script src="assets/js/material.min.js" type="text/javascript">
  </script>
<script src="assets/js/material-kit.js" type="text/javascript">
  </script>
<script src="assets/js/jquery.parallax.js" type="text/javascript">
  </script>
<script src="assets/js/owl.carousel.min.js" type="text/javascript">
  </script>
<script src="assets/js/wow.js" type="text/javascript">
  </script>
<script src="assets/js/main.js" type="text/javascript">
  </script>
<script src="assets/js/jquery.counterup.min.js" type="text/javascript">
  </script>
<script src="assets/js/waypoints.min.js" type="text/javascript">
  </script>
<script src="assets/js/jasny-bootstrap.min.js" type="text/javascript">
  </script>
<script src="assets/js/form-validator.min.js" type="text/javascript">
  </script>
<script src="assets/js/contact-form-script.js" type="text/javascript">
  </script>
<script src="assets/js/jquery.themepunch.revolution.min.js" type="text/javascript">
  </script>
<script src="assets/js/jquery.themepunch.tools.min.js" type="text/javascript">
  </script>
<script src="assets/js/bootstrap-select.min.js">
  </script>
<script src="assets/js/fileinput.js">
  </script>
</body>

<!-- Mirrored from demo.graygrids.com/themes/classix-template/post-ads.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 16 Nov 2017 11:40:57 GMT -->
</html>

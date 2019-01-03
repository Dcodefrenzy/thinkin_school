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
$fname = ucwords($firstname);
$lname = ucwords($lastname);
$error= [];
if(array_key_exists('submit', $_POST)){
  $ext = ["image/jpg", "image/JPG", "image/jpeg", "image/JPEG", "image/png", "image/PNG"];
  if(empty($_FILES['upload']['name'])){
    $error['upload'] = "Please choose file";
  }
  if(empty($_POST['event_name'])){
    $error['event_name']="Enter a Event Name";
  }
    if(empty($_POST['venue'])){
    $error['venue']="Enter a Venue";
  }

  if(empty($_POST['price'])){
    $error['price']="Enter a Price";
  }
  if($_POST['price'] !== "FREE"){
    if(!is_numeric($_POST['price'])){
      $error['price']="Enter Only Numeric Values or FREE";
    }
  }

  if(empty($_POST['description'])){
    $error['description']="Enter a description";
  }
    if(empty($_POST['start_date'])){
    $error['start_date']="Enter a start date";
  }
      if(empty($_POST['end_date'])){
    $error['end_date']="Enter a end date";
  }
  if($_POST['start_date'] > $_POST['end_date'] ){
    $error['end_date'] =  "Ending Date can not be earlier than starting Date";
  }
      if(empty($_POST['time'])){
    $error['time']="Enter a time";
  }


  if(empty($error)){
     $_POST['status'] = "upcoming";
    $ver['a'] = compressImage($_FILES,'upload',90, 'uploads/' );
    $clean = array_map('trim', $_POST);
    $firstn = $fname;
    $lastn = $lname;
/*    $uri = explode("/", $_SERVER['REQUEST_URI']);
    $url = $uri[1];
     $to = "Thinking School@gmail.com";
     $subject = "Thinking School Web Office Content Upload";
     $txt = "Hello Admin, ($firstn $lastn)has added a content on "."$url"." page at the back office. Kindly check for and approval";
     $headers = "From: info@Thinking School.com" . "\r\n" .
     "CC: banjimayowa@gmail.com";
     mail($to,$subject,$txt,$headers);*/

    addEvents($conn,$clean,$ver,$hash_id);
  }
}
 ?>
<section id="content">
<div class="container">
<div class="row">
  <?php if (isset($_GET['success'])){
  $msg = str_replace('_', ' ', $_GET['success']);
    echo '<div class="col-md-12">
  <div class="inner-box posting">
  <div class="alert alert-success alert-lg" role="alert">
  <h2 class="postin-title">✔ Successful! '.$msg.' </h2>
  <p>Thank you '.ucwords($firstname).', Thinking school  is happy to have you around. </p>
  </div>
  </div>
  </div>';
  } ?>
<div class="col-sm-12 col-md-10 col-md-offset-1">
<div class="page-ads box">
<h2 class="title-2">Welcome to the Event page</h2>
<div class="row search-bar mb30 red-bg">
<div class="advanced-search">
<form class="search-form" method="get">
<div class="col-md-4 col-sm-12 search-col">
<h3>Please post your Event</h3>
</div>
</form>
</div>
</div>
<form class="form-ad" action="" method="post" enctype="multipart/form-data">
<div class="form-group mb30">
<label class="control-label">Event Name</label><?php $display = displayErrors($error, 'event_name');
echo $display ?> <input class="form-control input-md" name="event_name" placeholder="Write a Event name"  type="text">
</div>
<div class="form-group mb30">
<label class="control-label">Price(Enter "FREE" if the event is free)</label><?php $display = displayErrors($error, 'price');
echo $display ?> <input class="form-control input-md" name="price" placeholder="Enter event price here"  type="text">
</div>
<div class="form-group mb30">
<label class="control-label">venue</label><?php $display = displayErrors($error, 'venue');
echo $display ?> <input class="form-control input-md" name="venue" placeholder="Enter venue here"  type="text">
</div>
<div class="form-group mb30">
<label class="control-label">Start Date</label><?php $display = displayErrors($error, 'start_date');
echo $display ?> <input class="form-control input-md" name="start_date"   type="date">
</div>

<div class="form-group mb30">
<label class="control-label">End Date</label><?php $display = displayErrors($error, 'end_date');
echo $display ?> <input class="form-control input-md" name="end_date"   type="date">
</div>
<div class="form-group mb30">
<label class="control-label">Time</label><?php $display = displayErrors($error, 'time');
echo $display ?> <input class="form-control input-md" name="time" placeholder="format: 10am-3pm"  type="text">
</div>
<div class="col-md-4 col-sm-4 col-xs-12 search-bar search-bar-nostyle">
</div>
<br>
<br>
<div class="form-group mb30">
<label class="control-label" for="textarea">Description</label>
<?php $display = displayErrors($error, 'description');
echo $display ?>
<textarea class="form-control"  id="editor1" name="description" placeholder="Write your product description here" rows="4"></textarea>
</div>
<br/>
<br/>
<br/>
<h2 class="title-2">Add Image here</h2>
<div class="form-group">
<label class="control-label">Add images</label>
<?php $display = displayErrors($error, 'upload');
  echo $display ?> <br>
 <input class="file" id="featured-img" type="file" name="upload"><br>
<br>
<input type="submit" class="btn btn-common" name="submit" value="Add">
</form>
</div>
</div>
</div>
</div>
</section>
<a class="back-to-top" href="#"><i class="fa fa-angle-up"></i></a>
<!-- <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script>
<script src="http://netdna.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.js"></script> -->
<!-- <script>
  ClassicEditor
    .create( document.querySelector( '#editor' ) )
    .then( editor => {
      console.log( editor );
    } )
    .catch( error => {
      console.error( error );
    } );
</script> -->
<script type="text/javascript">
 CKEDITOR.replace( 'editor1',
 {
    toolbarGroups :
    [
        { name: 'clipboard',   groups: [ 'clipboard', 'undo' ] },
          { name: 'editing',     groups: [ 'find', 'selection', 'spellchecker' ] },
          { name: 'links' },
            { name: 'insert' },
                { name: 'others' },
              { name: 'forms' },
            { name: 'tools' },
            '/',
            { name: 'basicstyles', groups: [ 'basicstyles', 'cleanup' ] },
            { name: 'paragraph',   groups: [ 'list', 'indent', 'blocks', 'align', 'bidi' ] },
            { name: 'styles' },
            { name: 'colors' },
    ]
  });
</script>
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

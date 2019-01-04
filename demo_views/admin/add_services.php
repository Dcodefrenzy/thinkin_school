<?php
ob_start();
session_start();
include("include/authentication.php");
include("include/link_include.php");
include("include/levelcheck.php");
include("include/level1_limit.php");

$level = adminLevel($conn, $_SESSION['id']);

// if($level <= 1){
//   $success = "You only Have Access to that page yet";
//   $succ = preg_replace('/\s+/', '_', $success);
//   header("Location: adminHome?wn=$succ");
// }

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

  if(empty($_POST['title'])){
    $error['title']="Enter a Title";
  }

  if(empty($_POST['body'])){
    $error['body']="Enter a body";
  }

  if(empty($error)){
        $_POST['visibility'] = "hide";
    $ver['a'] = compressImage($_FILES,'upload',90, 'uploads/' );

    $clean = array_map('trim', $_POST);
 
/*
    $firstn = $fname;
    $lastn = $lname;
    $uri = explode("/", $_SERVER['REQUEST_URI']);
    $url = $uri[1];
     $to = "Thinking School@gmail.com";
     $subject = "Thinking School Web Office Content Upload";
     $txt = "Hello Admin, ($firstn $lastn)has added a content on "."$url"." page at the back office. Kindly check for and approval";
     $headers = "From: info@Thinking School.com" . "\r\n" .
     "CC: banjimayowa@gmail.com";
     mail($to,$subject,$txt,$headers);*/
      addServices($conn, $clean,$ver,$hash_id);
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
<h2 class="title-2">Welcome to the Add Service page</h2>
<div class="row search-bar mb30 red-bg">
<div class="advanced-search">
<form class="search-form" method="get">
<div class="col-md-4 col-sm-12 search-col">
<h3>Please post your Services</h3>
</div>
</form>
</div>
</div>
<form class="form-ad" action="" method="post" enctype="multipart/form-data">
<div class="form-group mb30">
<label class="control-label">Service Topic</label><?php $display = displayErrors($error, 'title');
echo $display ?> <input class="form-control input-md" name="title" placeholder="Write a suitable title for your service"  type="text">
</div>

<div class="form-group mb30">
<label class="control-label" for="textarea">Body</label>
<?php $display = displayErrors($error, 'body');
echo $display ?>
<textarea class="form-control" id="editor1" name="body" placeholder="Write your Service here" rows="4"></textarea>
</div>

  <br>
  <br>
  <br>
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
<input type="submit" class="btn btn-common" name="submit" value="submit">
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

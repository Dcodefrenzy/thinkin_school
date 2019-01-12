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
$edit_info = getEditInfo($conn,$_GET['hid'],'podcast');
$info = adminInfo($conn,$session);
extract($info);
$fname = ucwords($firstname);
$lname = ucwords($lastname);
$error= [];
if(array_key_exists('submit', $_POST)){

  if(empty($_POST['subscription'])){
    $error['subscription']="Enter a subscription title";
  }
  if(empty($_POST["price"])){
    $error['price']="Enter your new price";
  }
      if(empty($_POST['body'])){
    $error['body']="Enter Details on this subscription";
  }


  if(empty($error)){
    $clean = array_map('trim', $_POST);


    updatePodcast($conn,$clean, $_GET['hid']);
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
<h2 class="title-2">Welcome to the podcast Edit page</h2>
<div class="row search-bar mb30 red-bg">
<div class="advanced-search">
<form class="search-form" method="get">
<div class="col-md-4 col-sm-12 search-col">
<h3>Edit Your Podcast Service Here</h3>
</div>
</form>
</div>
</div>
<form class="form-ad" action="" method="post" enctype="multipart/form-data">
<div class="form-group mb30">
<label class="control-label">Project Name</label><?php $display = displayErrors($error, 'subscription');
echo $display ?> <input class="form-control input-md" name="subscription" placeholder="Write a project name"  type="text" value="<?php echo $edit_info['subscription']?>">
</div>
<div class="form-group mb30">
<label class="control-label">Project Location</label><?php $display = displayErrors($error, 'price');
echo $display ?> <input class="form-control input-md" name="price" placeholder=""  type="text" value="<?php echo $edit_info['price']?>">
</div>
   <div class="form-group mb30">
   <label class="control-label" for="textarea">Body</label>
   <?php $display = displayErrors($error, 'body');
   echo $display ?>
   <textarea class="form-control"  id="editor2" name="body" placeholder="Details about this subscription method."  rows="4"><?php echo $edit_info['body']?></textarea>
 </div>
 <br/>
 <br/>
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
          CKEDITOR.replace( 'editor2',
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

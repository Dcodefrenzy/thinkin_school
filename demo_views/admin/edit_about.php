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

  
  $edit_info = getEditInfo($conn,$_GET['id'],'about');


$info = adminInfo($conn,$session);
extract($info);
$fname = ucwords($firstname);
$lname = ucwords($lastname);
$error= [];
if(array_key_exists('submit', $_POST)){

  if(empty($_POST['body'])){
    $error['body']="Enter a body";
  }

   if(empty($_POST['mission_statement'])){
    $error['mission_statement']="Enter your mission_statement";
  }

  if(empty($error)){
    $clean = array_map('trim', $_POST);

/*    $firstn = $fname;
    $lastn = $lname;*/
/*    $uri = explode("/", $_SERVER['REQUEST_URI']);
    $url = $uri[1];
     $to = "boardspeck@gmail.com";
     $subject = "Boardspeck Web Office Content Upload";
     $txt = "Hello Admin, ($firstn $lastn)has added a content on "."$url"." page at the back office. Kindly check for and approval";
     $headers = "From: info@boardspeck.com" . "\r\n" .
     "CC: banjimayowa@gmail.com";
     mail($to,$subject,$txt,$headers);*/
    editAbout($conn, $clean,$hash_id,$_GET['id']);
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
        <p>Thank you '.ucwords($firstname).', BoardSpeck  is happy to have you around. </p>
        </div>
        </div>
        </div>';
      } ?>
      <div class="col-sm-12 col-md-10 col-md-offset-1">
        <div class="page-ads box">
          <h2 class="title-2">Welcome to About Us page</h2>
          <div class="row search-bar mb30 red-bg">
            <div class="advanced-search">
              <form class="search-form" method="get">
                <div class="col-md-4 col-sm-12 search-col">
                  <h3>Please About us.</h3>
                </div>
              </form>
            </div>
          </div>
          <form class="form-ad" action="" method="post" enctype="multipart/form-data">
            <div class="form-group mb30">
                <label class="control-label" for="textarea">Body</label>
                <?php $display = displayErrors($error, 'body');
                echo $display ?>
                <textarea class="form-control"  id="editor1" name="body" placeholder="Write about us details here"  rows="4"> <?php echo $edit_info['body']?></textarea>
              </div>

                <div class="form-group mb30">
                <label class="control-label" for="textarea">Mission Statement</label>
                <?php $display = displayErrors($error, 'mission_statement');
                echo $display ?>
                <textarea class="form-control"  id="editor2" name="mission_statement" placeholder="Write your Mission Statement Here"  rows="4"> <?php echo $edit_info['mission_statement']?></textarea>
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
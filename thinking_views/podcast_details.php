<?php
ob_start();
include "includes/header.php";
if (isset($_GET['hid'])) {
  $hash = $_GET['hid'];
}else{
  header("Location: events");
}
 $podcast = getOnePodcast($conn, $hash);
extract($podcast);
/*$EDate2 = decodePartDate($end_date);
$SDate2 = decodePartDate($start_date);
$SDate = decodeDate($start_date);
$EDate = decodeDate($end_date)*/;
 ?>
<!-- end header -->
<section class="page-header">
	<div class="container">
		 <ol class="breadcrumb">
			<li class="breadcrumb-item"><a href="index">Home</a></li>
			<li class="breadcrumb-item"><a href="#">Podcast</a></li>
			<li class="breadcrumb-item active" aria-current="page">Subscription Details</li>
		  </ol>
		  <h2>PODCAST</h2>
		 
	</div>
	<!-- end container -->
</section>
<!-- end page-header -->
  <section class="blog">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-7 col-12">
         <div class="post wow fadeIn">
         	<figure class="post-image"> <img src=" <?php echo $image_1; ?>" alt="Image"></figure>
         	<div class="post-content">
                      <ul class="social-share">
      <li class="facebook"><a href="#"><i class="fa fa-facebook"></i></a></li>
      <li class="twitter"><a href="#"><i class="fa fa-twitter"></i></a></li>
<!--      <li class="google-plus"><a href="#"><i class="fa fa-google-plus"></i></a></li> -->
      <li class="linkedin"><a href="#"><i class="fa fa-linkedin"></i></a></li>
<!--      <li class="youtube"><a href="#"><i class="fa fa-youtube-play"></i></a></li> -->
      </ul>
          <h4><?php echo $subscription; ?></h4>
          <h5 style="color:green"><?php echo "<b>Price: </b>&#8358;".$price; ?></h5>
          <p><?php echo $body; ?></p>
                   <div class="form-group col-md-4">
            <label>&nbsp;</label>
             <a <?php echo 'href=book-podcast?hid='.$hash_id.'';?>>
            <input type="submit" value="Subscribe" name="submit">
            </a>
          </div>
         	</div>
         	<!-- end post-content -->
         </div>
        </div>
        <!-- end col-7 -->
        <div class="col-md-5 col-12">
          <aside class="sidebar">
            <div class="widget gallery wow fadeIn">
              <h4 class="widget-title">Latest Article</h4>
                <?php $blogs =  homeBlog($conn);
                  foreach ($blogs as $key => $blog) {
                    extract($blog);
                  ?>
                <ul>
                <a <?php echo 'href=blog-details?hid='.$hash_id.'' ?>>
                <li>
                     <div style= "border-radius: 100px; padding: 0px; background:url(<?php echo $image_1; ?>); height:10vh; width: 10vh; background-size: cover; background-position: center; background-repeat: no-repeat;" class="img-responsive"></div>
                </li>
                <span> <?php echo $title; ?></span><br/>
                <span> <?php echo $date_created; ?></span><br/>
                </a>
              </ul>
               <?php } ?>
              <!-- end gallery -->
            </div>
            <!-- end widget -->
          </aside>
          <!-- end side-bar -->
        </div>
        <!-- end col-5 -->
      </div>
      <!-- end row -->
    </div>
    <!-- end container -->
  </section>
  <!-- end blog -->
<?php include "includes/footer.php"; ?>

<?php
ob_start();
include "includes/header.php";
authentication();
checkSubscription($conn, $_SESSION['hash_id']);
 ?>
<!-- end header -->
<section class="page-header">
	<div class="container">
		 <ol class="breadcrumb">
			<li class="breadcrumb-item"><a href="#">Home</a></li>
			<li class="breadcrumb-item active" aria-current="page">Podcast</li>
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
         	<figure class="post-image"> 
         		      
         	</figure>
         	<div class="post-content">
         		   <iframe id="multi_iframe" frameborder="0" scrolling="yes" allowfullscreen="" src="https://www.podbean.com/media/player/multi?playlist=http%3A%2F%2Fplaylist.podbean.com%2F4130616%2Fplaylist_multi.xml&vjs=1&kdsowie31j4k1jlf913=e4dfafe7985f87a04995d42c321005753db52bec&size=240&skin=0&auto=0&download=1" width="100%" height="430"></iframe>
                      <!-- <ul class="social-share"> -->
<!--       <li class="facebook"><a href="#"><i class="fa fa-facebook"></i></a></li>
      <li class="twitter"><a href="#"><i class="fa fa-twitter"></i></a></li> -->
<!--      <li class="google-plus"><a href="#"><i class="fa fa-google-plus"></i></a></li> -->
     <!--  <li class="linkedin"><a href="#"><i class="fa fa-linkedin"></i></a></li> -->
<!--      <li class="youtube"><a href="#"><i class="fa fa-youtube-play"></i></a></li> -->
      <!-- </ul> -->
          </div>
        </div>
        <!-- end post-content -->
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

<?php 
  include "includes/header.php";
  if(isset($_GET['hid'])){
  $hid = $_GET['hid'];
}
?>
<!-- end header -->
<section class="page-header">
	<div class="container">
		 <ol class="breadcrumb">
			<li class="breadcrumb-item"><a href="#">Home</a></li>
			<li class="breadcrumb-item active" aria-current="page">Article-Details</li>
		  </ol>
		  <h2>Article Details</h2>
	</div>
	<!-- end container -->
</section>
<!-- end page-header -->
  <section class="blog">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-7 col-12">
         <div class="post no-margin">
          <?php $blog = viewBlog($conn, $hid); extract($blog); ?>
         	<figure class="post-image"> <img src=<?php echo $image_1 ?> alt="Image"></figure>
         	<div class="post-content">
          <h4><?php echo $title; ?></h4>
          <small><b>By</b> <?php echo $author."  <b>| Published On</b> ".$date_created; ?></small>
          <ul class="social-share">
			<li class="facebook"><a href="#"><i class="fa fa-facebook"></i></a></li>
			<li class="twitter"><a href="#"><i class="fa fa-twitter"></i></a></li>
			<li class="google-plus"><a href="#"><i class="fa fa-google-plus"></i></a></li>
			<li class="linkedin"><a href="#"><i class="fa fa-linkedin"></i></a></li>
			<li class="youtube"><a href="#"><i class="fa fa-youtube-play"></i></a></li>
		  </ul>
          <p><?php echo $body; ?> </p>
         	</div>
         	<!-- end post-content -->
         </div>
         <!-- end post -->
        </div>
        <!-- end col-7 -->
        <div class="col-md-5 col-12">
          <aside class="sidebar">
            <!-- end widget -->
            <div class="widget tags">
              <h4 class="widget-title">Popular Tags</h4>
              <ul>
            <?php $category = getCat($conn); 
                foreach ($category as $key => $categories) {
                extract($categories);
              ?>
              <li><a <?php echo 'href=blog?hid='.$hash_id.''; ?>><?php echo $category_name; ?></a></li>
            <?php } ?>
              </ul>
              </div>
              <div class="widget tags">
              <h4 class="widget-title">Upcoming Event</h4>
              <ul>
                <li><img src="images/news01.jpg" alt="Image"></li>
                <span>Event Name</span>
                <span> Date</span>
                <span> Venue</span>              
              </ul>
              </div>
              <div class="widget tags">
              <h4 class="widget-title">Upcoming Traning</h4>
              <ul>
                <li><img src="images/news01.jpg" alt="Image"></li>
                <span>Training Name</span>
                <span> Date</span>
                <span> Venue</span>              
              </ul>
              </div> 
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
  <section class="latest-news">
  <div class="container">
    <div class="row">
      <div class="col-12 wow fadeIn">
        <div class="section-title">
          <h2>Similar Articles</h2>
          <h6>You can read other articles on this category</h6>
        </div>
        <!-- end section-title --> 
      </div>
      <!-- end col-12 -->
  
      <div class="col-12">
            <?php $blogs = Catblog($conn, $category_id); 
        foreach ($blogs as $key => $blog) {
          extract($blog);
            $bd = previewBody($body, 10); 
          ?>
        <div class="content-box wow fadeIn">  <div style="background:url(<?php echo $image_1; ?>); height:30vh; width: 50vh; background-size: cover; background-position: center; background-repeat: no-repeat;" class="img-responsive"></div>
          <h4>How to develope item for themeforest</h4>
          <small>February 21,2018</small>
          <p>Stop wasting time and money on technology</p>
           <a <?php echo 'href=blog-details?hid='.$hash_id.'';?>><img src="images/icon-right-arrow.svg" alt="Image"></a> </div>
          <?php } ?>
        <!-- end content-box -->
      </div>
      <!-- end col-12 --> 
    </div>
    <!-- end row --> 
  </div>
  <!-- end container --> 
</section>
  
<?php 
  include "includes/footer.php"; 
 ?>
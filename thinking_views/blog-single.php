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
          <?php   $SDate = decodeDate($date_created); ?>
          <small><b>By</b> <?php echo $author."  <b>| Published On</b> ".$SDate ?></small>
          <ul class="social-share">
			<li class="facebook"><a href="#"><i class="fa fa-facebook"></i></a></li>
			<li class="twitter"><a href="#"><i class="fa fa-twitter"></i></a></li>
<!-- 			<li class="google-plus"><a href="#"><i class="fa fa-google-plus"></i></a></li> -->
			<li class="linkedin"><a href="#"><i class="fa fa-linkedin"></i></a></li>
<!-- 			<li class="youtube"><a href="#"><i class="fa fa-youtube-play"></i></a></li> -->
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
              <h4 class="widget-title">Latest Event</h4>
              <ul>
                <?php $event =  getLatestEvent($conn);  extract($event)?>
                <a <?php echo 'href=events-details?hid='.$hash_id.'' ?>>
                <li><img src=<?php echo $image_1; ?> alt="Image"></li>
                <?php   $EDate2 = decodePartDate($end_date);
                  $SDate2 = decodePartDate($start_date);
                  $SDate = decodeDate($start_date);
                  $EDate = decodeDate($end_date); ?>
                <span> <?php echo $event_name; ?></span><br/>
                <span><b>Date:</b>   <?php if($start_date == $end_date){
                    echo $SDate;
                  }elseif($SDate2['month'] == $EDate2['month']){
                      echo $SDate2['month']." ".$SDate2['day']." - ". $EDate2['day'].", ".$SDate2['year'];
                  }elseif($SDate2['month'] !== $EDate2['month']){
                      echo $SDate2['month']." ".$SDate2['day']." - ".$EDate2['month']." ".$EDate2['day'].", ".$SDate2['year'];
                  }else{
                      echo $SDate ." - ".$EDate ;
                  } ?></span><br/>
                <span><b>Venue:</b> <?php echo $venue; ?></span> <br/>
                </a>
              </ul>
              </div>
              <div class="widget tags">
              <h4 class="widget-title">Latest Traning</h4>
              <ul>
                <?php $training =  getLatestTraining($conn);  extract($training)?>
                <?php   $EDate2 = decodePartDate($end_date);
                  $SDate2 = decodePartDate($start_date);
                  $SDate = decodeDate($start_date);
                  $EDate = decodeDate($end_date); ?>
                <a <?php echo 'href=training-details?hid='.$hash_id.'' ?>>
                <li><img src=<?php echo $image_1; ?> alt="Image"></li>
                <span> <?php echo $name; ?></span><br/>
                <span><b>Date:</b>  <?php if($start_date == $end_date){
                    echo $SDate;
                  }elseif($SDate2['month'] == $EDate2['month']){
                      echo $SDate2['month']." ".$SDate2['day']." - ". $EDate2['day'].", ".$SDate2['year'];
                  }elseif($SDate2['month'] !== $EDate2['month']){
                      echo $SDate2['month']." ".$SDate2['day']." - ".$EDate2['month']." ".$EDate2['day'].", ".$SDate2['year'];
                  }else{
                      echo $SDate ." - ".$EDate ;
                  } ?></span><br/>
                <span><b>Venue:</b> <?php echo $venue; ?></span> <br/>
                </a>
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
        <div class="content-box wow fadeIn">             <div style= "border-radius: 100px; padding: 0px; background:url(<?php echo $image_1; ?>); height:30vh; width: 30vh; background-size: cover; background-position: center; background-repeat: no-repeat;" class="img-responsive"></div>
          <h4><?php echo $title; ?></h4>
          <small><?php echo date("d, F, Y", strtotime($date_created)); ?></small>
          <p><?php echo $bd; ?></p>
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

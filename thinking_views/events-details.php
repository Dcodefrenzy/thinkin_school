<?php
ob_start();
include "includes/header.php";
if (isset($_GET['hid'])) {
  $hash = $_GET['hid'];
}else{
  header("Location: events");
}
 $event = getOneEvent($conn, $hash);
extract($event);
$EDate2 = decodePartDate($end_date);
$SDate2 = decodePartDate($start_date);
$SDate = decodeDate($start_date);
$EDate = decodeDate($end_date);
 ?>
<!-- end header -->
<section class="page-header">
	<div class="container">
		 <ol class="breadcrumb">
			<li class="breadcrumb-item"><a href="#">Home</a></li>
			<li class="breadcrumb-item"><a href="#">Events</a></li>
			<li class="breadcrumb-item active" aria-current="page">Event Details</li>
		  </ol>
		  <h2>EVENT</h2>
		 
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
          <h4><?php echo $event_name; ?></h4>
          <span><?php echo "<b>Event Status:</b>".$status; ?></span>
          <small><?php echo "<b>Location:</b> ".$venue; ?></small>
          <small><?php if($start_date == $end_date){
              echo $SDate;
            }elseif($SDate2['month'] == $EDate2['month']){
                echo $SDate2['month']." ".$SDate2['day']." - ". $EDate2['day'].", ".$SDate2['year'];
            }elseif($SDate2['month'] !== $EDate2['month']){
                echo $SDate2['month']." ".$SDate2['day']." - ".$EDate2['month']." ".$EDate2['day'].", ".$SDate2['year'];
            }else{
                echo $SDate ." - ".$EDate ;
            } ?></small>
          <small><?php echo "<b>Time:</b> ".$event_time; ?></small>
          <p><?php echo $description; ?></p>
                   <div class="form-group col-md-4">
            <label>&nbsp;</label>
             <a <?php echo 'href=book?hid='.$hash_id.'&&t=event';?>>
            <input type="submit" value="Book Event" name="submit">
            </a>
          </div>
<!--           <a href="news-single.html"><img src="images/icon-right-arrow.svg" alt="Image"></a> -->
         	</div>
         	<!-- end post-content -->
         </div>
         <!-- end post -->
         <!--  <div class="post wow fadeIn">
         	<figure class="post-image"> <img src="images/news02.jpg" alt="Image"></figure>
         	<div class="post-content">
         		<span>Business, Tips, Account</span>
          <h4>How to develope item for themeforest</h4>
          <small>February 21,2018</small>
          <p>Legally recognized as the only person who is authorized to copy their work, or grant permission to others who want to copy it for various purposes. In any case, the legal side of copyrights can be complex,</p>
          <a href="news-single.html"><img src="images/icon-right-arrow.svg" alt="Image"></a>
         	</div> -->
         	<!-- end post-content -->
         <!-- </div> -->
         <!-- end post -->
          <!-- <div class="post wow fadeIn">
         	<figure class="post-image"> <img src="images/news03.jpg" alt="Image"></figure>
         	<div class="post-content">
         		<span>Business, Tips, Account</span>
          <h4>How to develope item for themeforest</h4>
          <small>February 21,2018</small>
          <p>Legally recognized as the only person who is authorized to copy their work, or grant permission to others who want to copy it for various purposes. In any case, the legal side of copyrights can be complex,</p>
          <a href="news-single.html"><img src="images/icon-right-arrow.svg" alt="Image"></a>
         	</div> -->
         	<!-- end post-content -->
         <!-- </div> -->
         <!-- end post -->
          <!-- <div class="post wow fadeIn">
         	<figure class="post-image"> <img src="images/news04.jpg" alt="Image"></figure>
         	<div class="post-content">
         		<span>Business, Tips, Account</span>
          <h4>How to develope item for themeforest</h4>
          <small>February 21,2018</small>
          <p>Legally recognized as the only person who is authorized to copy their work, or grant permission to others who want to copy it for various purposes. In any case, the legal side of copyrights can be complex,</p>
          <a href="news-single.html"><img src="images/icon-right-arrow.svg" alt="Image"></a>
         	</div> -->
         	<!-- end post-content -->
         <!-- </div> -->
         <!-- end post -->
          <!-- <div class="post wow fadeIn">
         	<figure class="post-image"> <img src="images/news05.jpg" alt="Image"></figure>
         	<div class="post-content">
         		<span>Business, Tips, Account</span>
          <h4>How to develope item for themeforest</h4>
          <small>February 21,2018</small>
          <p>Legally recognized as the only person who is authorized to copy their work, or grant permission to others who want to copy it for various purposes. In any case, the legal side of copyrights can be complex,</p>
          <a href="news-single.html"><img src="images/icon-right-arrow.svg" alt="Image"></a>
         	</div> -->
         	<!-- end post-content -->
        <!--  </div> -->
         <!-- end post -->
<!--           <ul class="pagination wow fadeIn">
    <li class="page-item">
      <a class="page-link" href="#" tabindex="-1">PREV</a>
    </li>
    <li class="page-item">
      <a class="page-link" href="#">NEXT</a>
    </li>
  </ul> -->
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

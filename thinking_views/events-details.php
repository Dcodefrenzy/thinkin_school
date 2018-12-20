<?php 
include "includes/header.php";
if (isset($_GET['hid'])) {
  $hash = $_GET['hid'];
}else{
  header("Location: events");
}
 $event = getOneEvent($conn, $hash);
extract($event);
 ?>
<!-- end header -->
<section class="page-header">
	<div class="container">
		 <ol class="breadcrumb">
			<li class="breadcrumb-item"><a href="#">Home</a></li>
			<li class="breadcrumb-item"><a href="#">Events</a></li>
			<li class="breadcrumb-item active" aria-current="page">Event Details</li>
		  </ol>
		  <h2>Event</h2>
		  <p>As the person who owns the legal rights to intellectual property, an author.</p>
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
          <h4><?php echo $event_name; ?></h4>
          <span><?php echo "<b>Event Status:</b>".$status; ?></span>
          <small><?php echo "<b>Location:</b> ".$venue; ?></small>
          <small><?php echo $start_date." <b>-</b> ".$end_date; ?></small>
          <small><?php echo "<b>Time:</b> ".$event_time; ?></small>
          <p><?php echo $description; ?></p>
                   <div class="form-group col-md-4">
            <label>&nbsp;</label>
             <a <?php echo 'href=book-event?hid='.$hash_id.'&&t=event';?>>
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
          <ul class="pagination wow fadeIn">
    <li class="page-item">
      <a class="page-link" href="#" tabindex="-1">PREV</a>
    </li>
    <li class="page-item">
      <a class="page-link" href="#">NEXT</a>
    </li>
  </ul>
        </div>
        <!-- end col-7 -->
        <div class="col-md-5 col-12">
          <aside class="sidebar">
            <div class="widget categories wow fadeIn">
              <h4 class="widget-title">Categories</h4>
              <ul>
                <li class="active"><a href="#">BUSINESS</a></li>
                <li><a href="#">INVESTMENT</a></li>
                <li><a href="#">ACCOUNTING</a></li>
                <li><a href="#">SERVICES</a></li>
                <li><a href="#">TAXES & TERMS</a></li>
              </ul>
              <!-- end side-menu --> 
            </div>
            <!-- end widget -->
            <div class="widget tags wow fadeIn">
              <h4 class="widget-title">Popular Tags</h4>
              <ul>
                <li><a href="#">Money</a></li>
                <li><a href="#">Investments</a></li>
                <li><a href="#">Business</a></li>
                <li><a href="#">Stocks</a></li>
                <li><a href="#">Idea</a></li>
                <li><a href="#">Employee</a></li>
                <li><a href="#">Solutions</a></li>
                <li><a href="#">Team</a></li>
                <li><a href="#">General</a></li>
                <li><a href="#">Taxes</a></li>
                <li><a href="#">Profite</a></li>
                <li><a href="#">Industry</a></li>
              </ul>
            </div>
            <!-- end widget -->
            <div class="widget gallery wow fadeIn">
              <h4 class="widget-title">Gallery</h4>
              <ul>
                <li><a href="images/image04.jpg" data-fancybox="gallery"><img src="images/image04.jpg" alt="Image"></a></li>
                <li><a href="images/image05.jpg" data-fancybox="gallery"><img src="images/image05.jpg" alt="Image"></a></li>
                <li><a href="images/image06.jpg" data-fancybox="gallery"><img src="images/image06.jpg" alt="Image"></a></li>
                <li><a href="images/image07.jpg" data-fancybox="gallery"><img src="images/image07.jpg" alt="Image"></a></li>
                <li><a href="images/image08.jpg" data-fancybox="gallery"><img src="images/image08.jpg" alt="Image"></a></li>
                <li><a href="images/image09.jpg" data-fancybox="gallery"><img src="images/image09.jpg" alt="Image"></a></li>
              </ul>
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
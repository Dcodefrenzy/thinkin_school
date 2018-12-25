<?php include "includes/header.php"; 
   $record_per_page = 2;
     $page = "";
  if(isset($_GET['page'])){
  $page = $_GET['page'];
  }else{
  $page = 1;
  }
    $start_from = ($page-1)*$record_per_page;

  if (isset($_GET['hid'])) {
    $hid = $_GET['hid'];
    $blogs =  blogs($conn, $hid, $start_from, $record_per_page);
    $total_record = getTotalRecordForCatBlog($conn, $hid,  $record_per_page);
  }else{
    $blogs = allBlogs($conn, $start_from, $record_per_page);
       $total_record  = getTotalRecordBlog($conn, $record_per_page);
  }

      if($page > 1){
      $prev = $page - 1;
    }else{
      $prev = 1;
    }
    if($total_record > 1 &&  $page != $total_record){
      $next = $page + 1;
    }
    else{
      $next = $total_record;
    }


?>
<!-- end header -->
<section class="page-header">
	<div class="container">
		 <ol class="breadcrumb">
			<li class="breadcrumb-item"><a href="index">Home</a></li>
			<li class="breadcrumb-item active" aria-current="page">Articles</li>
		  </ol>
		  <h2>ARTICLES</h2>
		  <p>Text Here.</p>
	</div>
	<!-- end container -->
</section>
<!-- end page-header -->
  <section class="blog">
    <div class="container">
      <div class="row justify-content-center">
       <div class="col-md-5 col-12">
          <aside class="sidebar pull-left">
            <div class="widget categories wow fadeIn">
              <h4 class="widget-title">Categories</h4>
              <ul>
             <?php $category = getCat($conn); 
                foreach ($category as $key => $categories) {
                extract($categories);
              ?>
              <li><a <?php echo 'href=blog?hid='.$hash_id.''; ?>><?php echo $category_name; ?></a></li>
            <?php } ?>
              </ul>
              <!-- end side-menu --> 
            </div>
            <!-- end widget -->
            <div class="widget tags wow fadeIn">
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

            <!-- end widget -->
<!--             <div class="widget gallery wow fadeIn">
              <h4 class="widget-title">Gallery</h4>
              <ul>
                <li><a href="images/image04.jpg" data-fancybox="gallery"><img src="images/image04.jpg" alt="Image"></a></li>
                <li><a href="images/image05.jpg" data-fancybox="gallery"><img src="images/image05.jpg" alt="Image"></a></li>
                <li><a href="images/image06.jpg" data-fancybox="gallery"><img src="images/image06.jpg" alt="Image"></a></li>
                <li><a href="images/image07.jpg" data-fancybox="gallery"><img src="images/image07.jpg" alt="Image"></a></li>
                <li><a href="images/image08.jpg" data-fancybox="gallery"><img src="images/image08.jpg" alt="Image"></a></li>
                <li><a href="images/image09.jpg" data-fancybox="gallery"><img src="images/image09.jpg" alt="Image"></a></li>
              </ul> -->
              <!-- end gallery --> 
           <!--  </div> -->
            <!-- end widget -->
     <!--        <div class="widget download-box wow fadeIn">
              <i class="fa fa-file-image-o"></i> <a href="#">DOWNLOAD</a> <small>DIGITAL BROCHURE</small> 
            </div> -->
            <!-- end widget --> 
          </aside>
          <!-- end side-bar --> 
        </div>
        <!-- end col-5 --> 
        <div class="col-md-7 col-12">
          <?php 
            foreach ($blogs as $key => $blog) {
              extract($blog);
              $bd = previewBody($body, 20);
              
           ?>
         <div class="post wow fadeIn">
          <div style="background:url(<?php echo $image_1; ?>); height:50vh; width: 80vh; background-size: cover; background-position: center; background-repeat: no-repeat;" class="img-responsive"></div>
        
         
          <div class="post-content">
        <h4><?php echo $title; ?></h4>
          <small>Written By <?php echo $author.",  Published On ".$date_created; ?></small>
          <p><?php echo $bd; ?></p>
          <a <?php echo 'href=blog-details?hid='.$hash_id.'';?>><img src="images/icon-right-arrow.svg" alt="Image"></a>
         	</div>
         	<!-- end post-content -->
         </div>
       <?php } ?>
         <!-- end post -->
<!--           <div class="post wow fadeIn">
         	<figure class="post-image"> <img src="images/news02.jpg" alt="Image"></figure>
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
<!--           <div class="post wow fadeIn">
         	<figure class="post-image"> <img src="images/news03.jpg" alt="Image"></figure>
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
<!--           <div class="post wow fadeIn">
         	<figure class="post-image"> <img src="images/news04.jpg" alt="Image"></figure>
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
<!--           <div class="post wow fadeIn">
         	<figure class="post-image"> <img src="images/news05.jpg" alt="Image"></figure>
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
          <ul class="pagination wow fadeIn">
            <?php if (isset($_GET['hid'])) {
              $hid = $_GET['hid'];
             ?>
    <li class="page-item">
      <a class="page-link" <?php echo 'href=blogs?page='.$prev.'&hid='.$hid.''; ?> tabindex="-1">PREV</a>
    </li>
    <li class="page-item">
      <a class="page-link" <?php echo 'href=blogs?page='.$next.'&hid='.$hid.''; ?>>NEXT</a>
    </li>
  <?php }else{ ?>
        <li class="page-item">
      <a class="page-link" <?php echo 'href=blogs?page='.$prev.''; ?> tabindex="-1">PREV</a>
    </li>
    <li class="page-item">
      <a class="page-link" <?php echo 'href=blogs?page='.$next.''; ?>>NEXT</a>
    </li>
  <?php } ?>
  </ul>
        </div>
        <!-- end col-7 -->
      </div>
      <!-- end row --> 
    </div>
    <!-- end container --> 
  </section>
  <!-- end blog --> 
<?php include "includes/footer.php"; ?>
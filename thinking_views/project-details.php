<?php
  include "includes/header.php";
  if (isset($_GET['hid'])) {
      $hid = $_GET['hid'];
  }
 $project = getOneProject($conn,$hid);
 extract($project);
 ?>
<!-- end header -->
<section class="page-header">
	<div class="container">
		 <ol class="breadcrumb">
			<li class="breadcrumb-item"><a href="#">Home</a></li>
<!-- 			<li class="breadcrumb-item"><a href="#">Project</a></li> -->
			<li class="breadcrumb-item active" aria-current="page">Project</li>
		  </ol>
		  <h2>Project</h2>
<!-- 		  <p>As the person who owns the legal rights to intellectual property, an author.</p> -->
	</div>
	<!-- end container -->
</section>
<!-- end page-header -->
  <section class="blog">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-8 col-12">
         <div class="post no-margin">
         	<figure class="post-image">
            <div style="background:url(<?php echo $image_1; ?>); height:50vh; width: 80vh; background-size: cover;; background-position: center; background-repeat: no-repeat;" class="img-responsive"></div></figure>
         	<div class="post-content">
  <?php   $SDate = decodeDate($date_created); ?>
          <h4><?php echo $project_name; ?></h4>
          <small><?php echo $SDate ?></small>
          <small><?php echo $project_location; ?></small>
          <ul class="social-share">
			<li class="facebook"><a href="#"><i class="fa fa-facebook"></i></a></li>
			<li class="twitter"><a href="#"><i class="fa fa-twitter"></i></a></li>
<!-- 			<li class="google-plus"><a href="#"><i class="fa fa-google-plus"></i></a></li> -->
			<li class="linkedin"><a href="#"><i class="fa fa-linkedin"></i></a></li>
<!-- 			<li class="youtube"><a href="#"><i class="fa fa-youtube-play"></i></a></li> -->
		  </ul>
          <p><?php echo $about; ?></p>
      <!--         <p> Anyone carrying on an activity that earns them a profit is doing <u>business or running a business</u>, and perhaps this is why there is a misconception that business and company is the same thing.<br>
                A business name structure does not separate the business entity from the owner, which means that the owner of the business is responsible and liable for all debts incurred by the business. If the business acquires debts[,] the creditor or creditors can go after your personal possessions. A business structure does not allow for corporate tax rates. The proprietor is personally taxed on all income from the business.</p>
              <p> A company on the other hand, is a separate legal entity and provides for limited liability as well as corporate tax rates. A company structure is more complicated and expensive to set up, but offers more protection and benefits for the owner.</p>
              <blockquote>
                <p>Weighing in at a whopping 3310g and measuring 38cm in length, the Sigma 500mm f/4 DG OS HSM Sports is an incredibly big and heavy lens indeed, although that does include the non-removable tripod collar.</p>
                <h5>Jack Daniel's</h5>
              </blockquote>
              <p> Corporation: The owners of a corporation have limited liability and the business has a separate legal personality from its owners. Corporations can be either government-owned or privately owned. They can organize either for profit or as nonprofit organizations. A privately owned, for-profit corporation is owned by its shareholders, who elect a board of directors to direct the corporation and hire its managerial staff. A privately owned, for-profit corporation can be either privately held by a small group of individuals, or publicly held, with publicly traded shares listed on a stock exchange.</p>
              <h5>A privately owned</h5>
              <ul>
                <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit</li>
                <li>Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</li>
                <li>Faucibus turpis in eu mi bibendum neque.</li>
                <li>Neque aliquam vestibulum morbi blandit cursus.</li>
                <li>Enim nulla aliquet porttitor lacus.</li>
              </ul>
              <p> Cooperative: Often referred to as a "co-op", a cooperative is a limited-liability business that can organize as for-profit or not-for-profit. A cooperative differs from a corporation in that it has members, not shareholders, and they share decision-making authority. Cooperatives are typically classified as either consumer cooperatives or worker cooperatives. Cooperatives are fundamental to the ideology of economic democracy. </p> -->
         	</div>
         	<!-- end post-content -->
         </div>
         <!-- end post -->
        </div>
        <!-- end col-8 -->
      </div>
      <!-- end row -->
    </div>
    <!-- end container -->
  </section>
  <!-- end blog -->
  <section class="image-content-over-box">
  <div class="container">
    <div class="row">
      <div class="col-lg-4">
        <div class="section-title wow fadeIn">
          <h2>Other Projects</h2>
          <h6>You will likely need proof to show your insurance company</h6>
        </div>
        <!-- end section-title -->
      </div>
      <!-- end col-3 -->
      <div class="col-lg-8">
        <div class="swiper-carousel wow fadeIn">
          <div class="swiper-wrapper">
       <?php  $projects = getProjects($conn, 0, 5); ?>
        <?php foreach ($projects as $key => $project) {
            extract($project);
            $bd = previewBody($about, 5);

          ?>
            <div class="swiper-slide">
              <a <?php echo 'href=project?hid='.$hash_id.'';?>>
              <figure>
                <div style="background:url(<?php echo $image_1; ?>); height:50vh; width: 450px; background-size: cover;; background-position: center; background-repeat: no-repeat;" class="img-responsive"></div>
                <figcaption>
                  <h4><?php echo $project_name; ?></h4>
                  <small><?php echo $bd; ?></small> </figcaption>
              </figure>
            </a>
            </div>
          <?php } ?>
            <!-- end swiper-slide -->
           <!--  <div class="swiper-slide">
              <figure> <img src="images/image05.jpg" alt="Image">
                <figcaption>
                  <h4>Provide Inc</h4>
                  <small>Development Constultation</small> </figcaption>
              </figure>
            </div> -->
            <!-- end swiper-slide -->
            <!-- <div class="swiper-slide">
              <figure> <img src="images/image06.jpg" alt="Image">
                <figcaption>
                  <h4>Photos Inc</h4>
                  <small>Training Constultation</small> </figcaption>
              </figure>
            </div> -->
            <!-- end swiper-slide -->
            <!-- <div class="swiper-slide">
              <figure> <img src="images/image07.jpg" alt="Image">
                <figcaption>
                  <h4>Admit Inc</h4>
                  <small>Accounting Constultation</small> </figcaption>
              </figure>
            </div> -->
            <!-- end swiper-slide -->
<!--             <div class="swiper-slide">
              <figure> <img src="images/image08.jpg" alt="Image">
                <figcaption>
                  <h4>Clearance Inc</h4>
                  <small>Motivation Constultation</small> </figcaption>
              </figure>
            </div> -->
            <!-- end swiper-slide -->
           <!--  <div class="swiper-slide">
              <figure> <img src="images/image09.jpg" alt="Image">
                <figcaption>
                  <h4>Damages Inc</h4>
                  <small>Business Constultation</small> </figcaption>
              </figure>
            </div> -->
            <!-- end swiper-slide -->
          </div>
          <!--end swiper-wrapper -->
          <div class="swiper-button-next"><img src="images/icon-right-arrow.svg" alt="Image"></div>
          <div class="swiper-button-prev"><img src="images/icon-right-arrow.svg" alt="Image"></div>
        </div>
        <!-- end swiper-carousel -->
      </div>
      <!-- end col-6 -->
    </div>
  </div>
  <!-- end container -->
</section>
<!-- end image-content-over-box -->
<?php
  include "includes/footer.php";
 ?>

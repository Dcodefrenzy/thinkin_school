<?php 
include "includes/header.php";
$about = getAboutUS($conn); extract($about);
?>
<section class="slider">
  <div class="swiper-container">
    <div class="swiper-wrapper">
      <div class="swiper-slide">
        <div class="slide-inner bg-image" data-background="images/slide01.jpg" data-text="HOW WE CREATE<span>VEHICLES</span>">
          <div class="container">
            <h6 data-swiper-parallax="100">roadway</h6>
            <h2 data-swiper-parallax="200"><span>.</span>vehicles inc</h2>
            <p data-swiper-parallax="300">Getting into a fender-bender or a more serious accident is already stressful. You might be worried about someone being injured, damage to vehicles.</p>
            <div class="clearfix"></div>
            <a href="#" data-swiper-parallax="200">Discover More<span></span></a> </div>
          <!-- end container --> 
        </div>
        <!-- end slide-inner --> 
      </div>
      <!-- end swiper-slide -->
      <div class="swiper-slide">
        <div class="slide-inner bg-image" data-background="images/slide02.jpg" data-text="CYBERSPACE TECH<span>EQUIPMENTS</span>">
          <div class="container">
            <h6 data-swiper-parallax="100">spaceship</h6>
            <h2 data-swiper-parallax="200"><span>.</span>technology inc</h2>
            <p data-swiper-parallax="300">With all the inconvenience associated with it, and, of course, insurance rates going up. With all these things going through your mind after an accident.</p>
            <div class="clearfix"></div>
            <a href="#" data-swiper-parallax="200">Discover More<span></span></a> </div>
          <!-- end container --> 
        </div>
        <!-- end slide-inner --> 
      </div>
      <!-- end swiper-slide -->
      <div class="swiper-slide">
        <div class="slide-inner bg-image" data-background="images/slide03.jpg" data-text="SOFTWARE APPS<span>DEVELOPMENT</span>">
          <div class="container">
            <h6 data-swiper-parallax="100">mouroao</h6>
            <h2 data-swiper-parallax="200"><span>.</span>excoding inc</h2>
            <p data-swiper-parallax="300">It can be challenging to get everything in order. You can take several steps to ensure safety and reduce your potential losses after an accident.</p>
            <div class="clearfix"></div>
            <a href="#" data-swiper-parallax="200">Discover More<span></span></a> </div>
          <!-- end container --> 
        </div>
        <!-- end slide-inner --> 
      </div>
      <!-- end swiper-slide --> 
    </div>
    <!-- end swiper-wrapper -->
    <div class="swiper-custom-pagination"></div>
    <!-- end swiper-custom-pagination --> 
  </div>
  <!-- end swiper-container --> 
</section>
<!-- end slider -->
<section class="featured-services">
  <div class="content-wrapper">
    <div class="container">
      <?php $services = getHomeServices($conn); 
        foreach ($services as $key => $service) {
            extract($service);  
            $bd = previewBody($body, 5);     
       ?>
      <div class="content-box wow fadeIn"> <span></span>
        <h3><?php echo $title; ?></h3>
        <p>The only time you should move your vehicles after you get in a wreck is if not doing </p>
        <a <?php echo 'href=service?hid='.$hash_id.''; ?>><img src="images/icon-right-arrow.svg" alt="Image"></a> </div>
      <!-- end content-box -->
<!--       <div class="content-box wow fadeIn"> <span></span>
        <h3>power industry</h3>
        <p>The reason you want your cars to remain where they are as closely as possible</p>
        <a href="#"><img src="images/icon-right-arrow.svg" alt="Image"></a> </div> -->
      <!-- end content-box -->
<!--       <div class="content-box wow fadeIn"> <span></span>
        <h3>tech solutions</h3>
        <p>Allowing word-of-mouth reporting from the other driver may not be the best idea</p>
        <a href="#"><img src="images/icon-right-arrow.svg" alt="Image"></a> </div> -->
      <!-- end content-box --> 
      <?php } ?>
    </div>
    <!-- end container --> 
  </div>
  <!-- end content-wrapper -->
<!--   <div class="logos wow fadeIn">
    <div class="container">
      <ul>
        <li><img src="images/logo01.png" alt="Image"></li>
        <li><img src="images/logo02.png" alt="Image"></li>
        <li><img src="images/logo03.png" alt="Image"></li>
        <li><img src="images/logo04.png" alt="Image"></li>
        <li><img src="images/logo05.png" alt="Image"></li>
        <li><img src="images/logo06.png" alt="Image"></li>
        <li><img src="images/logo07.png" alt="Image"></li>
        <li><img src="images/logo08.png" alt="Image"></li>
      </ul>
    </div> -->
    <!-- end container --> 
  <!-- </div> -->
  <!-- end logos --> 
</section>
<!-- end featured-services -->
<section class="image-content-box">
  <div class="container">
    <div class="row">
      <div class="col-12 wow fadeIn">
        <div class="section-title">
          <h2>development</h2>
          <h6>Because they may falsely report what happened wither<br> knowingly or simply due to confusion</h6>
        </div>
        <!-- end section-title --> 
      </div>
      <!-- end col-12 -->
      <div class="col-12">
        <div class="content-box wow fadeIn">
          <figure><img src="images/image01.jpg" alt="Image"></figure>
          <h4>Special Collabration</h4>
          <p>If you have road flares, emergency cones, or anything of the sorter.</p>
        </div>
        <!-- end content-box -->
        <div class="content-box wow fadeIn">
          <figure><img src="images/image02.jpg" alt="Image"></figure>
          <h4>Supportive Speaches</h4>
          <p>Place them at least fifty feet back from the scene of the accident all.</p>
        </div>
        <!-- end content-box -->
        <div class="content-box wow fadeIn">
          <figure><img src="images/image03.jpg" alt="Image"></figure>
          <h4>Motivation Mettings</h4>
          <p>Vehicles a full warning that something has happened and they need to.</p>
        </div>
        <!-- end content-box --> 
      </div>
      <!-- end col-12 --> 
    </div>
    <!-- end row --> 
  </div>
  <!-- end container --> 
</section>
<!-- end image-content-box -->
<section class="side-image-content moved-space" id="counter">
  <div class="sides bg-image wow fadeIn" data-background="images/side-image01.jpg">
    <div class="video">
      <video src="videos/video.mp4" loop autoplay muted></video>
    </div>
    <!-- end video --> 
    <a href="videos/video.mp4" class="play-btn" data-fancybox>
    <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
     viewBox="0 0 104 104" enable-background="new 0 0 104 104" xml:space="preserve">
      <path fill="none" stroke="#FFFFFF" stroke-width="5" stroke-miterlimit="10" d="M26,35h52L52,81L26,35z"/>
      <circle class="video-play-circle" fill="none" stroke="#fff" stroke-width="5" stroke-miterlimit="10" cx="52" cy="52" r="50"/>
    </svg>
    <span class="video-play-outline"></span> </a> </div>
  <!-- end sides -->
  <div class="sides bg-color wow fadeIn" data-background="#405089">
    <div class="inner">
      <div class="section-title light">
        <h2>introduction</h2>
        <!-- <h6>Do this for both directions of traffic if it’s<br> necessary. In busy traffic, this</h6> -->
      </div>
      <!-- end section-title -->
<!--       <ul class="counter">
        <li> <span class="odometer" id="1"></span><span class="symbol">+</span> <small>Underestate</small> </li>
        <li> <span class="odometer" id="2"></span><span class="symbol">k</span> <small>Underestate</small> </li>
        <li> <span class="odometer" id="3"></span><span class="symbol">%</span> <small>Underestate</small> </li>
      </ul> -->
      <p><?php echo $body; ?></p>
<!--       <p>Take advantage of the <u>software</u> that can help turn your blogs into tweets and know when the best time of day is to connect with your base.</p> -->
      <img src="images/testimonial-name.png" alt="Image"> </div>
    <!-- end inner --> 
  </div>
  <!-- end sides --> 
</section>
<!-- end side-image-content -->
<section class="icon-content-box">
  <div class="container">
    <div class="row">
      <div class="col-12 wow fadeIn">
        <div class="section-title">
          <h2>CORE VALUES</h2>
          <h6>You should at least attempt to protect the<br> accident scene however you can.</h6>
        </div>
        <!-- end section-title --> 
      </div>
      <!-- end col-12 -->
      
      <div class="col-12">
        <div class="content-box wow fadeIn">
          <div class="flip-box" data-flip-direction="horizontal-to-left" data-h_text_align="left" data-v_text_align="center">
            <div class="flip-box-front" data-bg-overlay="true" data-text-color="light">
              <div class="inner"> <span>01</span>
                <h4>analyses</h4>
                <figure> <img src="images/icon01.png" alt="Image"> </figure>
              </div>
              <!-- end inner --> 
            </div>
            <!-- end flip-box-front -->
            <div class="flip-box-back">
              <div class="inner">
                  <h4>analyses</h4>
                  <p>Instead of giving up immediately, go back to the drawing doesn't something need.</p>
              </div>
              <!-- end inner --> 
            </div>
            <!-- end end flip-box-back --> 
          </div>
          <!-- end flip-box --> 
        </div>
        <!-- end content-box -->
        <div class="content-box wow fadeIn">
     <div class="flip-box" data-flip-direction="horizontal-to-left" data-h_text_align="left" data-v_text_align="center">
            <div class="flip-box-front" data-bg-overlay="true" data-text-color="light">
              <div class="inner"> <span>02</span>
                <h4>marketting</h4>
                <figure> <img src="images/icon02.png" alt="Image"> </figure>
              </div>
              <!-- end inner --> 
            </div>
            <!-- end flip-box-front -->
            <div class="flip-box-back">
              <div class="inner">
                  <h4>marketting</h4>
                  <p>Instead of giving up immediately, go back to the drawing doesn't something need.</p>
              </div>
              <!-- end inner --> 
            </div>
            <!-- end end flip-box-back --> 
          </div>
          <!-- end flip-box -->   
       </div>
        <!-- end content-box -->
        <div class="content-box wow fadeIn"> 
      <div class="flip-box" data-flip-direction="horizontal-to-left" data-h_text_align="left" data-v_text_align="center">
            <div class="flip-box-front" data-bg-overlay="true" data-text-color="light">
              <div class="inner"> <span>03</span>
                <h4>presentation</h4>
                <figure> <img src="images/icon03.png" alt="Image"> </figure>
              </div>
              <!-- end inner --> 
            </div>
            <!-- end flip-box-front -->
            <div class="flip-box-back">
              <div class="inner">
                  <h4>presentation</h4>
                  <p>Instead of giving up immediately, go back to the drawing doesn't something need.</p>
              </div>
              <!-- end inner --> 
            </div>
            <!-- end end flip-box-back --> 
          </div>
          <!-- end flip-box --> 
          </div>
        <!-- end content-box -->
        <div class="content-box wow fadeIn"> 
      <div class="flip-box" data-flip-direction="horizontal-to-left" data-h_text_align="left" data-v_text_align="center">
            <div class="flip-box-front" data-bg-overlay="true" data-text-color="light">
              <div class="inner"> 
                <h4>investment</h4>
                <figure> <img src="images/icon04.png" alt="Image"> </figure>
              </div>
              <!-- end inner --> 
            </div>
            <!-- end flip-box-front -->
            <div class="flip-box-back">
              <div class="inner">
                  <h4>investment</h4>
                  <p>Instead of giving up immediately, go back to the drawing doesn't something need.</p>
              </div>
              <!-- end inner --> 
            </div>
            <!-- end end flip-box-back --> 
          </div>
          <!-- end flip-box --> 
          </div>
        <!-- end content-box -->
        <div class="content-box wow fadeIn"> 
      <div class="flip-box" data-flip-direction="horizontal-to-left" data-h_text_align="left" data-v_text_align="center">
            <div class="flip-box-front" data-bg-overlay="true" data-text-color="light">
              <div class="inner">
                <h4>researches</h4>
                <figure> <img src="images/icon05.png" alt="Image"> </figure>
              </div>
              <!-- end inner --> 
            </div>
            <!-- end flip-box-front -->
            <div class="flip-box-back">
              <div class="inner">
                  <h4>researches</h4>
                  <p>Instead of giving up immediately, go back to the drawing doesn't something need.</p>
              </div>
              <!-- end inner --> 
            </div>
            <!-- end end flip-box-back --> 
          </div>
          <!-- end flip-box --> 
          </div>
        <!-- end content-box --> 
      </div>
      <!-- end col-12 --> 
    </div>
    <!-- end row --> 
  </div>
  <!-- end container --> 
</section>
<!-- end icon-content-box -->
 <section class="image-content-over-box">
  <div class="container">
    <div class="row">
      <div class="col-lg-4">
        <div class="section-title wow fadeIn">
          <h2> Projects</h2>
          <h6>You can view our otstanding projects here.</h6>
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

<!-- end showcases -->
<section class="testimonials">
  <div class="container">
    <div class="section-title light wow fadeIn"> 
      <h2>what peoples say !</h2>
    </div>
    <!-- end section-title -->
    <div class="swiper-testimonials wow fadeIn">
    <div class="swiper-wrapper">
      <div class="swiper-slide">
    <div class="testimonial">
      <figure> <img src="images/avatar01.jpg" alt="Image" class="avatar">
        <figcaption> <img src="images/icon-quote.svg" alt="Image"> </figcaption>
      </figure>
      <blockquote>
        <p>The seeds are produced by cones that grow on the tree’s branches. Redwood trees develop both male and female and male cones. </p>
      </blockquote>
      <img src="images/testimonial-name.png" alt="Image" class="name-sign"> <small>Ceo & Premium Board Member</small> </div>
    <!-- end testimonial --> 
    </div>
    <!-- end swiper-slide -->
      <div class="swiper-slide">
    <div class="testimonial">
      <figure> <img src="images/avatar02.jpg" alt="Image" class="avatar">
        <figcaption> <img src="images/icon-quote.svg" alt="Image"> </figcaption>
      </figure>
      <blockquote>
        <p>The cones act as “incubators” for the seeds of the tree. The smaller male cones release pollen, which fertilizes the female </p>
      </blockquote>
      <img src="images/testimonial-name.png" alt="Image" class="name-sign"> <small>Ceo & Premium Board Member</small> </div>
    <!-- end testimonial --> 
    </div>
    <!-- end swiper-slide -->
      <div class="swiper-slide">
    <div class="testimonial">
      <figure> <img src="images/avatar03.jpg" alt="Image" class="avatar">
        <figcaption> <img src="images/icon-quote.svg" alt="Image"> </figcaption>
      </figure>
      <blockquote>
        <p>After this pollen release, male cones are shed by the tree and drop to the forest floor. The pollinated female cones remain attached </p>
      </blockquote>
      <img src="images/testimonial-name.png" alt="Image" class="name-sign"> <small>Ceo & Premium Board Member</small></div>
    <!-- end testimonial --> 
    </div>
    <!-- end swiper-slide -->
    </div>
    <!-- end swiper-wrapper -->
    <div class="swiper-button-next"><img src="images/icon-right-arrow.svg" alt="Image"></div>
          <div class="swiper-button-prev"><img src="images/icon-right-arrow.svg" alt="Image"></div>
    </div>
    <!-- end swiper-testimonials -->
  </div>
  <!-- end container -->
</section>
<!-- end testimonials -->
<section class="team-members">
  <div class="container">
    <div class="row">
      <div class="col-12 wow fadeIn">
        <div class="section-title">
          <h2>team members</h2>
          <h6>When the seeds reach maturity, the segments of<br> the cone open up and release</h6>
        </div>
        <!-- end section-title --> 
      </div>
      <!-- end col-12 --> 
    </div>
    <!-- end row --> 
  </div>
  <!-- end container -->
  <div class="content-wrapper">
    <figure class="member wow fadeIn"> <img src="images/team01.jpg" alt="Image" class="fist-image"> <img src="images/team01h.jpg" alt="Image" class="second-image">
      <figcaption>
        <h5>Peter Abramers</h5>
        <small>Ceo & Premium Board Member</small>
        <ul>
          <li><a href="#"><i class="fa fa-facebook"></i></a></li>
          <li><a href="#"><i class="fa fa-twitter"></i></a></li>
          <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
          <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
          <li><a href="#"><i class="fa fa-youtube-play"></i></a></li>
        </ul>
      </figcaption>
    </figure>
    <!-- end member -->
    <figure class="member wow fadeIn"> <img src="images/team02.jpg" alt="Image" class="fist-image"> <img src="images/team02h.jpg" alt="Image" class="second-image">
      <figcaption>
        <h5>Peter Abramers</h5>
        <small>Ceo & Premium Board Member</small>
        <ul>
          <li><a href="#"><i class="fa fa-facebook"></i></a></li>
          <li><a href="#"><i class="fa fa-twitter"></i></a></li>
          <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
          <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
          <li><a href="#"><i class="fa fa-youtube-play"></i></a></li>
        </ul>
      </figcaption>
    </figure>
    <!-- end member -->
    <figure class="member  wow fadeIn"> <img src="images/team03.jpg" alt="Image" class="fist-image"> <img src="images/team03h.jpg" alt="Image" class="second-image">
      <figcaption>
        <h5>Peter Abramers</h5>
        <small>Ceo & Premium Board Member</small>
        <ul>
          <li><a href="#"><i class="fa fa-facebook"></i></a></li>
          <li><a href="#"><i class="fa fa-twitter"></i></a></li>
          <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
          <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
          <li><a href="#"><i class="fa fa-youtube-play"></i></a></li>
        </ul>
      </figcaption>
    </figure>
    <!-- end member -->
    <figure class="member wow fadeIn"> <img src="images/team04.jpg" alt="Image" class="fist-image"> <img src="images/team04h.jpg" alt="Image" class="second-image">
      <figcaption>
        <h5>Peter Abramers</h5>
        <small>Ceo & Premium Board Member</small>
        <ul>
          <li><a href="#"><i class="fa fa-facebook"></i></a></li>
          <li><a href="#"><i class="fa fa-twitter"></i></a></li>
          <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
          <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
          <li><a href="#"><i class="fa fa-youtube-play"></i></a></li>
        </ul>
      </figcaption>
    </figure>
    <!-- end member -->
    <figure class="member wow fadeIn"> <img src="images/team05.jpg" alt="Image" class="fist-image"> <img src="images/team05h.jpg" alt="Image" class="second-image">
      <figcaption>
        <h5>Peter Abramers</h5>
        <small>Ceo & Premium Board Member</small>
        <ul>
          <li><a href="#"><i class="fa fa-facebook"></i></a></li>
          <li><a href="#"><i class="fa fa-twitter"></i></a></li>
          <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
          <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
          <li><a href="#"><i class="fa fa-youtube-play"></i></a></li>
        </ul>
      </figcaption>
    </figure>
    <!-- end member --> 
  </div>
  <!-- end content-wrapper --> 
</section>
<!-- end team-members -->
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
        <?php $blogs = homeBlog($conn); 
          foreach ($blogs as $key => $blog) {
            extract($blog);
            $bd = previewBody($body, 10); 
          ?>
        <div class="content-box wow fadeIn"> 
            <div style= "border-radius: 100px; padding: 0px; background:url(<?php echo $image_1; ?>); height:30vh; width: 30vh; background-size: cover; background-position: center; background-repeat: no-repeat;" class="img-responsive"></div>
          <h4><?php echo $title; ?></h4>
          <small><?php echo $date_created; ?></small>
          <p><?php echo $bd; ?></p>
           <a <?php echo 'href=blog-details?hid='.$hash_id.'';?>><img src="images/icon-right-arrow.svg" alt="Image"></a>  </div>
        <?php } ?>
      </div>
      <!-- end col-12 --> 
    </div>
    <!-- end row --> 
  </div>
  <!-- end container --> 
</section>
<!-- end latest-news -->
<section class="info-box">
  <div class="container wow fadeIn">
    <h3>Let’s get started</h3>
    <h6>The pollinated female cones remain attached to the branches?</h6>
    <p>The climate of coastal California and Oregon creates the ideal environment<br> for the trees a redwood tree needs </p>
    <img src="images/image-team.jpg" alt="Image"> </div>
</section>
<!-- end info-box -->
<!-- <section class="request-form">
  <div class="container">
    <div class="row">
      <div class="col-lg-5 wow fadeIn">
        <div class="section-title light">
          <h2>request form</h2>
          <h6>This moderate and humid climate provides<br> the massive amounts</h6>
        </div> -->
        <!-- end section-title --> 
     <!--  </div> -->
      <!-- end col-5 -->
<!--       <div class="col-lg-7 wow fadeIn">
        <form class="row inner">
          <div class="form-group col-md-6">
            <label>Your name</label>
            <input type="text"> -->
          <!-- </div>
 -->          <!-- end form-group -->
<!--           <div class="form-group col-md-6">
            <label>Your surname</label>
            <input type="text">
          </div> -->
          <!-- end form-group -->
<!--           <div class="form-group col-md-4">
            <label>Your Country</label>
            <div class="select-box">
              <select>
                <option>Select</option>
              </select>
              <i class="fa fa-chevron-down"></i> </div> -->
            <!-- end select-box --> 
         <!--  </div> -->
          <!-- end form-group -->
<!--           <div class="form-group col-md-4">
            <label>Your City</label>
            <div class="select-box">
              <select>
                <option>Select</option>
              </select>
              <i class="fa fa-chevron-down"></i> </div> -->
            <!-- end select-box --> 
          <!-- </div> -->
          <!-- end form-group -->
<!--           <div class="form-group col-md-4">
            <label>Your Street</label>
            <div class="select-box">
              <select>
                <option>Select</option>
              </select>
              <i class="fa fa-chevron-down"></i> </div> -->
            <!-- end select-box --> 
          <!-- </div> -->
          <!-- end form-group -->
<!--           <div class="form-group col-md-3">
            <label>
              <input type="checkbox" checked>
              Domestic</label>
          </div> -->
          <!-- end form-group -->
<!--           <div class="form-group col-md-3">
            <label>
              <input type="checkbox" >
              International</label>
          </div> -->
          <!-- end form-group -->
<!--           <div class="form-group col-md-4">
            <label>
              <input type="checkbox" >
              Quick Delivery</label>
          </div> -->
          <!-- end form-group -->
<!--           <div class="form-group col-md-4">
            <label>Your Purpose</label>
            <div class="select-box">
              <select>
                <option>Select</option>
              </select>
              <i class="fa fa-chevron-down"></i> </div> -->
            <!-- end select-box --> 
         <!--  </div> -->
          <!-- end form-group -->
<!--           <div class="form-group col-md-4">
            <label>&nbsp;</label>
            <input type="submit" value="SUBMIT">
          </div> -->
          <!-- end form-group -->
        <!-- </form> -->
        <!-- end form --> 
      </div>
      <!-- end col-7 --> 
    </div>
    <!-- end row --> 
  </div>
  <!-- end container --> 
</section>
<!-- end consultation-form -->
<?php include "includes/footer.php"; ?>
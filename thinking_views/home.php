<?php
include "includes/header.php";
$home = getHome($conn); extract($home);

?>
<section class="slider">
  <div class="swiper-container">
    <div class="swiper-wrapper">
      <?php $fronts = getHomeFront($conn); foreach ($fronts as $key => $front) {
        extract($front);
        $bd =  previewBody($body, 5)
       ?>
      <div class="swiper-slide">
        <div class="slide-inner bg-image" data-background="<?php echo $image_1; ?>" data-text=" <span><?php echo ucwords($title); ?></span>">
          <div class="container">
            <!-- <h6 data-swiper-parallax="100">Thinking</h6> -->
            <h2 data-swiper-parallax="200"><span>.</span><?php echo $title; ?></h2>
            <p data-swiper-parallax="300"><?php echo $body; ?></p>
            <div class="clearfix"></div>
            <!-- <a href="about" data-swiper-parallax="200">Discover More<span></span></a> </div> -->
          <!-- end container -->
        </div>
        <!-- end slide-inner -->
      </div>
    <?php } ?>
      <!-- end swiper-slide -->
      <!-- <div class="swiper-slide">
        <div class="slide-inner bg-image" data-background="images/slide02.jpg" data-text="WE<span>ARE FUN</span>">
          <div class="container">
            <h6 data-swiper-parallax="100">We</h6>
            <h2 data-swiper-parallax="200"><span>.</span>Are Fun</h2>
            <p data-swiper-parallax="300">We dont just work without palying. we work hard and also play harder.</p>
            <div class="clearfix"></div>
            <a href="#" data-swiper-parallax="200">Discover More<span></span></a> </div> -->
          <!-- end container -->
        <!-- </div> -->
        <!-- end slide-inner -->
     <!--  </div> -->
      <!-- end swiper-slide -->
      <!-- <div class="swiper-slide">
        <div class="slide-inner bg-image" data-background="images/slide03.jpg" data-text="WE ARE<span>CREATIVE</span>">
          <div class="container">
            <h6 data-swiper-parallax="100">We are</h6>
            <h2 data-swiper-parallax="200"><span>.</span>Creative</h2>
            <p data-swiper-parallax="300">It can be challenging to get everything in order But we have the right set of people who get things done creatively.</p>
            <div class="clearfix"></div>
            <a href="#" data-swiper-parallax="200">Discover More<span></span></a> </div> -->
          <!-- end container -->
       <!--  </div> -->
        <!-- end slide-inner -->
      <!-- </div> -->
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
       <a <?php echo 'href=service?hid='.$hash_id.''; ?>>
      <div class="content-box wow fadeIn">
        <h3><?php echo $title; ?></h3>
        <p>The only time you should move your vehicles after you get in a wreck is if not doing </p>
        <a <?php echo 'href=service?hid='.$hash_id.''; ?>><img src="images/icon-right-arrow.svg" alt="Image"></a> </div></a>
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
          <h2>Development</h2>
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
                <h4>Analysis</h4>
                <figure> <img src="images/icon01.png" alt="Image"> </figure>
              </div>
              <!-- end inner -->
            </div>
            <!-- end flip-box-front -->
            <div class="flip-box-back">
              <div class="inner">
                  <h4>Analysis</h4>
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
                <h4>Marketting</h4>
                <figure> <img src="images/icon02.png" alt="Image"> </figure>
              </div>
              <!-- end inner -->
            </div>
            <!-- end flip-box-front -->
            <div class="flip-box-back">
              <div class="inner">
                  <h4>Marketting</h4>
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
                <h4>Presentation</h4>
                <figure> <img src="images/icon03.png" alt="Image"> </figure>
              </div>
              <!-- end inner -->
            </div>
            <!-- end flip-box-front -->
            <div class="flip-box-back">
              <div class="inner">
                  <h4>Presentation</h4>
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
              <div class="inner"><span>04</span>
                <h4>Investment</h4>
                <figure> <img src="images/icon04.png" alt="Image"> </figure>
              </div>
              <!-- end inner -->
            </div>
            <!-- end flip-box-front -->
            <div class="flip-box-back">
              <div class="inner">
                  <h4>Investment</h4>
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
              <div class="inner"><span>05</span>
                <h4>Researches</h4>
                <figure> <img src="images/icon05.png" alt="Image"> </figure>
              </div>
              <!-- end inner -->
            </div>
            <!-- end flip-box-front -->
            <div class="flip-box-back">
              <div class="inner">
                  <h4>Researches</h4>
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
      <blockquote>https://twitter.com/Frenzykul


        <p>The seeds are produced by cones that grow on the tree’s branches. Redwood trees develop both male and female and male cones. </p>
      </blockquote>
      <img src="images/testimonial-name.png" alt="Image" class="name-sign"> <small> Mckodev</small> </div>
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

<!-- end team-members -->

<!-- end latest-news -->
<!-- <section class="info-box">
  <div class="container wow fadeIn">
    <h3>Let’s get started</h3>
    <h6>The pollinated female cones remain attached to the branches?</h6>
    <p>The climate of coastal California and Oregon creates the ideal environment<br> for the trees a redwood tree needs </p>
    <img src="images/image-team.jpg" alt="Image"> </div>
</section> -->
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

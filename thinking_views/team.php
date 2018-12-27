<?php   include "includes/header.php"; ?>
<!-- end header -->
<section class="page-header">
	<div class="container">
		 <ol class="breadcrumb">
			<li class="breadcrumb-item"><a href="#">Home</a></li>
			<li class="breadcrumb-item"><a href="#">Corpration</a></li>
			<li class="breadcrumb-item active" aria-current="page">Team Members</li>
		  </ol>
		  <h2>TEAM MEMBERS</h2>
<!-- 		  <p>As the person who owns the legal rights to intellectual property, an author.</p> -->
	</div>
	<!-- end container -->
</section>
<!-- end page-header -->
<section class="team-members">
  <div class="container">
    <div class="row">
      <div class="col-12 wow fadeIn">
        <div class="section-title">
          <h2>Team Members</h2>
<!--           <h6>When the seeds reach maturity, the segments of<br> the cone open up and release</h6> -->
        </div>
        <!-- end section-title --> 
      </div>
      <!-- end col-12 --> 
    </div>
    <!-- end row --> 
  </div>
  <!-- end container -->
  <div class="content-wrapper">
    <?php $teams = getTeam($conn); 
      foreach ($teams as $key => $team) {
        extract($team);
      
    ?>
    <figure class="member wow fadeIn"> <div style="background:url(<?php echo $image_1; ?>); width: 50vh; height: 50vh; background-size: cover; background-position: center; background-repeat: no-repeat;" class="fist-image"></div><!-- <img src=<?phpimage_1; ?> alt="Image" class="fist-image"> -->
     <img src="images/team01h.jpg" alt="Image" class="second-image">
      <figcaption>
        <h5><?php echo $firstname." ".$lastname; ?></h5>
        <small>Ceo & Premium Board Member</small>
        <ul>
          <li><a href="#"><i class="fa fa-facebook"></i></a></li>
          <li><a href="#"><i class="fa fa-twitter"></i></a></li>
          <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
<!--           <li><a href="#"><i class="fa fa-google-plus"></i></a></li> -->
<!--           <li><a href="#"><i class="fa fa-youtube-play"></i></a></li> -->
        </ul>
      </figcaption>
    </figure>
  <?php } ?>
    <!-- end member -->
<!--     <figure class="member wow fadeIn"> <img src="images/team02.jpg" alt="Image" class="fist-image"> <img src="images/team02h.jpg" alt="Image" class="second-image">
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
    </figure> -->
    <!-- end member -->
<!--     <figure class="member  wow fadeIn"> <img src="images/team03.jpg" alt="Image" class="fist-image"> <img src="images/team03h.jpg" alt="Image" class="second-image">
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
    </figure> -->
    <!-- end member -->
<!--     <figure class="member wow fadeIn"> <img src="images/team04.jpg" alt="Image" class="fist-image"> <img src="images/team04h.jpg" alt="Image" class="second-image">
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
    </figure> -->
    <!-- end member -->
<!--     <figure class="member wow fadeIn"> <img src="images/team05.jpg" alt="Image" class="fist-image"> <img src="images/team05h.jpg" alt="Image" class="second-image">
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
    </figure> -->
    <!-- end member --> 
<!--     <figure class="member wow fadeIn"> <img src="images/team06.jpg" alt="Image" class="fist-image"> <img src="images/team06h.jpg" alt="Image" class="second-image">
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
    </figure> -->
    <!-- end member --> 
<!--     <figure class="member wow fadeIn"> <img src="images/team05.jpg" alt="Image" class="fist-image"> <img src="images/team05h.jpg" alt="Image" class="second-image">
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
    </figure> -->
    <!-- end member --> 
<!--     <figure class="member wow fadeIn"> <img src="images/team07.jpg" alt="Image" class="fist-image"> <img src="images/team07h.jpg" alt="Image" class="second-image">
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
    </figure> -->
    <!-- end member -->  
<!--     <figure class="member wow fadeIn"> <img src="images/team01.jpg" alt="Image" class="fist-image"> <img src="images/team01h.jpg" alt="Image" class="second-image">
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
 -->    <!-- end member --> 
<!--     <figure class="member wow fadeIn"> <img src="images/team08.jpg" alt="Image" class="fist-image"> <img src="images/team08h.jpg" alt="Image" class="second-image">
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
    </figure> -->
    <!-- end member --> 
  </div>
  <!-- end content-wrapper --> 
</section>
<!-- end team-members -->
<?php  include "includes/footer.php"; ?>
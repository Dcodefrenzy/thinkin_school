<?php 
include "includes/header.php";
?>
<section class="page-header">
	<div class="container">
	 <a href="javascript:window.print()" class="print">PRINT PAGE <img src="images/icon-print.png" alt="Image"></a>
		 <ol class="breadcrumb">
			<li class="breadcrumb-item"><a href="#">Home</a></li>
			<li class="breadcrumb-item"><a href="#">Corpration</a></li>
			<li class="breadcrumb-item active" aria-current="page">About Us</li>
		  </ol>
		  <h2>ABOUT US</h2>
	</div>
	<!-- end container -->
</section>
<!-- end page-header -->
<section class="content">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<div class="section-title"> <span>01</span>
          <h2>Thinking School.</h2>
        </div>
        <!-- end section-title -->
			</div>
			<!-- end col-12 -->
			<div class="col-12">
			</div>
			<!-- end col-12 -->
			<div class="col-lg-6">
				<?php $about = getAboutUS($conn); extract($about); ?>
				<p><?php echo $body; ?></p>
			</div>
			<!-- end col-col-6 -->
			<div class="col-lg-6">
				 <div class="progress-infos"><small><strong>Business Development</strong></small> 
         <small class="pull-right">75%</small> </div>
          <!-- end progress-infos -->
          <div class="progress">
            <div class="progress-bar wow progress-one"> </div>
            <!-- end progress-bar --> 
          </div>
          <!-- end progress -->
          <div class="progress-infos"><small><strong>Strategy Analyses</strong></small> 
         <small class="pull-right">91%</small> </div>
          <!-- end progress-infos -->

          <div class="progress">
            <div class="progress-bar wow progress-two"> </div>
            <!-- end progress-bar --> 
          </div>
          <!-- end progress -->
          <div class="progress-infos"><small><strong>Accounting Improves</strong></small> 
         <small class="pull-right">88%</small> </div>
          <!-- end progress-infos -->
          <div class="progress">
            <div class="progress-bar wow progress-four"> </div>
            <!-- end progress-bar --> 
          </div>
          <!-- end progress -->
			</div>
			<!-- end col-6 -->
		</div>
		<!-- end row -->
	</div>
	<!-- end container -->
</section>
<!-- end content -->
<section class="side-image-content" id="counter">
  <div class="sides bg-image wow fadeIn" data-background= <?php echo $image_1; ?>> </div>
  <!-- end sides -->
  <div class="sides bg-color wow fadeIn" data-background="#405089">
    <div class="inner">
      <div class="section-title light"> <span>01</span>
        <h2></h2>
        <h2>Mission Statement</h2>
      </div>
      <!-- end section-title -->
      <p><?php echo $mission_statement; ?></p>
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
        <div class="section-title"> <span>01</span>
          <h2>features</h2>
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
              <div class="inner"> <span>04</span>
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
              <div class="inner"> <span>05</span>
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
<section class="history-timeline">
	<div class="container">
	<div class="section-title light"> <span>01</span>
          <h2>uon history</h2>
        </div>
        <!-- end section-title -->
		<div class="cd-horizontal-timeline">
	<div class="timeline">
		<div class="events-wrapper">
			<div class="events">
				<ol>
					<li><a href="#0" data-date="16/01/2018" class="selected">16 Jan</a></li>
					<li><a href="#0" data-date="28/02/2018">28 Feb</a></li>
					<li><a href="#0" data-date="20/04/2018">20 Mar</a></li>
					<li><a href="#0" data-date="20/05/2018">20 May</a></li>
					<li><a href="#0" data-date="09/07/2018">09 Jul</a></li>
					<li><a href="#0" data-date="30/08/2018">30 Aug</a></li>
					<li><a href="#0" data-date="15/09/2018">15 Sep</a></li>
					<li><a href="#0" data-date="01/11/2018">01 Nov</a></li>
					<li><a href="#0" data-date="10/12/2018">10 Dec</a></li>
					<li><a href="#0" data-date="19/01/2019">29 Jan</a></li>
					<li><a href="#0" data-date="03/03/2019">3 Mar</a></li>
				</ol>

				<span class="filling-line" aria-hidden="true"></span>
			</div> <!-- .events -->
		</div> <!-- .events-wrapper -->
			
		<ul class="cd-timeline-navigation">
			<li><a href="#0" class="prev inactive"><i class="fa fa-chevron-left"></i></a></li>
			<li><a href="#0" class="next"><i class="fa fa-chevron-right"></i></a></li>
		</ul> <!-- .cd-timeline-navigation -->
	</div> 
	<!-- end timeline -->

	<div class="events-content">
		<ol>
			<li class="selected" data-date="16/01/2018">
				<h2>Moisture is often one of the biggest</h2>
				<em>January 16th, 2018</em>
				<p>	
					Floors have to deal with a lot of wear and tear. Moisture is often one of the biggest culprits, but it is possible to fight against it by installing a waterproof floor. That leads to a surprisingly wide assortment of benefits, which means that upgrading the floor is often an investment that will pay off in the long run. It can also make a home much more pleasant to live in by cutting down on maintenance work, so anyone can benefit from it.
				</p>
			</li>

			<li data-date="28/02/2018">
				<h2>Hardwood that can suffer damage</h2>
				<em>February 28th, 2018</em>
				<p>	
					The single biggest benefit to waterproofing your floors is the ease of cleaning them. Most messes will go away with just a little bit of soap and water. That is much easier than cleaning carpeting, which often needs a special carpet cleaner or an unusual cleaning solution, or hardwood that can suffer damage if you get too much water on it.
				</p>
			</li>

			<li data-date="20/04/2018">
				<h2>The impact is biggest business</h2>
				<em>March 20th, 2018</em>
				<p>	
					This is especially important for people who have pets. The impact is biggest when the pets are very young and untrained or old and sick, but it can make a difference with pets of any age. Animals tend to get messy, and their little presents tend to be moist enough to easily sink into a carpet or damage wood.
				</p>
			</li>

			<li data-date="20/05/2018">
				<h2>Even replacing part of investment</h2>
				<em>May 20th, 2018</em>
				<p>	
					They won’t do nearly as much damage to a waterproof floor. Even replacing part a home’s floors with waterproof versions can make a big difference for pet owners as long as they focus on the areas where their pets are most likely to leave a mess.
				</p>
			</li>

			<li data-date="09/07/2018">
				<h2>Reduced Maintenance Costs</h2>
				<em>July 9th, 2018</em>
				<p>	
					Most floors, especially hardwood floors, are easy to damage if you treat them poorly. Even something as simple as spilling water on them without immediately cleaning it up can do some expensive damage. That damage needs to be repaired, which can take a lot of time and money.

				</p>
			</li>

			<li data-date="30/08/2018">
				<h2>That is because water causes</h2>
				<em>August 30th, 2018</em>
				<p>	
					Waterproof floors do need some maintenance, but they need less than other options in most environments. That is because water causes a lot of damage, both directly and by encouraging mold or other contaminants to grow. That cuts down on the amount of money that the owners need to spend to keep their floors in good condition. 
				</p>
			</li>

			<li data-date="15/09/2018">
				<h2>People who live in messy homes</h2>
				<em>September 15th, 2018</em>
				<p>	
					In general, this benefit is most valuable for people who live in messy homes, either because they have messy pets or children, or because they live in a wet area where it is easy to bring mud into the home. People who don’t have many maintenance problems will get less benefit from this aspect of waterproof flooring, but they still have a lot to gain from it in other areas.
				</p>
			</li>

			<li data-date="01/11/2018">
				<h2>No Emergencies for investments</h2>
				<em>November 1st, 2018</em>
				<p>	
					Time is of the essence when it comes to cleaning up messes. After all, wet messes tend to sink into the floor over time, which can cause staining and leave unpleasant odors behind. Floors that are vulnerable to water damage also call for rapid cleaning to prevent that damage. 
				</p>
			</li>

			<li data-date="10/12/2018">
				<h2>A Healthy Business Enviroment</h2>
				<em>December 10th, 2018</em>
				<p>	
					Our homes have a big impact on our health because we spend so much time on them. In general, a dry home is significantly healthier for its inhabitants than a wet one. The moisture seems to cause some problems on its own, but it can also encourage mold to grow. Some mold is harmless, but many species cause a variety of medical problems to people who are exposed to it over time.
				</p>
			</li>

			<li data-date="19/01/2019">
				<h2>Business building up is to remove it</h2>
				<em>January 19th, 2019</em>
				<p>	
					The best way to keep moisture from building up is to remove it as quickly as possible, and waterproof floors can help. They don’t absorb water, so it is easy to clean it up. That prevents mold from spreading and increases the odds of everyone staying as healthy as possible.

				</p>
			</li>

			<li data-date="03/03/2019">
				<h2>People who have tight schedules</h2>
				<em>March 3rd, 2019</em>
				<p>	
					Time is of the essence when it comes to cleaning up messes. After all, wet messes tend to sink into the floor over time, which can cause staining and leave unpleasant odors behind. Floors that are vulnerable to water damage also call for rapid cleaning to prevent that damage. That isn’t as much of a problem with waterproof flooring because they resist moisture.
				</p>
			</li>
		</ol>
	</div> <!-- end events-content -->
</div>
<!-- end cd-horizontal-timeline -->
	</div>
	<!-- end container -->
</section>
<!-- end history-timeline -->
<section class="image-content-box">
  <div class="container">
    <div class="row">
      <div class="col-12 wow fadeIn">
        <div class="section-title"> <span>01</span>
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
<?php 
include "includes/footer.php";
?>
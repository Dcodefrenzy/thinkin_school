<?php 
  include "includes/header.php";
   $record_per_page = 20;
     $page = "";
  if(isset($_GET['page'])){
  $page = $_GET['page'];
  }else{
  $page = 1;
  }
    $start_from = ($page-1)*$record_per_page;

 ?>
<!-- end header -->
<section class="page-header">
	<div class="container">
		 <ol class="breadcrumb">
			<li class="breadcrumb-item"><a href="#">Home</a></li>
<!-- 			<li class="breadcrumb-item"><a href="#">Corpration</a></li> -->
			<li class="breadcrumb-item active" aria-current="page">Projects</li>
		  </ol>
		  <h2>PROJECTS</h2>
	</div>
	<!-- end container -->
</section>
<!-- end page-header -->
       
  <section class="press-relases">
   <div class="container">
    <div class="row">
      <div class="col-12 wow fadeIn">
        <div class="section-title"> 
          <h2>Our Projects</h2>
          <h6>Because they may falsely report what happened wither<br> knowingly or simply due to confusion</h6>
        </div>
        <!-- end section-title -->
      </div>     
        <?php     $projects = getProjects($conn, $start_from, $record_per_page); ?>
        <?php foreach ($projects as $key => $project) {
            extract($project);
            $bd = previewBody($about, 20);
          
          ?>

        <div class="col-lg-3 col-md-4">
            <a <?php echo 'href=project?hid='.$hash_id.'';?>>
      <figure>
         <div style="background:url(<?php echo $image_1; ?>); width: 100%; height: 150px; background-size: 100%;; background-position: center; background-repeat: no-repeat;" class="img-responsive"></div>
        <figcaption>
          <h5><?php echo $project_name; ?></h5>
          <p><?php echo $bd; ?>n</p>
          <small><?php echo $project_location; ?></small>
        </figcaption>
        </figure>
        </a>
      </div>
    <?php } ?>
      <!-- end col-3 -->
      <!-- <div class="col-lg-3 col-md-4">
      <figure>
        <a href="images/image05.jpg" data-fancybox><img src="images/image05.jpg" alt="Image"></a>
        <figcaption>
          <h5>NEW YORK TIMES</h5>
          <p>How to lead company simply due to confusion</p>
          <small>26 November 2018</small>
        </figcaption>
        </figure>
      </div> -->
      <!-- end col-3 -->
     <!--  <div class="col-lg-3 col-md-4">
      <figure>
        <a href="images/image06.jpg" data-fancybox><img src="images/image06.jpg" alt="Image"></a>
        <figcaption>
          <h5>NEW YORK TIMES</h5>
          <p>How to lead company simply due to confusion</p>
          <small>26 November 2018</small>
        </figcaption>
        </figure>
      </div> -->
      <!-- end col-3 -->
     <!--  <div class="col-lg-3 col-md-4">
      <figure>
        <a href="images/image07.jpg" data-fancybox><img src="images/image07.jpg" alt="Image"></a>
        <figcaption>
          <h5>NEW YORK TIMES</h5>
          <p>How to lead company simply due to confusion</p>
          <small>26 November 2018</small>
        </figcaption>
        </figure>
      </div> -->
      <!-- end col-3 -->
     <!--  <div class="col-lg-3 col-md-4">
      <figure>
        <a href="images/image08.jpg" data-fancybox><img src="images/image08.jpg" alt="Image"></a>
        <figcaption>
          <h5>NEW YORK TIMES</h5>
          <p>How to lead company simply due to confusion</p>
          <small>26 November 2018</small>
        </figcaption>
        </figure>
      </div> -->
      <!-- end col-3 -->
      <!-- <div class="col-lg-3 col-md-4">
      <figure>
        <a href="images/image09.jpg" data-fancybox><img src="images/image09.jpg" alt="Image"></a>
        <figcaption>
          <h5>NEW YORK TIMES</h5>
          <p>How to lead company simply due to confusion</p>
          <small>26 November 2018</small>
        </figcaption>
        </figure>
      </div> -->
      <!-- end col-3 -->
      <!-- <div class="col-lg-3 col-md-4">
      <figure>
        <a href="images/image05.jpg" data-fancybox><img src="images/image05.jpg" alt="Image"></a>
        <figcaption>
          <h5>NEW YORK TIMES</h5>
          <p>How to lead company simply due to confusion</p>
          <small>26 November 2018</small>
        </figcaption>
        </figure>
      </div> -->
      <!-- end col-3 -->
            </div>
    <!-- end row -->
  </div>
  <!-- end container -->
</section>
    </div>
    <!-- end row --> 
  </div>
  <!-- end container --> 
</section>
<!-- end image-content-box -->
<?php 
  include "includes/footer.php";
 ?>
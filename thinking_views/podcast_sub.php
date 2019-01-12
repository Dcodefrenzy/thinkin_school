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
      <li class="breadcrumb-item active" aria-current="page">Podcast Subscription</li>
      </ol>
      <h2>PODCAST</h2>
      <p>You can subscribe for our podcast here.<br/>We have various subscription categories</p>
  </div>
  <!-- end container -->
</section>
<!-- end page-header -->
<section class="prices">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="section-title">
          <h2>Podcast Subscription</h2>
<!--           <h6>Because they may falsely report what happened wither<br> knowingly or simply due to confusion</h6> -->
        </div>
        <!-- end section-title -->
      </div>
      <!-- end col-12 -->
              <?php     $podcasts = getAllPodcast($conn); ?>
              <?php foreach ($podcasts as $key => $podcast) {
            extract($podcast);
/*            $EDate2 = decodePartDate($end_date);
            $SDate2 = decodePartDate($start_date);
            $SDate = decodeDate($start_date);
            $EDate = decodeDate($end_date);*/
            $bd = previewBody($body, 10);
          ?>
      <div class="col-md-4">
        <div class="price-box">
         <div style="background:url(<?php echo $image_1; ?>); width: 100%; height: 200px; background-size: 100%;; background-position: center; background-repeat: no-repeat;" class="img-responsive"></div>
          <h4><?php echo strtoupper($subscription); ?></h4>

          <p>Price: <?php echo $price ?></p>
                    <p ><?php echo $bd; ?></p>
             <!-- <small></small> -->
          <ul>
            </li>
          </ul>
          <a <?php echo 'href=book-podcast?hid='.$hash_id.'';?>>Subscribe Now<span></span></a>
          <br/><br/>
           <a <?php echo 'href=podcast-subscription?hid='.$hash_id.'';?>>View More Details<span></span></a>
          </div>
          <!-- end price-box -->
      </div>
    <?php } ?>
    </div>
    <!-- end row -->
  </div>
  <!-- end container -->
</section>
<!-- end prices -->
<?php include "includes/footer.php"; ?>

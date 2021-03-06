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
      <li class="breadcrumb-item active" aria-current="page">Trainings</li>
      </ol>
      <h2>TRAININGS</h2>

  </div>
  <!-- end container -->
</section>
<!-- end page-header -->
<section class="prices">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="section-title">
          <h2>Trainings</h2>

        </div>
        <!-- end section-title -->
      </div>
      <!-- end col-12 -->
           <?php     $trainings = getAllTrainings($conn, $start_from, $record_per_page); ?>
              <?php foreach ($trainings as $key => $training) {
            extract($training);
            $EDate2 = decodePartDate($end_date);
            $SDate2 = decodePartDate($start_date);
            $SDate = decodeDate($start_date);
            $EDate = decodeDate($end_date);
            $bd = previewBody($description, 20);
          ?>
      <div class="col-md-4">
        <div class="price-box">
         <div style="background:url(<?php echo $image_1; ?>);background-position: center; background-size: cover; background-repeat: no-repeat; width: 100%; height: 250px; background-size: 150%; " class="img-responsive"></div>
         <h4><?php echo strtoupper($name); ?></h4>

         <p>Price: &#8358;<?php echo $price ?></p>
                   <p ><?php echo $venue; ?></p>
            <!-- <small></small> -->


         <ul>

             <?php if($start_date == $end_date){
               echo $SDate;
             }elseif($SDate2['month'] == $EDate2['month']){
                 echo $SDate2['month']." ".$SDate2['day']." - ". $EDate2['day'].", ".$SDate2['year'];
             }elseif($SDate2['month'] !== $EDate2['month']){
                 echo $SDate2['month']." ".$SDate2['day']." - ".$EDate2['month']." ".$EDate2['day'].", ".$SDate2['year'];
             }else{
                 echo $SDate ." - ".$EDate ;
             } ?>




           </li>

          </ul>
          <a <?php echo 'href=book?hid='.$hash_id.'&&t=training';?>>Register Now<span></span></a>
          <br/><br/>
           <a <?php echo 'href=training-details?hid='.$hash_id.'';?>>View More Details<span></span></a>
          </div>
          <!-- end price-box -->
      </div>
    <?php } ?>
      <!-- end col-4 -->
     <!--  <div class="col-md-4">
        <div class="price-box">
            <img src="images/icon03.png" alt="Image">
          <h3>advanced</h3>
            <h5>Everything you need to get started</h5>
          <span>$210</span>
          <small>per year</small>
          <b>Basic includes all of our base features</b>
          <ul>
            <li>1 GB of space <i class="fa fa-info-circle" data-toggle="tooltip" data-placement="top" title="" data-original-title="Tooltip on top"></i></li>
            <li>Support at $25/hour <i class="fa fa-info-circle" data-toggle="tooltip" data-placement="top" title="" data-original-title="Tooltip on top"></i></li>
            <li>Small social media package <i class="fa fa-info-circle" data-toggle="tooltip" data-placement="top" title="" data-original-title="Tooltip on top"></i></li>
            <li><strong>Unlimited</strong> Fonts <i class="fa fa-info-circle" data-toggle="tooltip" data-placement="top" title="" data-original-title="Tooltip on top"></i></li>
            <li>Free Fixes &amp; Updates <i class="fa fa-info-circle" data-toggle="tooltip" data-placement="top" title="" data-original-title="Tooltip on top"></i></li>
          </ul>
          <a href="#">PURCHASE NOW<span></span></a>
          </div> -->
          <!-- end price-box -->
      <!-- </div> -->
      <!-- end col-4 -->
      <!-- <div class="col-md-4">
        <div class="price-box">
            <img src="images/icon03.png" alt="Image">
          <h3>advanced</h3>
            <h5>Everything you need to get started</h5>
          <span>$210</span>
          <small>per year</small>
          <b>Basic includes all of our base features</b>
          <ul>
            <li>1 GB of space <i class="fa fa-info-circle" data-toggle="tooltip" data-placement="top" title="" data-original-title="Tooltip on top"></i></li>
            <li>Support at $25/hour <i class="fa fa-info-circle" data-toggle="tooltip" data-placement="top" title="" data-original-title="Tooltip on top"></i></li>
            <li>Small social media package <i class="fa fa-info-circle" data-toggle="tooltip" data-placement="top" title="" data-original-title="Tooltip on top"></i></li>
            <li><strong>Unlimited</strong> Fonts <i class="fa fa-info-circle" data-toggle="tooltip" data-placement="top" title="" data-original-title="Tooltip on top"></i></li>
            <li>Free Fixes &amp; Updates <i class="fa fa-info-circle" data-toggle="tooltip" data-placement="top" title="" data-original-title="Tooltip on top"></i></li>
          </ul>
          <a href="#">PURCHASE NOW<span></span></a>
          </div> -->
          <!-- end price-box -->
      <!-- </div> -->
      <!-- end col-4 -->
      <!-- <div class="col-md-4">
        <div class="price-box">
            <img src="images/icon03.png" alt="Image">
          <h3>advanced</h3>
            <h5>Everything you need to get started</h5>
          <span>$210</span>
          <small>per year</small>
          <b>Basic includes all of our base features</b>
          <ul>
            <li>1 GB of space <i class="fa fa-info-circle" data-toggle="tooltip" data-placement="top" title="" data-original-title="Tooltip on top"></i></li>
            <li>Support at $25/hour <i class="fa fa-info-circle" data-toggle="tooltip" data-placement="top" title="" data-original-title="Tooltip on top"></i></li>
            <li>Small social media package <i class="fa fa-info-circle" data-toggle="tooltip" data-placement="top" title="" data-original-title="Tooltip on top"></i></li>
            <li><strong>Unlimited</strong> Fonts <i class="fa fa-info-circle" data-toggle="tooltip" data-placement="top" title="" data-original-title="Tooltip on top"></i></li>
            <li>Free Fixes &amp; Updates <i class="fa fa-info-circle" data-toggle="tooltip" data-placement="top" title="" data-original-title="Tooltip on top"></i></li>
          </ul>
          <a href="#">PURCHASE NOW<span></span></a>
          </div> -->
          <!-- end price-box -->
     <!--  </div> -->
      <!-- end col-4 -->
      <!-- <div class="col-md-4">
        <div class="price-box">
            <img src="images/icon03.png" alt="Image">
          <h3>advanced</h3>
            <h5>Everything you need to get started</h5>
          <span>$210</span>
          <small>per year</small>
          <b>Basic includes all of our base features</b>
          <ul>
            <li>1 GB of space <i class="fa fa-info-circle" data-toggle="tooltip" data-placement="top" title="" data-original-title="Tooltip on top"></i></li>
            <li>Support at $25/hour <i class="fa fa-info-circle" data-toggle="tooltip" data-placement="top" title="" data-original-title="Tooltip on top"></i></li>
            <li>Small social media package <i class="fa fa-info-circle" data-toggle="tooltip" data-placement="top" title="" data-original-title="Tooltip on top"></i></li>
            <li><strong>Unlimited</strong> Fonts <i class="fa fa-info-circle" data-toggle="tooltip" data-placement="top" title="" data-original-title="Tooltip on top"></i></li>
            <li>Free Fixes &amp; Updates <i class="fa fa-info-circle" data-toggle="tooltip" data-placement="top" title="" data-original-title="Tooltip on top"></i></li>
          </ul>
          <a href="#">PURCHASE NOW<span></span></a>
          </div> -->
          <!-- end price-box -->
      <!-- </div> -->
      <!-- end col-4 -->
      <!-- <div class="col-md-4">
        <div class="price-box">
            <img src="images/icon04.png" alt="Image">
          <h3>premium</h3>
            <h5>Everything you need to get started</h5>
          <span>$210</span>
          <small>per year</small>
          <b>Basic includes all of our base features</b>
          <ul>
            <li>1 GB of space <i class="fa fa-info-circle" data-toggle="tooltip" data-placement="top" title="" data-original-title="Tooltip on top"></i></li>
            <li>Support at $25/hour <i class="fa fa-info-circle" data-toggle="tooltip" data-placement="top" title="" data-original-title="Tooltip on top"></i></li>
            <li>Small social media package <i class="fa fa-info-circle" data-toggle="tooltip" data-placement="top" title="" data-original-title="Tooltip on top"></i></li>
            <li><strong>Unlimited</strong> Fonts <i class="fa fa-info-circle" data-toggle="tooltip" data-placement="top" title="" data-original-title="Tooltip on top"></i></li>
            <li>Free Fixes &amp; Updates <i class="fa fa-info-circle" data-toggle="tooltip" data-placement="top" title="" data-original-title="Tooltip on top"></i></li>
          </ul>
          <a href="#">PURCHASE NOW<span></span></a>
          </div> -->
          <!-- end price-box -->
     <!--  </div> -->
      <!-- end col-4 -->
    </div>
    <!-- end row -->
  </div>
  <!-- end container -->
</section>
<!-- end prices -->
<?php include "includes/footer.php"; ?>

<?php
ob_start();
include "includes/header.php";
 ?>
<!-- end header -->
<section class="page-header">
  <div class="container">
     <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="#">Home</a></li>
      <li class="breadcrumb-item active" aria-current="page">Podcast</li>
      </ol>
      <h2>PODCAST</h2>
     
  </div>
  <!-- end container -->
</section>
<!-- end page-header -->
  <section class="blog">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-7 col-12">
         <div class="post wow fadeIn">
          <figure class="post-image"> 
                  
          </figure>
          <div class="post-content">
<?php
    if (isset($_GET['resp'])) {
        $ref = $_GET['resp'];
        $price = getPaidAmount($conn, $ref);
        $amount = $price; //Correct Amount from Server
        $currency = "NGN"; //Correct Currency from Server
        
        $query = array(
            "SECKEY" => "Payment key",
            "txref" => $ref 
        );

        $data_string = json_encode($query);

                
        $ch = curl_init('https://api.ravepay.co/flwv3-pug/getpaidx/api/v2/verify');                                                                      
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string);                                              
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));

        $response = curl_exec($ch);

        $header_size = curl_getinfo($ch, CURLINFO_HEADER_SIZE);
        $header = substr($response, 0, $header_size);
        $body = substr($response, $header_size);

        curl_close($ch);

        $resp = json_decode($response, true);
        /* die(var_dump($resp));*/

        $paymentStatus = $resp['data']['status'];
        $chargeResponsecode = $resp['data']['chargecode'];
        $chargeAmount = $resp['data']['amount'];
        $chargeCurrency = $resp['data']['currency'];
        $customerMail = $resp['data']['custemail'];

        if (($chargeResponsecode == "00" || $chargeResponsecode == "0") && ($chargeAmount == $amount)  && ($chargeCurrency == $currency)) {
          echo $customerMail;
          updateBookingPayment($conn, $ref);
          // transaction was successful...
         // please check other things like whether you already gave value for this ref
          // if the email matches the customer who owns the product etc
          //Give Value and return to Success page
        } else {
            //Dont Give Value and return to Failure page
        }
    }
    else {
      die('No reference supplied');
    }

?>
 

                      <!-- <ul class="social-share"> -->
<!--       <li class="facebook"><a href="#"><i class="fa fa-facebook"></i></a></li>
      <li class="twitter"><a href="#"><i class="fa fa-twitter"></i></a></li> -->
<!--      <li class="google-plus"><a href="#"><i class="fa fa-google-plus"></i></a></li> -->
     <!--  <li class="linkedin"><a href="#"><i class="fa fa-linkedin"></i></a></li> -->
<!--      <li class="youtube"><a href="#"><i class="fa fa-youtube-play"></i></a></li> -->
      <!-- </ul> -->
          </div>
        </div>
        <!-- end post-content -->
        </div>
        <!-- end col-7 -->
        <div class="col-md-5 col-12">
          <aside class="sidebar">
            <div class="widget gallery wow fadeIn">
              <h4 class="widget-title">Latest Article</h4>
                <?php $blogs =  homeBlog($conn);
                  foreach ($blogs as $key => $blog) {
                    extract($blog);
                  ?>
                <ul>
                <a <?php echo 'href=blog-details?hid='.$hash_id.'' ?>>
                <li>
                     <div style= "border-radius: 100px; padding: 0px; background:url(<?php echo $image_1; ?>); height:10vh; width: 10vh; background-size: cover; background-position: center; background-repeat: no-repeat;" class="img-responsive"></div>
                </li>
                <span> <?php echo $title; ?></span><br/>
                <span> <?php echo $date_created; ?></span><br/>
                </a>
              </ul>
               <?php } ?>
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

   
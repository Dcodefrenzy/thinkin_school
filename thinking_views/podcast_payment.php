<?php
ob_start();
include "includes/header.php";
 ?>
<!-- end header -->
<section class="page-header">
  <div class="container">
     <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="#">Home</a></li>
      <li class="breadcrumb-item active" aria-current="page">Podcast Subscription</li>
      </ol>
      <h2>PAYMENT RESULT</h2>
     
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
        $book = getAmount($conn,  $ref);
        extract($book);
       /* die(var_dump($price));*/
        $amount = $price; //Correct Amount from Server
        $currency = "NGN"; //Correct Currency from Server
        
        $query = array(
            "SECKEY" => "FLWSECK-89194ff99aa81a70723feb73a71bea67-X",
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
           updatePodcastPayment($conn, $ref);
          updateUserSubscription($conn, $customerMail);
                echo '<div class="col-md-12">
            <div class="inner-box posting">
            <div  style="background:#3498db" class="alert alert-success alert-lg" role="alert">
            <h2 class="postin-title">Success!</h2>
            <p style="color:white">You have successfully paid. Please keep checking your mail '.$customerMail.' for futher information. Thanks</p>
            </div>
            </div>';

          // transaction was successful...
         // please check other things like whether you already gave value for this ref
          // if the email matches the customer who owns the product etc
          //Give Value and return to Success page
        } else {
            //Dont Give Value and return to Failure page

                         echo '<div class="col-md-12">
            <div class="inner-box posting">
            <div style="background:#fbc53c;" class="alert alert- alert-lg" role="alert">
            <h2 class="postin-title">Payment Failed!</h2>
            <p style="color:white">Please check if you have the required ammount for this. Thanks</p>
            </div>
            </div>
            </div>            
            <div align="center"><a href="index">
            <button align="center" style="background:#fbc53c;"  class="alert alert-danger alert-lg" role="alert"> Home</button></a></div>';
        }
    }
    else {
      die('No reference supplied');
    }

?>
          </div>
        </div>
        <!-- end post-content -->
        </div>
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

   
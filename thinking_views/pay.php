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
<!-- <form>
  <a class="flwpug_getpaid" 
  data-PBFPubKey="FLWPUBK-d3c593b304c7d03cab03cf029f31babf-X" 
  data-txref="rave-123456" 
  data-amount="20" 
  data-customer_email="ayodejisamuelfakunle@gmail.com" 
  data-currency="NGN" 
  data-pay_button_text="Pay Now" 
  data-country="NG" 
  data-redirect_url="http://192.168.33.30/pay-result"></a>

  <script type="text/javascript" src="https://api.ravepay.co/flwv3-pug/getpaidx/api/flwpbf-inline.js"></script>
</form> -->
<form>
    <script type="text/javascript" src="https://api.ravepay.co/flwv3-pug/getpaidx/api/flwpbf-inline.js"></script>
    <button type="button" onClick="payWithRave()">Pay Now</button>
</form>

<script>

  window.addEventListener("load", getDetails, false);
  var customerEmail, customerPhone, Payment, invoiceCode, eventName; var data = {};
  function getDetails(event){
    event.preventDefault();
    var href =  window.location.href;
    var query1 = href.split("?")[1]; 
    var query2 = href.split("?")[2];
    var getStrings = query1.split("=");
    var getStrings2 = query2.split("=")
    data[getStrings[0]] = getStrings[1];
    data[getStrings2[0]] = getStrings2[1]
/*    console.log(data.paybooking);
    console.log(data.event);*/
    var dataurl;
    if (data.paybooking && data.event) {
      dataurl = "get-payment-details?paybooking="+data.paybooking+"&&event="+data.event;
    }else if(data.paybooking && data.userid){
      "get-payment-subscription?paybooking="+data.paybooking+"&&userid="+data.userid;
    }
    var url = dataurl;
    var method = 'GET';

    getUserDetails(url, method);
  
    function getUserDetails(url, method){
        xhr = new XMLHttpRequest();
/*          console.log( url)
            console.log( method)*/
        xhr.onreadystatechange = function(){
          if (xhr.readyState == 4) {
            var res = xhr.responseText;
            /*console.log(res);*/
            var data = JSON.parse(res);
            /*console.log(data.response[0][3]);*///email
            /*console.log(data.response[0][4]);*///phone number
            /*console.log(data.response[0][9])*/;//transaction code
            /*console.log(data.response[1][1])*/;//event name
            /*console.log(data.response[1][5])*/;//price
            customerEmail = data.response[0][3];
            customerPhone = data.response[0][4].slice(1);
            Payment = data.response[1][5]; 
            invoiceCode = data.response[0][9];
            eventName = data.response[1][1];

          }
       }
          xhr.open(method, url, true);
         xhr.send();
    }
  }
    const API_publicKey = "publc key";


    function payWithRave() {
        var x = getpaidSetup({
            PBFPubKey: API_publicKey,
            customer_email: customerEmail,
            amount: Payment,
            customer_phone: "234"+customerPhone,
            currency: "NGN",
            payment_plan: eventName, // pass your plan ID here
            txref: invoiceCode,
            meta: [{
                metaname: "flightID",
                metavalue: "AP1234"
            }],
            onclose: function() {},
            callback: function(response) {
                var txref = response.tx.txRef; // collect flwRef returned and pass to a           server page to complete status check.
                console.log("This is the response returned after a charge", response);
                if (
                    response.tx.chargeResponseCode == "00" ||
                    response.tx.chargeResponseCode == "0"
                ) {
                   window.location = "pay-result?resp="+txref;
                    // redirect to a success page
                } else {
                   window.location = "pay-failure?resp="+txref;
                    // redirect to a failure page.
                }

                x.close(); // use this to close the modal immediately after payment.
            }
        });
    }
</script>

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

   
<?php
ob_start();
  include "includes/header.php";
  if(isset($_GET['hid'])){
    $hid = $_GET['hid'];
    $Eachservice = getService($conn, $hid);

  $error= [];
if(array_key_exists('submit', $_POST)){

  if(empty($_POST['name'])){
    $error['name']="Enter a Name";
  }
  if(empty($_POST['email'])){
    $error['email']="Enter an Email Adress";
  }
  if(empty($_POST['phone_number'])){
    $error['phone_number']="Enter a phone_number";
  }

  if(empty($_POST['adress'])){
    $error['adress']="Enter  Main Adress";
  }
    if(empty($_POST['order'])){
    $error['order']="Enter your Order";
  }
  if(empty($error)){

    $clean = array_map('trim', $_POST);

  	//Send Severcies Ordered For To Mail.
/*    $uri = explode("/", $_SERVER['REQUEST_URI']);
    $url = $uri[1];*/
/*     $to = "Thinking School@gmail.com";
     $subject = "Thinking School Web Office Content Upload";
     $txt = "Hello Admin, a service has been booked for "."$url"." page at the back office. Kindly check.";
     $headers = "From: info@Thinking School.com" . "\r\n" .
     "CC: banjimayowa@gmail.com";*/
/*     mail($to,$subject,$txt,$headers);*/
// var_dump($clean);
      submitServiceOrder($conn, $clean, $hid);
      header("Location:service?hid=$hid");
  }
}


     
}
 ?>
<!-- end header -->
<section class="page-header">
	<div class="container">
		 <ol class="breadcrumb">
			<li class="breadcrumb-item"><a href="#">Home</a></li>
			<li class="breadcrumb-item"><a href="#">Service</a></li>
			<li class="breadcrumb-item active" aria-current="page"><?php echo $Eachservice['title']; ?></li>
		  </ol>
		  <h2><?php echo $Eachservice['title']; ?></h2>
	<!-- end container -->
</section>
<!-- end page-header -->
<section class="solutions">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<div class="section-title"> 
          <h2><?php echo $Eachservice['title']; ?></h2>
        <!--   <h6>Because they may falsely report what happened wither<br> knowingly or simply due to confusion</h6> -->
        </div>
        <!-- end section-title -->
			</div>
			<!-- end col-12 -->
			<div class="col-md-4">
				<aside class="sidebar">
					<ul>
          <!--   <li><a href="javascript:void(0)">Business</a>
              <ul> -->
<!--                 <li><a href="solutions01.html">Business Development</a></li>
                <li><a href="solutions02.html">Partners Investment</a>
                  <ul> -->
               <?php 
                   $services = getServices($conn); 
                      foreach ($services as $key => $service) {
                      extract($service);
                ?>
                    <li><a <?php echo 'href=service?hid='.$hash_id.''; ?>><?php echo $title; ?></a></li>
                <?php } ?>
<!--                     <li><a href="javascript:void(0)">Testing Dropdown</a></li>
                    <li><a href="javascript:void(0)">Dropdown Investment</a></li>
                    <li><a href="javascript:void(0)">System Dropdown</a></li>
                    <li><a href="javascript:void(0)">Dropdown Stratagies</a></li>
                  </ul>
                </li>
                <li><a href="solutions03.html">System Tips &amp; Tricks</a></li>
                <li><a href="solutions04.html">Business Stratagies</a></li> -->
<!--               </ul>
            </li>
            <li><a href="solutions05.html">Consultation</a></li>
            <li><a href="solutions06.html">Career</a></li>
            <li><a href="solutions07.html">Training</a></li>
            <li><a href="solutions08.html">Management</a></li>
            <li><a href="solutions09.html">Startups</a></li> -->
          </ul>
				</aside>
			</div>
			<!-- end col-4 -->
			<div class="col-md-8">
			<div class="content-box">
				<figure>
					<img src= <?php echo $Eachservice['image_1']; ?> alt="Image">
				</figure>
				<h5></h5>
				<p><?php echo $Eachservice['body']; ?></p>
				<!-- <p>The media is <strong>constantly</strong> filled with news of one project or another that fails. But they usually talk about major construction or municipal infrastructure projects. And then they try to justify business people learning about project management because of the construction failures.</p>
				<p>There are three basic types of business project. The first is the strategic project. This type of project is focused on achieving objectives determined during the business <u>planning</u> or <u>strategic process</u>. A second type is the operational project. These are projects which are initiated for business reasons other than achieving a strategic objective. For example, a general ledger may have become obsolete. </p>
				<p>So a <strong>business</strong> project is initiated in order to implement a new release of the general ledger. The third type is the repeating or operationalized project. These projects run so frequently that much of the regular project planning can be repeated.</p> -->
<!-- 				<ul class="gallery">
					<li><a href="images/image11.jpg" data-fancybox><img src="images/image11.jpg" alt="Image"></a></li>
					<li><a href="images/image14.jpg" data-fancybox><img src="images/image14.jpg" alt="Image"></a></li>
					<li><a href="images/image10.jpg" data-fancybox><img src="images/image10.jpg" alt="Image"></a></li>
					
				</ul> -->
<!-- 				<p>There are three basic types of business project. The first is the strategic project. This type of project is focused on achieving objectives determined during the business planning or strategic process. A second type is the operational project. These are projects which are initiated for business reasons other than achieving a strategic objective. For example, a general ledger may have become obsolete. </p>
				<ul class="list">
					<li>The second key characteristic of a project is that of uniqueness.</li>
					<li>The product is always unique.</li>
					<li>The specific set of tasks that make up the project, are almost always unique.</li>
					<li>The tasks may follow a pattern.</li>
					<li>The tasks may be individually common.</li>
					<li>However, the arrangement of tasks and something</li>
					<li>The tasks will be unique to this project.</li>
				</ul>
				<p>So a business project is initiated in order to implement a new release of the general ledger. The third type is the repeating or operationalized project. These projects run so frequently that much of the regular project planning can be repeated.</p> -->
				</div>
				<!-- end content-box -->
			</div>
			<!-- end col-8 -->
		</div>
		<!-- end row -->
	</div>
	<!-- end container -->
</section>
<section class="request-form">
  <div class="container">
    <div class="row">
      <div class="col-lg-5 wow fadeIn">
        <div class="section-title light">
          <h2>Service Request Form</h2>
          <h6>Please Fill The Form Below To Book For Our Service(s) And Get A Response Shortly.</h6>
        </div>
        <!-- end section-title --> 
      </div>
      <!-- end col-5 -->
      <div class="col-lg-7 wow fadeIn">
        <form class="row inner" method="POST">
          <div class="form-group col-md-6">
            <label>Your Name</label>
            <?php $display = displayErrors($error, 'name'); echo $display; ?>
            <input type="text" name="name">
          </div>
          <!-- end form-group -->
          <div class="form-group col-md-6">
            <label>Email</label>
            <?php $display = displayErrors($error, 'email'); echo $display; ?>
            <input type="email" name="email">
          </div>
          <!-- end form-group -->
           <div class="form-group col-md-6">
            <label>Adress</label>
            <?php $display = displayErrors($error, 'adress'); echo $display; ?>
            <input type="text" name="adress">
          </div>
          <!-- end form-group -->
          <div class="form-group col-md-6">
            <label>Phone Number</label>
            <?php $display = displayErrors($error, 'phone_number'); echo $display; ?>
            <input type="Number" name="phone_number">
          </div>
          <!-- end form-group -->
            <div class="form-group col-md-6">
            <label>Purpose</label>
            <?php $display = displayErrors($error, 'order'); echo $display; ?>
            <input type="text" name="order">
          </div>
          <!-- end form-group -->
          <div class="form-group col-md-4">
            <label>&nbsp;</label>
            <input type="submit" value="submit" name="submit">
          </div>
          <!-- end form-group -->
        </form>
        <!-- end form --> 
      </div>
      <!-- end col-7 --> 
    </div>
    <!-- end row --> 
  </div>
  <!-- end container --> 
</section>
<!-- end solutions -->
<?php include "includes/footer.php"; ?>
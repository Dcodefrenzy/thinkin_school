<?php
ob_start();
header("cache-control:no-cache");
include("include/student_limit.php");
include("include/level1_limit.php");
include("include/level2_limit.php");
$userinfo = clientInfo($conn,$_GET['id']);

$stmt = $conn->prepare("UPDATE user SET verification=:vs,user_status=:us WHERE hash_id=:gid");
$ver = 1;
$status = 1;
$stmt->bindParam(":gid",$_GET['id']);
$stmt->bindParam(":vs",$ver);
$stmt->bindParam(":us",$status);
$stmt->execute();

$email = $userinfo['email'];
$firstname = $userinfo['firstname'];
$lastname = $userinfo['lastname'];

/*
$to = $email;
$subject = "Thinking School Web Office Sharer Verification";
$txt = "Hello $firstname $lastname, You have been Verified from the Thinking School Web Office to earn from sharing Posts. Login at https://Thinking School.com/userLogin";
$headers = "From: info@Thinking School.com" . "\r\n" .
"CC: Thinking School@gmail.com";*/

mail($to,$subject,$txt,$headers);

// mail($email, "test email", "test email message");

// require_once "Mail.php"; // PEAR Mail package
// require_once ('Mail/mime.php'); // PEAR Mail_Mime packge
//
//       $from = "info@mckodev.com.ng"; //enter your email address
//  $to = $email; //enter the email address of the contact your sending to
//  $subject = "Thinking School VERIFICATION"; // subject of your email
//
// $headers = array ('From' => $from,'To' => $to, 'Subject' => $subject);
//
// // $text = ''; // text versions of email.
// $html = "<html><body>Hello, $firstname $lastname <br>You have been verified at the Thinking School Web Office. You can now login to the Web Office at \"https://news.mckodev.com.ng/admin-login"; // html versions of email.
//
// $crlf = "\n";
//
// $mime = new Mail_mime($crlf);
// // $mime->setTXTBody($text);
// $mime->setHTMLBody($html);
//
// //do not ever try to call these lines in reverse order
// $body = $mime->get();
// $headers = $mime->headers($headers);
//
//  $host = "localhost"; // all scripts must use localhost
//  $username = "qservers@mckodev.com.ng"; //  your email address (same as webmail username)
//  $password = "Digital2017+"; // your password (same as webmail password)
//
// $smtp = Mail::factory('smtp', array ('host' => $host, 'auth' => true,
// 'username' => $username,'password' => $password));
//
// $mail = $smtp->send($to, $headers, $body);
//
// if (PEAR::isError($mail)) {
//
// $error['mail']= "<p>" . $mail->getMessage() . "</p>";
// }
// else {
// 	$success = [];
//  		$success['mail'] = "A verification link has been sent to your mail";
// }

// die(var_dump($userinfo));
// if($tb == ""){
header("location:clients");
// }






 ?>

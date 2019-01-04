<?php 
function authentication(){
	if (!isset($_SESSION['username'])) {
			  $success = "You are not signed in";
			   $msg= preg_replace('/\s+/', '_', $success);
			     header("Location:user_login?msg=$msg");
	}
}



 ?>
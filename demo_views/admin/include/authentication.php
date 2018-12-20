<?php
function authenticate(){
if (!isset($_SESSION['id'])){
  $success = "You are not signed in";
  $succ = preg_replace('/\s+/', '_', $success);
  header("Location:admin-login?sgn=$succ");
	}
}

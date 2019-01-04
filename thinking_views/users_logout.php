<?php
session_start();
setLogout($conn,"users",$_SESSION['hash_id']);
unset($_SESSION['username']);
unset($_SESSION['hash_id']);
/*session_destroy();*/
header("Location: index");
 ?>

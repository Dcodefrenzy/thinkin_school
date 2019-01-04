<?php
session_start();
setLogout($conn,"admin",$_SESSION['id']);
unset($_SESSION['id']);
/*session_destroy();*/
header("Location: admin-login");
 ?>

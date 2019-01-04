<?php
/*include("include/student_limit.php");
include("include/level1_limit.php");
include("include/level2_limit.php");*/

$tb = "unsubscribe";
$stmt = $conn->prepare("UPDATE users SET subscription_status=:vs WHERE hash_id=:gid");

$stmt->bindParam(":gid",$_GET['id']);
$stmt->bindParam(":vs",$tb);
$stmt->execute();

header("location:view-users");
 ?>

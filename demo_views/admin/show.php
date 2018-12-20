<?php
/*include("include/level1_limit.php");
include("include/student_limit.php");
include("include/level2_limit.php");*/
$tb = $_GET['t'];
$stmt = $conn->prepare("UPDATE $tb SET visibility=:vs WHERE hash_id=:gid");
$show = "show";
$stmt->bindParam(":gid",$_GET['id']);


$stmt->bindParam(":vs",$show);
$stmt->execute();

if($tb == "events"){
header("location:view-events");
}
if($tb == "blog"){
header("location:manage-articles");
}

if($tb == "training"){
header("location:managePrograms");
}
if($tb == "insight"){
header("location:manageInsights");
}
if($tb == "services"){
header("location:manage-services");
}
if($tb == "campus_article"){
header("location:manageCampusArticles");
}
if($tb == "exploits"){
header("location:manageExploits");
}
// if($tb == ""){
// header("location:manageTrainings");
// }






 ?>

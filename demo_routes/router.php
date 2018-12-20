<?php
$uri = explode("/", $_SERVER['REQUEST_URI']);
//var_dump($uri);

if(count($uri)> 2){
  header("Location:/index");
}

//Creating A Null variable to be populated for the query String Route;
$category_id = NULL;
$category_name= NULL;

//Creating a $_GET condition to populate the Null Variables;
if(isset($_GET['id'])){
  $category_id = $_GET['id'];
}

$msg = NULL;
if(isset($_GET['msg'])){
  $msg = $_GET['msg'];
}

$ssp = NULL;
if(isset($_GET['ssp'])){
  $ssp = $_GET['ssp'];
}
if(isset($_GET['name'])){
  $category_name = $_GET['name'];
}
$success = NULL;
if(isset($_GET['success'])){
  $success = $_GET['success'];
}

$err = NULL;
if(isset($_GET['err'])){
  $err = $_GET['err'];
}

$wn = NULL;
if(isset($_GET['wn'])){
  $wn = $_GET['wn'];
}

$sgn = NULL;
if(isset($_GET['sgn'])){
  $sgn = $_GET['sgn'];
}

$id = NULL;
if(isset($_GET['id'])){
  $id = $_GET['id'];
}

$t = NULL;
if(isset($_GET['t'])){
  $t = $_GET['t'];
}




switch ($uri[1]) {


//   case "":
// include APP_PATH."/demo_views/admin/admin_home.php";
//   break;

  case "admin-home":
  include APP_PATH."/demo_views/admin/admin_home.php";
  break;

  case "add-article":
  include APP_PATH."/demo_views/admin/add_news.php";
  break;
  case "add-services":
  include APP_PATH."/demo_views/admin/add_services.php";
  break;
  case "add-exploit":
  include APP_PATH."/demo_views/admin/add_exploit.php";
  break;

  case "add-insight":
  include APP_PATH."/demo_views/admin/add_insights.php";
  break;

  case "contents":
  include APP_PATH."/demo_views/admin/content.php";
  break;

  case "add-report":
  include APP_PATH."/demo_views/admin/add_report.php";
  break;

  case "delete-trainings?id=$id":
  include APP_PATH."/demo_views/admin/delete_training.php";
  break;

  case "add-training":
  include APP_PATH."/demo_views/admin/add_trainings.php";
  break;

  case "add-events":
  include APP_PATH."/demo_views/admin/add_events.php";
  break;

  case "edit-events":
  include APP_PATH."/demo_views/admin/edit_events.php";
  break;

  case "add-news":
  include APP_PATH."/demo_views/admin/add_news.php";
  break;

  case "add-campus-news":
  include APP_PATH."/demo_views/admin/add_campus_news.php";
  break;

  case "add-resources":
  include APP_PATH."/demo_views/admin/add_resources.php";
  break;

  case "logout":
  include APP_PATH."/demo_views/admin/logout.php";
  break;

  case "addArticle?success=$success":
  include APP_PATH."/demo_views/admin/add_blog.php";
  break;
  case "addServices?success=$success":
  include APP_PATH."/demo_views/admin/add_services.php";
  break;
  case "delete_frontage?id=$id":
  include APP_PATH."/demo_views/admin/delete_frontage.php";
  break;

  case "Services-orders":
  include APP_PATH."/demo_views/admin/viewService_order.php";
  break;
  case "Services-orders?success=$success":
  include APP_PATH."/demo_views/admin/viewService_order.php";
  break;
  case "delete-service-order?id=$id":
  include APP_PATH."/demo_views/admin/delete_service_order.php";
  break;



  case "quote":
  include APP_PATH."/demo_views/admin/view_quotes.php";
  break;
  case "quote?success=$success":
  include APP_PATH."/demo_views/admin/view_quotes.php";
  break;

  case "addExploit?success=$success":
  include APP_PATH."/demo_views/admin/add_exploit.php";
  break;

  case "addInsight?success=$success":
  include APP_PATH."/demo_views/admin/add_insights.php";
  break;

  case "addNews?success=$success":
  include APP_PATH."/demo_views/admin/add_news.php";
  break;


  case "add-training?success=$success":
  include APP_PATH."/demo_views/admin/add_trainings.php";
  break;

  case "suspend?id=$id":
  include APP_PATH."/demo_views/admin/suspend.php";
  break;
  case "suspendClient?id=$id":
  include APP_PATH."/demo_views/admin/suspend_client.php";
  break;

  case "verify?id=$id":
  include APP_PATH."/demo_views/admin/verify.php";
  break;
  case "verify-client?id=$id":
  include APP_PATH."/demo_views/admin/verify_client.php";
  break;

  case "setLevel?id=$id":
  include APP_PATH."/demo_views/admin/setLevel.php";
  break;

  case "delete-user?id=$id":
  include APP_PATH."/demo_views/admin/delete_user.php";
  break;
  case "delete-client?id=$id":
  include APP_PATH."/demo_views/admin/delete_client.php";
  break;

  case "add-category":
  include APP_PATH."/demo_views/admin/add_category.php";
  break;

  case "view-users":
  include APP_PATH."/demo_views/admin/view_users.php";
  break;

  case "view-events":
  include APP_PATH."/demo_views/admin/view_events.php";
  break;

  case "view-events?success=$success":
  include APP_PATH."/demo_views/admin/view_events.php";
  break;

  case "edit-events?id=$id":
  include APP_PATH."/demo_views/admin/edit_events.php";
  break;

  case "edit-trainings?id=$id":
  include APP_PATH."/demo_views/admin/edit_training.php";
  break;

  case "delete-event?id=$id&t=$t":
  include APP_PATH."/demo_views/admin/delete_events.php";
  break;

  case "edit-project?id=$id":
  include APP_PATH."/demo_views/admin/edit_project.php";
  break;

  case "manage-projects":
  include APP_PATH."/demo_views/admin/view_project.php";
  break;

  case "manage-projects?success=$success":
  include APP_PATH."/demo_views/admin/view_project.php";
  break;

  case "delete-project?id=$id&t=$t":
  include APP_PATH."/demo_views/admin/delete_project.php";
  break;

  case "log":
  include APP_PATH."/demo_views/admin/log.php";
  break;

  case "view-users?success=$success":
  include APP_PATH."/demo_views/admin/view_users.php";
  break;

  case "manageNews":
  include APP_PATH."/demo_views/admin/view_news.php";
  break;

  case "manageCampusNews":
  include APP_PATH."/demo_views/admin/view_campus_news.php";
  break;

  case "manageCampusNews?success=$success":
  include APP_PATH."/demo_views/admin/view_campus_news.php";
  break;

  case "manageEvent":
  include APP_PATH."/demo_views/admin/view_event.php";
  break;

  case "manage-event?success=$success":
  include APP_PATH."/demo_views/admin/view_event.php";
  break;

  case "manage-articles":
  include APP_PATH."/demo_views/admin/view_articles.php";
  break;
  case "manage-services":
  include APP_PATH."/demo_views/admin/view_services.php";
  break;

  case "manage-services?success=$success":
  include APP_PATH."/demo_views/admin/view_services.php";
  break;

  case "manage-category":
  include APP_PATH."/demo_views/admin/view_category.php";
  break;

  case "manageInsights":
  include APP_PATH."/demo_views/admin/view_insights.php";
  break;

  case "insightCategory":
  include APP_PATH."/demo_views/admin/add_package.php";
  break;

  case "show":
  include APP_PATH."/demo_views/admin/show.php";
  break;

  case "show?id=$id&t=$t":
  include APP_PATH."/demo_views/admin/show.php";
  break;

  
   case "event-status?id=$id&t=$t":
  include APP_PATH."/demo_views/admin/event_status.php";
  break;

   case "training-status?id=$id&t=$t":
  include APP_PATH."/demo_views/admin/training_status.php";
  break;

  case "show?id=$id":
  include APP_PATH."/demo_views/admin/show.php";
  break;

  case "hide":
  include APP_PATH."/demo_views/admin/hide.php";
  break;

  case "edit-article?id=$id":
  include APP_PATH."/demo_views/admin/edit_article.php";
  break;
  case "edit-services?id=$id":
  include APP_PATH."/demo_views/admin/edit_services.php";
  break;
  case "edit-category?id=$id":
  include APP_PATH."/demo_views/admin/edit_category.php";
  break;

  case "edit-about?id=$id":
  include APP_PATH."/demo_views/admin/edit_about.php";
  break;

  case "editInsight?id=$id":
  include APP_PATH."/demo_views/admin/edit_insight.php";
  break;

  case "editNews?id=$id":
  include APP_PATH."/demo_views/admin/edit_news.php";
  break;
  case "editCampusNews?id=$id":
  include APP_PATH."/demo_views/admin/edit_campus_news.php";
  break;
  case "manageNews?success=$success":
  include APP_PATH."/demo_views/admin/view_news.php";
  break;

  case "hide?id=$id&t=$t":
  include APP_PATH."/demo_views/admin/hide.php";
  break;

  case "hide?id=$id":
  include APP_PATH."/demo_views/admin/hide.php";
  break;

  case "insightCategory?success=$success":
  include APP_PATH."/demo_views/admin/add_package.php";
  break;

  case "newsCategory":
  include APP_PATH."/demo_views/admin/add_news_category.php";
  break;

  case "newsCategory?success=$success":
  include APP_PATH."/demo_views/admin/add_news_category.php";
  break;
  case "campus":
  include APP_PATH."/demo_views/admin/add_campus.php";
  break;

  case "campus?success=$success":
  include APP_PATH."/demo_views/admin/add_campus.php";
  break;

  case "addProfile":
  include APP_PATH."/demo_views/admin/add_profile.php";
  break;

  case "addProfile?success=$success":
  include APP_PATH."/demo_views/admin/add_profile.php";
  break;
  case "add-about":
  include APP_PATH."/demo_views/admin/add_about.php";
  break;

  case "add-about?success=$success":
  include APP_PATH."/demo_views/admin/add_about.php";
  break;

  case "add-project":
  include APP_PATH."/demo_views/admin/add_project.php";
  break;

  case "add-project?success=$success":
  include APP_PATH."/demo_views/admin/add_project.php";
  break;

  case "admin-registration":
  include APP_PATH."/demo_views/admin/add_admin.php";
  break;

  case "admin-registration?success=$success":
  include APP_PATH."/demo_views/admin/add_admin.php";
  break;

  case "admin-login?wn=$wn":
  include APP_PATH."/demo_views/admin/admin_login.php";
  break;

  case "admin-login?sgn=$sgn":
  include APP_PATH."/demo_views/admin/admin_login.php";
  break;

  case "admin-login?ssp=$ssp":
  include APP_PATH."/demo_views/admin/admin_login.php";
  break;

  case "admin-login?err=$err":
  include APP_PATH."/demo_views/admin/admin_login.php";
  break;

  case "admin-login":
  include APP_PATH."/demo_views/admin/admin_login.php";
  break;

  case "admin":
  include APP_PATH."/demo_views/admin/admin_home.php";
  break;

  case "admin?wn=$wn":
  include APP_PATH."/demo_views/admin/admin_home.php";
  break;

  case "manage-views":
  include APP_PATH."/demo_views/admin/manage_views.php";
  break;

  case "manage-views?success=$success":
  include APP_PATH."/demo_views/admin/manage_views.php";
  break;

  case "edit-image?id=$id&t=$t":
  include APP_PATH."/demo_views/admin/edit_image.php";
  break;

  case "delete-article?id=$id":
  include APP_PATH."/demo_views/admin/delete_article.php";
  break;
  case "delete-services?id=$id":
  include APP_PATH."/demo_views/admin/delete_services.php";
  break;
  case "delete-category?id=$id":
  include APP_PATH."/demo_views/admin/delete_category.php";
  break;
  case "delete-events?id=$id":
  include APP_PATH."/demo_views/admin/delete_events.php";
  break;
  case "deleteInsight?id=$id":
  include APP_PATH."/demo_views/admin/delete_insight.php";
  break;

  case "deleteNews?id=$id":
  include APP_PATH."/demo_views/admin/delete_news.php";
  break;

  case "manageInsights?success=$success":
  include APP_PATH."/demo_views/admin/view_insights.php";
  break;

  case "manage-articles?success=$success":
  include APP_PATH."/demo_views/admin/view_articles.php";
  break;
  case "manage-campusArticles?success=$success":
  include APP_PATH."/demo_views/admin/view_campus_articles.php";
  break;
  case "manage-category?success=$success":
  include APP_PATH."/demo_views/admin/view_category.php";
  break;

  case "manage-about":
  include APP_PATH."/demo_views/admin/manage_about.php";
  break;
  case "clients":
  include APP_PATH."/demo_views/admin/users.php";
  case "clients?success=$success":
  include APP_PATH."/demo_views/admin/users.php";
  break;
  case "manage-about?success=$success":
  include APP_PATH."/demo_views/admin/manage_about.php";
  break;

  case "manage-reports?success=$success":
  include APP_PATH."/demo_views/admin/manage_reports.php";
  break;

  case "manage-reports":
  include APP_PATH."/demo_views/admin/manage_reports.php";
  break;

  case "manage-resources?success=$success":
  include APP_PATH."/demo_views/admin/manage_resources.php";
  break;

  case "manage-resources":
  include APP_PATH."/demo_views/admin/manage_resources.php";
  break;

  case "manage-trainings?success=$success":
  include APP_PATH."/demo_views/admin/manage_trainings.php";
  break;

  case "manage-trainings":
  include APP_PATH."/demo_views/admin/manage_trainings.php";
  break;

  case "manage-about?success=$success":
  include APP_PATH."/demo_views/admin/manage_about.php";
  break;

  case "manage-trainings":
  include APP_PATH."/demo_views/admin/manage_grants.php";
  break;

  case "edit-content?id=$id&t=$t":
  include APP_PATH."/demo_views/admin/editResources.php";
  break;

  case "view-body?id=$id&t=$t":
  include APP_PATH."/demo_views/admin/view_body.php";
  break;

  case "delete-content?id=$id&t=$t":
  include APP_PATH."/demo_views/admin/delete_resource.php";
  break;

  ///////Public Routes////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
}





?>
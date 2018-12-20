<?php
$uri = explode("/", $_SERVER['REQUEST_URI']);
//var_dump($uri);

if(count($uri)> 2){
  header("Location:/admin_home");
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
if(isset($_GET['name'])){
  $category_name = $_GET['name'];
}
$success = NULL;
if(isset($_GET['success'])){
  $success = $_GET['success'];
}

$note = NULL;
if(isset($_GET['note'])){
  $note = $_GET['note'];
}

$err = NULL;
if(isset($_GET['err'])){
  $err = $_GET['err'];
}


$product_id = NULL;
if(isset($_GET['product_id'])){
  $product_id = $_GET['product_id'];
}

$cart_id = NULL;
if(isset($_GET['cart_id'])){
  $cart_id = $_GET['cart_id'];
}
$sub_cat_id =  NULL;
if (isset($_GET['sub_cat_id'])) {
  $sub_cat_id = $_GET['sub_cat_id'];
}



  $hid = NULL;
  if(isset($_GET['hid'])){
    $hid = $_GET['hid'];
  }
  $user_id = NULL;
  if(isset($_GET['user_id'])){
    $user_id = $_GET['user_id'];
  }
   $cat_id = NULL;
  if(isset($_GET['cat_id'])){
    $cat_id = $_GET['cat_id'];
  }
  $i = "";
  if(isset($_GET['page'])){
    $i = $_GET['page'];
  }
      $inventory = "";
  if (isset($_GET['stock'])) {
    $inventory = $_GET['stock'];
  }
  $hash_id = NULL;
  if (isset($_GET['hash_id'])) {
    $hash_id = $_GET['hash_id'];
  }

$t = NULL;
if(isset($_GET['t'])){
  $t = $_GET['t'];
}

switch ($uri[1]) {




  case "admin?msg=$msg":
  include APP_PATH."/views/admin/adminlogin.php";
  break;

  case "admin_register":
  include APP_PATH."/views/admin/register.php";
  break;

  case "admin_home":
  include APP_PATH."/views/admin/adminhome.php";
  break;

  case "add_products":
  include APP_PATH."/views/admin/addProducts.php";
  break;

  case "del":
  include APP_PATH."/views/admin/deleteCategory.php";
  break;

  case "product_category":
  include APP_PATH."/views/admin/category.php";
  break;

  case "product_sub_category":
  include APP_PATH."/views/admin/subcategory.php";
  break;

  case "product_final_category":
  include APP_PATH."/views/admin/final_category.php";
  break;



  case "final_category":
  include APP_PATH."/views/admin/final_category.php";
  break;

  case "edit_Final_Category?id=$category_id":
  include APP_PATH."/views/admin/editFinalCategory.php";
  break;

  case "getSubCategory":
  include APP_PATH."/views/admin/ajax/subcategory.php";
  break;

  case "finalCategory":
  include APP_PATH."/views/admin/ajax/finalCategory.php";
  break;

  case "edit_products":
  include APP_PATH."/views/admin/editProducts.php";
  break;

  case "delete_products":
  include APP_PATH."/views/admin/deleteProducts.php";
  break;

  case "edit_sub_category":
  include APP_PATH."/views/admin/editSubCategory.php";
  break;

  case "edit_category":
  include APP_PATH."/views/admin/editCategory.php";
  break;


  #Routes With Query Strings are Below;


  case "editSubCategory?id=$category_id":
  include APP_PATH."/views/admin/editSubCategory.php";
  break;

  case "edit_products?product_id=$product_id":
  include APP_PATH."/views/admin/editProducts.php";
  break;

  case "editProductImage?product_id=$product_id":
  include APP_PATH."/views/admin/editProductImage.php";
  break;

  case "deleteProducts?product_id=$product_id": //$product_id has been created
  include APP_PATH."/views/admin/deleteProducts.php";
  break;

  case "product_category?success=$success":
  include APP_PATH."/views/admin/category.php";
  break;

  case "logout":
  include APP_PATH."/views/admin/logout.php";
  break;


  case "quote?hid=$hid":
  include APP_PATH."/views/users/users_quote.php";
  break;













  ///////Public Routes//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////


  case "":
  include APP_PATH."/thinking_views/home.php";
  break;

  case "home":
  include APP_PATH."/thinking_views/home.php";
  break;

  case "about":
  include APP_PATH."/thinking_views/aboutUs.php";
  break;
  case "index":
  include APP_PATH."/thinking_views/home.php";
  break;

  case "product":
  include APP_PATH."/views/users/users_products.php";
  break;

  case "blog?hid=$hid":
  include APP_PATH."/thinking_views/blog.php";
  break;

  case "service?hid=$hid":
  include APP_PATH."/thinking_views/services.php";
  break; 

  case "projects":
  include APP_PATH."/thinking_views/projects.php";
  break; 

  case "project?hid=$hid":
  include APP_PATH."/thinking_views/project-details.php";
  break; 


  case "blog-details?hid=$hid":
  include APP_PATH."/thinking_views/blog-single.php";
  break;

  case "gallery":
  include APP_PATH."/thinking_views/gallery.php";
  break;

  case "events":
  include APP_PATH."/thinking_views/events.php";
  break;


  case "training-details?hid=$hid":
  include APP_PATH."/thinking_views/training_details.php";
  break;


  case "training":
  include APP_PATH."/thinking_views/trainings.php";
  break;

  case "events-details?hid=$hid":
  include APP_PATH."/thinking_views/events-details.php";
  break;


  case "book?hid=$hid&&t=$t":
  include APP_PATH."/thinking_views/book-events.php";
  break;



  case "book?hid=$hid&&t=$t&&note=$note":
  include APP_PATH."/thinking_views/book-events.php";
  break;

  case "book?hid=$hid&&t=$t&&err=$err":
  include APP_PATH."/thinking_views/book-events.php";
  break;


  case "viewBlog":
  include APP_PATH."/views/users/users_viewblog.php";
  break;

  case "viewBlog?hid=$hid":
  include APP_PATH."/views/users/users_viewblog.php";
  break;


  case "category":
  include APP_PATH."/views/users/users_category.php";
  break;

  case "estimate":
  include APP_PATH."/views/users/users_estimate.php";
  break;

  case "careers":
  include APP_PATH."/views/users/users_careers.php";
  break;

  case "team":
  include APP_PATH."/views/users/users_team.php";
  break;

  case "testimonials":
  include APP_PATH."/views/users/users_testimonials.php";
  break;


  case "product?sub_cat_id=$sub_cat_id":
  include APP_PATH."/views/users/users_products.php";
  break;

   case "product?sub_cat_id=$sub_cat_id&&page=$i":
  include APP_PATH."/views/users/users_products.php";
  break;

   case "product?cat_id=$cat_id":
  include APP_PATH."/views/users/users_products.php";
  break;

  case "product?hid=$hid":
  include APP_PATH."/views/users/users_products.php";
  break;

  case "product?hid=$hid&&page=$i":
  include APP_PATH."/views/users/users_products.php";
  break;

  case "product?page=$i":
  include APP_PATH."/views/users/users_products.php";
  break;

  case "contact":
  include APP_PATH."/views/users/users_contact.php";
  break;

  case "login":
  include APP_PATH."/views/users/users_login.php";
  break;

  case "services":
  include APP_PATH."/views/users/users_services.php";
  break;


   case "login?user_id=$user_id":
  include APP_PATH."/views/users/users_login.php";
  break;


  case "user_login?msg=$msg":
  include APP_PATH."/views/users/users_login.php";
  break;

  case "register":
  include APP_PATH."/views/users/users_register.php";
  break;


   case "register?user_id=$user_id":
  include APP_PATH."/views/users/users_register.php";
  break;

  case "login?success=$success":
  include APP_PATH."/views/users/users_login.php";
  break;



  case "getProduct":
  include APP_PATH."/views/users/ajax/get_product.php";
  break;



  case "addProject":
  include APP_PATH."/demo_views/admin/add_project.php";
  break;



  case "manageProjects":
  include APP_PATH."/demo_views/admin/view_project.php";
  break;

  case "manageProjects?success=$success":
  include APP_PATH."/demo_views/admin/view_project.php";
  break;

  case "project":
  include APP_PATH."/views/users/users_project.php";
  break;

  case "projectView?hid=$hid":
  include APP_PATH."/views/users/users_projectView.php";
  break;

  case "bookings?hid=$hid":
  include APP_PATH."/views/users/book_services.php";
  break;

  case "bookings":
  include APP_PATH."/views/users/book_services.php";
  break;

  case 'user-registration':
  include APP_PATH."/thinking_views/users_register.php";
  break;

   case 'user-login':
  include APP_PATH."/thinking_views/user_login.php";
  break;

  case "user-login?err=$err":
  include APP_PATH."/thinking_views/user_login.php";
  break;


}




?>

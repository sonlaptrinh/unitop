<?php
require 'inc/header.php';
?>
<!--    end header-->
<?php
//$page = $_GET['page'];
//echo $page;
$page = !empty($_GET['page'])?$_GET['page']:'home';
$path = "page/{$page}.php";

if (file_exists($path)){
    require $path;
}else{
    echo "không tồn tại trang này";
};
?>
<!--  end content-->
<?php
require 'inc/footer.php';
?>
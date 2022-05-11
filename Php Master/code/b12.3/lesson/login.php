<?php
//thiết lập khi login thành công
ob_start();
session_start();
//$is_login = true;
$_SESSION['is_login'] = true;
$_SESSION['user_login'] = 'quangson';
header("Location: wellcome.php");
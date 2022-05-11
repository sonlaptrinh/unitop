<?php
ob_start();
// Thiết lập khi login thành công
$is_login = true;
header("location: login.php");
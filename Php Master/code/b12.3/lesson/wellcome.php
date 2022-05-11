<?php
echo "trang chủ <br>";
session_start();
if (!isset($_SESSION['is_login'])) {
    header("Location: login.php");
}{
    echo $_SESSION['user_login'];
};
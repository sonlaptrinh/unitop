<?php
session_start();
unset($_SESSION['is_login']);
unset($_SESSION['user_login']);
header("Location: wellcome.php");

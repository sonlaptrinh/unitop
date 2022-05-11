<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h1>Trang login</h1>
<h1>Chào mừng bạn đăng nhập thành công</h1>
<h2>Tên đăng nhập của bạn là:</h2>
<?php
$username = $_POST['username'];
echo "$username";
?>
<h2 >Mật khẩu của bạn là:</h2>
<?php
$pwd = $_POST['pwd'];
echo "$pwd";
?>
<br>
<br>
</body>
</html>
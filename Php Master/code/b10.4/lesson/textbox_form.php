<?php
/*
 * B1: Kiểm tra thông tin và lấy dữ liệu trên username và password
 */
if (isset($_POST['btn_login'])) {
    if (empty($_POST['username'])) {
        echo "không được để trống username";
    } else {
        $username = $_POST['username'];
        echo $username;
    }

    if (empty($_POST['password'])) {
        echo "không được để trống password";
    } else {
        $password = $_POST['password'];
        echo $password;
    }

}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lấy dữ liệu từ textbox</title>
</head>
<body>
<h1>Đăng nhập</h1>
<form action="" method="post">
    Username: <input type="text" name="username"> <br> <br>
    Password: <input type="Password" name="password"> <br> <br>
    <input type="submit" name="btn_login" value="login">
</form>
</body>
</html>
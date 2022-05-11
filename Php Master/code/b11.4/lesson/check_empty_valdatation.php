<?php
if (isset($_POST['btn_login'])) {
//    echo "<pre>";
//    print_r($_POST);
//    echo "<pre>";
    $error = array(); // phất cờ
    if (empty($_POST['username'])) {
        $error['username'] = 'Không được để trống trường username';
    } else {
        $username = $_POST['username'];
    };
    if (empty($_POST['password'])) {
        $error['password'] = "Không được để trống trường password";
    } else {
        $password = $_POST['password'];
    };

    if (empty($error)) {
        echo "Username: $username <br> Password:$password";
    } else {
//        echo $error['username'];
//        echo $error['password'];


    };
}
?>
    <!doctype html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Chuẩn hóa dữ liệu form</title>
    </head>
    <body>
    <h1>Đăng nhập</h1>
    <form action="" method="post">
        <label for="username">Username</label>
        <input type="text" name="username" id="username"> <br>
        <p class="error"> <?php if (!empty($error['username'])){ echo $error['username'];}; ?> </p>
        <label for="password">Password</label>
        <input type="password" name="password" id="password"> <br>
        <?php if (!empty($error['password'])){ echo $error['password'];}; ?> <br>
        <input type="submit" name="btn_login" id="login">
    </form>
    </body>
    </html><?php

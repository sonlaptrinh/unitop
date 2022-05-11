<?php
if (isset($_POST['btn_login'])) {
    $info_user = array(
        'username' => 'son',
        'password' => 'son123',
    );
    $error = array();
    if (empty($_POST['username'])) {
        $error['username'] = "không được để trống username";
    } else {
        $username = $_POST['username'];
    }

    if (empty($_POST['password'])) {
        $error['password'] = "không được để trống password";
    } else {
        $password = $_POST['password'];
    };

    if(empty($error)){
        if (($username = $info_user['username'])&&(($password = $info_user['password']))){
            $redirect_to = $_POST['redirect_to'];
            echo "$redirect_to";
            header("location:{$redirect_to}");
        }else{$error['login'] = 'Dữ liệu nhập bị sai';};
    } else { echo "bạn chưa nhập usernam hoặc password";

    }

};
?>
<!doctype html>
<hatml lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Lấy dữ liệu từ hidden field</title>
    </head>
    <body>
    <h1>Đăng nhập</h1>
    <form action="" method="post">
        Username: <input type="text" name="username"> <br> <br>
        Password: <input type="Password" name="password"> <br> <br>
        <input type="hidden" name="redirect_to" value="cart.php">
        <input type="submit" name="btn_login" value="login">
    </form>
    </body>
</hatml>
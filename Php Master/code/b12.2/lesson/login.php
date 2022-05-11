<?php
if (isset($_POST['btn_reg'])) {
//    echo "<pre>";
//    print_r($_POST);
//    echo "<pre>";
    $error = array(); // phất cờ
    //kiểm tra username
    if (empty($_POST['username'])) {
        $error['username'] = 'Không được để trống trường username';
    } else {
        if (!(strlen($_POST['username']) >= 6 && strlen($_POST['username']) <= 32)) {
            $error['username'] = 'Username có độ dài từ 6 đến 32 ký tự';
        } else {
            $partten = "/^[A-Za-z0-9_\.]{6,32}$/";
            if (!preg_match($partten, $_POST['username'], $matchs)) {
                $error['username'] = 'Username cho phép sử dụng chuỗi ký tự, chữ số, dấu ghạch dưới, có độ dài từ 6 đến 32 ký tự';
            } else {
                $username = $_POST['username'];
            };
        };

    };
    //kiểm tra giới tính
    if (empty($_POST['gender'])) {
        $error['gender'] = 'Bạn cần chọn giới tính';
    } else {
        $gender = $_POST['gender'];
    };
    // kiểm tra mật khẩu
    if (empty($_POST['password'])) {
        $error['password'] = "Không được để trống trường password";
    } else {
        $partten = "/^([A-Z]){1}([\w_\.!@#$%^&*()]+){5,31}$/";
        if(!preg_match($partten ,$_POST['password'], $matchs)){
            $error['password'] =  "Mật khẩu bạn vừa nhập không đúng định dạng ";
        }else{
            $password = $_POST['password'];
        };

    };
// nếu không có lỗi thì xuất dữ liệu ra màn hình
    if (empty($error)) {
        $data= array(
            'username' => 'unitop',
            'password' => 'Son123@'
        );
    };
    if (($username == $data['username']) && ($password == $data['password'])){
//       echo $username;
//       echo $password ;
        header("Location: wellcome.php");
    }else{
        echo "Thông tin tài khoản không đúng";
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
<h1>Đăng ký</h1>
<form action="" method="post">
    <label for="username">Username</label> <br>
    <input type="text" name="username" id="username" value="<?php if (!empty($username)) {
        echo $username;
    }; ?>"> <br><br>
    <p class="error"> <?php if (!empty($error['username'])) {
            echo $error['username'];
        }; ?> </p>
    <label for="gender">Giới tính</label><br>
    <select name="gender" id="gender">
        <option value="">--chọn--</option>
        <option <?php if ((!empty($gender)) && ($gender == 'male')) echo "selected = 'selected'"; ?> value="male">Nam
        </option>
        <option <?php if ((!empty($gender)) && ($gender == 'female')) echo "selected = 'selected'"; ?> value="female">
            Nữ
        </option>
    </select> <br><br>
    <p class="error"> <?php if (!empty($error['gender'])) {
            echo $error['gender'];
        }; ?> </p>
    <label for="password">Password</label><br>
    <input type="password" name="password" id="password"> <br> <br>
    <?php if (!empty($error['password'])) {
        echo $error['password'];
    }; ?> <br>
    <input type="submit" name="btn_reg" id="register">
</form>
</body>
</html>


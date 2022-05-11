<?php
if (isset($_POST['btn_reg'])) {
    $show_gender = array(
        'male' => 'Nam',
        'female' => 'Nữ',
    );
//    echo "<pre>";
//    print_r($_POST);
//    echo "<pre>";
    if (empty($_POST['gender'])) {
        echo "Bạn chưa chọn giới tính";
    } else {
        $gender = $_POST['gender'];
//        echo $gender;
        echo $show_gender[$gender];
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
    <title>Document</title>
</head>
<body>
<h1>Đăng ký</h1>
<form action="" method="post">
    <input type="radio" name="gender" value="male" id="male" >
    <label for="male">Nam</label>
    <input type="radio" name="gender" value="female" id="female">
    <label for="male">Nữ</label>
    <input type="submit" name="btn_reg" value="register">
</form>

</body>
</html>

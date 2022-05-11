<?php
if (isset($_POST['btn_order'])) {
//    echo "<pre>";
//    print_r($_POST);
//    echo "</pre>";
    if (empty($_POST['pay'])) {
//        echo '<h1>' . "Cần chọn hình thức thanh toán" . '</h1>';
        echo '<h1 style="color: blue">'."Cần chọn hình thức thanh toán".'</h1>';
    } else {
        $pay = $_POST['pay'];
        echo $pay;
    };

};
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
<h1>Thanh toán</h1>
<lable>Hình thức thanh toán</lable>
<form action="" method="post">
    <select name="pay">
        <option value="">---Chọn---</option>
        <option value="cod">Thanh toán tại nhà</option>
        <option value="banking">Thanh toán bằng thẻ tín dụng</option>
    </select>
    <input type="submit" name="btn_order" value="Register">
</form>
</body>
</html>

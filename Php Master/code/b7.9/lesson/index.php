<?php
$list_user = array(2, 3, 4, 5, 6);
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Nhúng dữ liệu ra mảng</title>
</head>
<body>
<h1>Danh sách số nguyên tố</h1>
<table border="1">
    <thead>
    <tr>
        <td width="20">stt</td>
        <td width="100">số nguyên tố</td>
    </tr>
    </thead>
    <tbody>
    <?php
    foreach ($list_user as $item){
        echo $item;

    <tr>
        <td>1</td>
        <td>2</td>
    </tr>
     ?>
    </tbody>
</table>
</body>
</html>

<?php
$mod = $_GET['mod'];
$act = $_GET['act'];
$id = $_GET['id'];
echo "{$mod}-{$act}-{$id}";
if (isset($_GET['btn_search'])) {
//    echo "<pre>";
//    print_r($_POST);
//    echo "</pre>";
    if (empty($_GET['q'])) {
//
    } else {
        $q= $_GET['q'];
        echo $q;
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
<a href="?mod=product&act=detail&id=1268">Sản phẩm</a>
<form action="" method="get">
    <h1 style="text-align: center; color: red">Google</h1>
    <div style="text-align: center; color: red">
        Tìm kiếm: <input type="text" name="q">
        <input type="submit" name="btn_search" value="Search">
    </div>

</form>
</body>
</html>
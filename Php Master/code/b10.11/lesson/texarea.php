<?php
if (isset($_POST['btn_add'])) {
//    echo "<pre>";
//    print_r($_POST);
//    echo "</pre>";
    if (empty($_POST['post_detail'])) {
        echo "bạn cần nhập thông tin bài viết";
    } else {
        $post_detail = $_POST['post_detail'];
        echo $post_detail;
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

<form action="" method="post">
    <h1>Thêm bài viết</h1>
    <label for="">Chi tiết</label> <br> <br>
    <textarea name="post_detail" id="" cols="50" rows="15"></textarea><br>
    <input type="submit" name="btn_add" value="Thêm bài viết">
</form>
</body>
</html>

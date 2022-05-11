<?php
if (isset($_POST['btn_add'])) {
    echo "<pre>";
    print_r($_POST);
    echo "<pre>";
    if (!empty($_POST['cat'])) {
        foreach ($_POST['cat'] as $item) {
            echo $item . '<br>';
        };
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
<h1>Chọn danh mục</h1>
<form action="" method="post">
    <input type="checkbox" name="cat[]" value="1" id="cat_1">
    <label for="cat_1">Thể thao</label> <br> <br>
    <input type="checkbox" name="cat[]" value="2" id="cat_2">
    <label for="cat_2">Xã hội</label> <br> <br>
    <input type="submit" name="btn_add" value="Thêm bài viết">
</form>
</body>
</html>

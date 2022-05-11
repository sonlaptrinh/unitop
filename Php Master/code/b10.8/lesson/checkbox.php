<?php
if (isset($_POST['btn_reg'])) {

    if (isset($_POST['rules'])) {
        $rules = $_POST['rules'];
        echo $rules;
    } else {
       echo "Bạn cần đọc và xác nhận điều khoản ";
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
    <p style="width: 400px; height: 100px; overflow-y: scroll">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
        Animi dolores est eum, facere illo in neque porro quia voluptatem! Assumenda, beatae ducimus est laudantium modi
        nemo nulla omnis perspiciatis, provident quam quisquam quos rerum suscipit tempore voluptatibus. Ad corporis
        ducimus eligendi esse eum laboriosam qui soluta? A asperiores aut commodi, corporis excepturi ipsum itaque
        pariatur reprehenderit ullam! Aut blanditiis culpa cumque dignissimos error, eveniet harum laudantium minima
        nisi nobis non numquam odio officiis omnis optio praesentium quasi. A accusamus alias aliquam aliquid architecto
        cumque debitis deserunt dolore, doloremque dolores ea eveniet ex harum illo incidunt ipsam ipsum iste labore
        laboriosam laborum maxime minus nihil obcaecati officia, porro possimus provident, quae quam reiciendis
        reprehenderit repudiandae sapiente sit tempore totam ut vero voluptatem. Alias aliquam dolor dolorem eius est
        eveniet id laborum magnam, natus non obcaecati odit officiis quibusdam quisquam reiciendis temporibus totam
        veniam! Cupiditate deserunt dolorem doloribus inventore neque officia quas quasi. Alias dolores ducimus ipsam
        non odio provident, sapiente unde vel voluptates. Aliquam assumenda cum eius molestiae possimus tempora veniam!
        Ad adipisci amet atque dolor excepturi, minima officiis possimus quam quasi quidem, quos vel vitae. Accusamus
        aspernatur consequatur consequuntur, cum delectus dicta, eos inventore magnam molestias nobis numquam omnis
        possimus, quibusdam quod reprehenderit rerum sapiente sed! Aut debitis dolor, dolores, illum iste maiores neque
        pariatur perferendis quibusdam, quidem reiciendis totam unde! Architecto cupiditate neque tempora voluptate?
        Assumenda aut consectetur culpa, dicta dolorem dolorum explicabo nisi quam quibusdam, quidem rem tempore,
        voluptate voluptates? Accusamus architecto, asperiores at consequuntur esse hic illum incidunt ipsa, laboriosam
        libero possimus quas quibusdam repellendus sit soluta ut voluptas! Ad alias dolore eaque, enim error esse
        eveniet explicabo, facilis magnam necessitatibus praesentium quia rem voluptates! Accusantium adipisci commodi
        consequuntur doloribus ducimus enim fugiat hic illo iste, itaque, iure iusto natus provident quaerat quibusdam,
        sint sit tempora! Aspernatur commodi in ipsa reiciendis veritatis? Assumenda aut commodi cum distinctio iure
        possimus quam quis recusandae sequi similique? Accusamus culpa cumque dolores error esse exercitationem,
        necessitatibus nostrum numquam, odit provident, quae quam quidem. Earum harum itaque maxime, pariatur ut vel. Ab
        aspernatur consectetur consequatur consequuntur culpa delectus deleniti distinctio dolorum ducimus error,
        facilis, fugit id incidunt ipsum iure laborum mollitia natus nisi non obcaecati pariatur perspiciatis quidem quo
        quos recusandae rem repudiandae temporibus vero vitae voluptate? Corporis, dicta distinctio ducimus est expedita
        itaque laboriosam laborum neque obcaecati pariatur qui quo, quos recusandae repellendus sit! Atque delectus ea
        enim illum laborum numquam?</p>
    <input type="checkbox" name="rules" value="yes" id="rules">
    <label for="rules">Đồng ý</label><br><br>
    <input type="submit" name="btn_reg" value="register">
</form>

</body>
</html>


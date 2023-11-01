<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/catalog.css">
</head>
<body>
    <?php include 'header.php';?>
    <section class="pd-adm">
        <form action="php/addProduct.php" method="POST" enctype="multipart/form-data">
        <div class="m8">
            <label for="name">Название продукта</label>
            <input type="text" id="name" name="name">
        </div>
        <div class="m8">
            <label for="info">Описание продукта</label>
            <input type="text" id="info" name="info">
        </div>
        <div class="m8">
            <label for="dop1">Дополнительная информация №1</label>
            <input type="text" id="dop1" name="dop1">
        </div>
        <div class="m8">
            <label for="dop2">Дополнительная информация №2</label>
            <input type="text" id="dop2" name="dop2">
        </div>
        <div class="m8">
            <label for="price">Цена за 1 ед. продукта</label>
            <input type="text" id="price" name="price">
        </div>
            <?php
                $id_pod= $_GET['id_pod'];
            ?> 
            <input type="hidden" name="id_pod" value="<?=$id_pod?>">
            <div class="pd-adm__image">
                <label for="file">Загрузите картинку товара</label>
                <input type="file" name="image[]" id="file" class="inputfile" data-multiple-caption="{count} фото добавлено"/>
            </div>
            <button type="submit" name="upload">Отправить</button>
        </form>
    </section>
    <?php include 'footer.html';?>
</body>
</html>
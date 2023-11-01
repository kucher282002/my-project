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
        <form action="php/addPodrazdel.php" method="POST" enctype="multipart/form-data">
            <label for="name">Название подраздела</label>
            <input type="text" id="name" name="name">
            <div class="pd-adm__main">
                <div class="flex">
                    <p>Выберите раздел к которому он относится</p>
                    <select class="pd-adm__input" name="group">
                        <?php
                            $qr = "SELECT * FROM product_group";
                            $pr = array();
                            $rs = db::getRowCount($qr, $pr);
                            while($group = $rs->fetch(PDO::FETCH_OBJ)):
                        ?> 
                            <option value="<?=$group->id_product_group?>"><?=$group->name_product_group?></option>
                        <?php endwhile; ?>
                    </select>
                </div>
                <div class="pd-adm__image">
                    <label for="file">Загрузите картинку для подраздела</label>
                    <input type="file" name="image[]" id="file" class="inputfile" data-multiple-caption="{count} фото добавлено"/>
                </div>
            </div>
            <button type="submit" name="upload">Отправить</button>
        </form>
    </section>
    <?php include 'footer.html';?>
</body>
</html>
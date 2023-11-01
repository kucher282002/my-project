<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@300&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&display=swap" rel="stylesheet">
        <link rel="stylesheet" media="screen" href="https://fontlibrary.org//face/aileron" type="text/css"/>
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@700&display=swap" rel="stylesheet">

        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/template.css">
        <title>RS</title>
    </head>
    <body>
        <?php
            include 'php/header.php';
        ?>
        <main>
            <section class="project">
                <div class="info">
                    <?php
                        $id = $_GET['id'];

                        $qr = "SELECT * FROM portfolio WHERE id_portfolio = '$id'";
                        $pr = array();
                        $portfolio = db::getRow($qr, $pr);
                    ?>
                    <h3 class="info__name"><?=$portfolio->name_portfolio?></h3>
                    <ul class="info__detail">
                        <li class="info__detail_text">Адрес/ <?=$portfolio->address?></li>
                        <li class="info__detail_text">Проектирование/ <?=$portfolio->date_portfolio?></li>
                        <li class="info__detail_text">Реализация/ <?=$portfolio->realisation?></li>
                        <li class="info__detail_text">Заказчик/ <?=$portfolio->customer?></li>
                    </ul>
                </div>
            </section>
            <section class="project-one">
                <div class="image">
                    <?php
                        $qr = "SELECT * FROM images WHERE id_portfolio = '$id'";
                        $pr = array();
                        $rs = db::getRowCount($qr, $pr);
                        while($images = $rs->fetch(PDO::FETCH_OBJ)):
                    ?>
                    <img class="image__img" src="<?=$images->image_way?>">
                    <?php   endwhile; ?>
                </div>
            </section>
        </main>
        <?php
            include 'php/footer.php';
        ?>
    </body>
</html>
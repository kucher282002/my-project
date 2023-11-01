<?php
    require "php/database.php";
?>

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
        <link rel="stylesheet" href="css/activs.css">
        <title>RS</title>
    </head>
    <body>
        <?php
            include 'php/header-adm.php';
        ?>
        <main>
            <h2 class="activ-title">Активные заказы</h2>
            <section class="activs">
                <?php
                    $qr = "SELECT * FROM activs WHERE status = 'В разработке'";
                    $pr = array();
                    $rs = db::getRowCount($qr, $pr);
                    while($active = $rs->fetch(PDO::FETCH_OBJ)):
                ?>
                <div class="activ">
                    <div class="activ__info">
                        <img class="activ__info-img" src="img/building.png">
                        <ul class="activ__info_list">
                            <li class="activ__info_lis-title">О проекте</li>
                            <li class="activ__info_lis-text"><?=$active->object?> площадью <?=$active->area?>м</li>
                            <li class="activ__info_lis-text">По адресу: <?=$active->address?></li>
                        </ul>
                    </div>
                    <div class="activ__info">
                        <img class="activ__info-img" src="img/yslygi.png">
                        <ul class="activ__info_list">
                            <li class="activ__info_lis-title">Услуги</li>
                            <?php
                                $qr2 = "SELECT * FROM activsservices JOIN services ON services.id_service = activsservices.id_service WHERE id_activ = $active->id_activ";
                                $pr2 = array();
                                $rs2 = db::getRowCount($qr2, $pr2); 
                                while($service = $rs2->fetch(PDO::FETCH_OBJ)):
                            ?>
                            <li class="activ__info_lis-text"><?=$service->name?></li>
                            <?php
                                endwhile;
                            ?>
                        </ul>
                    </div>
                    <div class="activ__info">
                        <img class="activ__info-img" src="img/client.png">
                        <ul class="activ__info_list">
                            <li class="activ__info_lis-title">О клиенте</li>
                            <li class="activ__info_lis-text"><?=$active->name?> предпочитает <?=$active->link?></li>
                            <li class="activ__info_lis-text"><?=$active->phone?></li>
                        </ul>
                    </div>
                    <div class="activ__info">
                        <img class="activ__info-img" src="img/info.png">
                        <ul class="activ__info_list">
                            <li class="activ__info_lis-title">Дополнительно</li>
                            <li class="activ__info_lis-text">Проект: <?=$active->type?></li>
                            <li class="activ__info_lis-text">Дата ремонта: <?=$active->date?></li>
                        </ul>
                    </div>
                    <div class="activ__buttons">
                        <a href="php/deleteProject.php/?id=<?=$active->id_activ?>"><button class="activ__btn-del">Удалить заявку</button></a>
                        <a href="php/endProject.php/?id=<?=$active->id_activ?>"><button class="activ__btn-end">Завершить проект</button></a>
                    </div>
                </div>
                <?php
                    endwhile;
                ?>
            </section>
        </main>
        <?php
            include 'php/footer.php';
        ?>
    </body>
    <script src="js/aboutus-rellax.js"></script>
    <script src="js/FQ.js"></script>
    <script src="js/collaboration.js"></script>
    <!-- <script src="js/ukiyo.min.js"></script> -->
</html>
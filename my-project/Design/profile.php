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
        <link rel="stylesheet" href="css/profile.css">
        <title>RS</title>
    </head>
    <body>
        <?php
            include 'php/header.php';

            if(checkAuth()):
                $qr = "SELECT * FROM tokens JOIN users  ON tokens.id_user = users.id_user WHERE tokens.token = :token AND tokens.session_id = :session";
                $pr = array(
                    "token" => $_SESSION["token"],
                    "session" => session_id()
                );
                $row = db::getRow($qr, $pr);
        ?>
        <main>
            <section class="porfile">
                <div class="data">
                    <h2 class="profile__name">Личные данные</h2>
                    <form class="data__form" action="php/editName.php" method="POST">
                        <div class="data__form_info">
                            <label class="data__form_info-label">Имя:</label>
                            <input type="text" name="name" class="data__form_info-input" placeholder="<?=$row->user_name?>" required>
                            <input type="submit" class="data__form_info-edit" value="изменить">
                        </div>
                    </form>
                    <form class="data__form" action="php/editPassword.php" method="POST">
                        <div class="data__form_info">
                            <label class="data__form_info-label">Пороль:</label>
                            <input type="password" name="password" class="data__form_info-input" placeholder="Новый пароль" required>
                            <input type="submit" class="data__form_info-edit" value="изменить">
                        </div>
                    </form>
                    <form class="data__form" action="php/editPhone.php" method="POST">
                        <div class="data__form_info">
                            <label class="data__form_info-label">Телефон:</label>
                            <input class="data__form_info-input" name="phone" placeholder="<?=$row->user_phone?>" required>
                            <input type="submit" class="data__form_info-edit" value="изменить">
                        </div>
                    </form>
                </div>
                <div class="history">
                    <h2 class="profile__name">История заказов</h2>
                    <?php
                        $qr = "SELECT * FROM activs WHERE id_user = :id ORDER BY id_activ DESC";
                        $pr = array(
                            "id" => $row->id_user
                        );
                        $rs = db::getRowCount($qr, $pr);
                        while($active = $rs->fetch(PDO::FETCH_OBJ)):
                    ?>
                    <div class="history__info">
                        <ul class="history__info_list">
                            <li class="history__info_list-text">Тип объекта/ <?=$active->object?></li>
                            <li class="history__info_list-text">Адрес/ <?=$active->address?></li>
                            <li class="history__info_list-text">Проектирование/ <?=substr($active->date_application, 0, 4)?></li>
                            <li class="history__info_list-text">Реализация/ <?=substr($active->date_delivery, 0, 4)?></li>
                        </ul>
                        <ul class="history__info_list">
                            <li class="history__info_list-text">Проект: <?=$active->status?></li>
                            <li class="history__info_list-text"><?=$active->type?> проект</li>
                        </ul>
                    </div>
                    <?php
                        endwhile;
                    ?>
                </div>
                <?php 
                    endif;
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
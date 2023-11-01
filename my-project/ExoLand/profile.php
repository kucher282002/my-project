<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ExoLand</title>
    <link rel="stylesheet" href="css/profile.css">
</head>
<body>
    <?php include 'header.php';?>
    <main>
        <?php
            $qr = "SELECT * FROM tokens JOIN users  ON tokens.id_user = users.id_user WHERE tokens.token = :token AND tokens.session_id = :session";
            $pr = array(
                "token" => $_SESSION["token"],
                "session" => session_id()
            );
            $user = db::getRow($qr, $pr);
        ?> 
        <section class="profaile">
            <h1 class="profaile__title">Порфиль</h1>
            <div class="profaile__conteiner">
                <div class="profaile__body">
                    <h4 class="profaile__sud-title">Личная информация</h4>
                    <form action="php/editName.php" method="POST">
                        <ul class="body__list">
                            <li><label class="body__list_label" for="name">Имя:</label></li>
                            <li><input class="body__list_input" id="name" name="name" type="text" placeholder="<?=$user->user_name?>"></li>
                            <li><input class="body__list_button" type="submit" value="изменить"></li>
                        </ul>
                    </form>
                    <form action="php/editEmail.php" method="POST">
                        <ul class="body__list">
                            <li><label class="body__list_label" for="email">Почта:</label></li>
                            <li><input class="body__list_input" id="email" name="email" type="email" placeholder="<?=$user->user_email?>"></li>
                            <li><input class="body__list_button" type="submit" value="изменить"></li>
                        </ul>
                    </form>
                    <form action="php/editPhone.php" method="POST">
                        <ul class="body__list">
                            <li><label class="body__list_label" for="phone">Телефон:</label></li>
                            <li><input class="body__list_input" id="phone" name="phone" type="text" placeholder="<?=$user->user_phone?>"></li>
                            <li><input class="body__list_button" type="submit" value="изменить"></li>
                        </ul>
                    </form>
                </div>
                <div class="profaile__body">
                    <h4 class="profaile__sud-title">Изменение пароля</h4>
                    <form action="php/editPassword.php" method="POST">
                        <ul class="body__list">
                            <li><label class="body__list_label" for="old">Старый пароль:</label></li>
                            <li><input class="body__list_input" id="old" name="old" type="password"></li>
                        </ul>
                        <ul class="body__list">
                            <li><label class="body__list_label" for="new">Новый пароль:</label></li>
                            <li><input class="body__list_input" id="new" name="new" type="password"></li>
                        </ul>
                        <ul class="body__list">
                            <li><label class="body__list_label" for="repeat">Повторите паоль:</label></li>
                            <li><input class="body__list_input" id="repeat" name="repeat" type="password"></li>
                            <li><input class="body__list_button" type="submit" value="изменить"></li>
                        </ul>
                    </form>
                </div>
            </div>
        </section>
        <section class="history">
            <h1 class="profaile__title">История заказов</h1>
            <p class="history__info">Последнии 16 заказов за последнии 90 дней:</p>
            <div class="history__conteiner">
                <?php
                    $qr1 = "SELECT * FROM indent WHERE id_user = '$user->id_user' LIMIT 16";
                    $pr1 = array();
                    $histories = db::getRowCount($qr1, $pr1);
                    while($history = $histories->fetch(PDO::FETCH_OBJ)):
                ?>
                <div class="history__main">
                    <ul class="history__header">
                        <li>№<?=$history->id_indent?></li>
                        <li><?=$history->status?></li>
                        <li><?=$history->date_indent?></li>
                    </ul>
                    <div class="history__body">
                        <nav>
                            <?php
                                $sum = 0;
                                $qr2 = "SELECT * FROM indent_product WHERE id_indent = '$history->id_indent'";
                                $pr2 = array();
                                $indents = db::getRowCount($qr2, $pr2);
                                while($indent = $indents->fetch(PDO::FETCH_OBJ)):
                                    $qr3 = "SELECT * FROM product WHERE id_product = '$indent->id_product'";
                                    $pr3 = array();
                                    $product = db::getRow($qr3, $pr3);
                            ?>
                            <ul class="history__body_list">
                                <li class="history__body_list-w30"><img class="history__body_list-img" src="<?=$product->image_location_product.$product->image_name_product?>" alt=""></li>
                                <li class="history__body_list-w40"><?=$product->name_product?></li>
                                <li class="history__body_list-w3"><?=$indent->amount_indent_product?></li>
                                <li class="history__body_list-w10"><?=$product->price_product?> р.</li>
                            </ul>
                            <?php $sum = $sum + $product->price_product*$indent->amount_indent_product; endwhile; ?>
                        </nav>
                        <nav class="history__footer">
                            <ul class="footer__list">
                                <li>Итог:</li>
                                <li><?=$sum?> рублей</li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <?php endwhile; ?>
            </div>
        </section>
    </main>
    <?php include 'footer.html';?>
</body>
</html>
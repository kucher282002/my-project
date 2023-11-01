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
        <section class="history">
            <h1 class="profaile__title">Активные заказы</h1>
            <div class="history__conteiner">
                <?php
                    $qr1 = "SELECT * FROM indent WHERE `status` = 'В работе'";
                    $pr1 = array();
                    $histories = db::getRowCount($qr1, $pr1);
                    while($history = $histories->fetch(PDO::FETCH_OBJ)):
                ?>
                <div class="history__main">
                    <ul class="history__header">
                        <li>№<?=$history->id_indent?></li>
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
                    <a href="php/zakaz.php?id=<?=$history->id_indent?>">Завершить заказ</a>
                </div>
                <?php endwhile; ?>
            </div>
        </section>
    </main>
    <?php include 'footer.html';?>
</body>
</html>
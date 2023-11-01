<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ExoLand</title>
    <link rel="stylesheet" href="css/basket.css">
</head>
<body>
    <?php include 'header.php';?>
    <main>
        <section class="basket">
            <h1 class="basket__title">Корзина</h1>
            <?php
                $sum = 0; 
                $qr = "SELECT * FROM tokens JOIN users  ON tokens.id_user = users.id_user WHERE tokens.token = :token AND tokens.session_id = :session";
                $pr = array(
                "token" => $_SESSION["token"],
                "session" => session_id()
                );
                $user = db::getRow($qr, $pr);
                $qr = "SELECT * FROM basket WHERE id_user = '$user->id_user'";
                $pr = array();
                $baskets = db::getRowCount($qr, $pr);
                while($basket = $baskets->fetch(PDO::FETCH_OBJ)):
                    $qr = "SELECT * FROM product WHERE id_product = '$basket->id_product'";
                    $pr = array();
                    $product = db::getRow($qr, $pr);
            ?>
            <div class="basket__body">
                <nav class="body__conteiner">
                    <img class="body__img" src="<?=$product->image_location_product.$product->image_name_product?>" alt="">
                    <ul class="doby__list basket__main-text">
                        <h3 class="basket__sub-title"><?=$product->name_product?></h3>
                        <li><?=$product->dop_info1_product?></li>
                        <li><?=$product->dop_info2_product?></li>
                    </ul>
                </nav>
                <ul class="doby__list basket__main-text">
                    <h3 class="basket__sub-title"><?=$basket->amount?> шт.</h3>
                    <li><?=$product->price_product?> рублей</li>
                    <a class="delete__href" href="php/deleteBasket.php?id=<?=$basket->id_basket?>">Удалить товар</a>
                </ul>
            </div>
            <?php 
                $sum = $sum + $product->price_product*$basket->amount;
                endwhile; 
            ?>
            <div class="basket__total">
                <h3 class="basket__sub-title">Итог: <?=$sum?> рублей</h3>
                <form action="php/addIndent.php">
                    <button type="submit" class="basket__button">Оформить заказ</button>
                </form>
            </div>
        </section>
    </main>
    <?php include 'footer.html';?>
</body>
<script src="js/collaboration.js"></script>
</html>
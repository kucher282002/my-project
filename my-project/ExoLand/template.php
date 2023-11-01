<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ExoLand</title>
    <link rel="stylesheet" href="css/template.css">
</head>
<body>
    <?php include 'header.php';?>
    <main>
        <section class="template">
            <?php
                $id = $_GET['id'];
                $qr = "SELECT * FROM product WHERE id_product = '$id'";
                $pr = array();
                $product = db::getRow($qr, $pr);
            ?>
            <h1 class="template__title"><?=$product->name_product?></h1>
            <form class="template__info" action="php/addBasket.php?id=<?=$product->id_product?>" method="POST">
                <nav class="info__body">
                    <nav class="info__body-image">
                        <img class="info__img" src="<?=$product->image_location_product.$product->image_name_product?>" alt="">
                        <ul class="info__body_list">
                            <li><?=$product->dop_info1_product?></li>
                            <li><?=$product->dop_info2_product?></li>
                        </ul>
                    </nav>
                    <ul class="info__body_list">
                        <li>
                            <input name="amount" class="info__body_col" type="number" min="1" value="1"> шт.
                        </li>
                        <li><?=$product->price_product?> рублей за 1 шт.</li>
                    </ul>
                </nav>
                <div class="dop"> <!--чёрный фон-->
                    <div class="dop__close"> <!--закрытие по заднему фону-->
                    </div>
                        <div class="dop__choice">
                            <button type="submit" class="info__button">Перейти в корзину</button>
                            <button type="submit" class="info__button">Продолжить покупки</button>
                        </div>
                    </div>
                </div>
                <?php
                    if (checkauth()):
                ?>
                <button class="info__button submit">Добавить в корзину</button>
                <?php
                    else:
                ?>
                <p>Войдите чтобы добавть товар в корзину</p>
                <?php endif; ?>
            </form>
            <div class="template__description">
                <h3 class="template__sub-title">Описание:</h3>
                <p class="template__main-text"><?=$product->info_product?></p>
            </div>
            <!-- <div class="template__nutrition">
                <h3 class="template__sub-title">Питание:</h3>
                <ul class="nutrition__list template__main-text">
                    <li class="nutrition__icons">1</li>
                    <li>Описание и бла бла бла бла</li>
                </ul>
                <ul class="nutrition__list template__main-text">
                    <li class="nutrition__icons">2</li>
                    <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nam quo corrupti voluptas? Iure voluptas sapiente in quasi cumque ad, voluptatem laudantium et debitis eveniet placeat accusamus qui eligendi sit vel!</li>
                </ul>
                <ul class="nutrition__list template__main-text">
                    <li class="nutrition__icons">3</li>
                    <li>Описание и бла бла бла бла</li>
                </ul>
            </div> -->
        </section>
    </main>
    <?php include 'footer.html';?>
</body>
</html>
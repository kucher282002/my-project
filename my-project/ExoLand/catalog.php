<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ExoLand</title>
    <link rel="stylesheet" href="css/catalog.css">
</head>
<body>
    <?php include 'header.php';?>
    <main>
        <section class="catalog">
            <?php
                if(checkAuth()):
                    $qr = "SELECT * FROM tokens JOIN users  ON tokens.id_user = users.id_user WHERE tokens.token = :token AND tokens.session_id = :session";
                    $pr = array(
                        "token" => $_SESSION["token"],
                        "session" => session_id()
                    );
                    $row = db::getRow($qr, $pr);
                if ($row->id_group == 1):
            ?>
                <a class="catalog__href" href="formPodrazdel.php">Добавить подраздел</a>
            <?php
                endif;
            endif;
            ?>
            <?php
                $qr = "SELECT * FROM product_group";
                $pr = array();
                $rs = db::getRowCount($qr, $pr);
                while($group = $rs->fetch(PDO::FETCH_OBJ)):
            ?>
            <div class="catalog__conteiner">
                <div class="catalog__header">
                    <img class="catalog__header_image" src="<?=$group->icon_location_product_group.$group->icon_name_product_group?>" alt="">
                    <h3 class="catalog__header_title"><?=$group->name_product_group?></h3>
                </div>
                <nav class="catalog__body">
                <?php
                    $qr2 = "SELECT * FROM product_podgroup WHERE id_product_group = '$group->id_product_group'";
                    $pr2 = array();
                    $rs2 = db::getRowCount($qr2, $pr2);
                    while($podgroup = $rs2->fetch(PDO::FETCH_OBJ)):
                ?>
                    <ul class="catalog__list catalog__main-text">
                        <a class="catalog__main-text" href="chapter.php?id=<?=$podgroup->id_product_podgroup?>">
                            <li><img class="catalog__body_img" src="<?=$podgroup->image_location_product_podgroup.$podgroup->image_name_product_podgroup?>" alt=""></li>
                            <li><?=$podgroup->name_product_podgroup?></li>
                            <?php 
                                $min_price = 99999999;
                                $qr3 = "SELECT price_product FROM product WHERE id_product_podgroup = '$podgroup->id_product_podgroup'";
                                $pr3 = array();
                                $rs3 = db::getRowCount($qr3, $pr3);
                                while($price = $rs3->fetch(PDO::FETCH_OBJ)) {
                                    if ($price->price_product < $min_price) {
                                        $min_price = $price->price_product;
                                    }
                                }      
                            ?>
                            <li>от <?=$min_price?> рублей</li>
                            <?php
                                if(checkAuth()):
                                    $qr = "SELECT * FROM tokens JOIN users  ON tokens.id_user = users.id_user WHERE tokens.token = :token AND tokens.session_id = :session";
                                    $pr = array(
                                        "token" => $_SESSION["token"],
                                        "session" => session_id()
                                    );
                                    $row = db::getRow($qr, $pr);
                                if ($row->id_group == 1):
                            ?>
                            <a href="php/deletePodrazdel.php?id=<?=$podgroup->id_product_podgroup?>" class="catalog__main-text">Удалить</a>
                            <?php
                                endif;
                            endif;
                            ?>
                        </a>
                    </ul>
                <?php endwhile; ?>
                </nav>
            </div>
            <?php endwhile; ?>  
        </section>
    </main>
    <?php include 'footer.html';?>
</body>
<script src="js/collaboration.js"></script>
</html>
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
            <div class="catalog__conteiner">
                <?php
                    if(checkAuth()):
                        $id_podgroup = $_GET['id'];
                        $qr = "SELECT * FROM tokens JOIN users  ON tokens.id_user = users.id_user WHERE tokens.token = :token AND tokens.session_id = :session";
                        $pr = array(
                            "token" => $_SESSION["token"],
                            "session" => session_id()
                        );
                        $row = db::getRow($qr, $pr);
                    if ($row->id_group == 1):
                ?>
                    <a href="formProduct.php?id_pod=<?=$id_podgroup?>" class="catalog__main-text">Добавить товар в этот подраздел</a>
                <?php
                    endif;
                endif;
                ?>
                <div class="catalog__header">
                    <?php
                        $id = $_GET['id'];
                        $qr1 = "SELECT * FROM product_podgroup WHERE id_product_podgroup = '$id'";
                        $pr1 = array();
                        $podgroup = db::getRow($qr1, $pr1);
                        $qr2 = "SELECT * FROM product_group WHERE id_product_group = '$podgroup->id_product_group'";
                        $pr2 = array();
                        $group = db::getRow($qr2, $pr2);
                    ?>
                    <img class="catalog__header_image" src="<?=$group->icon_location_product_group.$group->icon_name_product_group?>" alt="">
                    <h3 class="catalog__header_title"><?=$podgroup->name_product_podgroup?></h3>
                </div>
                <nav class="catalog__body">
                    <?php
                        $qr3 = "SELECT * FROM product WHERE id_product_podgroup = '$id'";
                        $pr3 = array();
                        $rs3 = db::getRowCount($qr3, $pr3);
                        while ($product = $rs3->fetch(PDO::FETCH_OBJ)):
                    ?>
                    <ul class="catalog__list catalog__main-text">
                        <a class="catalog__main-text" href="template.php?id=<?=$product->id_product?>">
                            <li><img class="catalog__body_img" src="<?=$product->image_location_product.$product->image_name_product?>" alt=""></li>
                            <li><?=$product->name_product?></li>
                            <li><?=$product->price_product?> рублей</li>
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
                            <a href="php/deleteProduct.php?id=<?=$product->id_product?>&idgroup=<?=$podgroup->id_product_podgroup?>" class="catalog__main-text">Удалить</a>
                            <?php
                                endif;
                            endif;
                            ?>
                        </a>
                    </ul>
                    <?php endwhile; ?>
                </nav>
            </div>
        </section>
    </main>
    <?php include 'footer.html';?>
</body>
<script src="js/collaboration.js"></script>
</html>
<?php
    require_once("database.php");

    $id = $_GET['id'];
    $qr = "SELECT * FROM product_podgroup WHERE id_product_podgroup = '$id'";
    $pr = array();
    $podgroup = db::getRow($qr, $pr);
    unlink("../images/product_podgroup/".$podgroup->image_name_product_podgroup);
    $qr2 = "SELECT * FROM product WHERE id_product_podgroup = '$id'";
    $pr2 = array();
    $podgroups = db::getRowCount($qr2, $pr2);
    while($podgroup2 = $podgroups->fetch(PDO::FETCH_OBJ)):
        $qr = "SELECT * FROM product WHERE id_product_podgroup = '$id'";
        $pr = array();
        db::add($qr, $pr);
        unlink("../images/product/".$product->image_name_product);
        $qr = "DELETE FROM product WHERE id_product_podgroup = '$id'";
        $pr = array();
        db::add($qr, $pr);
    endwhile;
    $qr = "DELETE FROM product_podgroup WHERE id_product_podgroup = '$id'";
    $pr = array();
    db::add($qr, $pr);
    header("location: ../catalog.php");
?>
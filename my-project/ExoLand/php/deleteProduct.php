<?php
    require_once("database.php");
    
    $id = $_GET['id'];
    $group = $_GET['idgroup'];
    
    $qr = "SELECT * FROM product WHERE id_product = '$id'";
    $pr = array();
    $product = db::getRow($qr, $pr);
    unlink("../images/product/".$product->image_name_product);
    $qr = "DELETE FROM product WHERE id_product = '$id'";
    $pr = array();
    db::add($qr, $pr);
    header("location: ../chapter.php?id=$group");
?>
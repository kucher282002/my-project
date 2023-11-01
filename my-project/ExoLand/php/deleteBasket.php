<?php
    require_once("database.php");

    $id = $_GET['id'];
    $qr = "DELETE FROM basket WHERE id_basket = '$id'";
    $pr = array();
    db::add($qr, $pr);
    header("location: ../basket.php");
?>
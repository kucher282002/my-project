<?php
    require "database.php";

    $id = $_GET['id'];
    $qr = "UPDATE activs SET `status` = 'Отменен', date_delivery = CURRENT_TIMESTAMP() WHERE id_activ = :id";
    $pr = array(
        ":id" => $id
    );
    db::add($qr, $pr);
    header("location: ../../activs.php");
?>
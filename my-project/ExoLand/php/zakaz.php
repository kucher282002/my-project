<?php
    require ('database.php');

    $id = $_GET['id'];
    
    $qr = "UPDATE indent SET status = 'Выдан' WHERE id_indent = '$id'";
    $pr = array();
    db::add($qr, $pr);

    header("location: ../activs.php");
?>
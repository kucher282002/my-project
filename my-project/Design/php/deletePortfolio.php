<?php
    require_once("database.php");

    $id = $_GET['id'];
    $qr = "SELECT * FROM portfolio WHERE id_portfolio = '$id'";
    $pr = array();
    $portfolio = db::getRow($qr, $pr);
    $qr = "SELECT * FROM images WHERE id_portfolio = '$id'";
    $pr = array();
    $rs = db::getRowCount($qr, $pr);
    while($images = $rs->fetch(PDO::FETCH_OBJ)):
        unlink("../img/portfolio/project/$portfolio->name_portfolio/".$images->image_name);
        $qr = "DELETE FROM images WHERE id_portfolio = '$id'";
        $pr = array();
        db::add($qr, $pr);
    endwhile;
    rmdir("../img/portfolio/project/$portfolio->name_portfolio");
    $qr = "DELETE FROM portfolio WHERE id_portfolio = '$id'";
    $pr = array();
    db::add($qr, $pr);
    header("location: ../portfolio.php");
?>
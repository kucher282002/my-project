<?php
    require "database.php";
    
    $qr = "SELECT * FROM tokens JOIN users  ON tokens.id_user = users.id_user WHERE tokens.token = :token AND tokens.session_id = :session";
    $pr = array(
    "token" => $_SESSION["token"],
    "session" => session_id()
    );
    $user = db::getRow($qr, $pr);

    $id = $_GET["id"];
    $amount = $_POST["amount"];

    $qr = "SELECT * FROM product WHERE id_product = '$id'";
    $pr = array();
    $product = db::getRow($qr, $pr);

    $qr = "SELECT * FROM basket WHERE id_product = '$id' AND id_user = '$user->id_user'";
    $pr = array();
    $test = db::rowCount($qr, $pr);

    if ($test == 0) {
        $qr = "INSERT INTO basket (id_product, amount, id_user) VALUES (:product, :amount, :user)";
        $pr = array(
            "product" => $product->id_product,
            "amount" => $amount,
            "user" => $user->id_user,
        );
        db::add($qr, $pr);   
    } else {
        $qr = "SELECT * FROM basket WHERE id_product = '$id' AND id_user = '$user->id_user'";
        $pr = array();
        $basket = db::getRow($qr, $pr);
        $sum = $basket->amount + $amount;
        $qr = "UPDATE basket SET amount = '$sum' WHERE id_product = '$id' AND id_user = '$user->id_user'";
        $pr = array();
        db::add($qr, $pr);
    }

    header("location: ../template.php?id=$id");
?>
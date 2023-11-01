<?php
    require "database.php";
    
    $qr = "SELECT * FROM tokens JOIN users  ON tokens.id_user = users.id_user WHERE tokens.token = :token AND tokens.session_id = :session";
    $pr = array(
        "token" => $_SESSION["token"],
        "session" => session_id()
    );
    $user = db::getRow($qr, $pr);
    
    $qr = "INSERT INTO indent (id_user) VALUES (:user)";
    $pr = array(
        "user" => $user->id_user
    );
    db::add($qr, $pr); 

    $qr = "SELECT id_indent FROM indent WHERE id_user = '$user->id_user' ORDER BY id_indent DESC";
    $pr = array();
    $id = db::getRow($qr, $pr);

    $qr = "SELECT * FROM basket WHERE id_user = '$user->id_user'";
    $pr = array();
    $baskets = db::getRowCount($qr, $pr);
    while($basket = $baskets->fetch(PDO::FETCH_OBJ)):
        $qr2 = "INSERT INTO indent_product (id_product, amount_indent_product, id_indent) VALUES (:product, :amount, :indent)";
        $pr2 = array(
            "product" => $basket->id_product,
            "amount" => $basket->amount,
            "indent" => $id->id_indent
        );
        db::add($qr2, $pr2); 

        $qr3 = "DELETE FROM basket WHERE id_basket = '$basket->id_basket'";
        $pr3 = array();
        db::add($qr3, $pr3);
    endwhile;

    header("location: ../profile.php");
?>
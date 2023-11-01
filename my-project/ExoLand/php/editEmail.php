<?php
    require_once("database.php");

    $qr = "SELECT * FROM tokens JOIN users  ON tokens.id_user = users.id_user WHERE tokens.token = :token AND tokens.session_id = :session";
    $pr = array(
        "token" => $_SESSION["token"],
        "session" => session_id()
    );
    $row = db::getRow($qr, $pr);

    $email = $_POST["email"];

    $qr = "UPDATE users SET user_email = :email WHERE users.id_user = :id";
    $pr = array(
        "email" => $email,
        "id" => $row->id_user
    );
    db::add($qr, $pr);
    header("location: ../profile.php");
?>
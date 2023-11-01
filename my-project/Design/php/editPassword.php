<?php
    require_once("database.php");

    $qr = "SELECT * FROM tokens JOIN users  ON tokens.id_user = users.id_user WHERE tokens.token = :token AND tokens.session_id = :session";
    $pr = array(
        "token" => $_SESSION["token"],
        "session" => session_id()
    );
    $row = db::getRow($qr, $pr);

    $password = $_POST["password"];
    $newPassword = crypt($password, $row->user_salt);

    $qr = "UPDATE users SET user_password = :password WHERE users.id_user = :id";
    $pr = array(
        "password" => $newPassword,
        "id" => $row->id_user
    );
    db::add($qr, $pr);
    header("location: ../profile.php");
?>
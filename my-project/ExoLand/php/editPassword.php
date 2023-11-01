<?php
    require_once("database.php");

    $response = new stdClass();
    $response->header = "Ответ";

    $qr = "SELECT * FROM tokens JOIN users  ON tokens.id_user = users.id_user WHERE tokens.token = :token AND tokens.session_id = :session";
    $pr = array(
        "token" => $_SESSION["token"],
        "session" => session_id()
    );
    $row = db::getRow($qr, $pr);

    $password = $_POST["old"];
    $newpassword = $_POST["new"];
    $repeat = $_POST["repeat"];
    $rop = crypt($password, $row->user_salt);
    if ($rop == $row->user_password) {
        if ($newpassword == $repeat) {
            $newPassword2 = crypt($newpassword, $row->user_salt);

            $qr = "UPDATE users SET user_password = :password WHERE users.id_user = :id";
            $pr = array(
                "password" => $newPassword2,
                "id" => $row->id_user
            );
            db::add($qr, $pr);
        } else {
            $response = "Пароли не совпадают";
            echo json_encode($response);
        } 
    } else {
        $response = "Пароль неверный";
        echo json_encode($response);
    }
    header("location: ../profile.php");
    echo json_encode($response);
?>
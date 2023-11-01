<?php
    require_once("database.php");

    $token = @$_SESSION["token"];
    $session = session_id();
    $qr = "SELECT * FROM tokens WHERE token = :token AND session_id = :session AND token_expiration > now()";
    $pr = array(
        "token" => $token,
        "session" => $session
    );
    $count = db::rowCount($qr, $pr);
    if($count > 0) {
        $row = db::getRow($qr, $pr);
        $qr = "DELETE FROM tokens WHERE id_user = :id";
        $pr = array(
            "id" => $row->id_user
        );
        db::add($qr, $pr);
        header("location: ../index.php");
    } else {
        return false;
    }

    $ip = $_SERVER['REMOTE_ADDR'];
    $browser = $_SERVER['HTTP_USER_AGENT'];
    $qr = "INSERT INTO actions(name_actions, ip_user, user_agent, id_user) VALUES(:name, :ip, :agent, :id)";
    $pr = array(
        'name' => "Выход",
        'ip' => $ip,
        'agent' => $browser,
        'id' => $row->id_user
    );
    db::add($qr, $pr);
    header("location: ../index.php");
?>
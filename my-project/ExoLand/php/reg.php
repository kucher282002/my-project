<?php
    require_once("database.php");

    $response = new stdClass();
    $response->header = "Ответ";

    $data = file_get_contents("php://input");
    $json = json_decode($data);
    $salt = genRandomString(255);

    $s_email = $json->email;
    $email = delete_all_between('<', '>',$s_email);
    $s_name = $json->name;
    $name = delete_all_between('<', '>',$s_name);
    $s_password = $json->password;
    $password = delete_all_between('<', '>',$s_password);
    $s_confirm = $json->confirm;
    $confirm = delete_all_between('<', '>',$s_confirm);
    
    $qr = "SELECT * FROM `users` WHERE `user_email` = :email AND `user_name` = :name";
    $pr = array(
        "email" => $email,
        "name" => $name
    );
    $count = db::rowCount($qr, $pr);
    if($count == 0) {
        if($password === $confirm) {
            $hash = crypt($password, $salt);
            $qr = "INSERT INTO users (user_email, user_name, user_salt, user_password) VALUES (:email, :name, :salt, :password)";
            $pr = array(
                "email" => $email,
                "name" => $name,
                "salt" => $salt,
                "password" => $hash
            );
            db::add($qr, $pr);
            $qr = "SELECT id_user FROM `users` WHERE `user_email` = :email";
            $pr = array(
                "email" => $email
            );
            $result = db::getRow($qr, $pr);
            $ip = $_SERVER['REMOTE_ADDR'];
            $browser = $_SERVER['HTTP_USER_AGENT'];
            $qr = "INSERT INTO actions(name_actions, ip_user, user_agent, id_user) VALUES (:name, :ip, :agent, :id)";
            $pr = array(
                'name' => "Регистрация",
                'ip' => $ip,
                'agent' => $browser,
                'id' => $result->id_user
            );
            db::add($qr, $pr);
            $qr = "SELECT * FROM `users` WHERE user_email = :email";
            $pr = array(
                "email" => $email
            );
            $user = db::getRow($qr, $pr);
            $hash = crypt($password, $user->user_salt);
            if ($hash = $user->user_password){
                $count = 1;
            } else {
                $count = 0;
            } 
            if($count == 1) {
                $result = db::getRow($qr, $pr);
                createToken($result->id_user);
                $ip = $_SERVER['REMOTE_ADDR'];
                $browser = $_SERVER['HTTP_USER_AGENT'];
                $qr = "INSERT INTO actions(name_actions, ip_user, user_agent, id_user) VALUES(:name, :ip, :agent, :id)";
                $pr = array(
                    'name' => "Авторизация",
                    'ip' => $ip,
                    'agent' => $browser,
                    'id' => $result->id_user
                );
                db::add($qr, $pr);
                header("Content-Type: application/json;charset=UTF-8");
                echo json_encode($response);
            }
        } else {
            $response->solutions = "Пароли не совпадают";
            header("Content-Type: application/json;charset=UTF-8");
            echo json_encode($response);
        }
    } else {
        $response->solutions = "Пользователь с такими данными уже сущесмтвует";
        header("Content-Type: application/json;charset=UTF-8");
        echo json_encode($response);
    }  

?>
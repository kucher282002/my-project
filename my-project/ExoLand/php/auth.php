<?php
    require_once("database.php");

    $response = new stdClass();
    $response->header = "Ответ";

    $data = file_get_contents("php://input");
    $json = json_decode($data);
    
    if($json) {
        $s_email = $json->email;
        $email = delete_all_between('<', '>',$s_email);
        $s_password = $json->password;
        $password = delete_all_between('<', '>',$s_password);

        
        $qr = "SELECT * FROM `users` WHERE user_email = :email";
        $pr = array(
            "email" => $email
        );
        $user = db::getRow($qr, $pr);
        $hash = crypt($password, $user->user_salt);
        if ($hash == $user->user_password){
            $count = 1;
        } else {
            $count = 0;
        } 
        if($count == 1) {
                if (checkAuth()){
                    $result = db::getRow($qr, $pr);
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
                } else {
                    createToken($user->id_user);
                    $result = db::getRow($qr, $pr);
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
            $response->solutions = "Неверный логин или пароль";
            header("Content-Type: application/json;charset=UTF-8");
            echo json_encode($response);
        }
    } 
?>
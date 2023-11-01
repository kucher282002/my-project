<?php
    require_once("database.php");

    $obj = $_POST['obj'];
    $area = $_POST['area'];
    $type = $_POST['tipe'];
    if(isset($_POST["services"])){
        $services = $_POST["services"];
    }
    $date = $_POST['date'];
    $address = $_POST['address'];
    $link = $_POST['link'];
    $user_name = $_POST['user_name'];
    $phone = $_POST['user_phone'];
    
    if(checkAuth()) {
        $qr = "SELECT * FROM tokens JOIN users  ON tokens.id_user = users.id_user WHERE tokens.token = :token AND tokens.session_id = :session";
        $pr = array(
            "token" => $_SESSION["token"],
            "session" => session_id()
        );
        $row = db::getRow($qr, $pr);

    $qr = "INSERT INTO activs(object, area, type, address, date, name, phone, link, id_user, status) VALUES (:object, :area, :type, :address, :date, :name, :phone, :link, :id_user, :status)";
    $pr = array(
        ":object" => $obj,
        ":area" => $area,
        ":type" => $type,
        ":address" => $address,
        ":date" => $date,
        ":name" => $user_name,
        ":phone" => $phone,
        ":link" => $link,
        ":id_user" => $row->id_user,
        ":status" => "В разработке",
    );
    db::add($qr, $pr);

    $qr = "SELECT * FROM activs WHERE address = '$address' ";
    $pr = array();
    $id = db::getRow($qr, $pr);

    foreach ($services as $services) {
        $qr = "INSERT INTO activsservices(id_activ, id_service) VALUES (:activ, :service)";
        $pr = array(
            ":activ" => $id->id_activ,
            ":service" => $services
        );
        db::add($qr, $pr);
    }
    
    $to = 'kucherandreykucer@gmail.com';
    $subject = 'RS';
    $message = 'Поступил новый заказ';

    mail($to, $subject, $message);
    header("location: ../profile.php");
} else {
    $qr = "INSERT INTO activs(object, area, type, address, date, name, phone, link, id_user, status) VALUES (:object, :area, :type, :address, :date, :name, :phone, :link, :id_user, :status)";
    $pr = array(
        ":object" => $obj,
        ":area" => $area,
        ":type" => $type,
        ":address" => $address,
        ":date" => $date,
        ":name" => $user_name,
        ":phone" => $phone,
        ":link" => $link,
        ":id_user" => 0,
        ":status" => "В разработке",
    );
    db::add($qr, $pr);

    $qr = "SELECT * FROM activs WHERE address = '$address' ";
    $pr = array();
    $id = db::getRow($qr, $pr);

    foreach ($services as $services) {
        $qr = "INSERT INTO activsservices(id_activ, id_service) VALUES (:activ, :service)";
        $pr = array(
            ":activ" => $id->id_activ,
            ":service" => $services
        );
        db::add($qr, $pr);
    }
    $to = 'kucherandreykucer@gmail.com';
    $subject = 'RS';
    $message = 'Поступил новый заказ';

    mail($to, $subject, $message);
    header("location: ../index.php");
}


?>
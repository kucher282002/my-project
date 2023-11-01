<?php
  require_once("database.php");

  $name = $_POST['name'];
  $address = $_POST['address'];
  $date = $_POST['date'];
  $realisation = $_POST['realisation'];
  $customer = $_POST['customer'];
  $template = $_POST['template'];

  $qr = "SELECT * FROM portfolio WHERE address = '$address' AND name_portfolio = '$name' AND date_portfolio = '$date' AND realisation = '$realisation' AND customer = '$customer' AND template = '$template'";
  $pr = array();
  $id = db::RowCount($qr, $pr);

  if($id == 0) {

    $qr = "INSERT INTO portfolio(name_portfolio, address, date_portfolio, realisation, customer, template) VALUES (:name, :address, :date, :realisation, :customer, :template)";
    $pr = array(
        ":name" => $name,
        ":address" => $address,
        ":date" => $date,
        ":realisation" => $realisation,
        ":customer" => $customer,
        "template" => $template
    );
    db::add($qr, $pr);

  } else {}

  $qr = "SELECT * FROM portfolio WHERE address = '$address' AND name_portfolio = '$name' AND date_portfolio = '$date' AND realisation = '$realisation' AND customer = '$customer' AND template = '$template'";
  $pr = array();
  $id = db::getRow($qr, $pr);

  if(isset($_POST['upload'])){
    foreach ($_FILES["image"]["error"] as $key => $error) {
      if ($error == UPLOAD_ERR_OK) {
        $file_name = $_FILES['image']['name'][$key];
        $file_temp = $_FILES['image']['tmp_name'][$key];
        $allowed_ext = array("jpeg", "jpg", "gif", "png");
        $exp = explode(".", $file_name);
        $ext = end($exp);
        $path = "img/portfolio/project/$name/".$file_name;
        mkdir("../img/portfolio/project/$name");
        if(in_array($ext, $allowed_ext)){
          if(move_uploaded_file($file_temp, '../'.$path)){
            try{
              $qr = "INSERT INTO `images`(image_name, image_way, id_portfolio)  VALUES ('$file_name', '$path', '$id->id_portfolio')";
              $pr = array();
              db::add($qr, $pr);
            }catch(PDOException $e){
              echo $e->getMessage();
            }
            
            $conn = null;
            
            header("location: ../portfolio.php");
          }
        }else{
          echo "<center><h3 class='text-danger'>Only image format can be upload</h3></center>";
        }
      }
    }
  }
?>
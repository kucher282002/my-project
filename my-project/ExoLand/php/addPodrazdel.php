<?php
    require ('database.php');

    $name = $_POST['name'];
    $group = $_POST["group"];

    if(isset($_POST['upload'])){
        foreach ($_FILES["image"]["error"] as $key => $error) {
            if ($error == UPLOAD_ERR_OK) {
                $file_name = $_FILES['image']['name'][$key];
                $file_temp = $_FILES['image']['tmp_name'][$key];
                $allowed_ext = array("jpeg", "jpg", "gif", "png");
                $exp = explode(".", $file_name);
                $ext = end($exp);
                $path = "images/product_podgroup/".$file_name;
                mkdir("../images/product_podgroup/");
                if(in_array($ext, $allowed_ext)){
                    if(move_uploaded_file($file_temp, '../'.$path)){
                      try{
                        $qr = "INSERT INTO `product_podgroup`(name_product_podgroup, image_name_product_podgroup, id_product_group)  VALUES ('$name', '$file_name', '$group')";
                        $pr = array();
                        db::add($qr, $pr);
                      }catch(PDOException $e){
                        echo $e->getMessage();
                      }

                      $conn = null;

                      header("location: ../catalog.php");
                    }
                } else {
                  echo "<center><h3 class='text-danger'>Only image format can be upload</h3></center>";
                }
            }
        }
    }
?>
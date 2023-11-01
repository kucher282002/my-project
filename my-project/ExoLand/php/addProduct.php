<?php
    require ('database.php');

    $name = $_POST['name'];
    $info = $_POST["info"];
    $dop1 = $_POST['dop1'];
    $dop2 = $_POST["dop2"];
    $price = $_POST['price'];
    $group = $_POST['id_pod'];

    if(isset($_POST['upload'])){
        foreach ($_FILES["image"]["error"] as $key => $error) {
            if ($error == UPLOAD_ERR_OK) {
                $file_name = $_FILES['image']['name'][$key];
                $file_temp = $_FILES['image']['tmp_name'][$key];
                $allowed_ext = array("jpeg", "jpg", "gif", "png");
                $exp = explode(".", $file_name);
                $ext = end($exp);
                $path = "images/product/".$file_name;
                mkdir("../images/product");
                if(in_array($ext, $allowed_ext)){
                    if(move_uploaded_file($file_temp, '../'.$path)){
                      try{
                        $qr = "INSERT INTO `product`(name_product, info_product, dop_info1_product, dop_info2_product, image_name_product, id_product_podgroup, price_product)  VALUES ('$name', '$info', '$dop1', '$dop2', '$file_name', '$group', '$price')";
                        $pr = array();
                        db::add($qr, $pr);
                      }catch(PDOException $e){
                        echo $e->getMessage();
                      }

                      $conn = null;

                      header("location: ../chapter.php?id=$group");
                    }
                } else {
                  echo "<center><h3 class='text-danger'>Only image format can be upload</h3></center>";
                }
            }
        }
    }
?>
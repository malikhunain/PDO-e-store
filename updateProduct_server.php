<?php

include('user_class.php');

echo $p_id = $_REQUEST['p_id'];

$p_name = $_REQUEST['p_name'];
$p_code = $_REQUEST['p_code'];
$p_quantity = $_REQUEST['p_quantity'];
$p_category = $_REQUEST['p_category'];
$p_brand = $_REQUEST['p_brand'];
$p_desc = $_REQUEST['p_desc'];
$p_path = "";

if($_FILES['p_image']['error']==0){
    $file = $_FILES['p_image']['tmp_name'];

    $path = "images/".  $_FILES['p_image']['name'];
    $p_path = $path;
    
    move_uploaded_file($file, $path);
}

else{
    $p_path = $_REQUEST['prev_path'];
}



$u =  new user;
$u->connectDb();
$u->updateProduct($p_id, $p_name, $p_code, $p_quantity, $p_category, $p_brand, $p_path, $p_desc);



?>
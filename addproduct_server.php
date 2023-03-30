<?php

include('user_class.php');

$p_name = $_REQUEST['p_name'];
$p_code = $_REQUEST['p_code'];
$p_quantity = $_REQUEST['p_quantity'];
$p_category = $_REQUEST['p_category'];
$p_brand = $_REQUEST['p_brand'];
$p_desc = $_REQUEST['p_desc'];
$file = $_FILES['p_image']['tmp_name'];

$path = "images/".  $_FILES['p_image']['name'];

move_uploaded_file($file, $path);


$u =  new user;
$u->connectDb();
$u->addProduct($p_name, $p_code, $p_quantity, $p_category, $p_brand, $path, $p_desc);



?>
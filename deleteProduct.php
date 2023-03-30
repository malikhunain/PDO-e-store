<?php
// deleteProduct.php
include('user_class.php');

$id = $_REQUEST['id'];


$u =  new user;
$u->connectDb();
$u->removeProduct($id);



?>



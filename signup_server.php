<?php

include('user_class.php');

$u_name = $_REQUEST['u_name'];
$u_email = $_REQUEST['u_email'];
$u_pwd = $_REQUEST['u_pwd'];

$u =  new user;
$u->connectDb();
$u->setUser($u_name, $u_email, $u_pwd);



?>
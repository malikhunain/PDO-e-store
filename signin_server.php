<?php
// signin_server.php


include('user_class.php');

$u_email = $_REQUEST['u_email'];
$u_pwd = $_REQUEST['u_pwd'];

$u =  new user;
$u->connectDb();
$r = $u->loginUser($u_email, $u_pwd);

if( $r->rowCount() > 0 ){
        header("location: services.php");
}
else{
    header("location: signin.php?msg=invalid user");
}



?>
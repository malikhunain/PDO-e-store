<?php
$msg="";

if( isset($_REQUEST['msg']) )
    $msg = $_REQUEST['msg'];


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
    <link rel="stylesheet" href="signin_style.css">
</head>
<body>

    <h3 style="color:red">   <?php  echo $msg; ?> </h3>
    <div class="signin">
        <h2>Ucp Email <br> Signin Page</h2>
        <form action="signin_server.php" method="get">
            <fieldset>
                <legend>Store Signin</legend>
                <label for="email">Store Email</label>
                <input type="email" name="u_email" placeholder="Email" required/>
                <label for="password">Password</label>
                <input type="password" name="u_pwd" placeholder="Password" required />
                <input type="submit" value="Login" />
                <input type="reset">
            </fieldset>
        </form>
</body>
</html>
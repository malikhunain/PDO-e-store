<?php
include('user_class.php');

$msg = "test-data";
if( isset($_REQUEST['msg']) )
    $msg = $_REQUEST['msg'];


$u =  new user;
$u->connectDb();
$r = $u->getAllUser();

echo "<h1 style='font-family: cooper; text-align: center'> All Data </h1>";

echo "<h3> <?php $msg; ?> </h3>";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        *, *::before, *::after {
            margin: 0;
            padding: 0;
            outline: 0;
            box-sizing: border-box;
            text-decoration: none;
            list-style: none;
        }
        body {
            width: 100%;
            height: 100%;
            font-size: larger;
            display: inline-block;
            justify-content: center;
        }
        .container {
            justify-content: center;
        }
        th {
            border: none;
            padding: 10px;
        }
        table {
            margin-top: 4rem;
            border-collapse: collapse;
        }
        img {
            width: 60px;
            padding: 10px;
            margin: 10px;
        }
        h1 {
            text-align: center;
            margin-top: 3rem;
        }
        tr {
            text-align: center;
            border: 1px solid black;
            border-collapse: separate;
            margin: 10px;
        }
        td {
            width: 8rem;
            
        }
        
        a {
            background-color: grey;
            color: white;
            border: 1px solid grey;
            border-radius: 15px;
            padding: 5px;
            margin-left: 35rem;
            
        }
        
    </style>
    <title>View All Users Data</title>
</head>
<body>
<div class="container" align="center">
<table align='center'>
    <thead>
        <tr>
            <th>User ID</th>
            <th>User Name</th>
            <th>User Email</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($r as $key => $user) {  ?>
            <tr>
                <td> <?php echo $user['id']; ?></td>
                <td> <?php echo $user['name']; ?></td>
                <td> <?php echo $user['email']; ?></td>
            </tr>
            
            
            
        <?php } ?>
    </tbody>
   
</table>
</div>
<br> <br> <br>

<a href="services.php"> Go Back to Dashboard </a>
<br> <br>
</body>
</html>





<!-- // $data = "<br/><br/> <table border='1' align='center'> ";

// foreach($r as $k=>$user){
//     $data.= "<tr>";
//     $data.= "<td>". $user['id'] . "</td>";
//     $data.= "<td>". $user['name'] . "</td>";
//     $data.= "<td>". $user['email'] . "</td>";
//     $data.= "<td>". $user['password'] . "</td>";
//     $data.=  "<td> <a href='delete.php?id=$user[id]'> Delete </a>"  . "</td> </tr>";
// }

// $data.= "</table>";

// echo $data;



?> -->


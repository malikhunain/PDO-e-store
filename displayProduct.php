<?php
include('user_class.php');

$msg = "test-data";
if( isset($_REQUEST['msg']) )
    $msg = $_REQUEST['msg'];


$u =  new user;
$u->connectDb();
$r = $u->getAllProducts();


echo "<h3> <?php $msg; ?> </h3>";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="displayProduct_style.css">
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
        }
        th {
            border: none;
            padding: 10px;
        }
        table {
            margin-left: 11rem;
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
        #link {
            width: 11rem;
        }
        
        a {
            background-color: grey;
            color: white;
            border: 1px solid grey;
            border-radius: 15px;
            padding: 5px;
            
        }
        #delete {
            background-color: red;
            border: 1px solid red;
            margin-left: 10px;

        }
        #update {
            background: green;
            padding-left: 45px;
            padding-right: 45px;
        }
        
    </style>
    <title>Display Products</title>
</head>
<body>
    <h1>All Products</h1>
    <table >
        <thead>
            <tr>
                <th>Image</th>
                <th>Product Name</th>
                <th>Bar Code</th>
                <th>Quantity</th>
                <th>Category</th>
                <th>Brand</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($r as $k=>$product){ ?>
                <tr>
                    <td> <img src="<?php echo $product['image']; ?>" alt=""></td>
                    <td> <?php echo $product['name']; ?> </td>
                    <td> <?php echo $product['code']; ?> </td>
                    <td> <?php echo $product['quantity']; ?> </td>
                    <td> <?php echo $product['category']; ?> </td>
                    <td> <?php echo $product['brand']; ?> </td>
                    <td id="link"> 
                        <a class="detail" href="viewProduct.php?id=<?php echo $product['id']; ?>"> Details </a> 
                        <a id="delete" href="deleteProduct.php?id=<?php echo $product['id']; ?>"> Delete </a>
                    </td>
                    
                </tr>
                <?php } ?>
        </tbody>
    </table>

    <br/><br/>
    <a href="services.php">  '<< Go Back to Dashboard << </a>



</body>
</html>


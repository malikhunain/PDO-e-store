<?php
include('user_class.php');

$msg = "test-data";
if( isset($_REQUEST['msg']) )
    $msg = $_REQUEST['msg'];


$id = $_REQUEST['id'];
$u =  new user;
$u->connectDb();
$r = $u->getProduct($id);



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
        }
        .container {
            width: 100%;
        }
        fieldset {
            border-radius: 40px;
            width: 30%;
            margin-top: 3rem;
        }

        legend {
            padding-left: 20px;
            margin: 10px;
            padding-right: 5px;
        }
        th {
            border: none;
            padding: 10px;
            text-align: left;
        }
        table {
            margin-left: 3rem;
            border-collapse: collapse;
            
        }
        img {
            width: 60px;
            padding: 2px;
            margin: 10px;
        }
        h1 {
            text-align: center;
            margin-top: 3rem;
        }
        tr {
            text-align: center;
            margin: 10px;
        }
        td {
            width: 10rem;
            
        }
        .data {
            padding: 5px;
            background-color: lightgrey;
            border-radius: 8px;
        }
        #link {
            height: 3rem;
        }
        
        a {
            background-color: grey;
            color: white;
            border: 1px solid grey;
            border-radius: 15px;
            padding: 5px;
            
        }
        #update {
            background: green;
            padding-left: 45px;
            padding-right: 45px;
        }
        
    </style>
    <title>Product Details</title>
</head>
<body>
    <h1 align="center" >Product Details</h1>
    <div class="container" align="center">
    <fieldset align="center">
        <legend>Product Details</legend>
            <table>
                <?php foreach($r as $k=>$product) { ?>
                <tr>
                    <td></td>
                    <td> <img src="<?php echo $product['image']; ?>" alt="product image" width="60px"></td>
                </tr>
                <tr>
                    <th>Product Name</th>
                    <td> <div class="data"><?php echo $product['name']; ?> </div></td>
                </tr>
                <tr>
                    <th>Product Code</th>
                    <td> <div class="data"><?php echo $product['code']; ?></div> </td>
                </tr>
                <tr>
                    <th>Quantity</th>
                    <td> <div class="data"><?php echo $product['quantity']; ?></div> </td>
                </tr>
                    <tr>
                        <th>Category</th>
                        <td> <div class="data"><?php echo $product['category']; ?></div> </td>
                    </tr>
                    <tr>
                        <th>Brand</th>
                        <td> <div class="data"><?php echo $product['brand']; ?></div> </td>
                    </tr>
                    <tr>
                        <th>Description</th>
                        <td> <div class="data"><?php echo $product['description']; ?></div> </td>
                    </tr>
                    <tr>
                        <td></td>
                        <td id="link">
                            <a id="update" href='updateProduct.php?id=<?php echo $product['id']; ?>'> Update </a>
                        </td>
                    </tr>
                    <?php } ?>
            </table>
                
    </fieldset>
    </div>

    <br/><br/>
    <a href="services.php">  << Go Back to Dashboard << </a>



</body>
</html>


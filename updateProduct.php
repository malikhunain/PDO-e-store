<?php
include('user_class.php');
$msg="";

if( isset($_REQUEST['msg']) )
    $msg = $_REQUEST['msg'];


    echo "<h3> <?php $msg; ?> </h3>";

$id = $_REQUEST['id'];
$u =  new user;
$u->connectDb();
$r = $u->getProduct($id);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
    <link rel="stylesheet" href="addproduct_style.css">
    <style>
        img {
            width: 70px;
            padding: 2px;
            margin: 10px;
            margin-left: 5rem;
        }
    </style>

</head>
<body>

    <h3 style="color:red">   <?php  echo $msg; ?> </h3>
    <div class="container">
        <h2>Update Product</h2>
        <form action="updateProduct_server.php" method="post" enctype="multipart/form-data">
            <fieldset>
                <legend>Add New Product</legend>
                <table>
                <?php foreach($r as $k=>$product) { ?>
                    <tr>
                        <td></td>
                        <td><img src="<?php echo $product['image']; ?>" alt="product image"></td>
                        <input type="text" name="p_id" value="<?php echo $id ?>" hidden>
                    </tr>
                    <tr>
                        <td><label for="p_name">Product Name</label></td>
                        <td><input type="text" name="p_name" value="<?php echo $product['name']; ?>" placeholder="Enter Product Name"/></td>
                    </tr>
                    <tr>
                        <td><label for="p_code">Product Code</label></td>
                        <td><input type="text" name="p_code" value="<?php echo $product['code']; ?>" placeholder="Bar Code" /></td>
                    </tr>
                    <tr>
                        <td><label for="p_quantity">Quantity</label></td>
                        <td><input type="number" name="p_quantity" value="<?php echo $product['quantity']; ?>" placeholder="0"/></td>
                    </tr>
                    <tr>
                        <td><label for="p_category">Category</label></td>
                        <td>
                            <select name="p_category" id="p_category">
                                <option value="<?php echo $product['category']; ?>"><?php echo $product['category']; ?></option>
                                <option value="Mobile">Mobile</option>
                                <option value="Laptop">Laptop</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td><label for="p_brand">Brand</label></td>
                        <td>
                            <select name="p_brand" id="p_brand">
                                <option value="<?php echo $product['brand']; ?>"><?php echo $product['brand']; ?></option>
                                <option value="Samsung">Samsung</option>
                                <option value="Apple">Apple</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td><label for="p_image">Product Image</label></td>
                        <input type="text" name="prev_path" value="<?php echo $product['image']; ?>" hidden>
                        <td><input type="file" name="p_image" value="" id="p_image"></td>
                    </tr>
                    <tr>
                        <td><label for="p_desc">Description</label></td>
                        <td><input type="text" name="p_desc" id="p_desc" value="<?php echo $product['description']; ?>" cols="22" rows="8"></textarea></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>
                            <input type="submit" value="Update" />  
                            <input type="reset" value="Clear"/> 
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                
            </fieldset>
        </form>
</body>
</html>
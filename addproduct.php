<?php
$msg="";

if( isset($_REQUEST['msg']) )
    $msg = $_REQUEST['msg'];


    echo "<h3> <?php $msg; ?> </h3>";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
    <link rel="stylesheet" href="addproduct_style.css">

</head>
<body >

    <h3 style="color:red">   <?php  echo $msg; ?> </h3>
    <div class="container">
        <h2>Add New Product</h2>
        <form action="addproduct_server.php" method="post" enctype="multipart/form-data">
            <fieldset >
                <legend>Add New Product</legend>
                <table>
                    <tr>
                        <td><label for="p_name">Product Name</label></td>
                        <td><input type="text" name="p_name" placeholder="Enter Product Name"/></td>
                    </tr>
                    <tr>
                        <td><label for="p_code">Product Code</label></td>
                        <td><input type="text" name="p_code" placeholder="Bar Code" /></td>
                    </tr>
                    <tr>
                        <td><label for="p_quantity">Quantity</label></td>
                        <td><input type="number" name="p_quantity" placeholder="0"/></td>
                    </tr>
                    <tr>
                        <td><label for="p_category">Category</label></td>
                        <td>
                            <select name="p_category" id="p_category">
                                <option value="Choose one">Choose one</option>
                                <option value="Mobile">Mobile</option>
                                <option value="Laptop">Laptop</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td><label for="p_brand">Brand</label></td>
                        <td>
                            <select name="p_brand" id="p_brand">
                                <option value="Choose one">Choose one</option>
                                <option value="Samsung">Samsung</option>
                                <option value="Apple">Apple</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td><label for="p_image">Product Image</label></td>
                        <td><input type="file" name="p_image" id="p_image"></td>
                    </tr>
                    <tr>
                        <td><label for="p_desc">Description</label></td>
                        <td><textarea name="p_desc" id="p_desc" cols="22" rows="8"></textarea></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>
                            <input type="submit" value="ADD Product" />  
                            <input type="reset"> 
                        </td>
                    </tr>
                    
                </table>
                
            </fieldset>
        </form>

        <br> <br>
        <a href="services.php"> Go Back to Dashboard</a>

        <br> <br> <br>
</body>
</html>
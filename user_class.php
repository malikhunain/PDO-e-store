<?php
include('db.php');
class user extends db{
    private $name;
    private $email;
    private $pwd;


    public function setUser($t1, $t2, $t3){
        echo "im in class <br/>";
        echo $this->name = $t1;
        echo $this->email = $t2;
        echo $this->pwd = $t3;
    
        $q = "INSERT INTO USER(name, email, password) VALUES ('$t1', '$t2', '$t3')";
        $this->conn->exec($q);
        // echo "done";

        header("location: signin.php?msg=User created. Login Now");
    }
    public function loginUser($t1, $t2){
        $q = "SELECT * FROM USER WHERE email='$t1' and password='$t2'";
        $result = $this->conn->query($q);
        return $result;    
    }

    public function getAllUser(){
        $q = "SELECT * FROM USER";
        $result = $this->conn->query($q);
        return $result;  

    }

    public function removeUser($id){
        $q = "DELETE FROM USER where id=$id";
        $this->conn->query($q);
        
        header("location: viewallusers.php?msg=data removed");
        
    }

    public function addProduct($t1, $t2, $t3, $t4, $t5, $t6, $t7){
        $q = "INSERT INTO PRODUCT(name, code, quantity, category, brand, image, description) VALUES ('$t1', '$t2', '$t3', '$t4', '$t5', '$t6', '$t7')";
        $this->conn->exec($q);

        header("location: addproduct.php?msg=Product Added Successfully");
    }
    
    public function getAllProducts(){
        $q = "SELECT * FROM PRODUCT";
        $result = $this->conn->query($q);
        return $result;  

    }

    public function removeProduct($id){
        $q = "DELETE FROM PRODUCT where id='$id'";
        $this->conn->query($q);
        
        header("location: displayProduct.php?msg=Product Removed Successfully");
        
    }

    public function getProduct($id){
        $q = "SELECT * FROM PRODUCT where id='$id'";
        $result = $this->conn->query($q);
        return $result;

    }

    public function updateProduct($id, $t1, $t2, $t3, $t4, $t5, $t6, $t7){
        $q = "UPDATE PRODUCT SET name = '$t1', code = '$t2', quantity = '$t3', category = '$t4', brand = '$t5', image = '$t6', description = '$t7' WHERE id = '$id'";
        $this->conn->exec($q);

        header("location: viewProduct.php?msg=Product Updated Successfully & id=$id");
    }
}
<?php

class db{
    protected $conn;

    public function connectDb(){
        try{
            $this->conn = new PDO("mysql: host=localhost;dbname=r6", "root", "");
            // echo "working";
        }
        catch(PDOException $e)
        {
            echo "err";
        }
    }


}


?>
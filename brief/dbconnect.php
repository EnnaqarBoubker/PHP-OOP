<?php
@session_start();
ob_start();
 
    try {
        $conn =  new PDO("mysql:host=localhost;dbname=management", "root", '');
        // set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        // echo "Connected successfully";
    } catch (PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
}

    // class Database {
    //     private $host = "localhost";
    //     private $database_name = "management";
    //     private $username = "root";
    //     private $password = "";
    //     public $conn;
    //     public function getConnection(){
    //         $this->conn = null;
    //         try{
    //             $this->conn = new PDO("mysql:host=" . $this->host . ";dbname=" . $this->database_name, $this->username, $this->password);
    //             $this->conn->exec("set names utf8");
    //         }catch(PDOException $exception){
    //             echo "Database could not be connected: " . $exception->getMessage();
    //         }
    //         return $this->conn;
    //     }
    // }  
?>
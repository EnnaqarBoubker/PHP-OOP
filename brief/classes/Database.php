<?php
@session_start();
ob_start();
class Database{

     
   public function __construct(){
   
        $hostname = 'localhost';
        $username = 'root';
        $password = '';

       try {
        $this->db = new PDO("mysql:host=$hostname;dbname=management", $username, $password);
        $this -> db -> setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

      }
       catch(PDOException $e)
           {
               echo $e->getMessage();
          }    
    }
   
//     public function getDb() {
//           if ($this->db instanceof PDO) {
//                return $this->db;
//           }
//     }
   
   
   }
     
?>
<?php

class User {
    public $db;
    public $id;
    public $name;
    public $email;
    public $password;
    public $password2;
    
    public function __construct($db){
        $this-> db = $db;
    } 
    
        public function login(){
       
            $email = addslashes(strip_tags($_POST['email']));
            $password = addslashes(strip_tags($_POST['password']));

            if(!empty($email) && !empty($password)){
                $query = 'SELECT * FROM `user` WHERE email = :email AND password = :password ';
                $sql = $this ->  db -> prepare($query);
                $sql->bindParam('email', $email, PDO::PARAM_STR);
                $sql->bindParam('password', $password, PDO::PARAM_STR);
                $sql->execute();

                if($sql -> rowCount()){
                     $row = $sql->fetch(PDO::FETCH_ASSOC);
                    // var_dump($row);
                    // $_SESSION['id'] = $row[0]['id'];
                    $_SESSION['name'] = $row['name'];
                    // $_SESSION['id'] = true;
                    // $_SESSION['name'] = true;
                    echo "<script>alert('User created successfully');document.location='profil.php'</script>"; 
                }else{
                    echo 'the email and pass is wrong';
                }
            }else{
                echo "<script>alert('please enter email and password');document.location='sign-in.php'</script>";
            }

        }

        public function signup($name ,$email,$password){
            
            $name = addslashes(strip_tags($_POST['name']));
            $email = addslashes(strip_tags($_POST['email']));
            $password = addslashes(strip_tags($_POST['password']));
            
            $query = "INSERT INTO `user`(`name`, `email`, `password`) VALUES (?, ?, ?)";
            $sql = $this->db -> prepare($query); 
            $sql->bindparam(1,$name, PDO::PARAM_STR);
            $sql->bindparam(2,$email, PDO::PARAM_STR);
            $sql->bindparam(3,$password, PDO::PARAM_STR);
            $sql-> execute();

        }
        
    }
    
   

 
    
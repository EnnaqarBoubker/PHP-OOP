<?php
class User extends Database {
    public $id;
    public $name;
    public $email;
    public $password;
    public $password2;
    public $phone;
    public $adress;

    public function login(){
    
        $email = addslashes(strip_tags($_POST['email']));
        $password = addslashes(strip_tags($_POST['password']));

        if(!empty($email) && !empty($password)){
            $query = 'SELECT * FROM `user` WHERE email = :email AND password = :password ';
            $sql = $this -> db -> prepare($query);
            $sql->bindParam('email', $email, PDO::PARAM_STR);
            $sql->bindParam('password', $password, PDO::PARAM_STR);
            $sql->execute();
            var_dump($query);

            if($sql -> rowCount()){
                $row = $sql->fetch(PDO::FETCH_ASSOC);
                // var_dump($row);
                $_SESSION['id'] = $row['id'];
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

        if(!empty($name) && !empty($email) && !empty($password)){
            $query = "INSERT INTO `user`(`name`, `email`, `password`) VALUES (?, ?, ?)";
            $sql = $this -> db -> prepare($query); 
            $sql->bindparam(1,$name, PDO::PARAM_STR);
            $sql->bindparam(2,$email, PDO::PARAM_STR);
            $sql->bindparam(3,$password, PDO::PARAM_STR);
            $sql-> execute();
        }
        else{
            echo "<script>alert('please enter your information');document.location='sign-up.php'</script>"; 
        }

    } 

    public function creatContact($name, $email, $phone, $adress){
        
        $name = addslashes(strip_tags($_POST['name']));
        $email = addslashes(strip_tags($_POST['email']));
        $phone = addslashes(strip_tags($_POST['phone']));
        $adress = addslashes(strip_tags($_POST['adress']));

        if(!empty($name) && !empty($email) && !empty($phone) && !empty($adress)){
            session_start();
            $qury = "INSERT INTO `contact`(name, email, phone, adress, fkuser) VALUES (?,?,?,?,?)";
            $stmt = $this -> db ->prepare($qury);
            $stmt->bindParam(1, $name, PDO::PARAM_STR);
            $stmt->bindParam(2, $email, PDO::PARAM_STR);
            $stmt->bindParam(3, $phone, PDO::PARAM_STR);
            $stmt->bindParam(4, $adress, PDO::PARAM_STR);
            $stmt->bindParam(5, $_SESSION['id'], PDO::PARAM_INT);
            $stmt->execute();
         session_write_close();
        }
        else{
            echo 'is wrong';
        }  
    }
    
    public function afficher($query){
        $id = $_SESSION['id'];
        $stmt = $this -> db -> prepare($query);
        $stmt -> bindParam(1, $id, PDO::PARAM_INT);
        $stmt -> execute();
        if($stmt -> rowCount()){
            while ($row = $stmt -> fetch(PDO::FETCH_ASSOC)){ ?>
                <tr>
                    <td><?php print($row['name']); ?></td>
                    <td><?php print($row['email']); ?></td>
                    <td><?php print($row['phone']); ?></td>
                    <td><?php print($row['adress']); ?></td>
                    <td>
                       <a href="editCon.php?id=<?php echo $row['id'];?>"><i class="fas fa-edit mx-1"></i></a>
                       <a href="delete.php?id=<?php echo $row['id'];?>"> <i class="fas fa-trash-alt"></i></a>
                    </td>
                </tr>

          <?php  }
        }
    }


     //get user information
     public function getuserinfo($id){
       
        $stmt = $this -> db -> prepare("SELECT * FROM `contact` WHERE id=?");
        $stmt -> bindParam(1, $id, PDO::PARAM_INT);
        $stmt -> execute();
      
        try {
            $result =$stmt ->fetch();
            return  $result;
        } catch (Exception $ex) {
            echo "error";
        }
    }
     //edit contact 
    public function editeCon($id, $name, $email, $phone, $adress){
        $query = "UPDATE contact SET name = ? ,email = ? ,phone = ?, adress = ? where  id=? ";
        $stmt = $this -> db -> prepare($query);
        $stmt->bindparam(1,$name, PDO::PARAM_STR);
        $stmt->bindparam(2,$email, PDO::PARAM_STR);
        $stmt->bindparam(3,$phone, PDO::PARAM_STR);
        $stmt->bindparam(4,$adress, PDO::PARAM_STR);
        $stmt->bindparam(5,$id, PDO::PARAM_INT);
        $stmt->execute();
    }

    public function delete($id){
        $stmt = $this -> db ->prepare("DELETE FROM contact WHERE id=?");
        $stmt->bindparam(1,$id);
        $stmt->execute();
        return true;
    }

}

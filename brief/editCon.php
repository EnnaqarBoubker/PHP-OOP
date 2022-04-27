<?php
include './includes/navbarUser.php';
include './classes/user.php';

$user =new User();
$id=$_GET['id'];
  $data= $user->getuserinfo($id);
  
if(isset($_POST['save'])){
    $user-> editeCon($_GET['id'],$_POST['name'], $_POST['email'], $_POST['phone'], $_POST['adress']);
    header('location: contact.php');
}
?>

<body>
    <div class="container">
    <form method="POST">
           <a href="./contact.php" class="btn btn-primary btn-block mb-4">BACk</a>
            
                
            <div class="form-outline"h>
                <label class="form-label">Name</label>
                <input type="text" class="form-control" name="name" value="<?php echo $data['name']; ?>"/>
                
            </div>
            <div class="form-outline mb-3">
                <label class="form-label">email</label>
                <input type="email" class="form-control" name="email" value="<?php echo $data['email']; ?>"/>
                
            </div>
            <div class="form-outline mb-3">
                <label class="form-label">Phone</label>
                <input type="text" class="form-control" name="phone" value="<?php echo $data['phone']; ?>"/>
                
            </div>
            <div class="form-outline mb-3">
                <label class="form-label">Adresse</label>
                <input type="text" class="form-control" name="adress" value="<?php echo $data['adress']; ?>"/>
                
            </div>
    
            <button type="submit" class="btn btn-primary btn-block mb-4" name="save">SAVE</button>
        </form>
    </div>
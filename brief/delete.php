<?php
include './classes/Database.php';
include './classes/user.php';

if(isset($_GET['id']))
{
    // $id = mysqli_real_escape_string($db->conn, $_POST['delete']);
    $id= $_GET['id'];
    $user = new User($conn);
    $result = $user->delete($id);
    if($result)
    {
        
        $_SESSION['id'] = "Student Added Successfully";
        // header("Location: contact.php");
            echo "<script>alert('User created successfully');document.location='contact.php'</script>";

        exit(0);
    }
    // else
    // {
    //     $_SESSION['id'] = "Student Not Added";
    //     header("Location: contact.php");
    //     exit(0);
    // }
}
?>
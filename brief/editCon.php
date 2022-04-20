<?php
include './/navbarUser.php';
// include './dbconnect.php';
// include './classes/user.php';

?>

<body>
    <div class="container">
        <form method="POST">
           <a href="./contact.php" class="btn btn-primary btn-block mb-4">BACk</a>
            
                
            <div class="form-outline"h>
                <label class="form-label">Name</label>
                <input type="text" class="form-control" name="name" value="<?php echo $row['name']; ?>"/>
                
            </div>

          
            <div class="form-outline mb-3">
                <label class="form-label">email</label>
                <input type="email" class="form-control" name="email" value="<?php echo $row['e_mail']; ?>"/>
                
            </div>
            <div class="form-outline mb-3">
                <label class="form-label">Phone</label>
                <input type="text" class="form-control" name="phone" value="<?php echo $row['phone']; ?>"/>
                
            </div>
            <div class="form-outline mb-3">
                <label class="form-label">Adresse</label>
                <input type="text" class="form-control" name="adress" value="<?php echo $row['enroll_number']; ?>"/>
                
            </div>
    
            <button type="submit" class="btn btn-primary btn-block mb-4" name="save">SAVE</button>
        </form>
    </div>
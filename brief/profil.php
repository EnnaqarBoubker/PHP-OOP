<?php
include './navbarUser.php';
include './dbconnection.php';
include './classes/user.php';
if(!isset($_SESSION)) 
{ 
    session_start(); 
}
 
 
?>


<div class="container d-flex">
    <div class="  w-100">
        <h1 class="my-5">Welcome <span><?php echo $_SESSION['name']; ?></span></h1>
        <h3>Your Frofil :</h3>
        <hr class="line">
        <!-- User Name -->
        <div class="case">
            <h6>UserName :</h6>
            <p class="border border-2 rounded-3 border-dark p-2"><?php echo $_SESSION['name']; ?></p>
        </div>
        <!-- SignUp Date -->
        <div class="case">
            <h6>SignUp Date :</h6>
            <p class="border border-2 rounded-3 border-dark p-2">Sun, 07Apr 2019 16:11:23 +0000</p>
        </div>
        <!-- Last Login -->
        <div class="case">
            <h6>Last Login :</h6>
            <p class="border border-2 rounded-3 border-dark p-2">Sun, 07Apr 2019 16:11:23 +0000</p>
        </div>
    </div>
    <div class="image1 d-none d-md-none d-lg-block">
        <img src="./imgs/Profile data-bro.svg" alt="">
    </div>
</div>
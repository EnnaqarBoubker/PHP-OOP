<?php
include './classes/Database.php';



?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="style.css">
  <title>contact</title>
</head>

<body>
  <header>
    <nav class="navbar navbar-expand-lg navbar-dark color" aria-label="Eighth navbar example">
      <div class="container">
        <a class="navbar-brand fw-bold color" href="./index.php">Box<span class="box">Box</span></a>
        
        <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample07" aria-controls="navbarsExample07" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="navbar-collapse collapse justify-content-end" id="navbarsExample07">
          <ul class="navbar-nav mb-2 ">
            <li class="nav-item">
              <a href="./profil.php"><?php echo $_SESSION['name']; ?></a>
            </li>
            <li class="nav-item">
              <a href="./contact.php">Contact</a>
            </li>
            <li class="nav-item">
              <a href="#">Logout</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    
  </header>

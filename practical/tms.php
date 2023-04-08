<?php
session_start();
include('config.php');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="">
    <link href="https://fonts.googleapis.com/css2?family=Alkatra&family=Averia+Serif+Libre:ital,wght@0,300;1,300;1,700&family=DM+Serif+Display:ital@1&family=Petit+Formal+Script&family=Tilt+Prism&display=swap" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <div class="container mt-2">
    <h1 class="text-center  bg-info">welcome to task management system 
         </h1>
         <h3 class="text-center" style="font-family: 'Alkatra', cursive";
>
           hello  <?php echo  $_SESSION['user'] ?>!
        </h3> 
        </div><br><br>
        <div class="container">
        <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
      </div><br><br><br>

     <form action="logout.php" class="text-center" method="post">
        <button type="submit" class="btn btn-dark" name="logout" >logout</button>
     </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
<?php
include('config.php');
if(isset($_POST['insert'])){
    $name=$_POST['tname'];
    $description=$_POST['description'];
    $date=$_POST['date'];
     $insert="INSERT INTO `tasks`( `name`, `description`, `due_date`,)
      VALUES ('$name','$description','$date')";
      $query=mysqli_query($conn,$insert);
      if($query){
        echo "<script>alert('task added successfully')</script>";
        // echo "<script>window.location.href='view.php'</script>";
      }else{
        echo "<script>alert('task not added yet..')</script>";
        // echo "<script>window.location.href='view.php'</script>";
      }
}




?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
</head>
<body>
    <div id="login">
        <h3 class="text-center text-white pt-5">Login form</h3>
        <div class="container">
            <div id="login-row" class="row justify-content-center align-items-center">
                <div id="login-column" class="col-md-6">
                    <div id="login-box" class="col-md-12">
                        <form id="login-form" class="form" action="insert.php" method="post">
                            <h3 class="text-center text-info">Add Task</h3>
                            <div class="form-group">
                                <label for="username" class="text-info">Task name/Title:</label><br>
                                <input type="text" name="tname" id="username" class="form-control">
                            </div>
                            <div class="form-group">
                                <label  class="text-info">description:</label><br>
                                <input type="text" name="description"  class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="password" class="text-info">due date:</label><br>
                                <input type="date" name="date" id="password" class="form-control">
                            </div>
                            <div class="form-group">
                                <!-- <label for="remember-me" class="text-info"><span>Remember me</span> <span><input id="remember-me" name="remember-me" type="checkbox"></span></label><br> -->
                                <button type="submit" name="insert" class="btn btn-info btn-md" >submit</button>
                            </div>
                            <!-- <div id="register-link" class="text-right">
                                <a href="#" class="text-info">Register here</a>
                            </div> -->
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</body>
</html>
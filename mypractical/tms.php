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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
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
        <div class="container d-flex">
            <form action="logout.php" class="ms-auto" method="post">
            <button type="submit" class="btn btn-dark "  name="logout" >logout</button>
         </form> &nbsp;&nbsp;&nbsp;&nbsp;
         
                  <button type="submit" class="btn btn-info"  >
                      <a href="view.php" class="text-dark text-decoration-none">View Tasks</a>
                  </button>
                  
               

        </div>
        <br>
        <div class="container ">
        <form action="tms.php" method="post" class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search existing task by id or task name" aria-label="Search" name="search">
        <button class="btn btn-outline-success" type="submit" name="find">Search</button>
       
  
    </form>
    <?php
        if(isset($_POST['find'])){
          $search=$_POST['search'];
          $find="SELECT * FROM tasks WHERE Tid LIKE '%$search%' or `name` LIKE '%$search%'   ";
          $go=mysqli_query($conn,$find);
          
          if($go){
            if(mysqli_num_rows($go) > 0){
         ?>
         <br>
                <table class="table table-striped table-info table-hover text-center">
                <thead>
                  <tr>
                    <th scope="col">ID</th>
                    <th scope="col">TASK NAME</th>
                    <th scope="col">DUE DATE</th>
                    <th scope="col">STATUS</th>
                    <th scope="col">OPERATION</th>
                    
                  </tr>
                </thead>
                <tbody>
                    
            <?php while($row=mysqli_fetch_assoc($go)) {

             ?>
                  <tr>
                    <td><?php echo $row['Tid']?> </td> 
                    <td><?php echo $row['name']?> </td>
                    <td><?php echo $row['due_date']?> </td>
                    <td><?php if($row["completed"]==0){
                                    echo "incomplete";
                                }else{
                                  echo "complete";
                                }  ?> </td>
                    <td> <button class="btn btn-success">
                                    <a href="update.php?Tid=<?php echo $row["Tid"] ?>" class="text-white text-decoration-none">
                                    <i class="fa-solid fa-square-check "></i>
                                    </a>
                                </button> </td>
                                
                  </tr>
                </tbody>
              </table>
              <?php
                  

            }
            
        }else{
            ?>
            <br><tr>
                    <th scope="row"></th>
                    <td ><p class="text-danger">no recored found</p> </td>
                    
                  </tr>
                  <?php
        }
        
        
    }
} 
    ?>
        </div><br><br><br>
      </div><br><br><br>
       

     

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
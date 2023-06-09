<?php
include("config.php");
ob_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Alkatra&family=Averia+Serif+Libre:ital,wght@0,300;1,300;1,700&family=DM+Serif+Display:ital@1&family=Petit+Formal+Script&family=Tilt+Prism&display=swap" rel="stylesheet">
        
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
<div class="container mt-2"><br><br>
<h1 class="text-center  bg-muted">MY TASK LIST</h1><br>



    <div class="container d-flex">
      <button type="submit" class="btn btn-dark "  >
          <a href="tms.php" class="text-white text-decoration-none">Back</a>
      </button>     &nbsp;&nbsp;&nbsp;&nbsp;
      <button type="submit" class="btn btn-primary"  >
          <a href="insert.php" class="text-white text-decoration-none">Add task</a>
      </button>
      </div>
<br><br>
<?php
            $fetch = "SELECT * FROM tasks";
            $res = mysqli_query($conn, $fetch);


        ?>
            <table class="table table-striped table-info table-hover text-center">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>TASK NAME</th>
                        <th>DESCRIPTION</th>
                        <th>DUE_DATE</th>
                        <th>STATUS</th>
                        <th>OPERATION</th>
                    </tr>
                </thead>
                <tbody>
                    <?php while ($row = mysqli_fetch_assoc($res)) {  ?>
                        <tr>
                            <td><?php echo $row["Tid"] ?></td>
                            <td><?php echo $row["name"] ?></td>
                            <td><?php echo $row["description"] ?></td>
                            <td><?php echo $row["due_date"] ?></td>
                            <td><?php if($row["completed"]==0){
                                    echo "incomplete";
                                }else{
                                  echo "complete";
                                }  ?>
                            </td>
                            <td>
                                <!-- <button class="btn btn-primary">
                                    <a href="update.php?Tid=<?php echo $row["Tid"] ?>" class="text-white text-decoration-none"> Update
                                    </a>
                                </button>  -->
                                <button class="btn btn-danger">
                                    <a href="delete.php?Tid=<?php echo $row["Tid"] ?>" class="text-white text-decoration-none"> Delete</a>
                                </button>
                            </td>

                        </tr>
                    <?php       }    ?>
                </tbody>
            </table>
<br>
       

    </div>

<br>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>

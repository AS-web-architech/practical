<?php
include('config.php');
$ID = $_GET['id'];
$delquery = "DELETE FROM tasks WHERE Tid = '$ID' ";


if(mysqli_query($conn, $delquery)){
    echo "<script>alert('Data Deleted Successfully..')</script>";
    echo "<script>window.location.href='view.php'</script>";
} else{
    echo "<script>alert('Data Not Deleted Try Again..!')</script>";
}

if(isset($_GET['Tid'])){
    $TID = $_GET['Tid'];
    $delquery = "DELETE FROM tasks WHERE Tid = '$TID' ";
    
    
    if(mysqli_query($conn, $delquery)){
        echo "<script>alert('Data Deleted Successfully..')</script>";
        echo "<script>window.location.href='view.php'</script>";
    } else{
        echo "<script>alert('Data Not Deleted Try Again..!')</script>";
    }
}


?>
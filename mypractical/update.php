<?php
include('config.php');
if(isset($_GET['Tid'])){
   
    $id=$_GET['Tid'];
    // $status="complete";
    $update="UPDATE tasks SET `completed`= 1 WHERE Tid='$id'";
    $q=mysqli_query($conn,$update);
    if($q){
        echo "<script>alert('status updated')</script>";
        echo "<script>window.location.href='tms.php'</script>";
    
    }else{
        echo "<script>alert('can't update status')</script>";
        echo "<script>window.location.href='tms.php'</script>";
        
    }
}

?>
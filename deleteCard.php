<?php
include './searchCard.php';
if(isset($_GET['deleteid'])){
    $id=$_GET['deleteid'];
    
    $sql = "DELETE FROM payment WHERE id = $id";

    $result=mysqli_query($con,$sql);
    if($result){
        //echo"Deleted successfull";
        header('location:paymentManagement.php');
    }else{
        die(mysqli_error($con));
    }
}
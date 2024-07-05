<?php

$hostname = "localhost"; 
$username = "root";
$password = "";
$databaseName = "sliit"; 

$connect = mysqli_connect($hostname, $username, $password, $databaseName);


if (isset($_POST['submit'])) {

    if(!empty($_POST['cardNumber'])){

        $cardNumber = $_POST['cardNumber'];
        $cardHolderName = $_POST['cardHolderName'];
        $expiryDate = $_POST['expiryDate'];
        $cvv = $_POST['cvv'];

        if (empty($cardNumber)) {
            echo ("Please enter your Card Number!");
        }else if (strlen($cardNumber) <16) {
            echo ("Card Number must have 16 characters!");
        }else if (strlen($cardNumber) >16) {
            echo ("Card Number must have 16 characters!");
        } else if(empty($cardHolderName)){
            echo("Please enter your card holder name!");
        }else if(empty($expiryDate)){
            echo("please enter expired date");
        }else if (empty($cvv)){
            echo ("please enter cvv");
        }else{


   //     $query = "INSERT INTO `payment`(`cardNumber`, `cardHolderName`, `expiryDate`, `cvv`) VALUES ('$cardNumber','$cardHolderName','$expiryDate','$cvv')";
        $query = "INSERT INTO `payment`(`cardHolderName`, `expiryDate`) VALUES ('$cardHolderName','$expiryDate')";
        $run = mysqli_query($connect,$query);

        if($run){
            echo "Payment Successfully";
        }else{
            echo "Payment Unsuccessfull";
        }
    }
    }else{
        echo "Fill all details";
    }

}

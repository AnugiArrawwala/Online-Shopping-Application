<?php

include('./searchCard.php');
$cardNumber = $_GET['updateid'];
$sql = "SELECT * FROM `payment` WHERE cardNumber = '$cardNumber'";

$result = mysqli_query($con, $sql);
$row = mysqli_fetch_assoc($result);

$cardNumber = $row['cardNumber'];
$cardHolderName = $row['cardHolderName'];
$expiryDate = $row['expiryDate'];
$cvv = $row['cvv'];

if (isset($_POST['submit'])) {

    $cardNumber = $row['cardNumber'];
    $cardHolderName = $row['cardHolderName'];
    $expiryDate = $row['expiryDate'];
    $cvv = $row['cvv'];

    $sql = "UPDATE `payment` SET `cardNumber`='$cardNumber',`cardHolderName`='$cardHolderName',`expiryDate`='$expiryDate',`cvv`='$cvv' WHERE '$cardNumber'";

    $result = mysqli_query($con, $sql);

    if ($result) {
        echo "Updated successfully";
        //header('location:display.php');
    } else {
        die(mysqli_error($con));
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upadate</title>

    <link rel="stylesheet" href="./styles.css">
</head>

<body>

    <form action="./update.php">

                        Credit card number
                        <input type="text" name="cardNumber" id="cardNumber" class="textFeild" placeholder="Enter card number">

                        Card Holder Name
                        <input type="text" name="cardHolderName" id="cardHolderName" class="textFeild" placeholder="Enter card number">

                        Exp Date
                        <input type="text" name="expiryDate" id="expiryDate" class="textFeild" placeholder="Expiry Date (e.g. MM/YY)">

                        CVV
                        <input type="text" name="cvv" id="cvv" class="textFeild" placeholder="CVV">




        <input type="submit" value="Update">

    </form>


</body>

</html>
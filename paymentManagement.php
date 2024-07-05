<?php 

session_start();


include ('./searchCard.php');


if (isset($_SESSION['fname'])) {

 ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pay Ment Management || Admin</title>

    <link rel="stylesheet" href="./styles.css">
</head>
<body>
    <div class="header__payment"> <h1 style="font-size: 50px; color:beige;">Payment management </h1></div>

<h1>Hello, <?php echo $_SESSION['fname']; ?></h1>

<div class="toolbox">
    <form action="">
        <input type="text" class="textFeild3" placeholder="Enter Credit card number here:"> 
        <input type="submit" name="search" value="Search" >
    </form>
</div>

<div class="cc__view">
<table class="table">
      <thead class="tableHeader">
        <tr class="tableHeader3">
        <th scope="col" class="tableHeader2">Id</th>
          <th scope="col" class="tableHeader2">Caerholder Name</th>
          <th scope="col" class="tableHeader2">Expired Date</th>
          
          
          <th scope="col">Actions</th> <!-- Added Actions column -->
        </tr>
      </thead>
      <tbody>

        <?php

        $sql = "SELECT * FROM payment";

        $result = mysqli_query($con, $sql);
        if ($result) {
          while ($row = mysqli_fetch_assoc($result)) {
            
             
              $cardHolderName = $row['cardHolderName'];
              $expiryDate = $row['expiryDate'];
              $id = $row['id'];
              
          

              echo '<tr>
              <td>' . $id . '</td>
              <td>' . $cardHolderName . '</td>
              <td>' . $expiryDate . '</td>
            
              <td>
             <button class="btndelete"><a href="deleteCard.php?deleteid='.$id.'" class="text-light">Delete</a></button>
              </td>

            </tr>';
          }
        }
        ?>
      
      </tbody>
    </table>

</div>
    
</body>
</html>

<?php 

}else{

     header("Location: cardManagementLogin.php");

     exit();

}

 ?>
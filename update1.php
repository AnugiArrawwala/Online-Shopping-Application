<?php
	
	include 'connect1.php';
	$id=$_GET['updateid'];
	$sql="select * from `crud` where id=$id";
	$result=mysqli_query($con,$sql); 
	$row=mysqli_fetch_assoc($result);
	$item_name=$row['item_name'];
	$item_category=$row['item_category'];
	$price=$row['price'];
	$quantity=$row['quantity'];
	$item_description=$row['item_description'];
	$item_image=$row['item_image'];
	
		if(isset($_POST['submit']))
			{
				$item_name=$_POST['item_name'];
				$item_category=$_POST['item_category'];
				$price=$_POST['price'];
				$quantity=$_POST['quantity'];
				$item_description=$_POST['item_description'];
				$item_image=$_POST['item_image'];
				
				$sql="UPDATE `crud` SET id=$id, item_name='$item_name', item_category='$item_category', price='$price', quantity=$quantity, item_description='$item_description', item_image='$item_image' where id=$id";
				$result=mysqli_query($con,$sql);
					if($result)
					{
						//echo "Updated successfully";
						header('location:Updates_On_Webpage1.php');
					}
					else
					{
						die(mysqli_error($con));
					}
			}
			
?>

<!DOCTYPE html>
<html lang="en">

	<head>
		<!--required meta tags-->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	
		<style>
			body
			{
				background-color:#cccccc;
			}

			.flex-container
			{
				display: flex;
				margin-left: 200px;
		        
			}

			.form-group
			{
				font-family: times new roman;
				font-size: 25px;
				height:75px ;
				margin-top: ;
			}

			.form-control
			{
				width:500px;
				height: 30px;
				border-radius: 10px;
				border-color: white;
				
			}

			.btn-primary
			{
				margin-top: 20px;
				padding: 15px;
				background-color:#2832c2;
				color: white;
				border-radius: 15px;
				border-color: #2832c2;

			}
			

		
		</style>
	
		<title>crud Operation</title>
	</head>
	
	<body>
		<div class="container my-5">
			<form method="post">
				<div class="form-group">
					<label>Item Name</label>
					<input type="text" class="form-control" placeholder="enter your item name" name="item_name" autocomplete="off" value=<?php
																																		  echo $item_name;
																																		 ?>>	
				</div>	
				<div class="form-group">
					<label>Item Category</label>
					<input type="text" class="form-control" placeholder="enter your item category" name="item_category" autocomplete="off" value=<?php
																																				 echo $item_category;
																																				 ?>>
				</div>
				<div class="form-group">
					<label>Price</label>
					<input type="text" class="form-control" placeholder="enter the item price" name="price" autocomplete="off" value=<?php
																																	 echo $price;
																																	 ?>>
				</div>
				<div class="form-group">
					<label>Quantity</label>
					<input type="text" class="form-control" placeholder="enter your item quantity" name="quantity" autocomplete="off" value=<?php
																																			echo $quantity;
																																			?>>
				</div>	
				<div class="form-group">
					<label>Item Description</label>
					<input type="text" class="form-control" placeholder="enter your item description" name="item_description" autocomplete="off" value=<?php
																																					   echo $item_description;
																																					   ?>>
				</div>	
				<div class="form-group">
					<label>Item Image</label>
					<input type="text" class="form-control" placeholder="upload your item image" name="item_image" autocomplete="off" value=<?php
																																			echo $item_image;
																																			?>>
				</div>	 
	
	
				<button type="submit" class="btn-primary" name="submit">Update</button>
  
			</form>				
			
		
		</div>
		
	
	</body>
</html>	
	
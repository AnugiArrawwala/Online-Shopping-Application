<?php
	
	include 'connect.php';
		if(isset($_POST['submit']))
			{
				$item_name=$_POST['item_name'];
				$item_category=$_POST['item_category'];
				$price=$_POST['price'];
				$quantity=$_POST['quantity'];
				$item_description=$_POST['item_description'];
				$item_image=$_POST['item_image'];
				
				$sql="insert into `crud` (item_name,item_category,price,quantity,item_description,item_image)
					 values('$item_name','$item_category','$price','$quantity','$item_description','$item_image')";
				$result=mysqli_query($con,$sql);
					if($result)
					{
						//echo "Data inserted successfully"</br>;
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
		<div class="flex-container">
			<form method="post">
				<div class="form-group">
					<label>Item Name</label></br>
					<input type="text" class="form-control" placeholder="enter your item name" name="item_name" autocomplete="off">
				</div>	
				<div class="form-group">
					<label>Item Category</label></br>
					<input type="text" class="form-control" placeholder="enter your item category" name="item_category" autocomplete="off">
				</div>
				<div class="form-group">
					<label>Price</label></br>
					<input type="text" class="form-control" placeholder="enter the item price" name="price" autocomplete="off">
				</div>
				<div class="form-group">
					<label>Quantity</label></br>
					<input type="text" class="form-control" placeholder="enter your item quantity" name="quantity" autocomplete="off">
				</div>	
				<div class="form-group">
					<label>Item Description</label></br>
					<input type="text" class="form-control" placeholder="enter your item description" name="item_description" autocomplete="off">
				</div>	
				<div class="form-group">
					<label>Item Image</label></br>
					<input type="text" class="form-control" placeholder="upload your item image" name="item_image" autocomplete="off">
				</div>	 
	
	
				<button type="submit" class="btn-primary" name="submit" >Add the New Item</button>
  
			</form>
			
		
		</div>
		
	
	</body>
</html>	
	
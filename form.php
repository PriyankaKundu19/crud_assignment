<?php include("connection.php"); ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>PHP CRUD Operations</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
		<div class="container">
			<form action="#" method="POST">
			<div class="title">
				Add New Product
			</div>

			<div class="form">
				<div class="input_field">
					<label>Name</label>
					<input type="text" class="input" name="name">
				</div>

				<div class="input_field">
					<label>Product Description</label>
					<textarea class="textarea" name="pd"></textarea>
				</div>

				<div class="input_field">
					<label>Quantity</label>
					<input type="text" class="input" name="quantity">
				</div>

				<div class="input_field">
					<label>Price</label>
					<input type="text" class="input" name="price">
				</div>

				<div class="input_field">
					<label>Expire Date</label>
					<input type="date" class="input" name="expire">
				</div>

				<div class="input_field terms">
					<label class="check">
						<input type="checkbox">
						<span class="checkmark"></span>
					</label>
					<p>Agree to terms and conditions</p>
				</div>
				<div class="input_field">
					<input type="submit" value="Insert" class="btn" name="insert">
				</div>
			</div>
		</form>
		</div>
</body>

</html>


<?php
	if(isset($_POST['insert']))
	{
		$nm       = $_POST['name'];
		$pd       = $_POST['pd'];
		$qnantity = $_POST['quantity'];
		$price    = $_POST['price'];
		$expire   = $_POST['expire'];

		if($nm != "" && $pd != "" && $qnantity != "" && $price != "" && $expire != "")
		{
		$query = "INSERT INTO form VALUES(' ','$nm','$pd','$qnantity','$price','$expire')";
		$data = mysqli_query($conn,$query);

		if($data)
		{
			echo "Data inserted into database";
		}
		else 
		{
			echo "Failed";
		}
	}
	else
	{
		echo "<script>alert('Please fill up the form first');</script>";
	}
	}

?>
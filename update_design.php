<?php include("connection.php"); 
$a = $_GET['id'];

$query = "SELECT * FROM form where id='$a'";
$data = mysqli_query($conn, $query);
$total = mysqli_num_rows($data);
$result = mysqli_fetch_assoc($data);

?>

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
				Update Product Details
			</div>

			<div class="form">
				<div class="input_field">
					<label>Name</label>
					<input type="text" value="<?php echo $result['Name'];?>" class="input" name="name">
				</div>

				<div class="input_field">
					<label>Product Description</label>
					<textarea class="textarea" name="pd"><?php echo $result['Product_Description'];?></textarea>
				</div>

				<div class="input_field">
					<label>Quantity</label>
					<input type="text" value="<?php echo $result['Quantity'];?>" class="input" name="quantity">
				</div>

				<div class="input_field">
					<label>Price</label>
					<input type="text" value="<?php echo $result['Price'];?>" class="input" name="price">
				</div>

				<div class="input_field">
					<label>Expire Date</label>
					<input type="date"  value="<?php echo $result['Expire_Date'];?>" class="input" name="expire">
				</div>

				<div class="input_field terms">
					<label class="check">
						<input type="checkbox">
						<span class="checkmark"></span>
					</label>
					<p>Agree to terms and conditions</p>
				</div>
				<div class="input_field">
					<input type="submit" value="Update Details" class="btn" name="update">
				</div>
			</div>
		</form>
		</div>
</body>

</html>


<?php
	if(isset($_POST['update']))
	{
		$nm       = $_POST['name'];
		$pd       = $_POST['pd'];
		$qnantity = $_POST['quantity'];
		$price    = $_POST['price'];
		$expire   = $_POST['expire'];

			$query = "UPDATE `form` SET `id`='$a' , `Name`='$nm',`Product_Description`='$pd',`Quantity`='$qnantity',`Price`='$price',`Expire_Date`='$expire' where `id` = '$a';";
			$data = mysqli_query($conn,$query);


		if($data)
		{
			echo "<script>alert('Record Updated')</script>";
			?>

			<meta http-equiv = "refresh" content = "0; url = http://localhost/crud/display.php" />

			<?php
		}
		else 
		{
			echo "Failed to Update";
		}
	}

?>
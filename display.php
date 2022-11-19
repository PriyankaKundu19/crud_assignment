<html>
<head>
	<title>Display</title>
	<style >
		body
		{
			background: #D071f9;
		}
		table
		{
			background-color: white;
		}

		.update, .delete
		{
			background-color: green;
			color: white;
			border: 0;
			outline: none;
			border-radius: 5px;
			height: 23px;
			width: 90px;
			font-weight: bold;
			cursor: pointer;
		}
		.delete
		{
			background-color: red;
		}

	</style>
</head>
<?php
include("connection.php");

$query = "SELECT * FROM form";
$data = mysqli_query($conn, $query);
$total = mysqli_num_rows($data);


if($total != 0)
{
	?>

	<h2 align="center"><mark>Displaying All Records</mark></h2>
	<center><table border="1" cellspacing="7" width="100%">
		<tr>
		<th width="5%">Id</th>
		<th width="20%">Name</th>
		<th width="25%">Product Description</th>
		<th width="10%">Quantity</th>
		<th width="10%">Price</th>
		<th width="12%">Expire Date</th>
		<th width="18%">Operations</th>
		</tr>

	


	<?php
	while($result = mysqli_fetch_assoc($data))
	{
		$id=$result["id"];
		echo "<tr>
				<td>".$result['id']."</td>
				<td>".$result['Name']."</td>
				<td>".$result['Product_Description']."</td>
				<td>".$result['Quantity']."</td>
				<td>".$result['Price']."</td>
				<td>".$result['Expire_Date']."</td>

				<td><a href='update_design.php?id=$result[id]'><input type='submit' value='Update' class='update'></a><a href='delete.php?id=$result[id]'><input type='submit' value='Delete' class= 'delete' onclick = 'return checkdelete()'></a></td>
				</tr>
				";
	}
}
else
{
	echo "No records found";
}

?>
</table>
</center>

<script>
	function checkdelete()
	{
		return confirm('Are you sure you want to delete the record ?');
	}
</script>
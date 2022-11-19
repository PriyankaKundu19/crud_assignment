<?php
include("connection.php"); 
$a = $_GET['id'];

$query = "DELETE FROM form WHERE id = '$a'";
$data = mysqli_query($conn, $query);


if($data)
{
	echo "<script>alert('Record deleted')</script>";	
	?>

	<meta http-equiv = "refresh" content = "0; url = http://localhost/crud/display.php" />

<?php
}
else
{
	echo "<script>alert('Failed to delete')</script>";	}
?>
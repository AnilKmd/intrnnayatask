<!DOCTYPE html>
<html>
<head>
<title>add page</title>
<link rel="stylesheet" href="style.css">
</head>
<body>
		<button class="button" onclick="window.location='main.php'">Home</button><br>
		<div align="right">
		<button class="button" onclick="window.location='list.php'">List</button>
		<button class="button" onclick="window.location='search.php'">Search</button>
	<form name="name" action="" method="POST"><br>
		<center>
		<input type="text" name="name" placeholder="Enter name" required><br><br>
		<input type="number" name="age" placeholder="Enter Age" required><br><br>
		<input type="text" name="location" placeholder="Enter Location" required><br><br>
		<input type="submit" name="save" value="save">
	</form>
</body>
</html>
<?php
include('connectdb.php');
if (isset($_POST["save"]))
{
	$name=$_POST["name"];
	$age=$_POST["age"];
	$loc=$_POST["location"];
	$query="INSERT INTO User(fname,age,location) values ('$name','$age','$loc')";
	$res=mysqli_query($db,$query);
	if ($res)
		echo "<script>alert('Document saved successfully')</script>";
}
?>
<!DOCTYPE html>
<html>
<head>
<title>search page</title>
<link rel="stylesheet" href="style.css">
<style type="text/css">
	table{
    	border-collapse:collapse;
    	border-color: yellow;
    	text-align: center;
    	table-layout: auto;
    	width:620px;
    	line-height: 40px;
    	font-family: 'Roboto Slab';
    	font-size: 22px;      	
    }th{
    	background-color: #2193EF;
    }

</style>
</head>
<body>
	<button class="button" onclick="window.location='main.php'">Home</button><br>
	<div align="right"><button class="button" onclick="window.location='list.php'">List</button>
	<button class="button" onclick="window.location='add.php'">Add</button>
	<form name="name" action="" method="POST"><br><br>
		<center><br>
		<input type="text" name="location" placeholder="Enter Location" required>
		<input type="submit" name="search" value="Search"><hr>	
	</form>
</body>
</html>
<?php
include('connectdb.php');
if (isset($_POST["search"]))
{
	$loc=$_POST["location"];
	$query="SELECT * FROM User WHERE location='$loc' ORDER BY fname";
	$res=mysqli_query($db,$query);
	if (mysqli_fetch_assoc($res)==0)
	{	
		echo "<script>alert('No such records')</script>";
	}
	echo "<center><h1></h1><table border='2'><tr><th>Name</th><th>Age</th><th>Location</th></tr>";
	$res=mysqli_query($db,$query);
	while($r=mysqli_fetch_assoc($res))
	{
		echo ("<tr><td>".$r['fname']."</td>");
		echo ("<td>".$r['age']."</td>");
		echo("<td>".$r['location']."</td><tr>");
		
	}
}
?>

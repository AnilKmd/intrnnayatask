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
    	width:170px;
    	line-height: 40px;
    	font-family: 'Roboto Slab';
    	font-size: 22px;  	
    }
</style>
</head>
<body>

	<button class="button" onclick="window.location='main.php'">Home</button><br>
	<div align="right">
	<button class="button" onclick="window.location='add.php'">Add</button>
	<button class="button" onclick="window.location='search.php'">Search</button>
</body>
</html>

<?php
include('connectdb.php');
$query="SELECT * from User ORDER BY fname";
$res=mysqli_query($db,$query);
echo "<center><h1><u>Friends List</u></h1><table border='2'>";
while($r=mysqli_fetch_assoc($res))
	{	
		echo ("<tr><td>".$r['fname']."</td><tr>");
	}
?>

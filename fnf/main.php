<!DOCTYPE html>
<html>
<head>
<title>main page</title>
<link rel="stylesheet" href="style.css">
</head>
<body>
	<center><h1><u>Naya Roomie Task</u></h1><br><br>
	<h2>Click the below buttons to respective operation</h2><br>
	<form name="form1" action="" method="POST">
		<input  type="submit"  name="list" value="List">
		<input type="submit" name="add" value="Add">
		<input type="submit" name="search" value="Search">
	</form>
</body>
</html>
<?php
if (isset($_POST["list"]))
	header('location:list.php');
if (isset($_POST["add"]))
	header('location:add.php');
if (isset($_POST["search"]))
	header('location:search.php');
?>

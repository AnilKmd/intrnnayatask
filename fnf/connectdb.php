<?php
	$db=mysqli_connect('localhost','root','','task');
		if(!$db)
	{
		print "not connected";
		die("Connection failed: " . mysqli_connect_error());
	}
?>
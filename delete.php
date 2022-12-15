<?php
	include("connect.php");
	$item_id = $_GET['item_id'];
	$q = "delete from list where item_id = $item_id ";
	mysqli_query($con,$q);
	header("location:index.php");
	
?>

<?php 
	include("connect.php"); 
	$id = $_GET['EventName']; 
	$q = "delete from aemevent where EventName = $EventName"; 
	mysqli_query($con,$q);
    header("location:home.php");
?>

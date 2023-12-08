<?php 
	include("connect.php"); 
	$id = $_GET['EventName']; 
	$q = "DELETE from aemevent where EventName = '$EventName'"; 
	mysqli_query($cons,$q);
    header("location:home.php");
?>

<?php 
	include("connect.php"); 
	$id = $_GET['id']; 
	$q = "delete from testtable where Id = $id "; 
	mysqli_query($con,$q);
    header("location:home.php");
?>

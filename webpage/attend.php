<?php
    include("connect.php");
    session_start();
	$eventName = $_GET['eventName'];
    $userID = $_SESSION["userID"];

    $q = "INSERT INTO attendee (UserID, EventName)
    values ('$userID', '$eventName')";
    $query = mysqli_query($cons, $q);

    header("location:home.php");
?>
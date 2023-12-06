<?php 
	include("connect.php"); 
?> 

<html> 

<head> 
	<meta http-equiv="Content-Type"
		content="text/html; charset=UTF-8"> 

	<title>View List</title> 

	<link rel="stylesheet" href= 
"https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"> 

	<link rel="stylesheet"
		href="webpage/style.css"> 
</head> 

<body> 
	<div class="container mt-5"> 
		
		<!-- top --> 
		<div class="row"> 
			<div class="col-lg-8"> 
				<h1>Event Manager</h1> 
				<a href="createEvent.php" class="btn btn-group-sm">Create Event</a> 
				<a href="Events.php" class="btn btn-group-sm">Join Events</a>
				<hr> 
				<h3>Your Events</h3>
			</div>  
		</div> 

		<!-- Grocery Cards --> 
		<div class="row mt-4"> 

            <?php 
                // query for all events attached to user
                for ($i = 0; $i < 8; $i++) {
            ?>

			<div class="col-lg-4"> 
				<div class="card"> 
					<div class="card-body"> 
                        <!-- Create query for event list-->
						<h5 class="card-title"> Event </h5> 

                        <a href="viewEvent.php" class="btn btn-primary">Event Details</a> <br>
					</div> 
				</div><br> 
			</div> 
            <?php
                }
            ?>                
		</div> 
	</div> 

    <?php 
		if(isset($_POST["btn1"])) { 
			include("connect.php"); 
			$email=$_POST['email']; 
			$psswrd=$_POST['psswrd']; 
	
            // configure query to check if email & password exist in database users.
			$q="insert into testtable(name, 
			ID,place,senior) 
			values(2,3,4,5)"; 

			mysqli_query($con,$q); 

            // check for valid login before sending to home.
			header("location:home.php");
		} 
	?>
</body> 

</html>

<?php 
	include("connect.php"); 

	// Implement login functionality
	$email = $_GET['email'];
	$q = "SELECT * FROM aemevent WHERE 'Email' = '$email' ";
	$query = mysqli_query($cons,$q);
	$user = mysqli_fetch_array($query);
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
		
		<div class="row"> 
			<div class="col-lg-8"> 
				<h1>Event Manager</h1> 
				<h3><?php $user['FirstName']; ?></h3> 
				<a href="createEvent.php" class="btn btn-group-sm">Create Event</a> 
				<a href="Events.php" class="btn btn-group-sm">Join Events</a>
				<hr> 
				<h3>Your Events</h3>
			</div>  
		</div> 

		<div class="row mt-4"> 

            <?php 
                // query for all events attached to user
                while($qq=mysqli_fetch_array($query)) {
            ?>

			<div class="col-lg-4"> 
				<div class="card"> 
					<div class="card-body"> 
                        <!-- Create query for event list-->
						<h5 class="card-title"><?php echo $qq['Name']; ?></h5> 
						<h6 class="card-body"><?php echo $qq['Description']; ?></h6>
                        <a href="viewEvent.php?id=<?php echo $qq['Name']; ?>" class="btn btn-primary">Event Details</a> <br>
					</div> 
				</div><br> 
			</div> 
            <?php
                }
            ?>                
		</div> 
	</div> 
</body> 

</html>

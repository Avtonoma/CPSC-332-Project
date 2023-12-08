<?php 
	include("connect.php");
	session_start(); 

	// Implement login functionality
	$email = $_SESSION['email'];
	$q = "SELECT *
	FROM users
	JOIN organizer ON users.UserID
	JOIN aemevent ON organizer.OrganizerID
	WHERE Email = '$email'";
	$query = mysqli_query($cons, $q);
?> 

<html> 

<head> 
	<meta http-equiv="Content-Type"
		content="text/html; charset=UTF-8"> 

	<title>Home</title> 

	<link rel="stylesheet" href= 
"https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"> 
</head> 

<body> 
	<div class="container mt-5"> 
		
		<div class="row"> 
			<div class="col-lg-8"> 
				<h1>Event Manager</h1> 
				<h3><?php $email ?></h3> 
				<a href="createEvent.php" class="btn btn-group-sm">Create Event</a> 
				<a href="EventsList.php" class="btn btn-group-sm">Join Events</a> <br>
				<hr> 
				<h3>Your Events</h3>
			</div>  
		</div> 

		<div class="row mt-4"> 

            <?php 
                // query for all events attached to user
                while($qq=mysqli_fetch_array($query, MYSQLI_ASSOC)) {
            ?>

			<div class="col-lg-4"> 
				<div class="card"> 
					<div class="card-body"> 
                        <!-- Create query for event list-->
						<h5 class="card-title"><?php echo $qq['EventName']; ?></h5> 
						<h6 class="card-body"><?php echo $qq['EventDescription']; ?></h6>
                        <a href="viewEvent.php?eventName=<?php echo $qq['EventName']; ?>" class="btn btn-primary">Event Details</a> <br>
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

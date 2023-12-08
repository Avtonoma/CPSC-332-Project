<?php 
	include("connect.php");
	$eventName = $_GET['eventName'];
    $q = "SELECT * FROM aemevent WHERE EventName ='$eventName'"; 
    $query=mysqli_query($cons,$q); 
?> 

<html> 

<head> 
	<meta http-equiv="Content-Type"
		content="text/html; charset=UTF-8"> 

	<title>Event Details</title> 

	<link rel="stylesheet" href= 
"https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"> 
</head> 

<body> 
	<div class="container mt-5"> 
		
		<!-- top --> 
		<div class="row"> 
			<div class="col-lg-8"> 
				<h1>Event Details</h1> 
				<a href="home.php">Back to Home</a> 
			</div>  
		</div> 

		<!-- Grocery Cards --> 
		<div class="row mt-4"> 

            <?php 
                // query for all details attached to event
				while($qq=mysqli_fetch_array($query, MYSQLI_ASSOC)) {
            ?>

			<div class="col lg-4"> 
				<div class="card"> 
					<div class="card-body"> 
						<h5 class="card-title"><?php echo $qq['EventName']; ?></h5>
                        <h6 class="card-body"> <?php echo $qq['EventDescription']; ?> </h6> 
                        <a href="submit.php" class="btn btn-group-sm">Submit Abstract</a> 
						<a href="delete.php?id=<?php echo $qq['EventName']; ?>" class="btn btn-group-sm">Delete</a> 
                        <a href="update.php?id=<?php echo $qq['EventName']; ?>" class="btn btn-group-sm">Update</a> 
                        <a href="addCollab.php?id=<?php echo $qq['EventName']; ?>" class="btn btn-group-sm">Add Collaborator</a> 
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

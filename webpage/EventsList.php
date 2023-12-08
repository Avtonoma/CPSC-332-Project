<?php 
	include("connect.php");
	$q = "SELECT * FROM aemevent";
	$query = mysqli_query($cons,$q);
?> 

<html> 

<head> 
	<meta http-equiv="Content-Type"
		content="text/html; charset=UTF-8"> 

	<title>Events List</title> 

	<link rel="stylesheet" href= 
"https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"> 

</head> 

<body> 
	<div class="container mt-5"> 
		
		<!-- top --> 
		<div class="row"> 
			<div class="col-lg-8"> 
				<h1>Events List</h1>
                <a href="home.php">Back to Home</a>  
				<hr>
			</div>  
		</div> 

		<!-- Grocery Cards --> 
		<div class="row mt-4"> 

            <?php 
                // query for all events attached to user
                while ($qq=mysqli_fetch_array($query, MYSQLI_ASSOC)) {
            ?>
			<div class="col-lg-4"> 
				<div class="card"> 
					<div class="card-body"> 
                        <!-- Create query for event list-->
						<h5 class="card-title"><?php echo $qq['EventName']; ?></h5>
                        <h6 class="card-body"> <?php echo $qq['EventDescription']; ?> </h6>
						<a href="attend.php?eventName=<?php echo $qq['EventName']; ?>" class="btn btn-primary">Join Event</a> <br>
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

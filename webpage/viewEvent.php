<?php 
	include("connect.php"); 
?> 

<html> 

<head> 
	<meta http-equiv="Content-Type"
		content="text/html; charset=UTF-8"> 

	<title>Event Details</title> 

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
				<h1>Event Details</h1> 
				<a href="home.php">Back to Home</a> 
			</div>  
		</div> 

		<!-- Grocery Cards --> 
		<div class="row mt-4"> 

            <?php 
                // query for all details attached to event
            ?>

			<div class="col lg-4"> 
				<div class="card"> 
					<div class="card-body"> 
						<h5 class="card-title"> Event Name</h5>
                        <h6 class="card-body"> details </h6> 
                        <a href="submit.php" class="btn btn-group-sm">Submit Abstract</a> 
						<a href= 
						"delete.php?id=<?php echo $qq['Id']; ?>"
							class="card-link"> 
							Delete
						</a> 
						<a href= 
						"update.php?id=<?php echo $qq['Id']; ?>"
							class="card-link"> 
							Update 
						</a> 
					</div> 
				</div><br> 
			</div>              
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

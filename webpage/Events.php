<?php 
	include("connect.php"); 
?> 

<html> 

<head> 
	<meta http-equiv="Content-Type"
		content="text/html; charset=UTF-8"> 

	<title>Events List</title> 

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
				<h1>Events List</h1>
                <a href="home.php">Back to Home</a>  
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
                        <input type="submit" value="Create Account" class="btn btn-danger" name="btn1">
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

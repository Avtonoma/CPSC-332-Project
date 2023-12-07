<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <title>Add Collaborator</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="webpage/style.css">
</head>

<body>
    <div class="container mt-6">
        <h1>Add Collaborator</h1>
        <a href="home.php">Back to Home</a>
        <hr>  
        <form action="createEvent.php" method="POST">

            <div class="form-group">
                <label>Collaborator Name</label>
                <input type="text" class="form-control" placeholder="Name" name="name" />
            </div>

            <div class="form-group"> 
                <label>Role</label> 
                <select class="form-control" 
                    name="type"> 
                    <option value="0"> 
                        Presenter
                    </option> 
                    <option value="1"> 
                        Faculty Mentor 
                    </option> 
                    <option value="2"> 
                        Keynote Speaker
                    </option>
                    <option value="3"> 
                        Sponsor 
                    </option>  
                </select> 
            </div>

        </form>
    </div>

    <?php 
		if(isset($_POST["btn1"])) { 
			include("connect.php"); 
			$eName=$_POST['name']; 
			$desc=$_POST['type']; 

            // configure query to add new event to table
			$q="insert into testtable(name, 
			ID,place,senior) 
			values(5,4,3,2)"; 

			mysqli_query($con,$q); 

			header("location:home.php");
		} 
	?>
</body>

</html>
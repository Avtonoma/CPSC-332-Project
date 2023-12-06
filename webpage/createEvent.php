<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <title>Create Event</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="webpage/style.css">
</head>

<body>
    <div class="container mt-6">
        <h1>Create Event</h1>
        <form action="createEvent.php" method="POST">

            <div class="form-group">
                <label>Event Name</label>
                <input type="text" class="form-control" placeholder="Event Name" name="eName" />
            </div>

            <div class="form-group">
                <label>Description</label>
                <input type="text" class="form-control" placeholder="description" name="desc" />
            </div>

            <div class="form-group"> 
                <label>Start Date & Time</label> 
                <input type="datetime-local" 
                    class="form-control" 
                    placeholder="Start Date & Time" 
                    name="sdate"> 
            </div> 

            <div class="form-group"> 
                <label>End Date & Time</label> 
                <input type="datetime-local" 
                    class="form-control" 
                    placeholder="End Date & Time" 
                    name="edate"> 
            </div>
            
            <div class="form-group"> 
                <label>Abstract Submission Deadline</label> 
                <input type="date" 
                    class="form-control" 
                    placeholder="Abstract Submission Deadline" 
                    name="deadline"> 
            </div> 

            <div class="form-group">
                <label>Capacity</label>
                <input type="text" class="form-control" placeholder="Capacity" name="cap" />
            </div>

            <div class="form-group">
                <label>Venue</label>
                <input type="text" class="form-control" placeholder="Venue" name="venue" />
            </div>

            <div class="form-group">
                <label>University</label>
                <input type="text" class="form-control" placeholder="University" name="uni" />
            </div>

            <div class="form-group">
                <label>Address</label>
                <input type="text" class="form-control" placeholder="Address" name="addr" />
            </div>

            <div class="form-group">
                <input type="submit" value="Create Event" class="btn btn-danger" name="btn1">
            </div>
        </form>
    </div>

    <?php 
		if(isset($_POST["btn1"])) { 
			include("connect.php"); 
			$eName=$_POST['eName']; 
			$desc=$_POST['desc']; 
            $sdate=$_POST['sdate']; 
            $edate=$_POST['edate']; 
            $edate=$_POST['deadline']; 
			$cap=$_POST['cap'];
            $venue=$_POST['venue']; 
            $uni=$_POST['uni']; 
            $addr=$_POST['addr'];  
	
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
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <title>Create Event</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="webpage/style.css">
</head>

<body>
    <div class="container mt-6">
        <h1>Submit Abstract</h1>
        <form action="createEvent.php" method="POST">

            <div class="form-group">
                <label>Title</label>
                <input type="text" class="form-control" placeholder="Title" name="title" />
            </div>

            <div class="form-group">
                <label>Abstract</label>
                <input type="text" class="form-control" placeholder="Abstract" name="abstract" />
            </div>

            <div class="form-group"> 
                <label>Type</label> 
                <select class="form-control" 
                    name="type"> 
                    <option value="0"> 
                        Oral Talk 
                    </option> 
                    <option value="1"> 
                        Poster 
                    </option> 
                    <option value="2"> 
                        Performing Arts 
                    </option>
                    <option value="3"> 
                        Visual Arts 
                    </option>  
                </select> 
            </div>

            <div class="form-group"> 
                <label>Subject</label> 
                <select class="form-control" 
                    name="type"> 
                    <option value="0"> 
                        Behavioral or Social Sciences
                    </option> 
                    <option value="1"> 
                        Biological or Agricultural Sciences 
                    </option> 
                    <option value="2"> 
                        Business, Economics, or Public Administration
                    </option>
                    <option value="3"> 
                        Chemistry 
                    </option>
                    <option value="4"> 
                        Communication 
                    </option> 
                    <option value="5"> 
                        Earth of Environmental Science 
                    </option> 
                    <option value="6"> 
                        Education 
                    </option>
                    <option value="7"> 
                        Engineering or Computer Science
                    </option> 
                    <option value="8"> 
                        Film Studies
                    </option> 
                    <option value="9"> 
                        Health, Nutrition, or Clinical Science 
                    </option> 
                    <option value="10"> 
                        Humanities or Letters 
                    </option>
                    <option value="11"> 
                        Interdisciplinary
                    </option> 
                    <option value="12"> 
                        International Studies or Languages 
                    </option> 
                    <option value="13"> 
                        Performing Arts
                    </option> 
                    <option value="14"> 
                        Philosophy 
                    </option>
                    <option value="15"> 
                        Physical or Mathematical Sciences
                    </option>   
                    <option value="16"> 
                        Religious Studies 
                    </option>
                    <option value="17"> 
                        Visual Arts 
                    </option> 
                </select> 
            </div>

            <div class="form-group">
                <label>Primary presenter's first and last name</label>
                <input type="text" class="form-control" placeholder="name" name="pName" />
            </div>

            <div class="form-group">
                <label>Primary presenter's email address</label>
                <input type="text" class="form-control" placeholder="email" name="pEmail" />
            </div>

            <div class="form-group">
                <label>Primary presenter's institution</label>
                <input type="text" class="form-control" placeholder="institution" name="pinstit" />
            </div>

            <div class="form-group">
                <label>Faculty mentor's full name</label>
                <input type="text" class="form-control" placeholder="name" name="fName" />
            </div>

            <div class="form-group">
                <label>Faculty mentor's email address</label>
                <input type="text" class="form-control" placeholder="email" name="fEmail" />
            </div>

            <div class="form-group">
                <label>Faculty mentor's Institutions</label>
                <input type="text" class="form-control" placeholder="institutions" name="finstit" />
            </div>

            <!-- add function to add additional presenters -->

            <div class="form-group">
                <input type="submit" value="Create Abstract" class="btn btn-danger" name="btn1">
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
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <title>Create Abstract</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="webpage/style.css">
</head>

<body>
    <div class="container mt-6">
        <h1>Submit Abstract</h1>
        <form action="submit.php" method="POST">

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
                    name="subject"> 
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
                <input type="text" class="form-control" placeholder="institution" name="pInstit" />
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
                <input type="text" class="form-control" placeholder="institutions" name="fInstit" />
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
			$title=$_POST['title']; 
			$abstr=$_POST['abstract']; 
            $type=$_POST['type']; 
            $subject=$_POST['subject']; 
            $pName=$_POST['pName']; 
            $pEmail=$_POST['pEmail']; 
			$pInstit=$_POST['pInstit'];
            $fName=$_POST['fName']; 
            $fEmail=$_POST['fEmail']; 
            $fInstit=$_POST['fInstit'];
            $abstrID = uniqid();
            $presID = 87654321;
            $eventID = 93849097;
            $ReviewID = 9326216;  
	
            // configure query to add new event to table
			$q="INSERT into abstract(AbstractID, Title, 
			Content,AbstractType, SubjectArea, PresenterID, EventID, ReviewerID) 
			values('$abstrID','$title', '$abstr', '$type', '$subject', '$presID', '$eventID', '$ReviewID')"; 
			mysqli_query($cons,$q); 

			header("location:home.php");
		} 
	?>
</body>

</html>
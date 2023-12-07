<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <title>Sign Up</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="webpage/style.css">
</head>

<body>
    <div class="container mt-6">
        <h1>Sign Up</h1>
        <form action="signUp.php" method="POST">

            <div class="form-group">
                <label>First Name</label>
                <input type="text" class="form-control" placeholder="First Name" name="fName" />
            </div>

            <div class="form-group">
                <label>Last Name</label>
                <input type="text" class="form-control" placeholder="Last Name" name="lName" />
            </div>

            <div class="form-group">
                <label>Phone Number</label>
                <input type="text" class="form-control" placeholder="Phone Number" name="phone" />
            </div>

            <div class="form-group">
                <label>Email</label>
                <input type="text" class="form-control" placeholder="Email" name="email" />
            </div>

            <div class="form-group">
                <label>Password</label>
                <input type="text" class="form-control" placeholder="Password" name="psswrd" />
            </div>

            <div class="form-group">
                <input type="submit" value="Create Account" class="btn btn-danger" name="btn1">
            </div>
        </form>
    </div>

    <?php 
		if(isset($_POST["btn1"])) { 
			include("connect.php"); 
			$fName=$_POST['fName']; 
			$lName=$_POST['lName']; 
            $phone=$_POST['phone']; 
            $email=$_POST['email']; 
			$psswrd=$_POST['psswrd']; 
	
            // configure query to check if email & password exist in database users.
			$q="INSERT into Users(FirstName, 
			LastName,Email,UserPassword, PhoneNumber) 
			values('$fName', '$lName', '$email', '$psswrd', '$phone')"; 

			mysqli_query($con,$q); 

			header("location:home.php? email = $email");
		} 
	?>
</body>

</html>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <title>Login</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="webpage/style.css">
</head>

<body>
    <div class="container mt-4">
        <h1>Login</h1>
        <form action="login.php" method="POST">

            <div class="form-group">
                <label>Email</label>
                <input type="text" class="form-control" placeholder="Email" name="email" />
            </div>

            <div class="form-group">
                <label>Password</label>
                <input type="text" class="form-control" placeholder="Password" name="psswrd" />
            </div>

            <div class="form-group">
                <input type="submit" value="Login" class="btn btn-danger" name="btn1">
            </div>

            <div class="form-group">
                <input type="submit" value="Sign Up" class="btn btn-danger" name="btn2">
            </div>

        </form>
    </div>

    <?php 
		if(isset($_POST["btn1"])) { 
			include("connect.php"); 
			$email=$_POST['email']; 
			$psswrd=$_POST['psswrd']; 
	
            // configure query to check if email & password exist in database users.
			$q="SELECT * FROM Users WHERE UserPassword = '$psswrd' AND Email = 'Email'"; 
            $query = mysqli_query($con,$q);
            $query = mysqli_fetch_assoc($query);
            $result = $query['email'];


			if($result == null){
                // check for valid login before sending to home.
                $url = "home.php?email=$email";
			    header("location:".$url);
            }
		} 
        else if(isset($_POST["btn2"])) { 
			include("connect.php"); 

            // If Sign Up is clicked, send to signUp page.
			header("location:signUp.php");
		} 
	?>
</body>

</html>
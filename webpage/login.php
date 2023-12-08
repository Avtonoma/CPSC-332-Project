<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <title>Login</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
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
            session_start();
			$email=$_POST['email']; 
			$psswrd=$_POST['psswrd']; 
	
            // configure query to check if email & password exist in database users.
			$q="SELECT * FROM Users WHERE UserPassword = '$psswrd' AND Email = '$email'"; 
            $query = mysqli_query($cons,$q);
            $query = mysqli_fetch_array($query, MYSQLI_ASSOC);

            $result = $query['Email'];
            $_SESSION['email'] = $result;
			header("location:home.php");

		} 
        else if(isset($_POST["btn2"])) { 
			include("connect.php"); 

            // If Sign Up is clicked, send to signUp page.
			header("location:signUp.php");
		} 
	?>
</body>

</html>
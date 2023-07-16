<!DOCTYPE html>
<html>
<head>
    <title>File Encryption Using Chaotic Map - Login Page</title>
</head>
<body>
    <form action="" method="post">
   
	<!--Bootsrap 4 CDN-->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    
    <!--Fontawesome CDN-->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

	<!--Custom styles-->
	<link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
<div class="container">
	<div class="d-flex justify-content-center h-100">
		<div class="card">
			<div class="card-header">
				<h3>Sign Up</h3>
				<div class="d-flex justify-content-end social_icon">
					<span><i class="fab fa-facebook-square"></i></span>
					<span><i class="fab fa-google-plus-square"></i></span>
					<span><i class="fab fa-twitter-square"></i></span>
				</div>
			</div>
			<div class="card-body">
				<form>
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-user"></i></span>
						</div>
						<input type="text" class="form-control" name="Username" placeholder="Username">
						
					</div>
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-envelope"></i></span>
						</div>
						<input type="email" class="form-control" name="Email" placeholder="Email">
					</div>
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-key"></i></span>
						</div>
						<input type="password" class="form-control" name="Password" placeholder="Password">
					</div>
					<div class="form-group">
						<input type="submit" value="Register" name="Register" class="btn float-right login_btn">
					</div>
				</form>
			</div>
			<div class="card-footer">
				<div class="d-flex justify-content-center links">
					Already have an account?<a href="login.php">Sign In</a>
				</div>
			</div>
		</div>
	</div>
</div>
    </form>
</body>
<?php
function getName($n) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $randomString = '';
 
    for ($i = 0; $i < $n; $i++) {
        $index = rand(0, strlen($characters) - 1);
        $randomString .= $characters[$index];
    }
 
    return $randomString;
}
if(isset($_POST['Register'])) 
{
	$conn = mysqli_connect("tttruc.ddns.net","admin","admin","netsec",3306);
	if ($conn->connect_error) 
	{
		die("Connection failed: " . $conn->connect_error);
	}
	$n=5;
	$userid = getName($n);
	while (true) 
	{
		$sql = "SELECT * FROM tbl_users WHERE userid='$userid'";
		$result = $conn->query($sql);
		if ($result->num_rows > 0) 
		{
			$userid = getName($n);
		}
		else
		{
			break;
		}
	}
	$error = 0;
	$username = $_POST['Username'];
	$email = $_POST['Email'];
	$password = $_POST['Password'];
	$hash = hash('sha256',$password);	
	if($username == "" || $email == "" || $password == "")
	{			
		echo '<script language="javascript">';
		echo 'alert("Please fill all the fields")';
		echo '</script>';
		$error = 1;
	}
	$sql = "SELECT * FROM tbl_users WHERE username='$username'";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) 
		{
			if ($error == 0)
			{
				echo '<script language="javascript">';
				echo 'alert("This username already exists")';
				echo '</script>';
				$error = 1;
			}
		}
	if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
		if ($error == 0)
		{
			echo '<script language="javascript">';
			echo 'alert("Invalid email format")';
			echo '</script>';
			$error = 1;
		}
	}
	$sql = "SELECT * FROM tbl_users WHERE email='$email'";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) 
		{
			if ($error == 0)
			{
				echo '<script language="javascript">';
				echo 'alert("This email already exists")';
				echo '</script>';
				$error = 1;
			}
		}
	if ($error == 0)
	{
		$sql = "INSERT INTO tbl_users (userid, username, email, password) VALUES ('$userid', '$username', '$email', '$hash')";
		if ($conn->query($sql) === TRUE) 
		{
			header("Location: login.php");
		} 
		else 
		{
			echo "Error: " . $sql . "<br>" . $conn->error;
		}
	}
}
?>
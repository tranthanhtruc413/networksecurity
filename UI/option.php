<?php session_start();
if (!isset($_SESSION['Login'])) {
    header("Location: login.php");
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>File Encryption Using Chaotic Map - Option Page</title>

   
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
			<div class="card-header" style="text-align:center">
				<h3>Option</h3>
                <h4 style="color:white"><?php echo "Welcome, " . $_SESSION['Login']; ?></h3>
			</div>
			<div class="card-body">
				<form method="POST">
					<div class="form-group" style="margin-top: 10%">
						<input type="submit" value="Upload" name="Upload" class="btn float-left login_btn">
                        <input type="submit" value="Market" name="Market" class="btn float-right login_btn">
					</div>
                    <br>
                    <div class="form-group text-center" style="margin-top: 15%">
                        <input type="submit" value="Logout" name="Logout" class="btn login_btn">
                    </div>
				</form>
			</div>
		</div>
	</div>
</div>
    </form>
</body>
<?php 
if (isset($_POST['Upload'])) {
    header("Location: upload.php");
}
if (isset($_POST['Market'])) {
    header("Location: marketUI/market.php");
}
if (isset($_POST['Logout'])) {
    session_destroy();
    header("Location: logout.php");
}
?>
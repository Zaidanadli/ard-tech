<?php 

include 'config.php';

session_start();

error_reporting(0);

if (isset($_SESSION['username'])) {
    header("Location: welcome.php");
}

if (isset($_POST['submit'])) {
	$email = $_POST['email'];
	$password = md5($_POST['password']);

	$sql = "SELECT * FROM users WHERE email='$email' AND password='$password'";
	$result = mysqli_query($conn, $sql);
	if ($result->num_rows > 0) {
		$row = mysqli_fetch_assoc($result);
		$_SESSION['username'] = $row['username'];
		header("Location: welcome.php");
	} else {
		echo "<script>alert('Email or Password is Wrong')</script>";
	}
}

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="login.css">
	<title>ARDtech</title>
</head>
<body>
	<div class="ipad"><img src="http://localhost:8088/ard-tech/Gambar/iPad Air Mockup.png" alt=""></div>	
	<div class="circle"><p></p></div>
	<div class="container">
	<a href="http://localhost:8088/ard-tech/ard-tech-home.html" class="logo">
            <img src="http://localhost:8088/ard-tech/Gambar/LogoWeb.png" alt="ARDtech" >
    </a>
		<form action="" method="POST" class="login-email">
			<p class="login-text">Hi There!</p>
			<div class="input-group">
				<input class="emailfield" type="email" placeholder="Email" name="email" value="<?php echo $email; ?>" required>
			</div>
			<div class="input-group">
				<input class="passwordfield" type="password" placeholder="Password" name="password" value="<?php echo $_POST['password']; ?>" required>
			</div>
			<div class="input-group">
				<button name="submit" class="btn">Login</button>
			</div>
			<p class="login-register-text">Don't have an account? <a href="register.php">Register Here</a>.</p>
		</form>
	</div>
</body>
</html>
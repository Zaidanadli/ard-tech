<?php 

include 'config.php';

error_reporting(0);

session_start();

if (isset($_SESSION['username'])) {
    header("Location: index.php");
}

if (isset($_POST['submit'])) {
	$username = $_POST['username'];
	$email = $_POST['email'];
	$password = md5($_POST['password']);
	$cpassword = md5($_POST['cpassword']);

	if ($password == $cpassword) {
		$sql = "SELECT * FROM users WHERE email='$email'";
		$result = mysqli_query($conn, $sql);
		if (!$result->num_rows > 0) {
			$sql = "INSERT INTO users (username, email, password)
					VALUES ('$username', '$email', '$password')";
			$result = mysqli_query($conn, $sql);
			if ($result) {
				echo "<script>alert('User Registration Completed')</script>";
				header("Location: index.php");
				$username = "";
				$email = "";
				$_POST['password'] = "";
				$_POST['cpassword'] = "";
			} else {
				echo "<script>alert('Something Wrong')</script>";
			}
		} else {
			echo "<script>alert('Email Already Exists')</script>";
		}
		
	} else {
		echo "<script>alert('Password Not Matched')</script>";
	}
}

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="register.css">
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
            <p class="text-header">Let’s Get Started</p>
			<div class="input-group">
				<input class="uname" type="text" placeholder="Username" name="username" value="<?php echo $username; ?>" required>
			</div>
			<div class="input-group">
				<input class="email" type="email" placeholder="Email" name="email" value="<?php echo $email; ?>" required>
			</div>
			<div class="input-group">
				<input class="pw" type="password" placeholder="Password" name="password" value="<?php echo $_POST['password']; ?>" required>
            </div>
            <div class="input-group">
				<input class="cpw" type="password" placeholder="Confirm Password" name="cpassword" value="<?php echo $_POST['cpassword']; ?>" required>
			</div>
			<div class="input-group">
				<button name="submit" class="btn">Register</button>
			</div>
			<p class="login-register-text">Have an account? <a href="index.php">Login Here</a>.</p>
		</form>
	</div>
</body>
</html>
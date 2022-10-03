<?php

include 'config.php';

session_start();

if (isset($_POST['submit'])) {
    $email = $_POST['submit'];
    $password = md5($_POST['password']);

    $sql = "SELECT * FROM users WHERE email='$email' AND password='$password'";
    $result = mysqli_query($conn, $sql);
    if ($result->num_rows > 0) {
       $row = mysqli_fetch_assoc($result);
       $_SESSION['email'] = $row['email'];
       header("Location: welcome.php");
    } else {
        echo "<script>alert('Email or Password is wrong')</script>";
    }
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="http://localhost/ard-tech/login-page/style.css">
    <title>Login</title>
</head>
<body>

  <div class="container">
      <div class="img">
          <img src="img/io2.png" alt="">
      </div>
      <div class="login">
          <form action="" method="POST">
              <img src="img/logo.png" class="logo">
            <h2>Hello There</h2>
            <div class="input">
                <div class="i">
                    <i class="fas fas-user"></i>
                </div>
                <div>
                    <input name="email" class="input" type="text" placeholder="Email" name="email" value="<?php echo $email; ?>">
                </div>
            </div>
            <div class="input">
                <div class="i">
                    <i class="fas fas-user"></i>
                </div>
                <div>
                    <input name="password" class="input" type="password" placeholder="password" name="password" value="<?php echo $_POST['password']; ?>">
                </div>
            </div>
            <button type="submit" value="Login" class="submit" name="submit">Login</button>
            <p class="reg-new-acc">Don't have an Accoount? <a href="http://localhost/ard-tech/login-page/signuppage.php">Sign Up</a></p>
            </form>
      </div>
  </div>
  <div class="circle"></div>
</body>
</html>
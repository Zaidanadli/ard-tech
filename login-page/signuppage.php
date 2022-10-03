<?php

include 'config.php';

if (isset($_POST['submit'])){
    $email = $_POST['email'];
    $password = md5($_POST['password']);
    $cpassword = md5($_POST['cpassword']);

    if ($password == $cpassword) {
        $sql = "INSERT INTO users (email, password)
                VALUES ('$email', '$password')";
        $result = mysqli_query($conn, $sql);
        if (!$result) {
            echo "<script>alert('Something Wrong')</script>";
        }
    } else {
        echo "<script>alert('Password Not Matched')</script>";
    }
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style2.css">
    <title>Sign Up</title>
</head>
<body>
    <img src="img/arduinoflip.png" alt="" class="img">
    <div class="container">
        <div class="signup">
            <form action="" method="POST">
                <img src="img/logo.png" class="logo">
            <h2>Let's Get Started</h2>
            <div class="input">
                <div class="i">
                    <i class="fas fas-user"></i>
                </div>
                <div>
                    <input class="input" type="text" placeholder="Email" name="email">
                </div>
            </div>
            <div class="input">
                <div class="i">
                    <i class="fas fas-user"></i>
                </div>
                <div>
                    <input class="input" type="password" placeholder="password" name="password">
                </div>
            </div>
            <div class="input">
                <div class="i">
                    <i class="fas fas-user"></i>
                </div>
                <div>
                    <input class="input" type="password" placeholder="Confirm password" name="cpassword">
                </div>
            </div>
            <div class="btn">
                <button name="submit" class="button">Submit</button>
            </div>
            </form>
        </div>
    </div>
    <div class="circle"></div>
</body>
</html>
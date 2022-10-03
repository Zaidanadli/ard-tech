<?php

$server = "localhost";
$email = "root";
$password = "";
$database = "register_ardtech";

$conn = mysqli_connect($server, $email, $password, $database);

if (!$conn) {
   die("<script>alert('Connection failed')</script>");
}

?>
<?php 

session_start();
session_destroy();

header("Location: http://localhost:8088/ard-tech/ard-tech-home.html");

?>
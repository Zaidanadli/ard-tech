<?php 

session_start();

if (!isset($_SESSION['username'])) {
    header("Location: index.php");
}

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ARDtech</title>
    <link rel="icon" type="icon" href="http://localhost:8088/ard-tech/favicon_io/favicon.ico">
    <link rel="stylesheet" href="about-us.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
</head>
<body>

    <nav>
        <a href="http://localhost:8088/ard-tech/ard-tech-home.html" class="logo">
            <img src="http://localhost:8088/ard-tech/Gambar/LogoWeb.png" alt="ARDtech" >
        </a>
        <div class="navlist">
            <ul>
                <li><a href="welcome.php">Home</a></li>
                <li><a href="about-us.php">About Us</a></li>
                <li><a href="product.php">Product</a></li>
            </ul>
        </div>
        <div class="welcome">
         <?php echo  "<p>Hi " . $_SESSION['username']  . "</p>"; ?>
         </div>
        <div class="logout">
         <a href="logout.php">Logout</a>
         </div>
    </nav>

    <div class="ourteam">
    <h1>Meet Our Team🚀</h1>
    <p>Our Amazing Heroes</p>
    </div>

    <div class="profile">
        <div class="card1">
            <div class="layer1">
            </div>
            <div class="layer2">
                <h2>Zaidan Adli</h2>
                <p>CEO</p>
                <div class="icon">
                        <a href="#email">
                        <img src="http://localhost:8088/ard-tech/profile/Icon/email.png" alt="email">
                        </a>
                        <a href="#linkedid">
                        <img src="http://localhost:8088/ard-tech/profile/Icon/linkedin.png" alt="linkedin">
                        </a>
                        <a href="#instagram">
                        <img src="http://localhost:8088/ard-tech/profile/Icon/ig.png" alt="instagram">
                        </a>
                </div>
            </div>
            <div class="layer3">
                <img src="http://localhost:8088/ard-tech/profile/zaidan.jpeg" alt="zaidan">
            </div>
        </div>
        <div class="card2">
            <div class="layer1">
            </div>
            <div class="layer2">
                <h2>Noval Ramadhan</h2>
                <p>COO</p>
                <div class="icon">
                        <a href="#email">
                        <img src="http://localhost:8088/ard-tech/profile/Icon/email.png" alt="email">
                        </a>
                        <a href="#linkedid">
                        <img src="http://localhost:8088/ard-tech/profile/Icon/linkedin.png" alt="linkedin">
                        </a>
                        <a href="#instagram">
                        <img src="http://localhost:8088/ard-tech/profile/Icon/ig.png" alt="instagram">
                        </a>
                </div>
            </div>
            <div class="layer3">
                <img src="http://localhost:8088/ard-tech/profile/nopal.jpeg" alt="nopal">
            </div>
        </div>
        <div class="card3">
            <div class="layer1">
            </div>
            <div class="layer2">
                <h2>Wilda Akmalia</h2>
                <p>CFO</p>
                <div class="icon">
                        <a href="#email">
                        <img src="http://localhost:8088/ard-tech/profile/Icon/email.png" alt="email">
                        </a>
                        <a href="#linkedid">
                        <img src="http://localhost:8088/ard-tech/profile/Icon/linkedin.png" alt="linkedin">
                        </a>
                        <a href="#instagram">
                        <img src="http://localhost:8088/ard-tech/profile/Icon/ig.png" alt="instagram">
                        </a>
                </div>
            </div>
            <div class="layer3">
                <img src="http://localhost:8088/ard-tech/profile/wilda.jpeg" alt="Wilda">
            </div>
        </div>
        <div class="card4">
            <div class="layer1">
            </div>
            <div class="layer2">
                <h2>Musfiq Taqi</h2>
                <p>Product Manager</p>
                <div class="icon">
                        <a href="#email">
                        <img src="http://localhost:8088/ard-tech/profile/Icon/email.png" alt="email">
                        </a>
                        <a href="#linkedid">
                        <img src="http://localhost:8088/ard-tech/profile/Icon/linkedin.png" alt="linkedin">
                        </a>
                        <a href="#instagram">
                        <img src="http://localhost:8088/ard-tech/profile/Icon/ig.png" alt="instagram">
                        </a>
                </div>
            </div>
            <div class="layer3">
                <img src="http://localhost:8088/ard-tech/profile/taqi.jpeg" alt="taqi">
            </div>
        </div>
        <div class="card5">
            <div class="layer1">
            </div>
            <div class="layer2">
                <h2>Bagas</h2>
                <p>Marketing Manager</p>
                <div class="icon">
                        <a href="#email">
                        <img src="http://localhost:8088/ard-tech/profile/Icon/email.png" alt="email">
                        </a>
                        <a href="#linkedid">
                        <img src="http://localhost:8088/ard-tech/profile/Icon/linkedin.png" alt="linkedin">
                        </a>
                        <a href="#instagram">
                        <img src="http://localhost:8088/ard-tech/profile/Icon/ig.png" alt="instagram">
                        </a>
                </div>
            </div>
            <div class="layer3">
                <img src="http://localhost:8088/ard-tech/profile/raya.JPG" alt="Bagas">
            </div>
        </div>
        <div class="card6">
            <div class="layer1">
            </div>
            <div class="layer2">
                <h2>Rizky</h2>
                <p>Staff Marketing</p>
                <div class="icon">
                        <a href="#email">
                        <img src="http://localhost:8088/ard-tech/profile/Icon/email.png" alt="email">
                        </a>
                        <a href="#linkedid">
                        <img src="http://localhost:8088/ard-tech/profile/Icon/linkedin.png" alt="linkedin">
                        </a>
                        <a href="#instagram">
                        <img src="http://localhost:8088/ard-tech/profile/Icon/ig.png" alt="instagram">
                        </a>
                </div>
            </div>
            <div class="layer3">
                <img src="http://localhost:8088/ard-tech/profile/iky.jpeg" alt="Iky">
            </div>
        </div>
        <div class="card7">
            <div class="layer1">
            </div>
            <div class="layer2">
                <h2>Farhan</h2>
                <p>Staff Produksi</p>
                <div class="icon">
                        <a href="#email">
                        <img src="http://localhost:8088/ard-tech/profile/Icon/email.png" alt="email">
                        </a>
                        <a href="#linkedid">
                        <img src="http://localhost:8088/ard-tech/profile/Icon/linkedin.png" alt="linkedin">
                        </a>
                        <a href="#instagram">
                        <img src="http://localhost:8088/ard-tech/profile/Icon/ig.png" alt="instagram">
                        </a>
                </div>
            </div>
            <div class="layer3">
                <img src="http://localhost:8088/ard-tech/profile/parhan.jpeg" alt="">
            </div>
        </div>




    </div>
    

    




    <div class="footer-container">
        <div class="footer">
            <div class="section1">
                <h2>PT. Ard Teknologi Manufaktur</h2>
                <a href="#">Equity Tower Building 35-37th floor, Jl. Jend. sudirman kav 52-53, RT.5/RW.3, Senayan, SCBD, South Jakarta City, Jakarta 12190</a>
                <p>CS : hi@ardtech.id</p>
            </div>
            <div class="section22">
                <h2>Company</h2>
                <a href="#">Since 2022, We provide IOT product</a>
            </div>
            <div class="section3">
                <h2>Bantuan & Panduan</h2>
                <a href="#">Bantuan</a>
                <a href="#">Panduan</a>
                <a href="#">Customer Service</a>
            </div>
            <div class="section4">
                <h2>Social</h2>
                <a href="#">Instagram</a>
                <a href="#">Facebook</a>
                <a href="#">Twitter </a>
                <a href="#">Tiktok</a>
            </div>
        </div>
    </div>


</body>
</html>

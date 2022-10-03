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
    <link rel="stylesheet" href="Vanilla katanya-login.css">
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

    <div class="section1">
        <div class="text">
            <h1>High Tech Living</h1>
        </div>
        <div class="gambar1">
            <img src="http://localhost:8088/ard-tech/Gambar/IP01.png" alt="preview" >
        </div>
        <button onclick="location.href='product.php'" class="OurProd" >Our Product</button>
    </div>

    <div class="section2">
        <div class="preshop">
            <div class="newprod">
                <p>New Product🔥</p>
            </div>
            <div class="card">
                <div class="card-cont">
                    <div class="layer1">
                        <div class="image">
                            <img src="http://localhost:8088/ard-tech/Gambar/Cardip.png" alt="Preview" >
                        </div>
                    </div>
                    <div class="layer2">
                        <h2>Smart Curtain</h2>
                        <p>Curtain buka tutup dengan otomatis</p>
                        <h4>Rp 1.199.000</h4>
                        <div class="buynow"><a>Buy Now</a></div>
                    </div>
                </div>
                <div class="card-cont2">
                    <div class="layer1">
                        <div class="image">
                            <img src="http://localhost:8088/ard-tech/Gambar/Cardip.png" alt="Preview" >
                        </div>
                    </div>
                    <div class="layer2">
                        <h2>Smart Curtain</h2>
                        <p>Curtain buka tutup dengan otomatis</p>
                        <h4>Rp 1.199.000</h4>
                        <div class="buynow"><a>Buy Now</a></div>
                    </div>
                </div>
                <div class="card-cont3">
                    <div class="layer1">
                        <div class="image">
                            <img src="http://localhost:8088/ard-tech/Gambar/Cardip.png" alt="Preview" >
                        </div>
                    </div>
                    <div class="layer2">
                        <h2>Smart Curtain</h2>
                        <p>Curtain buka tutup dengan otomatis</p>
                        <h4>Rp 1.199.000</h4>
                        <div class="buynow"><a>Buy Now</a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="section3">
        <img src="http://localhost:8088/ard-tech/Gambar/iPad Air Mockup.png" alt="Preview">
        <h1>
            Smart Living With Us
        </h1>
        <p>Kami menghadirkan produk pintar berbasis arduino yang memudahkan pengguna dalam aktivitas sehari-hari</p>
        <button class="learnmore">Learn More</button>
    </div>

    <div class="section4">
        <img class="kotak" src="http://localhost:8088/ard-tech/Gambar/Rectangle 16.png" alt="Preview">
        <img class="ard"src="http://localhost:8088/ard-tech/Gambar/Arduino trans2.png" alt="preview">
        <h1>Project Based on Arduino</h1>
        <p>Dengan basis arduino yang berarti harga produk yang terjangkau dan bekerja dengan efisein tanpa membutuhkan daya yang tinggi</p>
        
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
<?php
session_start();

if (!isset($_SESSION['username'])) {
    header("Location: /AgriConsult/login/login.php");
    exit();
}
if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['username']);
    header("location: /AgriConsult/Home.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AgriConsult</title>
    <link rel="stylesheet" href="Style.css">
</head>
<body>
    <nav class="navibar">
        <div>
            <img id="logo1" src="image/plant2.jpg">
        </div>
        <div>
           <h2 id="navh2">AgriConsult</h2>
        </div>
        
        <ul class="navul">
            <li><a  href="Home.php">Home</a></li>
            <li><a  href="Plants.php">Plants</a></li>
            <li><a  href="News.php">News</a></li>
            <li><a  href="Disease.php">Disease</a></li>
            <li style="background-color: hsl(0, 0%, 0%);"><a  href="Professional.php">Professional</a></li>
            
        </ul>
        <?php if (isset($_SESSION['username'])): ?>
            <a href="/AgriConsult/Home.php?logout=1" id="LogBtn">Logout</a>
        <?php else: ?>
            <a href="/AgriConsult/login/login.php" id="LogBtn">Login</a>
        <?php endif; ?>
        </nav>
    <header>
    <div class="headdiv" id="professionalid">
        <div class="headdiv1">
            <img id="logo" src="image/plant2.jpg">
            <h1>AgriConsult</h1>
            <h3>Real-Time Crop Disease Support</h3>
        </div>
        <div class="headdiv2">
            <p>The Professional page is the Professional section of the AgriConsult website, accessible only to logged-in users through session-based authentication. It showcases a list of experienced agricultural professionals and researchers along with their qualifications, positions, and contact information to help users seek expert guidance.</p>
        </div>
       
    </div>
    </header>
    
    <main>
        <div class="professionaldiv">
            <img class="professionalimg" src="image/demomaleimg.jpg">
            <h2>Dr. Md. Shahjahan Kabir</h2>
            <h4>PhD in Agronomy</br>
                Director General, Bangladesh Rice Research Institute (BRRI) </br>
            </h4>
            <h4>Contact : 01XXXXXXXXX </br>
                Email : abcd@gmail.com
            </h4>
        </div>
       <div class="professionaldiv">
            <img class="professionalimg" src="image/demofemaleimg.jpg">
            <h2>Dr. Farida Yasmin</h2>
            <h4>MSc in Agronomy</br>
                Senior Scientific Officer, Bangladesh Agricultural Research Institute (BARI)</br>
            </h4>
            <h4>Contact : 01XXXXXXXXX </br>
                Email : abcd@gmail.com
            </h4>
        </div>
        <div class="professionaldiv">
            <img class="professionalimg" src="image/demomaleimg.jpg">
            <h2>Dr. Sheikh Mohammad Bokhtiar</h2>
            <h4>PhD in Soil Science</br>
                Executive Chairman, Bangladesh Agricultural Research Council (BARC)</br>
            </h4>
            <h4>Contact : 01XXXXXXXXX </br>
                Email : abcd@gmail.com
            </h4>
        </div>
        <div class="professionaldiv">
            <img class="professionalimg" src="image/demomaleimg.jpg">
            <h2>Dr. Debasish Sarker</h2>
            <h4>PhD in Horticulture</br>
                Director General, Bangladesh Agricultural Research Institute</br>
            </h4>
            <h4>Contact : 01XXXXXXXXX </br>
                Email : abcd@gmail.com
            </h4>
        </div>
        <div class="professionaldiv">
            <img class="professionalimg" src="image/demomaleimg.jpg">
            <h2>Prof. Dr. Md. Lutful Hassan</h2>
            <h4>PhD in Plant Breeding</br>
                Minister, Ministry of Agriculture</br>
            </h4>
            <h4>Contact : 01XXXXXXXXX </br>
                Email : abcd@gmail.com
            </h4>
        </div>
        <div class="professionaldiv">
            <img class="professionalimg" src="image/demomaleimg.jpg">
            <h2>Dr. Muhammad Abdur Razzaque</h2>
            <h4>PhD in Agriculture</br>
                Minister, Ministry of Agriculture</br>
            </h4>
            <h4>Contact : 01XXXXXXXXX </br>
                Email : abcd@gmail.com
            </h4>
        </div>
        <div class="professionaldiv">
            <img class="professionalimg" src="image/demomaleimg.jpg">
            <h2>Dr. Shamim Ahmed</h2>
            <h4>DVM, PhD in Veterinary Science</br>
                Director, Bangladesh Institute of Nuclear Agriculture (BINA)</br>
            </h4>
            <h4>Contact : 01XXXXXXXXX </br>
                Email : abcd@gmail.com
            </h4>
        </div>
    </main>

    <footer class="site-footer">
    <div class="footer-container">
        <!-- About / Description -->
        <div class="footer-section about">
            <h3>About AgriConsult</h3>
            <p>This page is the Professional section of the AgriConsult website, accessible only to logged-in users through session-based authentication. It showcases a list of experienced agricultural professionals and researchers along with their qualifications, positions, and contact information to help users seek expert guidance.</p>
        </div>

        <!-- Quick Links -->
        <div class="footer-section links">
            <h3>Quick Links</h3>
            <ul>
                <li><a href="Home.php">Home</a></li>
                <li><a href="Plants.php">Plants</a></li>
                <li><a href="News.php">News</a></li>
                <li><a href="Disease.php">Disease</a></li>
                <li><a href="Professional.php">Professional</a></li>
            </ul>
        </div>

        <!-- Contact Info -->
        <div class="footer-section contact">
            <h3>Contact Us</h3>
            <p>Email: agriconsult@gmail.com</p>
            <p>Phone: +123 456 7890</p>
            <p>Address: Jagannath University, Dhaka</p>
        </div>
    </div>

    <div class="footer-bottom">
        <p>&copy; 2026 AgriConsult. All rights reserved.</p>
    </div>
</footer>

</body>
</html>
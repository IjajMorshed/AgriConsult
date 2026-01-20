<?php
session_start();
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
            <li style="background-color: hsl(0, 0%, 0%);"><a  href="Home.php">Home</a></li>
            <li><a  href="Plants.php">Plants</a></li>
            <li><a  href="News.php">News</a></li>
            <li><a  href="Disease.php">Disease</a></li>
            <li><a  href="Professional.php">Professional</a></li>
            
        </ul>
        <?php if (isset($_SESSION['username'])): ?>
            <a href="/AgriConsult/Home.php?logout=1" id="LogBtn">Logout</a>
        <?php else: ?>
            <a href="/AgriConsult/login/login.php" id="LogBtn">Login</a>
        <?php endif; ?>

            
        </nav>
    <header>
    <div class="headdiv" id="homeid">
        <div class="headdiv1">
            <img id="logo" src="image/plant2.jpg">
            <h1>AgriConsult</h1>
            <h3>Real-Time Crop Disease Support</h3>
        </div>
        <div class="headdiv2">
            <p>AgriConsult is a platform that provides real-time crop disease support and practical farming guidance. Users can explore plants, stay updated with agricultural news, manage crop diseases, and connect with experts for advice. It makes growing healthy crops easier and more informed.</p>
        </div>
       
    </div>
    </header>
    
    <main>
    <div class="sections-container">
        <!-- Plants Section -->
        <div class="home-section plants-section">
             <div class="section-right" >
                <p>The Plants page on AgriConsult lets users explore a wide variety of crops, from vegetables and fruits to herbs. Each plant has detailed information to help with growth, care, and disease management. This page makes learning about and maintaining healthy plants simple and accessible for everyone.</p>
            </div>
            <div class="section-left" >
                <h3>Plants</h3>
                <button onclick="location.href='Plants.php'">Go to Plants</button>
            </div>
           
        </div>

        <!-- News Section -->
        <div class="home-section news-section">
            <div class="section-left">
                <h3>News</h3>
                <button onclick="location.href='News.php'">Go to News</button>
            </div>
            <div class="section-right">
                <p>The News page on AgriConsult keeps users updated with the latest developments in agriculture, crop management, and farming innovations. It features curated articles and reports from reliable sources, highlighting topics like AI in agriculture, pest attacks, and sustainable farming practices. This page helps farmers and enthusiasts stay informed and make better decisions for their crops.</p>
            </div>
        </div>

        <!-- Disease Section -->
        <div class="home-section disease-section">
             <div class="section-right">
                <p>The Disease page is a secure Disease Detection section of the AgriConsult website that is accessible only to authenticated users through session validation. It allows users to upload plant images and use an AI-based system to detect crop diseases, helping farmers identify issues early and take action.</p>
            </div>
            <div class="section-left">
                <h3>Disease</h3>
                <button onclick="location.href='Disease.php'">Go to Disease</button>
            </div>
        </div>

        <!-- Professional Section -->
        <div class="home-section professional-section">
            <div class="section-left">
                <h3>Professional</h3>
                <button onclick="location.href='Professional.php'">Go to Professional</button>
            </div>
            <div class="section-right">
                <p>The Professional page is the Professional section of the AgriConsult website, accessible only to logged-in users through session-based authentication. It showcases a list of experienced agricultural professionals and researchers along with their qualifications, positions, and contact information to help users seek expert guidance.</p>
            </div>
        </div>
    </div>
</main>

  <footer class="site-footer">
    <div class="footer-container">
        <!-- About / Description -->
        <div class="footer-section about">
            <h3>About AgriConsult</h3>
            <p>AgriConsult provides real-time crop disease support and agricultural guidance. Learn about plants, stay updated with news, manage crop diseases, and connect with professionals to improve your farming.</p>
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


<!-- <script src="Login.js"></script> -->

</body>
</html>
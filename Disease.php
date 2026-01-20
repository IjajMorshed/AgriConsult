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
            <li style="background-color: hsl(0, 0%, 0%);"><a  href="Disease.php">Disease</a></li>
            <li><a  href="Professional.php">Professional</a></li>
            
        </ul>
        <?php if (isset($_SESSION['username'])): ?>
            <a href="/AgriConsult/Home.php?logout=1" id="LogBtn">Logout</a>
        <?php else: ?>
            <a href="/AgriConsult/login/login.php" id="LogBtn">Login</a>
        <?php endif; ?>
        </nav>
    <header>
    <div class="headdiv" id="diseaseid">
        <div class="headdiv1">
            <img id="logo" src="image/plant2.jpg">
            <h1>AgriConsult</h1>
            <h3>Real-Time Crop Disease Support</h3>
        </div>
        <div class="headdiv2">
            <p>The Disease page is a secure Disease Detection section of the AgriConsult website that is accessible only to authenticated users through session validation. It allows users to upload plant images and use an AI-based system to detect crop diseases, helping farmers identify issues early and take action.</p>
        </div>
       
    </div>
    </header>

    <main>
        
        

        <h1>Plant Disease Detection</h1>

        <div class="card" style="width:1200px">
            <input type="file" id="imageInput" accept="image/*">
                <button id="detectBtn" style="margin-left:800px">Detect Disease</button>

            <div id="result"></div>

        </div>
    </main>

    <script src="Disease.js"></script>


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


        
</body>
</html>
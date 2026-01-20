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
            <li style="background-color: hsl(0, 0%, 0%);"><a  href="Plants.php">Plants</a></li>
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
    <div class="headdiv" id="plantsid">
        <div class="headdiv1">
            <img id="logo" src="image/plant2.jpg">
            <h1>AgriConsult</h1>
            <h3>Real-Time Crop Disease Support</h3>
        </div>
        <div class="headdiv2">
            <p>The Plants page on AgriConsult lets users explore a wide variety of crops, from vegetables and fruits to herbs. Each plant has detailed information to help with growth, care, and disease management. This page makes learning about and maintaining healthy plants simple and accessible for everyone.</p>
        </div>
       
    </div>
    </header>
    
    <main>
        <div class="search-container" style="display: flex; justify-content: center; align-items: center; margin: 20px 0; gap: 10px; flex-wrap: wrap;">
    <input type="text" id="searchInput" placeholder="Search for a plant..."
           style="width: 900px; padding: 10px 15px; font-size: 16px; border: 2px solid hsl(120, 40%, 50%); border-radius: 8px; outline: none; transition: all 0.3s ease;"
           onfocus="this.style.borderColor='hsl(120, 60%, 40%)'; this.style.boxShadow='0 0 8px rgba(0,128,0,0.3)';" 
           onblur="this.style.borderColor='hsl(120, 40%, 50%)'; this.style.boxShadow='none';">
    
    <button id="searchBtn"
            style="padding: 10px 20px; font-size: 16px; background-color: hsl(120, 50%, 40%); color: white; border: none; border-radius: 8px;margin-bottom: 10px;; cursor: pointer; transition: all 0.3s ease;"
            onmouseover="this.style.backgroundColor='hsl(120, 60%, 30%)'; this.style.transform='scale(1.05)';"
            onmouseout="this.style.backgroundColor='hsl(120, 50%, 40%)'; this.style.transform='scale(1)';">
        Search
    </button>
</div>


        <div id="output">
            <p>Get your information.</p>
        </div>
        <div class="plantsdiv">
            <img class="plantsimg" src="image/potato.webp">
            <h2>Potato</h2>
            <button class="plantsbtn" data-user="potato">Details</button>
        </div>
        <div class="plantsdiv">
            <img class="plantsimg" src="image/tomato.jpg">
            <h2>Tomato</h2>
            <button class="plantsbtn" data-user="tomato">Details</button>
        </div>
        <div class="plantsdiv">
            <img class="plantsimg" src="image/mango.jfif">
            <h2>Mango</h2>
            <button class="plantsbtn" data-user="mango">Details</button>
        </div>
        <div class="plantsdiv">
            <img class="plantsimg" src="image/carrot.jfif">
            <h2>Carrot</h2>
            <button class="plantsbtn" data-user="carrot">Details</button>
        </div>
        <div class="plantsdiv">
            <img class="plantsimg" src="image/banana.jfif">
            <h2>Banana</h2>
            <button class="plantsbtn" data-user="banana">Details</button>
        </div>
        <div class="plantsdiv">
            <img class="plantsimg" src="image/radish.jfif">
            <h2>Radish</h2>
            <button class="plantsbtn" data-user="radish">Details</button>
        </div>
        <div class="plantsdiv">
            <img class="plantsimg" src="image/pineapple.jfif">
            <h2>Pineapple</h2>
            <button class="plantsbtn" data-user="pineapple">Details</button>
        </div>
        <div class="plantsdiv">
            <img class="plantsimg" src="image/spinach.jfif">
            <h2>Spinach</h2>
            <button class="plantsbtn" data-user="spinach">Details</button>
        </div>
        <div class="plantsdiv">
            <img class="plantsimg" src="image/coconut.jfif">
            <h2>Coconut</h2>
            <button class="plantsbtn" data-user="coconut">Details</button>
        </div>
        <div class="plantsdiv">
            <img class="plantsimg" src="image/cabbage.jfif">
            <h2>Cabbage</h2>
            <button class="plantsbtn" data-user="cabbage">Details</button>
        </div>
        <div class="plantsdiv">
            <img class="plantsimg" src="image/apple.jfif">
            <h2>Apple</h2>
            <button class="plantsbtn" data-user="apple">Details</button>
        </div>
        <div class="plantsdiv">
            <img class="plantsimg" src="image/cauliflower.jfif">
            <h2>Cauliflower</h2>
            <button class="plantsbtn" data-user="cauliflower">Details</button>
        </div>
        <div class="plantsdiv">
            <img class="plantsimg" src="image/pear.jfif">
            <h2>Pear</h2>
            <button class="plantsbtn" data-user="pear">Details</button>
        </div>
        <div class="plantsdiv">
            <img class="plantsimg" src="image/broccoli.jfif">
            <h2>Broccoli</h2>
            <button class="plantsbtn" data-user="broccoli">Details</button>
        </div>
        <div class="plantsdiv">
            <img class="plantsimg" src="image/cerry.jfif">
            <h2>Cherry</h2>
            <button class="plantsbtn" data-user="Cherry">Details</button>
        </div>
        <div class="plantsdiv">
            <img class="plantsimg" src="image/cucunber.jfif">
            <h2>Cucumber</h2>
            <button class="plantsbtn" data-user="cucunber">Details</button>
        </div>
        <div class="plantsdiv">
            <img class="plantsimg" src="image/strawberry.jfif">
            <h2>Strawberry</h2>
            <button class="plantsbtn" data-user="strawberry">Details</button>
        </div>
        <div class="plantsdiv">
            <img class="plantsimg" src="image/eggplant.jfif">
            <h2>Eggplant</h2>
            <button class="plantsbtn" data-user="eggplant">Details</button>
        </div>
        <div class="plantsdiv">
            <img class="plantsimg" src="image/orange.jfif">
            <h2>Orange</h2>
            <button class="plantsbtn" data-user="orange">Details</button>
        </div>
        <div class="plantsdiv">
            <img class="plantsimg" src="image/capsicum.jfif">
            <h2>Capsicum</h2>
            <button class="plantsbtn" data-user="capsicum">Details</button>
        </div>
        <div class="plantsdiv">
            <img class="plantsimg" src="image/lemon.jfif">
            <h2>Lemon</h2>
            <button class="plantsbtn" data-user="lemon">Details</button>
        </div>
        <div class="plantsdiv">
            <img class="plantsimg" src="image/blueberry.jfif">
            <h2>Blueberry</h2>
            <button class="plantsbtn" data-user="blueberry">Details</button>
        </div>
        <div class="plantsdiv">
            <img class="plantsimg" src="image/watermelon.jfif">
            <h2>Watermelon</h2>
            <button class="plantsbtn" data-user="watermelon">Details</button>
        </div>
    </main>
    <script src="plants.js"></script>
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



</body>
</html>
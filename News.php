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
            <li style="background-color: hsl(0, 0%, 0%);"><a  href="News.php">News</a></li>
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
        

    <div class="headdiv" id="newsid">
        <div class="headdiv1">
            <img id="logo" src="image/plant2.jpg">
            <h1>AgriConsult</h1>
            <h3>Real-Time Crop Disease Support</h3>
        </div>
        <div class="headdiv2">
            <p></p>The News page on AgriConsult keeps users updated with the latest developments in agriculture, crop management, and farming innovations. It features curated articles and reports from reliable sources, highlighting topics like AI in agriculture, pest attacks, and sustainable farming practices. This page helps farmers and enthusiasts stay informed and make better decisions for their crops.
        </div>
       
    </div>
    </header>

    <main>
        <div class="newsdiv"
            data-summary="This article explains how artificial intelligence can transform Bangladesh’s agricultural sector by improving crop monitoring, disease detection, and yield prediction. It highlights the role of smart technologies in reducing production costs and losses. Experts believe AI can help farmers make informed decisions. The article stresses the need for policy support and farmer training.">

            <h2>“AI can bring agricultural revolution in Bangladesh” – The Daily Star</h2>

            <p class="summary" style="border-radius: 10px;"></p>

            <button class="newsbtn">
                <a href="https://www.thedailystar.net/news/bangladesh/news/ai-can-bring-agricultural-revolution-bangladesh-3901621"
                target="_blank"
                title="Click here for more details"
                >For Details</a>
            </button>
        </div>


        <div class="newsdiv"
            data-summary="The news focuses on a partnership between Syngenta and the Department of Agricultural Extension to introduce innovative farming solutions. It highlights the use of modern technology and research to increase crop productivity. The collaboration aims to support farmers with better inputs and training. This initiative promotes sustainable and climate-smart agriculture.">
            <h2>“Syngenta, DAE to transform agriculture thru innovation” – The Daily Observer</h2>
            <p class="summary" style="border-radius: 10px;"></p>
            <button class="newsbtn">
                <a href="https://www.observerbd.com/news/490399"
                target="_blank"
                title="Click here for more details"
                >For Details</a>
            </button>
           
        </div>
        <div class="newsdiv"
            data-summary="This report discusses Bangladesh’s efforts to adopt climate-resilient agricultural practices. It highlights government initiatives to protect crops from climate change impacts such as floods and droughts. The article emphasizes sustainable farming methods and adaptive technologies. These measures aim to ensure long-term food security.">
            <h2>“Bangladesh advancing towards sustainable agriculture through climate adaptation” – BSS News</h2>
            <p class="summary" style="border-radius: 10px;"></p>
            <button class="newsbtn">
                <a href="https://www.bssnews.net/agriculture-news/304985"
                target="_blank"
                title="Click here for more details"
                >For Details</a>
            </button>
           
        </div>
        <div class="newsdiv"
            data-summary="This article reports severe pest attacks on Aman paddy fields in Ishwardi, causing major concern among farmers. Crops have been heavily damaged, raising fears of reduced harvests. Farmers are seeking immediate assistance and effective pest control measures. The situation threatens food production and farmer livelihoods.">
            <h2>“Aman fields battered by pest attack in Ishwardi; farmers fear crop failure” – The Financial Express</h2>
            <p class="summary" style="border-radius: 10px;"></p>
            <button class="newsbtn">
                <a href="https://today.thefinancialexpress.com.bd/country/aman-fields-battered-by-pest-attack-in-ishwardi-farmers-fear-crop-failure-1729180406"
                target="_blank"
                title="Click here for more details"
                >For Details</a>
            </button>
           
        </div>
        <div class="newsdiv"
            data-summary="The news highlights a widespread crop disease affecting maize fields in Chuadanga. Farmers report significant yield losses due to rapid disease spread. Agricultural experts warn of serious economic impact if the issue is not controlled. The article calls for urgent intervention and proper disease management.">
            <h2>“Crop disease decimating maize in Chuadanga” – The Daily Star</h2>
            <p class="summary" style="border-radius: 10px;"></p>
            <button class="newsbtn">
                <a href="https://www.thedailystar.net/business/economy/news/crop-disease-decimating-maize-chuadanga-3249231"
                target="_blank"
                title="Click here for more details"
                >For Details</a>
            </button>
           
        </div>
        <div class="newsdiv"
            data-summary="This article explores the modernization of Bangladesh’s agricultural sector through innovation and technology. It highlights advancements in mechanization, digital farming, and improved crop varieties. The report emphasizes the role of policy support and private investment. These changes aim to enhance productivity and sustainability.">
            <h2>“Bangladesh’s agriculture revolution” – The Business Standard</h2>
            <p class="summary" style="border-radius: 10px;"></p>
            <button class="newsbtn">
                <a href="https://www.tbsnews.net/supplement/bangladeshs-agriculture-innovation-1200341"
                target="_blank"
                title="Click here for more details"
                >For Details</a>
            </button>
           
        </div>
        <div class="newsdiv"
            data-summary="The article discusses recent innovations shaping the agricultural sector, including smart farming tools and modern irrigation systems. It highlights how technology is helping farmers optimize resources. Experts stress the importance of research and innovation for future growth. The article promotes technology-driven farming solutions.">
            <h2>“Innovation in the agricultural sector” – Dhaka Tribune</h2>
            <p class="summary" style="border-radius: 10px;"></p>
            <button class="newsbtn">
                <a href="https://www.dhakatribune.com/opinion/longform/351365/innovation-in-the-agricultural-sector"
                target="_blank"
                title="Click here for more details"
                >For Details</a>
            </button>
           
        </div>
        <div class="newsdiv"
            data-summary="This report warns about the excessive use of pesticides in agriculture and its harmful effects on human health. It highlights increased risks of diseases caused by chemical exposure. Experts urge safer alternatives and better regulation. The article stresses the importance of sustainable and organic farming practices.">
            <h2>“Overuse of pesticides raises health risks” – The Daily Star</h2>
            <p class="summary" style="border-radius: 10px;"></p>
            <button class="newsbtn">
                <a href="https://www.thedailystar.net/news/bangladesh/agriculture/news/overuse-pesticides-raises-health-risks-3790761"
                target="_blank"
                title="Click here for more details"
                >For Details</a>
            </button>
           
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

<script>
document.querySelectorAll(".newsdiv").forEach(news => {
    const summaryBox = news.querySelector(".summary");
    const summaryText = news.getAttribute("data-summary");

    summaryBox.innerText = summaryText;
});
</script>




</body>
</html>
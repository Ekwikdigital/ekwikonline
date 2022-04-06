<?php
session_start();

if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true){
    header("location: login.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>Ekwik Online || benefits for <?php echo $_SESSION['username']?></title>
    <meta name='description' content="" />
    <meta name="keywords" content="" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="format-detection" content="telephone=no">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="img/uploaded/elogo.png" href="favicon.ico" />
    <meta name="it-rating" content="it-rat-cd303c3f80473535b3c667d0d67a7a11" />
    <meta name="cmsmagazine" content="3f86e43372e678604d35804a67860df7" />
    <link rel="stylesheet" type="text/css" href="css/first-screen.css" />
    <link rel="stylesheet" type="text/css" href="css/first-screen-inner.css" />
    <link rel="preload" href="fonts/AleoBold.woff2" as="font" crossorigin>
    <link rel="preload" href="fonts/Lato/LatoRegular.woff2" as="font" crossorigin>
    <link rel="preload" href="fonts/Lato/LatoBold.woff2" as="font" crossorigin>
    <link rel="preload" href="css/style.css" as="style">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css" integrity="sha512-10/jx2EXwxxWqCLX/hHth/vu2KY3jCF70dCQB8TSgNjbCVAC/8vai53GfMDrO2Emgwccf2pJqxct9ehpzG+MTw==" crossorigin="anonymous" referrerpolicy="no-referrer"
    />
</head>
<body>
    <section class="content-container">
        <h2>
        benefits for <?php echo $_SESSION['username']?> 
        </h2>
        <h2> Video </h2>
        <section class="sub-container">
            <div class="b_card">
                <img src="./img/uploaded/1.png" alt="" srcset="">
                <h4>heading</h4>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quia, porro.</p>
            </div>
            <div class="b_card">
                <img src="./img/uploaded/1.png" alt="" srcset="">
                <h4>heading</h4>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quia, porro.</p>
            </div>
            <div class="b_card">
                <img src="./img/uploaded/1.png" alt="" srcset="">
                <h4>heading</h4>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quia, porro.</p>
            </div>
            <div class="b_card">
                <img src="./img/uploaded/1.png" alt="" srcset="">
                <h4>heading</h4>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quia, porro.</p>
            </div>
        </section>
        <h2>Brochure</h2>
        <section class="sub-container">
            <div class="b_card">
                <img src="./img/uploaded/1.png" alt="" srcset="">
                <h4>heading</h4>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quia, porro.</p>
            </div>
            <div class="b_card">
                <img src="./img/uploaded/1.png" alt="" srcset="">
                <h4>heading</h4>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quia, porro.</p>
            </div>
            <div class="b_card">
                <img src="./img/uploaded/1.png" alt="" srcset="">
                <h4>heading</h4>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quia, porro.</p>
            </div>
            <div class="b_card">
                <img src="./img/uploaded/1.png" alt="" srcset="">
                <h4>heading</h4>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quia, porro.</p>
            </div>
        </section>
        <h2> Documents </h2>
        <section class="sub-container">
            <div class="b_card">
                <img src="./img/uploaded/1.png" alt="" srcset="">
                <h4>heading</h4>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quia, porro.</p>
            </div>
            <div class="b_card">
                <img src="./img/uploaded/1.png" alt="" srcset="">
                <h4>heading</h4>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quia, porro.</p>
            </div>
            <div class="b_card">
                <img src="./img/uploaded/1.png" alt="" srcset="">
                <h4>heading</h4>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quia, porro.</p>
            </div>
            <div class="b_card">
                <img src="./img/uploaded/1.png" alt="" srcset="">
                <h4>heading</h4>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quia, porro.</p>
            </div>
        </section>
        <h2> Summary </h2>
        <section class="sub-container">
            <div class="b_card">
                <img src="./img/uploaded/1.png" alt="" srcset="">
                <h4>heading</h4>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quia, porro.</p>
            </div>
            <div class="b_card">
                <img src="./img/uploaded/1.png" alt="" srcset="">
                <h4>heading</h4>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quia, porro.</p>
            </div>
            <div class="b_card">
                <img src="./img/uploaded/1.png" alt="" srcset="">
                <h4>heading</h4>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quia, porro.</p>
            </div>
            <div class="b_card">
                <img src="./img/uploaded/1.png" alt="" srcset="">
                <h4>heading</h4>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quia, porro.</p>
            </div>
        </section>
    </section>
    <?php
        include("./include/header.php");
    ?>
<link rel="stylesheet" type="text/css" href="css/style.css" />
    <script src="js/jquery-3.5.1.min.js" defer></script>
    <script src="js/components/jquery.lazy.min.js" defer></script>
    <script src="js/components/jquery.fancybox.min.js" defer></script>
    <script src="js/components/jquery.singlePageNav.min.js" defer></script>
    <script src="js/components/swiper.js" defer></script>
    <script src="js/custom.js" defer></script>
</body>
</html>
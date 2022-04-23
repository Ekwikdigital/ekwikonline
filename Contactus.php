<?php
session_start();
include("./include/db_connect.php");

$c_name = $_POST["name"]; 
$c_phone = $_POST["phone"]; 
$c_email = $_POST["email"]; 
$c_message = $_POST["message"]; 


$sql = "INSERT INTO `contact_details`(`c_name`, `c_phone`, `c_email`, `c_message`) VALUES ('$c_name','$c_phone','$c_email','$c_message')";
$result = mysqli_query($conn,$sql);
?>
<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="format-detection" content="telephone=no">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="img/uploaded/elogo.png" href="favicon.ico" />
    <title>Ekwik Online || Best Digital Marketing Institute</title>
    <meta name='description' content="" />
    <meta name="keywords" content="" />
    <meta name="it-rating" content="it-rat-cd303c3f80473535b3c667d0d67a7a11" />
    <meta name="cmsmagazine" content="3f86e43372e678604d35804a67860df7" />
    <link rel="stylesheet" type="text/css" href="css/first-screen.css" />
    <link rel="stylesheet" type="text/css" href="css/first-screen-inner.css" />
    <link rel="preload " href="fonts/AleoBold.woff2" as="font" crossorigin>
    <link rel="preload " href="fonts/Lato/LatoRegular.woff2" as="font" crossorigin>
    <link rel="preload " href="fonts/Lato/LatoBold.woff2" as="font" crossorigin>
    <link rel="preload" href="css/style.css" as="style">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css" integrity="sha512-10/jx2EXwxxWqCLX/hHth/vu2KY3jCF70dCQB8TSgNjbCVAC/8vai53GfMDrO2Emgwccf2pJqxct9ehpzG+MTw==" crossorigin="anonymous" referrerpolicy="no-referrer"
    />


</head>

<body class="home loaded">
    <div class="main-wrapper">
        <main class="content">
            <div class="first-screen section-screen-main">
                <div class="section-screen-main__bg" style="background-image: url(img/main.svg);"></div>
                <div class="wrapper">
                    <div class="screen-main">
                        <div class="section-heading"><span>Be sure</span></div>
                        <h1 class="h1 h1-main">your success is in&nbsp;our&nbsp;hands</h1>
                        <div class="screen-main__text">Agency with 12&nbsp;years of history, 15&nbsp;employees, Fortune 5000&nbsp;clients and proven results.</div>
                        <a href="#" class="btn btn_learn">Learn more</a>
                    </div>
                </div>
            </div>
            <div class="section-services-main" id="course">
                <div class="wrapper">
    <div>
        <section class="contact-container">
            <div class="contact-sub-container">
                <h1> Ekwik Classes </h1>
                <p> So, are you ready to get web development, marketing, and SEO services in India? </p>
                <h1> Contact us </h1> 
                <p>  <i class="fas fa-blender-phone"></i> Office no </p>  
                <p> 011-42175423 </p> 
                <p> <i class="fas fa-mobile-alt"></i> Mobile no </p>  
                <p> +91 9717666076 </p>
                <p>  <i class="fas fa-envelope"></i> Email </p>  
                <p> hello@ekwikdigital.com  </p>
                <h1> Address </h1>
                <p> A-20, First Floor, Guru Nanak Pura, Street No. 3, Laxmi Nagar, Delhi – 110092, Landmark – In Front Of V3s Mall  </p>
            </div>
            <div class="contact-sub-container ">
                <form class="cuc" action="" method="post">
                    <label for="name">Name</label>
                    <input type="text" name="name" id="name" required >
                    <label for="">Email</label>
                    <input type="email" name="email" id="email" required>
                    <label for="">Contact Number</label>
                    <input type="tel" name="phone" id="phone" maxlength="10" minlength="10" required>
                    <label for="message">Short Message</label>
                    <textarea name="message" id="message" cols="30" rows="10"></textarea>
                    <button type="submit" class="btn">Submit</button>
                </form>
            </div>
        </section>
    </div>



                    <div>
                    <iframe id="google-map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4139.671128948162!2d77.28249300892676!3d28.636323180071926!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390ce3b6a48a38d9%3A0x9f0dae49642f744a!2sEkwik%20Digital!5e0!3m2!1sen!2sin!4v1634535783091!5m2!1sen!2sin" width="100%" height="500px"  style="border-radius:20px;" allowfullscreen="" loading="lazy"></iframe>
                        </div>
                    </div>
            </div>
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
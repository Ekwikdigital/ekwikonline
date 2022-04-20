
<!DOCTYPE html>
<html lang="en">
<head>
<title>Ekwik Online || Benefits for <?php echo $_SESSION['username']?></title>
    <meta name='description' content="" >
    <meta name="keywords" content="" >
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" >
    <meta name="format-detection" content="telephone=no">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="img/uploaded/elogo.png" href="favicon.ico" >
    <meta name="it-rating" content="it-rat-cd303c3f80473535b3c667d0d67a7a11">
    <meta name="cmsmagazine" content="3f86e43372e678604d35804a67860df7">
    <link rel="stylesheet" type="text/css" href="css/first-screen.css">
    <link rel="stylesheet" type="text/css" href="css/first-screen-inner.css">
    <link rel="preload" href="fonts/AleoBold.woff2" as="font" crossorigin>
    <link rel="preload" href="fonts/Lato/LatoRegular.woff2" as="font" crossorigin>
    <link rel="preload" href="fonts/Lato/LatoBold.woff2" as="font" crossorigin>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css" integrity="sha512-10/jx2EXwxxWqCLX/hHth/vu2KY3jCF70dCQB8TSgNjbCVAC/8vai53GfMDrO2Emgwccf2pJqxct9ehpzG+MTw==" crossorigin="anonymous" referrerpolicy="no-referrer">
    <link rel="preload" href="css/style.css" as="style">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
</head>
<body>
<?php
session_start();
        if(isset($_SESSION['loggedin']) && $_SESSION['loggedin']==true){
            $login = true; 
            $loggedin = true;
        }
        else {
            $loggedin = false;
        }

        if(!$loggedin) {
            echo'
            <a href="login.php">
            <div class="login">
               <h2></h2>
            </div>
            </a>
            ';
        }
    ?>
        <section class="content-container">
        <h2>
            Hello 
            <?php      
            $name = $_SESSION['username'];
            echo $name;
             ?>
        </h2>
        <h2 id="asses"> Online Assesments </h2>
        <section class="sub-container">
        <?php
         include("./include/db_connect.php");
         $sql = "SELECT * FROM `benefits_users` WHERE username='$name'";
         $result = mysqli_query($conn , $sql);
         $row = mysqli_fetch_assoc($result);
        if
        (
        $row['s_id'] == 1||
        $row['s_id'] == 000
        ){             
                echo '
                <a href="assesments.php?id=1">
                <div class="b_card">
                <img src="./img/uploaded/1.png" alt="" srcset="">
                <h4>WordPress Design/Development</h4>
                <p>All Content of WordPress Design & Development available here.</p>
                </div>
                </a>
                ';
                }
                else {
                echo '
                <div class="b_card">
                <img src="./img/uploaded/1.png" alt="" srcset="">
                <h4>WordPress Design/Development</h4>
                <p>You Not Enroll in this Course.</p>
                </div>';
                }

                if
                (
                $row['s_id'] == 2||
                $row['s_id'] == 000
                ){             
                echo '
                <a href="assesments.php?id=2">
                <div class="b_card">
                <img src="./img/uploaded/1.png" alt="" srcset="">
                <h4>Web Design/Development</h4>
                <p>All Content of Web Design & Development available here.</p>
                </div>
                </a>
                ';
                }
                else {
                echo '
                <div class="b_card">
                <img src="./img/uploaded/1.png" alt="" srcset="">
                <h4>Web Design/Development</h4>
                <p>You Not Enroll in this Course.</p>
                </div>';
                }



                if
                (
                $row['s_id'] == 3 ||
                $row['s_id'] == 000
                ){             
                echo '
                <a href="assesments.php?id=3">
                <div class="b_card">
                <img src="./img/uploaded/1.png" alt="" srcset="">
                <h4> Google Ads</h4>
                <p>All Google Ads Content Available here.</p>
                </div>
                </a>
                ';
                }
                else {
                echo '
                <div class="b_card">
                <img src="./img/uploaded/1.png" alt="" srcset="">
                <h4>Google Ads</h4>
                <p>You Not Enroll in this Course.</p>
                </div>';
                }

                if
                (
                $row['s_id'] == 4 ||
                $row['s_id'] == 000
                ){             
                echo '
                <a href="assesments.php?id=4">
                <div class="b_card">
                <img src="./img/uploaded/1.png" alt="" srcset="">
                <h4> Facebook Ads</h4>
                <p>All Google Ads Content Available here.</p>
                </div>
                </a>
                ';
                }
                else {
                echo '
                <div class="b_card">
                <img src="./img/uploaded/1.png" alt="" srcset="">
                <h4>Facebook Ads</h4>
                <p>You Not Enroll in this Course.</p>
                </div>';
                }

                if
                (
                $row['s_id'] == 5 ||
                $row['s_id'] == 000
                ){             
                echo '
                <a href="assesments.php?id=5">
                <div class="b_card">
                <img src="./img/uploaded/1.png" alt="" srcset="">
                <h4>Social Media Marketing</h4>
                <p>All Social Media Marketing Content Available here.</p>
                </div>
                </a>
                ';
                }
                else {
                echo '
                <div class="b_card">
                <img src="./img/uploaded/1.png" alt="" srcset="">
                <h4>Social Media Marketing</h4>
                <p>You Not Enroll in this Course.</p>
                </div>';
                }

                if
                (
                $row['s_id'] == 6 ||
                $row['s_id'] == 000
                ){             
                echo '
                <a href="assesments.php?id=6">
                <div class="b_card">
                <img src="./img/uploaded/1.png" alt="" srcset="">
                <h4>Search Engine Optimization</h4>
                <p>All Search Engine Optimization Content Available here.</p>
                </div>
                </a>
                ';
                }
                else {
                echo '
                <div class="b_card">
                <img src="./img/uploaded/1.png" alt="" srcset="">
                <h4>Search Engine Optimization</h4>
                <p>You Not Enroll in this Course.</p>
                </div>';
                }

                if
                (
                $row['s_id'] == 7 ||
                $row['s_id'] == 000
                ){             
                echo '
                <a href="assesments.php?id=7">
                <div class="b_card">
                <img src="./img/uploaded/1.png" alt="" srcset="">
                <h4>Graphics Designing</h4>
                <p>All Graphics Designing Content Available here.</p>
                </div>
                </a>
                ';
                }
                else {
                echo '
                <div class="b_card">
                <img src="./img/uploaded/1.png" alt="" srcset="">
                <h4>Graphics Designing</h4>
                <p>You Not Enroll in this Course.</p>
                </div>';
                }

                if
                (
                $row['s_id'] == 8 ||
                $row['s_id'] == 000
                ){             
                echo '
                <a href="assesments.php?id=8">
                <div class="b_card">
                <img src="./img/uploaded/1.png" alt="" srcset="">
                <h4>Youtube Master Course</h4>
                <p>All Youtube Master Course Content Available here.</p>
                </div>
                </a>
                ';
                }
                else {
                echo '
                <div class="b_card">
                <img src="./img/uploaded/1.png" alt="" srcset="">
                <h4>Youtube Master Course</h4>
                <p>You Not Enroll in this Course.</p>
                </div>';
                }
                ?>

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
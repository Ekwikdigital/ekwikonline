
<!DOCTYPE html>
<html lang="en">
<head>
<title>Ekwik Online || Benefits for <?php echo $_SESSION['username']?></title>
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css" integrity="sha512-10/jx2EXwxxWqCLX/hHth/vu2KY3jCF70dCQB8TSgNjbCVAC/8vai53GfMDrO2Emgwccf2pJqxct9ehpzG+MTw==" crossorigin="anonymous" referrerpolicy="no-referrer"
    <link rel="preload" href="css/style.css" as="style">
    />
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
                <h2>Please Login First</h2>
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
        <h2> Video Content </h2>
        <section class="sub-container">
            <?php
            include("./include/db_connect.php");
                $sql = "SELECT * FROM `benefits_users` WHERE username='$name'";
                $result = mysqli_query($conn , $sql);
                $row = mysqli_fetch_assoc($result);

                if($row['s_id'] == 8 || $row['s_id'] == 789){             
                echo '
                <a href="video.php">
                <div class="b_card">
                <img src="./img/uploaded/1.png" alt="" srcset="">
                <h4>heading</h4>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quia, porro.</p>
                </div>
                </a>
                ';
                }
                else {
                echo '
                <div class="b_card">
                <img src="./img/uploaded/1.png" alt="" srcset="">
                <h4>Not In Your Course</h4>
                <p>Talk to Admin for access this Content.</p>
                </div>';
                }



                if($row['s_id'] == 7 ){             
                echo '
                <a href="video.php">
                <div class="b_card">
                <img src="./img/uploaded/1.png" alt="" srcset="">
                <h4>heading</h4>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quia, porro.</p>
                </div>
                </a>
                ';
                }
                else {
                echo '
                <div class="b_card">
                <img src="./img/uploaded/1.png" alt="" srcset="">
                <h4>Not In Your Course</h4>
                <p>Talk to Admin for access this Content.</p>
                </div>';
                }

                if($row['s_id'] == 7 ){             
                echo '
                <a href="video.php">
                <div class="b_card">
                <img src="./img/uploaded/1.png" alt="" srcset="">
                <h4>heading</h4>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quia, porro.</p>
                </div>
                </a>
                ';
                }
                else {
                echo '
                <div class="b_card">
                <img src="./img/uploaded/1.png" alt="" srcset="">
                <h4>Not In Your Course</h4>
                <p>Talk to Admin for access this Content.</p>
                </div>';
                }

        ?>
        </section>
        <h2>Notes Content</h2>
        <section class="sub-container">

        <?php
        if($row['s_id'] == 7 ){             
                echo '
                <a href="video.php">
                <div class="b_card">
                <img src="./img/uploaded/1.png" alt="" srcset="">
                <h4>heading</h4>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quia, porro.</p>
                </div>
                </a>
                ';
                }
                else {
                echo '
                <div class="b_card">
                <img src="./img/uploaded/1.png" alt="" srcset="">
                <h4>Not In Your Course</h4>
                <p>Talk to Admin for access this Content.</p>
                </div>';
                }
        if($row['s_id'] == 7 ){             
                echo '
                <a href="video.php">
                <div class="b_card">
                <img src="./img/uploaded/1.png" alt="" srcset="">
                <h4>heading</h4>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quia, porro.</p>
                </div>
                </a>
                ';
                }
                else {
                echo '
                <div class="b_card">
                <img src="./img/uploaded/1.png" alt="" srcset="">
                <h4>Not In Your Course</h4>
                <p>Talk to Admin for access this Content.</p>
                </div>';
                }
        if($row['s_id'] == 7 ){             
                echo '
                <a href="video.php">
                <div class="b_card">
                <img src="./img/uploaded/1.png" alt="" srcset="">
                <h4>heading</h4>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quia, porro.</p>
                </div>
                </a>
                ';
                }
                else {
                echo '
                <div class="b_card">
                <img src="./img/uploaded/1.png" alt="" srcset="">
                <h4>Not In Your Course</h4>
                <p>Talk to Admin for access this Content.</p>
                </div>';
                }
                ?>

        </section>
        <h2> Class Recordings </h2>
        <section class="sub-container">
        <?php
        if($row['s_id'] == 7 ){             
                echo '
                <a href="video.php">
                <div class="b_card">
                <img src="./img/uploaded/1.png" alt="" srcset="">
                <h4>heading</h4>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quia, porro.</p>
                </div>
                </a>
                ';
                }
                else {
                echo '
                <div class="b_card">
                <img src="./img/uploaded/1.png" alt="" srcset="">
                <h4>Not In Your Course</h4>
                <p>Talk to Admin for access this Content.</p>
                </div>';
                }
        if($row['s_id'] == 7 ){             
                echo '
                <a href="video.php">
                <div class="b_card">
                <img src="./img/uploaded/1.png" alt="" srcset="">
                <h4>heading</h4>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quia, porro.</p>
                </div>
                </a>
                ';
                }
                else {
                echo '
                <div class="b_card">
                <img src="./img/uploaded/1.png" alt="" srcset="">
                <h4>Not In Your Course</h4>
                <p>Talk to Admin for access this Content.</p>
                </div>';
                }
        if($row['s_id'] == 7 ){             
                echo '
                <a href="video.php">
                <div class="b_card">
                <img src="./img/uploaded/1.png" alt="" srcset="">
                <h4>heading</h4>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quia, porro.</p>
                </div>
                </a>
                ';
                }
                else {
                echo '
                <div class="b_card">
                <img src="./img/uploaded/1.png" alt="" srcset="">
                <h4>Not In Your Course</h4>
                <p>Talk to Admin for access this Content.</p>
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
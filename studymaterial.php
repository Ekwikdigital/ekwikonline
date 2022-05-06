
<?php
session_start();
include("./include/db_connect_copy.php");

$s_batch_id = $_GET["batchid"];
$content_id = $_GET['contentid'];
$book_id = $_GET['bookid'];

$sql = "SELECT * FROM `content` WHERE batch_id='$s_batch_id' AND content_id='$content_id'";
$result = mysqli_query($conn , $sql);
$row = mysqli_fetch_assoc($result);

$content_list = $row['default_code'];



$sql1 = "SELECT * FROM `books` WHERE batch_id='$s_batch_id' AND content_id='$content_id' AND book_id='$book_id'";
$result1 = mysqli_query($conn , $sql1);

$sql2 = "SELECT * FROM `videos` WHERE batch_id='$s_batch_id' AND content_id='$content_id'";
$result2 = mysqli_query($conn , $sql2);

$sql3 = "SELECT * FROM `notes` WHERE batch_id='$s_batch_id' AND content_id='$content_id'";
$result3 = mysqli_query($conn , $sql3);

// $sql4 = "SELECT * FROM `class` WHERE batch_id='$s_batch_id' AND content_id='$content_id'";
// $result4 = mysqli_query($conn , $sql4);

?> 

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Ekwik Online || Best Digital Marketing Institute</title>
    <meta name='description' content="" />
    <meta name="keywords" content="" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="format-detection" content="telephone=no">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
    <link rel="icon" type="img/uploaded/elogo.png" href="favicon.ico" />
    <meta name="it-rating" content="it-rat-cd303c3f80473535b3c667d0d67a7a11" />
    <meta name="cmsmagazine" content="3f86e43372e678604d35804a67860df7" />
    <link rel="stylesheet" type="text/css" href="css/first-screen.css" />
    <link rel="stylesheet" type="text/css" href="css/first-screen-inner.css" />
    <link rel="preload " href="fonts/AleoBold.woff2" as="font" crossorigin>
    <link rel="preload " href="fonts/Lato/LatoRegular.woff2" as="font" crossorigin>
    <link rel="preload " href="fonts/Lato/LatoBold.woff2" as="font" crossorigin>
    <link rel="preload " href="css/style.css" as="style">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css" integrity="sha512-10/jx2EXwxxWqCLX/hHth/vu2KY3jCF70dCQB8TSgNjbCVAC/8vai53GfMDrO2Emgwccf2pJqxct9ehpzG+MTw==" crossorigin="anonymous" referrerpolicy="no-referrer"/>
    <style>
            .heading {
                margin-top: 150px;
                text-align: center;
            }
            .c-grid {
                padding: 5px;
                display: grid;
                grid-template-columns: repeat(3,1fr);
            }
            .flex {
                display: flex;
                justify-content: center;
                align-items: center;
            }
        </style>
</head>
<body id="body" class="home loaded">
    <div class="main-wrapper">
        <main class="content">
        <section class="heading">
                        <?php
                        $batch_id = $_GET["batchid"];
                        echo "
                        <a href='myaccount.php?bid=$batch_id'>
                            <h1>My Profile</h1>
                            </a>
                                ";
                            ?>
                        </section>
                        <section class="c-grid">
<?php
if($content_list==1)
    {
        while($row1 = mysqli_fetch_assoc($result1))
                    {
                        echo "
                        <h4>".$row1["book_pdf"]."</h4>
                        ";
                    }
    }
elseif($content_list==2)
    {
        while($row2 = mysqli_fetch_assoc($result2))
                    {
                        echo "
                        <a class='a-flex' href='contentdisplay.php?id=".$row2["content_id"]."'>
                        <div class='con'>
                        <img src='' alt='' srcset=''>
                        </div>
                        <div class='icon'>
                        <h4>".$row2["video_title"]."</h4>
                        <p> ".$row2["video_code"]." </p>
                        <i class='fa-solid fa-circle-right'></i>
                        </div>
                        </a>  
                        ";
                    }
    }
elseif($content_list==3)
    {
        while($row3 = mysqli_fetch_assoc($result3))
                    {
                        echo "
                        <a class='a-flex' href='contentdisplay.php?id=".$row3["content_id"]."'>
                        <div class='con'>
                        <img src='' alt='' srcset=''>
                        </div>
                        <div class='icon'>
                        <h4>".$row3["notes_title"]."</h4>
                        <i class='fa-solid fa-circle-right'></i>
                        </div>
                        </a>  
                        ";
                    }
    }
elseif($content_list==4)
    {
        while($row4 = mysqli_fetch_assoc($result4))
                    {
                        echo "
                        <a class='a-flex' href='contentdisplay.php?id=".$row4["content_id"]."'>
                        <div class='con'>
                        <img src='' alt='' srcset=''>
                        </div>
                        <div class='icon'>
                        <h4>".$row4["notes_title"]."</h4>
                        <i class='fa-solid fa-circle-right'></i>
                        </div>
                        </a>  
                        ";
                    }
    }

                             ?> 
                            </a>
        </main>
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

<?php

include("./include/db_connect_copy.php");

if(isset($_REQUEST['editnotes'])) 
{
$s_no = $_REQUEST["s_no"];
$batch_id = $_REQUEST["batch_id"];
$content_id = $_REQUEST["content_id"];
$notes_id = $_REQUEST["notes_id"];
$notes_title = $_REQUEST["notes_title"];
}
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
    <link rel="stylesheet" type="text/css" href="./css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="./css/fontawesome-all.min.css">
    <link rel="stylesheet" type="text/css" href="./css/iofrm-style.css">
    <link rel="stylesheet" type="text/css" href="./css/iofrm-theme29.css">
    <style>
        .red {
            color: red;
        }
    </style>
</head>

<body class="home loaded">
        
    <div class="main-wrapper">
        <div class="login-container">
    <div class="form-body without-side">
        <div class="website-logo">
            <a href="index.html">
                <div class="logo">
                    <img class="logo-size" src="./img/uploaded/logo-light.svg" alt="">
                </div>
            </a>
        </div>
        <div class="row">
            <div class="img-holder">
                <div class="bg"></div>
                <div class="info-holder">
                    <img src="./img/uploaded/graphic3.svg" alt="">
                </div>
            </div>
            <div class="form-holder">
                <div class="form-content">
                    <div class="form-items">
                        <h3>Upload Content Details </h3>
                       
                        <form action="" method="POST" enctype="multipart/form-data">
                            <input class="form-control" type="number" name="u_batch_id" id="batch_id" value=<?php echo $batch_id?> required placeholder="Batch Id">
                            <input class="form-control" type="text" name="u_content_id" id="content_id" value=<?php echo $content_id?> required placeholder="Content Id">
                            <input class="form-control" type="text" name="u_notes_id" id="notes_id" value=<?php echo $notes_id?> required placeholder="Notes Id">
                            <input class="form-control" type="text" name="u_notes_title" id="notes_title" value=<?php echo $notes_title?> required placeholder="Notes Name">
                            <div class="form-button">
                                <button id="submit" type="submit" class="ibtn">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
        </div>
                    <?php
            include("./include/adminheader.php");
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


<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
include('./include/db_connect_copy.php');
$u_batch_id = $_POST["u_batch_id"];
$u_content_id = $_POST["u_content_id"];
$u_notes_id = $_POST["u_notes_id"];
$u_notes_title = $_POST["u_notes_title"];

    $sql2 = "UPDATE notes SET batch_id='$u_batch_id', content_id='$u_content_id', notes_id='$u_notes_id', notes_title='$u_notes_title' WHERE s_no='$s_no'";
    $result2 = mysqli_query($conn, $sql2);  

if($result2){

    echo '<script>alert("Sucessfully updated")</script>';
    ?>
    <meta http-equiv="Refresh" content="0; URL=http://localhost/ekwikonline/captaincode.php#notes">
    <?php 
}
else {
    echo '<script>alert("Error in Updating Try Later or Contact To Ashwani 9068973411")</script>';
    
}
}
?>
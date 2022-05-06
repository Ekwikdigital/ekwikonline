
<?php
session_start();
include("./include/authentication.php");
include("./include/db_connect_copy.php");

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
    <link rel="preload" href="css/style.css" as="style">
    <link rel="stylesheet" type="text/css" href="css/first-screen.css" />
    <link rel="stylesheet" type="text/css" href="css/first-screen-inner.css" />
    <script src="./ckeditor/ckeditor.js"></script>
</head>

<body class="home loaded">
    <div class="main-wrapper">
        <main class="content">
            <div class="">
                <!-- <div class="section-screen-main__bg" ></div> -->
                <div class="wrapper">
                    <section class="h">
                        <?php
                        $batch_id = $_SESSION["batchid"];
                        echo "
                        <a href='myaccount.php?bid=$batch_id'>
                            <h1>My Profile</h1>
                            </a>
                                ";
                            ?>
                        </section>
                        <section class="p-container">
                    <div class="p-div">
                     <?php
                                $name = $_SESSION['email'];
                                $s_batch_id = $_GET["bid"];
                                $sql = "SELECT * FROM `students` WHERE s_email='$name'";
                                $result = mysqli_query($conn , $sql);
                                $row = mysqli_fetch_assoc($result);
                                ?> 
                                <?php
                                echo "
                            <img src='".$row['s_image']."' alt='' height='250px' width='250px'>
                            ";
                            ?>
                          
                            <div class="flex">
                            <div class="info">
                                <p>Name</p>
                                <p>Email</p>
                                <p>Password</p>
                                <p>Contact No</p>
                                <p>Courses</p>
                            </div>
                            <div class="info r">
                                <p><?php echo $row['s_name'];?></p>
                                <p><?php echo $name;?></p>
                                <p><?php echo $row['s_password'];?></p>
                                <p><?php echo $row['s_phone'];?></p>
                                <p><?php echo $row['s_batch_name'];?></p>
                            </div>
                            </div>
                        </div>
                    <div class="m-div">
                    <?php
                                $sql = "SELECT * FROM `content` WHERE batch_id='$s_batch_id'";
                                $result = mysqli_query($conn , $sql);
                                while($row = mysqli_fetch_assoc($result)){
                                echo "
                                <a class='a-flex' href='contentdisplay.php?batchid=$s_batch_id&contentid=".$row["content_id"]."'>
                                    <div class='con'>
                                        <img src='' alt='' srcset=''>
                                    </div>
                                    <div class='icon'>
                                        <h4>".$row["content_name"]."</h4>
                                        <p> ".$row["content_desc"]." </p>
                                        <i class='fa-solid fa-circle-right'></i>
                                    </div>
                                </a>  
                                ";
                                }
                                    ?> 
                            </a>
                            <a href="tel:9717666076" class="btn" style="margin: 10px;">Join More Courses</a>
                            </div>
                                    </section>
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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
</body>

</html>

<?php
session_start();
include("./include/db_connect.php");

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
    <!-- <link rel="preload " href="fonts/AleoBold.woff2" as="font" crossorigin>
    <link rel="preload " href="fonts/Lato/LatoRegular.woff2" as="font" crossorigin>
    <link rel="preload " href="fonts/Lato/LatoBold.woff2" as="font" crossorigin> -->
    <script src="./ckeditor/ckeditor.js"></script>
</head>

<body class="home loaded">
    <div class="main-wrapper">
        <main class="content">
            <div class="">
                <!-- <div class="section-screen-main__bg" ></div> -->
                <div class="wrapper">
                    <section class="p-container">
                    <div class="p-div">
                    <?php
                                $name = $_SESSION['username'];
                                $sql = "SELECT * FROM `benefits_users` WHERE username='$name'";
                                $result = mysqli_query($conn , $sql);
                                $row = mysqli_fetch_assoc($result);
                                ?>
                            <img src="<?php echo $row['s_image'];?>" alt="" srcset="" height="250px" width="250px">
                          
                            <div class="flex">
                            <div class="info">
                                <p>Name</p>
                                <p>Email</p>
                                <p>Contact No</p>
                                <p>Courses</p>
                            </div>
                            <div class="info r">
                                <p><?php echo $row['username'];?></p>
                                <p><?php echo $row['email'];?></p>
                                <p><?php echo $row['s_phone'];?></p>
                                <p><?php echo $row['course'];?></p>
                            </div>
                            </div>
                        </div>

                   
                    <div class="m-div">
                            <a class="a-flex" href="bookcontent.php">
                                <div class="con">
                                    <img src="./img/uploaded/eb.png" alt="" srcset="">
                                </div>
                                <div class="icon">
                                    <h4> Book  </h4>
                                    <p> Read Best Books  </p>
                                    <i class="fa-solid fa-circle-right"></i>
                                </div>
                            </a>
                            <a class="a-flex" href="videocontent.php">
                                <div class="con">
                                    <img src="./img/uploaded/cw.jpeg" alt="" srcset="">
                                </div>
                                <div class="icon">
                                    <h4> Video  </h4>
                                    <p> Read Best Books  </p>
                                    <i class="fa-solid fa-circle-right"></i>
                                </div>
                            </a>
                            <a class="a-flex" href="notescontent.php">
                                <div class="con">
                                    <img src="./img/uploaded/cw.jpeg" alt="" srcset="">
                                </div>
                                <div class="icon">
                                    <h4> Notes  </h4>
                                    <p> Read Best Books  </p>
                                    <i class="fa-solid fa-circle-right"></i>
                                </div>
                            </a>
                            <a class="a-flex" href="classcontent.php">
                                <div class="con">
                                    <img src="./img/uploaded/cw.jpeg" alt="" srcset="">
                                </div>
                                <div class="icon">
                                    <h4> Class Recordings  </h4>
                                    <p> Read Best Books  </p>
                                    <i class="fa-solid fa-circle-right"></i>
                                </div>
                            </a>
                            <a class="a-flex" href="assesmentscontent.php">
                                <div class="con">
                                    <img src="./img/uploaded/cw.jpeg" alt="" srcset="">
                                </div>
                                <div class="icon">
                                    <h4> Assesments </h4>
                                    <p> Read Best Books  </p>
                                    <i class="fa-solid fa-circle-right"></i>
                                </div>
                            </a>
                            
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
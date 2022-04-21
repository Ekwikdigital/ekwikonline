
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
    <link rel="stylesheet" type="text/css" href="css/first-screen.css" />
    <link rel="stylesheet" type="text/css" href="css/first-screen-inner.css" />
    <link rel="preload " href="fonts/AleoBold.woff2" as="font" crossorigin>
    <link rel="preload " href="fonts/Lato/LatoRegular.woff2" as="font" crossorigin>
    <link rel="preload " href="fonts/Lato/LatoBold.woff2" as="font" crossorigin>
    <link rel="preload" href="css/style.css" as="style">
    <script src="./ckeditor/ckeditor.js"></script>

</head>

<body class="home loaded">
    <div class="main-wrapper">
        <main class="content">
            <div class="first-screen section-screen-main">
                <div class="section-screen-main__bg" ></div>
                <div class="wrapper">
                    <section class="p-container">
                    <div class="p-div">
                    <?php
                                $name = $_SESSION['username'];
                                $sql = "SELECT * FROM `benefits_users` WHERE username='$name'";
                                $result = mysqli_query($conn , $sql);
                                $row = mysqli_fetch_assoc($result);
                                ?>
                            <img src="<?php echo $row['s_image'];?>" alt="" srcset="" height="350px" width="300px">
                          
                            <div class="flex">
                            <div class="info">
                                <h4>Name</h4>
                                <h4>Email</h4>
                                <h4>Contact No</h4>
                                <h4>Courses</h4>
                            </div>
                            <div class="info r">
                                <h4><?php echo $row['username'];?></h4>
                                <h4><?php echo $row['email'];?></h4>
                                <h4><?php echo $row['s_phone'];?></h4>
                                <h4><?php echo $row['course'];?></h4>
                            </div>
                            </div>
                            </div>
                    <div class="m-div">
                            <a class="a-flex" href="benefits.php">
                                <div class="con">
                                    <img src="./img/uploaded/eb.png" alt="" srcset="">
                                </div>
                                <div class="icon">
                                    <h4> Book  </h4>
                                    <p> Read Best Books  </p>
                                    <i class="fa-solid fa-circle-right"></i>
                                </div>
                            </a>
                            <a class="a-flex" href="benefits.php">
                                <div class="con">
                                    <img src="./img/uploaded/cw.jpeg" alt="" srcset="">
                                </div>
                                <div class="icon">
                                    <h4> Video  </h4>
                                    <p> Read Best Books  </p>
                                    <i class="fa-solid fa-circle-right"></i>
                                </div>
                            </a>
                            <a class="a-flex" href="benefits.php">
                                <div class="con">
                                    <img src="./img/uploaded/cw.jpeg" alt="" srcset="">
                                </div>
                                <div class="icon">
                                    <h4> Notes  </h4>
                                    <p> Read Best Books  </p>
                                    <i class="fa-solid fa-circle-right"></i>
                                </div>
                            </a>
                            <a class="a-flex" href="benefits.php">
                                <div class="con">
                                    <img src="./img/uploaded/cw.jpeg" alt="" srcset="">
                                </div>
                                <div class="icon">
                                    <h4> Class Recordings  </h4>
                                    <p> Read Best Books  </p>
                                    <i class="fa-solid fa-circle-right"></i>
                                </div>
                            </a>
                            <a class="a-flex" href="benefits.php">
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
                            <a href="" class="btn" style="margin: 10px;">Join More Courses</a>
                            </div>
                            <!-- <h2>Name &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                Ashwani </h2>
                            <h2>Email &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                Ashwai@gmail.com </h2>
                            <h2>Contact No &nbsp;&nbsp;
                                9068973411  </h2>
                            <h2>Hobby &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                Coding  </h2>
                            <h2>Course 1 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                Web Development</h2>
                            <h2>Course 2 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                               Graphics Design</h2> -->
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
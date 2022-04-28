
<?php
include("./include/authentication.php");
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

    <style>
        body {
            overflow-x: scroll !important;
        }
        .container {
            margin-top: 150px;
            align-items: center;
            justify-content:center;
            text-align: center;


        }
        .video-container {
            display: grid;
            grid-template-columns: repeat(4,1fr);
            row-gap: 20px;
            column-gap: 20px;
            height: max-content;
            width: max-content;
            padding: 50px;
            margin: auto;
        }
        .v-card {
            padding: 20px;
            height: 350px;
            width: 300px;
            box-shadow: 0px 1rem 2.6rem rgb(36 73 168 / 15%);
            border-radius: 15px;
        }
        .v-card h2 {
            font-size: 20px;
        }
        .video {
            height: 150px;
            width: 250px;
        }
        @media (max-width:450px) {
            .video-container {
            grid-template-columns: repeat(1,1fr);
            }
        }
        @media (max-width:550px) {
            .video-container {
            grid-template-columns: repeat(1,1fr);
            }
        }
        @media (max-width:850px) {
            .video-container {
            grid-template-columns: repeat(2,1fr);
            }
        }
    </style>


</head>

<body class="home loaded">
    <div class="main-wrapper">
        <?php
        $name = $_SESSION['username'];
        ?>
        <div class="container">
            <div>
                <h1>Videos For <?php echo $name ?></h1>
            </div>
            <div class="video-container">

            
        <?php
        include("./include/db_connect.php");
            $id = $_GET['id'];
                $sql2 = "SELECT * FROM `video`WHERE b_id='$id'";
                $result2 = mysqli_query($conn , $sql2);
                $num = mysqli_num_rows($result2);
   
                if($num>0){
                                while($row2 = mysqli_fetch_assoc($result2)){
                                echo"
                                <div class='v-card'>
                                    <div class='video'>
                                        <iframe width='250' height='150' src='".$row2['v_code']."' title='YouTube video player' frameborder='0' allow='accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture' allowfullscreen></iframe>
                                    </div>
                                    <h2> ".$row2['v_title']."</h2>
                                    <h6> <i> ".$row2['v_desc']." </i></h6>     
                                </div>
                                    ";
                            }
                        }
                                else 
                                {
                                        echo 'Nothing To display';
                                }
    ?>
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



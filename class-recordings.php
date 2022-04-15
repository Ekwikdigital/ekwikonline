
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
        }
        .v-card {
            padding: 20px;
            height: 400px;
            width: 300px;
            border: 3px solid black;
            border-radius: 15px;
        }
        .video {
            height: 150px;
            width: 250px;
        }
    </style>


</head>

<body class="home loaded">
    <div class="main-wrapper">
        <?php
        session_start();
        $name = $_SESSION['username'];
        ?>
        <div class="container">
            <div>
                <h1>Class Recordings for <?php echo $name ?></h1>
            </div>
            <div class="video-container">

            
        <?php
        include("./include/db_connect.php");
            $id = $_GET['id'];
                // $sql = "SELECT * FROM `benefits_users` WHERE username='$name'";
                $sql2 = "SELECT * FROM `video`WHERE b_id='$id'";
                // $result = mysqli_query($conn , $sql);
                $result2 = mysqli_query($conn , $sql2);
                // $row = mysqli_fetch_assoc($result);
                $row2 = mysqli_fetch_assoc($result2);
                $num = mysqli_num_rows($result2);
                // echo var_dump($num);
                
        
                // if($row['s_id'] === $id && $row2['b_id'] === $id)
                //     {
                    
                                while($row2 = mysqli_fetch_assoc($result2)){
                                echo"
                                <div class='v-card'>
                                <div class='video'>
                                <iframe width='250' height='150' src='".$row2['v_code']."' title='YouTube video player' frameborder='0' allow='accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture' allowfullscreen></iframe>
                                <h2> ".$row2['v_title']."</h2>
                                <p> ".$row2['v_desc']."</p>     
                                </div>
                                </div>
                                    ";
                            }
                    // }
                    //             else 
                    //             {
                    //                     echo 'Nothing To display';
                    //             }
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


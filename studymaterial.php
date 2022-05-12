
<?php
session_start();
include("./include/db_connect_copy.php");

$s_batch_id = $_GET["batchid"];
$content_id = $_GET['contentid'];
$book_id = $_GET['bookid'];
$video_id = $_GET['videoid'];
$notes_id = $_GET['notesid'];
$class_id = $_GET['classid'];
$assesment_id = $_GET['assesmentid'];

$sql = "SELECT * FROM `content` WHERE batch_id='$s_batch_id' AND content_id='$content_id'";
$result = mysqli_query($conn , $sql);
$row = mysqli_fetch_assoc($result);

$content_list = $row['default_code'];



$sql1 = "SELECT * FROM `books` WHERE batch_id='$s_batch_id' AND content_id='$content_id' AND book_id='$book_id'";
$result1 = mysqli_query($conn , $sql1);

$sql2 = "SELECT * FROM `videos` WHERE batch_id='$s_batch_id' AND content_id='$content_id' AND video_id='$video_id'";
$result2 = mysqli_query($conn , $sql2);

$sql3 = "SELECT * FROM `notes` WHERE batch_id='$s_batch_id' AND content_id='$content_id' AND notes_id='$notes_id'";
$result3 = mysqli_query($conn , $sql3);

$sql4 = "SELECT * FROM `classes` WHERE batch_id='$s_batch_id' AND content_id='$content_id' AND class_id='$class_id'";
$result4 = mysqli_query($conn , $sql4);

$sql5 = "SELECT * FROM `assesment` WHERE batch_id='$s_batch_id' AND content_id='$content_id' AND assesment_id='$assesment_id'";
$result5 = mysqli_query($conn , $sql5);

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
            .study {
                width: 80%;
                height: 100vh;
                margin: auto;
                
            }
            .study h4 {
                text-align: center;
            }
            .study object {
                height: 100%;
                width: 100%;

            }
           .c {
               height: max-content;
               width: max-content;
               padding: 25px;
               box-shadow: 0px 1rem 2.6rem rgba(36, 73, 168, 0.15);
               border-radius: 15px; 
               text-align: center;
            }
            .gr {
                padding: 10px;
               display: grid;
               grid-template-columns: repeat(4,1fr);
               row-gap: 20px;
               column-gap: 20px;
            }
            iframe {
               border-radius: 15px; 
           }
           .as{
               text-align: center;
               width: 80%;
               margin: auto;
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
        <?php
if($content_list==1)
{
    echo' <h2> Book  </h2>';
}
elseif($content_list==2)
{
        echo' <h2> Video  </h2>';
}
elseif($content_list==3)
{
        echo' <h2> Notes </h2>';
}
elseif($content_list==4)
{
        echo' <h2> Class  </h2>';
}
elseif($content_list==5)
{
        echo' <h2> Assessments </h2>';
}

?>
        
        
<?php
if($content_list==1)
    {
       
        while($row1 = mysqli_fetch_assoc($result1))
                    {
                        echo "
                        <section class='study'>
                        <h4>".$row1["book_name"]."</h4>
                        <object data='".$row1["book_pdf"]."' type='application/pdf'></object>
                        </section>                        ";
                    }
    }
elseif($content_list==2)
    {
        while($row2 = mysqli_fetch_assoc($result2))
                    {
                        echo "
                        <section class='gr'>
                        <div class='c'>
                        <iframe width='280' height='200' src='".$row2["video_code"]."' title='YouTube video player' allow='accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture' allowfullscreen></iframe>
                        <h4>".$row2["video_title"]."</h4>
                        </div>
                        </section>
                        ";
                    }
    }
elseif($content_list==3)
    {
        while($row3 = mysqli_fetch_assoc($result3))
                    {
                        echo "
                        <section class='study'>
                        <h4>".$row3["notes_title"]."</h4>
                        <object data='".$row3["notes_pdf"]."' type='application/pdf'></object>
                        </section>
                        ";
                    }
    }
elseif($content_list==4)
    {
        while($row4 = mysqli_fetch_assoc($result4))
                    {
                        echo "
                        <section class='gr'>
                        <div class='c'>
                        <iframe width='280' height='200' src='".$row4["class_code"]."' title='YouTube video player' allow='accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture' allowfullscreen></iframe>
                        <h4>".$row4["class_title"]."</h4>
                        </div>
                        </section>
                        ";
                    }
    }
elseif($content_list==5)
    {
        while($row5 = mysqli_fetch_assoc($result5))
                    {
                        echo "
                        <section class='as'>
                        <h4>".$row5["assesment_name"]."</h4>
                        <iframe width='860' height='800' src='".$row5["assesment_code"]."' title='YouTube video player' allow='accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture' allowfullscreen></iframe>
                        </section>
                        ";
                    }
    }

        ?>
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

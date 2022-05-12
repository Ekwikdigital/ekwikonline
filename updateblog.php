<?php

include("./include/db_connect_copy.php");

if(isset($_REQUEST['editblog'])) 
{
$s_no = $_REQUEST["s_no"];
$blog_id = $_REQUEST["blog_id"];
$blog_heading = $_REQUEST["blog_heading"];
$blog_summary = $_REQUEST["blog_summary"];
$blog_desc = $_REQUEST["blog_desc"];
$blog_image = $_REQUEST["blog_image"];
$blog_date = $_REQUEST["blog_date"];
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
    <script src="./ckeditor/ckeditor.js"></script>

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
                        </p>
                        <form action="" method="POST" enctype="multipart/form-data">
                            <input class="form-control" type="number" name="u_blog_id" id="blog_id" value=<?php echo $blog_id ;?> required placeholder="Batch Id">
                            <input class="form-control" type="text" name="u_blog_heading" id="blog_heading" value=<?php echo $blog_heading ;?> required placeholder="Contact Id">
                            <input class="form-control" type="text" name="u_blog_summary" id="blog_summary" value=<?php echo $blog_summary ;?> required placeholder="Contact Name">
                            <label for="image">Blog Description</label>
                            <textarea class="form-control" name="blog_desc" id="blog_desc2" cols="80" rows="20" required></textarea>                            
                            <label for="file"> Blog Image</label>
                            <input class="form-control" type="file" name="file" id="file" value=<?php echo $blog_image ;?>>
                            <input class="form-control" type="date" name="u_blog_date" id="blog_date" value=<?php echo $blog_date ;?> required placeholder="Default Code For Content">
                            <div class="form-button">
                                <button id="submit" type="submit" class="ibtn">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
   
    <script>
    CKEDITOR.replace('blog_desc2');
</script>
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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
</script>
</body>

</html>


<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
include('./include/db_connect_copy.php');
$u_blog_id = $_POST["u_blog_id"];
$u_blog_heading = $_POST["u_blog_heading"];
$u_blog_summary = $_POST["u_blog_summary"];
$u_blog_desc = $_POST["u_blog_desc"];
$u_blog_image = $_POST["u_blog_image"];
$u_blog_date = $_POST["u_blog_date"];

// for image upload 
$filename = $blog_file['name'];
$filerror = $blog_file['error'];
$filetmp = $blog_file['tmp_name'];

$fileext = explode('.',$filename);
$filecheck = strtolower(end($fileext));


$fileextstored = array('png', 'jpg', 'jpeg');

if(in_array($filecheck,$fileextstored)){
   $destinationfile ='blogimage/'.$filename;
   move_uploaded_file($filetmp,$destinationfile);

}

    $sql2 = "UPDATE blogs SET blog_id='$u_blog_id', blog_heading='$u_blog_heading', blog_summary='$u_blog_summary' , blog_desc='$u_blog_desc' , blog_image='$destinationfile' , blog_date='$u_blog_date' WHERE s_no='$s_no'";
    $result2 = mysqli_query($conn, $sql2);  

if($result2){

    echo '<script>alert("Sucessfully updated")</script>';
    ?>
    <meta http-equiv="Refresh" content="0; URL=http://localhost/ekwikonline/captaincode.php#blog">
    <?php 
}
else {
    echo '<script>alert("Error in Updating Try Later or Contact To Ashwani 9068973411")</script>';
    
}
}
?>
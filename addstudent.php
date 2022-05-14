
<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
include('./include/db_connect_copy.php');
$s_batch_id = $_POST["s_batch_id"];
$s_batch_name = $_POST["s_batch_name"];
$s_name = $_POST["s_name"];
$s_phone = $_POST["s_phone"];
$s_email = $_POST["s_email"];
$s_aadhar = $_POST["s_aadhar"];
$s_pancard = $_POST["s_pancard"];
$s_password = $_POST["s_password"];
$s_cpassword = $_POST["s_cpassword"];

$s_image = $_FILES["s_image"];
$exists = false;



//Check whether this batch id Exists
$existSql = "SELECT * FROM `students` WHERE s_email='$s_email'";
$result = mysqli_query($conn, $existSql);
$numExistRows = mysqli_num_rows($result);
if($numExistRows > 0){
    // $exists = true;
    echo '<script>alert("Email ID Already Exists ")</script>';
}
else {
    
// for image upload 
$filename = $s_image['name'];
$filerror = $s_image['error'];
$filetmp = $s_image['tmp_name'];

$fileext = explode('.',$filename);
$filecheck = strtolower(end($fileext));


$fileextstored = array('png','jpg','jpeg');

if(in_array($filecheck,$fileextstored)){
   $destinationfile ='student/'.$filename;
   move_uploaded_file($filetmp,$destinationfile);

}
    $sql2 = "INSERT INTO `students` (`s_batch_id`, `s_batch_name`, `s_name`, `s_phone`, `s_email`, `s_password`, `s_aadhar`, `s_pancard`, `s_image`) VALUES ('$s_batch_id', '$s_batch_name', '$s_name', '$s_phone', '$s_email', '$s_password', '$s_aadhar', '$s_pancard', '$destinationfile')";
    $result2 = mysqli_query($conn, $sql2);  
    echo '<script>alert("Sucessfully added")</script>';
}
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
                        <h3>Student Details </h3>
                        </p>
                        <form action="" method="POST" enctype="multipart/form-data">
                            <input class="form-control" type="number" name="s_batch_id" id="batch_id" placeholder="Batch Id" required>
                            <input class="form-control" type="text" name="s_batch_name" id="s_batch_name" placeholder="Batch Name" required>
                            <input class="form-control" type="text" name="s_name" id="s_name" placeholder="Student Name" required>
                            <input class="form-control" type="tel" name="s_phone" id="s_phone" placeholder="Phone No" minlength="10" maxlength="10" required>
                            <input class="form-control" type="email" name="s_email" id="s_email" placeholder="Email" required>
                            <input class="form-control" type="password" name="s_password" id="s_password" placeholder="Password" required>
                            <input class="form-control" type="password" name="s_cpassword" id="s_cpassword" placeholder="Confirm Password" required>
                            <input class="form-control" type="text" name="s_aadhar" id="s_aadhar" placeholder="Aadhar Card Link" required>
                            <input class="form-control" type="text" name="s_pancard" id="s_pancard" placeholder="Pan Card Link" required>
                            <label for="s_image"> Student Image </label>
                            <input class="form-control" type="file" name="s_image" id="s_image" required>
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

<?php

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $showAlert = false;
    $showError = false;
include('./include/db_connect.php');
$s_id = $_POST["s_id"];
$s_phone = $_POST["s_phone"];
$s_username = $_POST["s_username"];
$s_email = $_POST["s_email"];
$s_password = $_POST["s_password"];
$s_c_password = $_POST["s_c_password"];
// $exists = false ;

//Check whether this username Exists
$existSql = "SELECT * FROM `benefits_users` WHERE username = '$s_username'";
$result = mysqli_query($conn, $existSql);
$numExistRows = mysqli_num_rows($result);
if($numExistRows > 0){
    // $exists = true;
    echo '<script>alert("Username Alreday Exists ")</script>';
}
else 
{
    // $exists = false;
    if(($s_password == $s_c_password))
        {
            // $sql = "INSERT INTO `students`(`s_id_no`, `s_id_name`, `s_id_phoneno`, `s_id_email`) VALUES ('$s_id','$s_username','$s_password','$s_email')";
            $sql = "INSERT INTO `benefits_users`(`username`, `password`, `email`, `s_id`, `s_phone`) VALUES ('$s_username','$s_password','$s_email','$s_id','$s_phone')";
            $result = mysqli_query($conn, $sql);
            if ($result)
                {
                    $showAlert = true;
                }
        }
        else 
        {
            echo '<script>alert("password do not matched")</script>';
        }
}
}
if($showAlert) {
    echo '<script>alert(" Successfully Register Now You can login")</script>';
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
</head>

<body class="home loaded">
    <div class="main-wrapper">
        <div class="login-container">
            <!-- Login and signup -->
        <div class="forms-container">
            <h2> New Student </h2>
            <form action="" method="post">
                <label for="s_id">Student ID</label>
                <br>
                <input type="text" name="s_id" id="s_id" class="input" required>
                <br>
                <label for="s_username">Username</label>
                <br>
                <input type="text" name="s_username" id="s_username" class="input" required>
                <br>
                <label for="s_email">Email</label>
                <br>
                <input type="email" name="s_email" id="s_email" class="input" required>
                <br>
                <label for="s_phone">Contact No</label>
                <br>
                <input type="tel" name="s_phone" id="s_phone" class="input" required>
                <br>
                <label for="s_password">Password</label>
                <br>
                <input type="password" name="s_password" id="s_password" class="input" required>
                <br>
                <label for="s_c_password">Confirm Password</label>
                <br>
                <input type="password" name="s_c_password" id="s_c_password" class="input" required>
                <br>
                <br>
                <a href="epanel007.php" class="btn"> Go to Dashboard </a>
                <button class="btn" type="submit">Add Student</button>
            </form>
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
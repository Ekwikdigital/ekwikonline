<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<?php
$login = false;
if($_SERVER["REQUEST_METHOD"] == "POST"){
include('./include/db_connect.php');
$s_username = $_POST["l_username"];
$s_password = $_POST["l_password"];
$exists = false;

$sql = "Select * from benefits_users where username='$s_username' AND password='$s_password'";
$result = mysqli_query($conn, $sql);
$num = mysqli_num_rows($result);
if ($num == 1){
    $login = true;
    session_start();
    $_SESSION['loggedin'] = true; 
    $_SESSION['username'] = $s_username;
    header("location: benefits.php");  
}
else {
    echo'<script>alert("You are not our Member. Please Sign Up.")</script>';
}
if($login) {
    echo '<script>alert(" You are now login")</script>';
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

</head>

<body class="home loaded">
        
    <div class="main-wrapper">
        <div class="login-container">
            <!-- Login and signup -->
        <div class="forms-container">
            <h2> Login </h2>
            <form action="" method="POST">
                <label for="l_username">Username</label>
                <br>
                <input type="text" name="l_username" id="l_username" class="input" required>
                <br>
                <label for="l_username">Password</label>
                <br>
                <input type="password" name="l_password" id="l_password" class="input" required>
                <br>
                <br>
                <button class="btn" type="submit">Login</button>
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
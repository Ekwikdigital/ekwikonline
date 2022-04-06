
<?php
session_start();
if($_SERVER["REQUEST_METHOD"] == "POST"){

$servername = "localhost";
$username = "root";
$password = "";
$database = "ekonline";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
// echo "Connected successfully";

$blog_heading = $_POST["blog_heading"]; 
$blog_desc = $_POST["blog_desc"]; 
$blog_date = $_POST["blog_date"]; 
$blog_summary = $_POST["blog_summary"]; 

$sql = "INSERT INTO `blogs`(`blog_heading`, `blog_desc`,`timestamp`,`blog_summary`) VALUES ('$blog_heading','$blog_desc','$blog_date','$blog_summary')";
$result = mysqli_query($conn,$sql);
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
    <script src="./ckeditor/ckeditor.js"></script>

</head>

<body class="home loaded">
    <div class="main-wrapper">
        <main class="content">
            <div class="first-screen section-screen-main">
                <div class="section-screen-main__bg" style="background-image: url(img/main.svg);"></div>
                <div class="wrapper">
                    <div class="screen-main">

    

                        <!-- <div class="section-heading"><span>Be sure</span></div>
                        <h1 class="h1 h1-main">your success is in&nbsp;our&nbsp;hands</h1>
                        <div class="screen-main__text">Agency with 12&nbsp;years of history, 15&nbsp;employees, Fortune 5000&nbsp;clients and proven results.</div>
                        <a href="#" class="btn btn_learn">Learn more</a> -->
                        <!-- <form method="POST" action="blog_post.php">
                    <div class="mb-3">
                        <label for="blog_heading" class="form-label"> Blog Heading </label>
                        <input type="text" class="form-control" id="blog_heading" name="blog_heading">
                    </div>
                    <div class="mb-3">
                        <label for="blog_summary" class="form-label"> Blog summary </label>
                        <input type="text" class="form-control" id="blog_summary" name="blog_summary"> 
                    </div>
                    <div class="mb-3">
                        <label for="blog_desc" class="form-label"> Blog Description </label>
                        <input type="text" class="form-control" id="blog_desc" name="blog_desc"> 
                    </div>
                    <div class="mb-3">
                        <label for="blog_date" class="form-label"> Blog Date </label>
                        <input type="date" class="form-control" id="blog_date" name="blog_date"> 
                    </div>
                    <div class="mb-3">
                        <label for="blog_image" class="form-label"> Blog Feature Image </label>
                        <input type="file" class="form-control" id="blog_image" name="blog_image">
                    </div>
                    <button type="submit" class="btn-submit btn btn-primary"> Submit </button>
                </form> -->
                    </div>
                    <form  id="blog_post" action="blog_post.php" method="post" enctype="multipart/form-data">
        <label for="">Blog heading</label>
        <input type="text" name="blog_heading">
        <label for="">Blog summary</label>
        <input type="text" name="blog_summary">
        <label for="">Blog Description</label>
        <textarea name="blog_desc" id="blog_desc" cols="80" rows="20"></textarea>
        <label for="">Blog Date</label>
        <div>
        <input type="date" name="blog_date">
        </div>
        <div>
        <button id="submit"  type="submit">Post</button>
        </div>
    </form>
<script>
    CKEDITOR.replace('blog_desc');
</script>

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
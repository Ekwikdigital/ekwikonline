
<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
include('./include/db_connect_copy.php');
$batch_id = $_POST["batch_id"];
$content_id = $_POST["content_id"];
$book_id = $_POST["book_id"];
$book_name = $_POST["book_name"];
$book_file = $_FILES["book_pdf"];
$exists = false;



//Check whether this batch id Exists
$existSql = "SELECT * FROM `books` WHERE book_id='$book_id'";
$result = mysqli_query($conn, $existSql);
$numExistRows = mysqli_num_rows($result);
if($numExistRows > 0){
    // $exists = true;
    echo '<script>alert("Book ID Already Exists ")</script>';
}
else {
    
// for image upload 
$filename = $book_file['name'];
$filerror = $book_file['error'];
$filetmp = $book_file['tmp_name'];

$fileext = explode('.',$filename);
$filecheck = strtolower(end($fileext));


$fileextstored = array('pdf');

if(in_array($filecheck,$fileextstored)){
   $destinationfile ='book/'.$filename;
   move_uploaded_file($filetmp,$destinationfile);

}
    $sql2 = "INSERT INTO `books` (`batch_id`, `content_id`,`book_id`,`book_name`,`book_pdf`) VALUES ('$batch_id', '$content_id', '$book_id','$book_name','$destinationfile')";
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
                        <h3>Upload Content Details </h3>
                    <?php              
                    include('./include/db_connect_copy.php');
             
                        $sql_batch = "SELECT * FROM `books` ORDER BY s_no DESC LIMIT 1";
                        $result_batch = mysqli_query($conn , $sql_batch);

                        if(mysqli_num_rows($result_batch) > 0)
                        {
                        
                            foreach($result_batch as $row)
                            {
                                echo "
                                <p> Last Book id <span class='red'> ".$row['book_id']." </span> and Name is <span class='red'> ".$row['book_name']." </span>.
                                    ";
                            }
                        }
                        ?>
                        </p>
                        <form action="" method="POST" enctype="multipart/form-data">
                            <input class="form-control" type="number" name="batch_id" id="batch_id" placeholder="Batch Id" required>
                            <input class="form-control" type="text" name="content_id" id="content_id" placeholder="Content Id" required>
                            <input class="form-control" type="text" name="book_id" id="book_id" placeholder="Book Id" required>
                            <input class="form-control" type="text" name="book_name" id="book_name" placeholder="Book Name" required>
                            <label for="content_image"> Book PDF</label>
                            <input class="form-control" type="file" name="book_pdf" id="book_pdf" required>
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
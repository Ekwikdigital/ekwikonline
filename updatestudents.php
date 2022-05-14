<?php

include("./include/db_connect_copy.php");

if(isset($_REQUEST['editstudent'])) 
{
$s_no = $_REQUEST["s_no"];
$s_batch_id = $_REQUEST["s_batch_id"];
$s_batch_name = $_REQUEST["s_batch_name"];
$s_name = $_REQUEST["s_name"];
$s_email = $_REQUEST["s_email"];
$s_phone = $_REQUEST["s_phone"];
$s_password = $_REQUEST["s_password"];
$s_aadhar = $_REQUEST["s_aadhar"];
$s_pancard = $_REQUEST["s_pancard"];
$s_image = $_REQUEST["s_image"];
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
                            <input class="form-control" type="number" name="u_s_batch_id" id="s_batch_id" value=<?php echo $s_batch_id ; ?> required placeholder="Batch Id">
                            <input class="form-control" type="text" name="u_s_batch_name" id="s_batch_name" value=<?php echo $s_batch_name ;?> required placeholder="Batch Name">
                            <input class="form-control" type="text" name="u_s_name" id="s_name" value=<?php echo $s_name ;?> required placeholder="Student Name">
                            <input class="form-control" type="tel" name="u_s_phone" id="s_phone" value=<?php echo $s_phone ;?> required placeholder="Contact No">
                            <input class="form-control" type="email" name="u_s_email" id="s_email" value=<?php echo $s_email ;?> required placeholder="Email">
                            <input class="form-control" type="text" name="u_s_password" id="s_password" value=<?php echo $s_password ;?> required placeholder="Password">
                            <input class="form-control" type="text" name="u_s_aadhar" id="s_aadhar" value=<?php echo $s_aadhar ;?> required placeholder="Aadhar Card Link">
                            <input class="form-control" type="text" name="u_s_pancard" id="s_pancard" value=<?php echo $s_pancard ;?> required placeholder="Pan Card Link">
                            <label for="s_image">Student Image </label>
                            <input class="form-control" type="file" name="u_s_image" id="s_image" value=<?php echo $s_image ;?> >
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


<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
include('./include/db_connect_copy.php');
$u_s_batch_id = $_POST["u_s_batch_id"];
$u_s_batch_name = $_POST["u_s_batch_name"];
$u_s_name = $_POST["u_s_name"];
$u_s_phone = $_POST["u_s_phone"];
$u_s_email = $_POST["u_s_email"];
$u_s_aadhar = $_POST["u_s_aadhar"];
$u_s_pancard = $_POST["u_s_pancard"];
$u_s_password = $_POST["u_s_password"];
$u_s_cpassword = $_POST["u_s_cpassword"];

$u_s_image = $_FILES["u_s_image"];
$exists = false;



    
// for image upload 
$filename = $u_s_image['name'];
$filerror = $u_s_image['error'];
$filetmp = $u_s_image['tmp_name'];

$fileext = explode('.',$filename);
$filecheck = strtolower(end($fileext));


$fileextstored = array('png','jpg','jpeg');

if(in_array($filecheck,$fileextstored)){
   $destinationfile ='student/'.$filename;
   move_uploaded_file($filetmp,$destinationfile);

}
$sql2 = "UPDATE students SET s_batch_id='$u_s_batch_id', s_batch_name='$u_s_batch_name', s_name='$u_s_name', s_phone='$u_s_phone', s_email='$u_s_email', s_password='$u_s_password' , s_aadhar='$u_s_aadhar', s_pancard='$u_s_pancard', s_image='$u_s_image' WHERE s_no='$s_no'";
$result2 = mysqli_query($conn, $sql2);  

if($result2){

echo '<script>alert("Sucessfully updated")</script>';
?>
<meta http-equiv="Refresh" content="0; URL=http://localhost/ekwikonline/captaincode.php#students">
<?php 
}
else {
echo '<script>alert("Error in Updating Try Later or Contact To Ashwani 9068973411")</script>';

}
}

?>
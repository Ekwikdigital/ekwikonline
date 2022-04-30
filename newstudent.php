
<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $showAlert = false;
    $showError = false;
include('./include/db_connect.php');
$s_id = $_POST["s_id"];
$s_phone = $_POST["s_phone"];
$s_username = $_POST["s_username"];
$s_email = $_POST["s_email"];
$s_name = $_POST["s_name"];
$course = $_POST["course"];
$s_join = $_POST["s_join"];
$s_com = $_POST["s_com"];
$s_add = $_POST["s_add"];
$s_pan = $_POST["s_pan"];
$image = $_FILES["file"];
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
          // for image upload 
          $filename = $image['name'];
          $filerror = $image['error'];
          $filetmp = $image['tmp_name'];

          $fileext = explode('.',$filename);
          $filecheck = strtolower(end($fileext));


          $fileextstored = array('png', 'jpg', 'jpeg');

          if(in_array($filecheck,$fileextstored)){
            $destinationfile ='studentimage/'.$filename;
            move_uploaded_file($filetmp,$destinationfile);
            }
            else{
              echo ("error");
            }
            $sql = "INSERT INTO `benefits_users`(`username`, `password`, `email`, `s_id`, `s_phone` , `course` , `s_image`, `s_join` , `s_com`, `s_add`, `s_pan`,`s_name`) VALUES ('$s_username','$s_password','$s_email','$s_id','$s_phone','$course', '$destinationfile','$s_join','$s_com','$s_add','$s_pan','$s_name')";
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
          <div class="codes">
            <table>
              <tr>
                  <th>Student Id</th>
                  <th>Courses</th>
              </tr>
              <tr>
                  <td>0</td>
                  <td>All Courses</td>
              </tr>
              <tr>
                  <td>1</td>
                  <td>Wordpress development
              </tr>
              <tr>
                  <td>2</td>
                  <td>Web development
              </tr>
              <tr>
                  <td>3</td>
                  <td>Google Ads
              </tr>
              <tr>
                  <td>4</td>
                  <td>Facebook Ads
              </tr>
              <tr>
                 <td>5</td>
                 <td>Social Media Marketing
              <tr>
                  <td>6</td>
                  <td>Search Engine Optimization
              </tr>
              <tr>
                  <td>7</td>
                  <td>Graphic Designing
              </tr>
              <tr>
                  <td>8</td>
                  <td>Content Marketing
              </tr>
            </table> 
          </div>
            <!-- Login and signup -->
        <div class="forms-container">
            <h2> New Student </h2>
            <form class="form-s" action="" method="post" enctype="multipart/form-data">
                <label for="s_id"> Course Id</label>
                <input type="text" name="s_id" id="s_id" class="input" placeholder="Course Id" required>
                <label for="course"> Course Name</label>
                <input type="text" name="course" id="course" class="input" placeholder=" Course Name" required>
                <label for="s_name"> Student Name</label>
                <input type="text" name="s_name" id="s_name" class="input" placeholder=" Student Name" required>
                <label for="s_username"> User Name</label>
                <input type="text" name="s_username" id="s_username" class="input" placeholder="Username" required>
                <label for="s_mail"> User email</label>
                <input type="email" name="s_email" id="s_email" class="input" placeholder="Student Email" required>
                <label for="s_join">Joining Date</label>
                <br>
                <input type="date" name="s_join" id="s_join" class="input" placeholder="Joining Date" required>
                <br>
                <label for="s_join">Completion Date</label>
                <br>
                <input type="date" name="s_com" id="s_com" class="input" placeholder="Completion Date" required>
                <br>
                <label for="s_add">Aadhaar Link</label>
                <input type="text" name="s_add" id="s_add" class="input" placeholder="Addhar Card" required>
                <label for="s_pan">Pancard Link</label>
                <input type="text" name="s_pan" id="s_pan" class="input" placeholder="Pan Card" >
                <label for="s_phone">Contact No</label>
                <input type="tel" name="s_phone" id="s_phone" class="input" placeholder="Student Contact No" required>
                <div>
                  <label for="file"> Student Image</label>
                  <br>
                  <input type="file" name="file" id="file" class="image" required>
                </div>
                <br>
                <input type="password" name="s_password" id="s_password" class="input" placeholder="Password" required>
                <input type="password" name="s_c_password" id="s_c_password" class="input" placeholder="Confirm Password" required>
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


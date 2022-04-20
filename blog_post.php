
<?php
session_start();
include("./include/db_connect.php");
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $blog_heading = $_POST["blog_heading"];
    $blog_desc = $_POST["blog_desc"];
    $blog_date = $_POST["blog_date"];
    $blog_file = $_FILES["file"];
    $blog_summary = $_POST["blog_summary"];


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
    
    $sql = "INSERT INTO `blogs`(`blog_heading`, `blog_desc`,`blog_image`,`timestamp`,`blog_summary`) VALUES ('$blog_heading','$blog_desc','$destinationfile','$blog_date','$blog_summary')";
    $result = mysqli_query($conn, $sql);
    
    // Assesments Post

    $asses_id = $_POST["asses_id"];
    $asses_name = $_POST["asses_name"];
    $s_code = $_POST["s_code"];

    $sql2 = "INSERT INTO `assesments`(`a_id`, `a_name`, `s_code`) VALUES ('$asses_id','$asses_name','$s_code')";
    $result2 = mysqli_query($conn, $sql2);
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
                    <div class="sub-section">
                   <form id="blog_post" action="" method="post" enctype="multipart/form-data">
                       <div>
                           <label for="blog_heading">Blog heading</label>
                           <input type="text" name="blog_heading" required>
                       </div>
                       <div>
                           <label for="blog_summary">Blog summary</label>
                           <input type="text" name="blog_summary" required>
                       </div>
                       <div>
                           <label for="blog_desc">Blog Description</label>
                           <textarea name="blog_desc" id="blog_desc" cols="80" rows="20" required></textarea>
                       </div>
                       <div>
                           <label for="image">Select Image</label>
                           <input type="file" name="file" id="file" class="image" required>
                       </div>
                       <div>
                           <label for="">Blog Date</label>
                           <input type="date" name="blog_date" class="date">
                       </div>
                       <div>
                           <button id="submit" type="submit" class="btn btn-primary">Post</button>
                       </div>
                   </form>
                   </div>
                   <div id="students-reg" class="sub-section">
                       <h2> Blogs </h2>
                       <br />
                       <div class="table-responsive">
                           <table id="employee_data5" class="table table-striped table-bordered">
                               <thead>
                                   <tr>
                                       <td> So.No. &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                                       <td> Student Id &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                                       <td>Student Name &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                                       <td>Password &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                                       <td>Phone no &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                                       <td>Email &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                                       <td>Joining Date &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                                   </tr>
                               </thead>
                               <?php
                                $sql5 = "SELECT * FROM `benefits_users`";
                                $result5 = mysqli_query($conn, $sql5);
                                while ($row = mysqli_fetch_assoc($result5)) {
                                    echo '  
                            <tr>  
                            <td>' . $row["sno"] . '</td>  
                            <td>' . $row["s_id"] . '</td>   
                            <td>' . $row["username"] . '</td>  
                            <td>' . $row["password"] . '</td>  
                            <td>' . $row["s_phone"] . '</td>  
                            <td>' . $row["email"] . '</td>   
                            <td>' . $row["date"] . '</td>   
                            </tr>  
                            ';
                                }
                                ?>
                           </table>
                       </div>
                   </div>
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
<!DOCTYPE html>
<html lang="en">
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
    <style>
        #note {
            border: 5px solid red;
            border-radius: 15px;
            padding: 50px;
            width: 50% !important;
            margin: auto;
        }
        #note form {
            margin: 50px;
        }
    </style>
</head>
<body>
<?php include("./include/db_connect.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
   
    $notes_id = $_POST["notes_id"];
    $notes_title = $_POST["notes_title"];
    $notes_desc = $_POST["notes_desc"];
    $notes = $_FILES["notes"];

        // for book upload 
        $filename = $notes['name'];
        $filerror = $notes['error'];
        $filetmp = $notes['tmp_name'];
        $fileext = explode('.',$filename);
        $filecheck = strtolower(end($fileext));
        $fileextstored = array('pdf');
        if(in_array($filecheck,$fileextstored)){
            $destinationfile ='notes/'.$filename;
            move_uploaded_file($filetmp,$destinationfile);
            }
            else{
            echo '<script>alert("Could Not Procced this request.. Please Contact to Developer.")</script>';
            }
    $sql = "INSERT INTO `notes` (`notes_id`, `notes_titile`, `notes_desc`, `notes`) VALUES ('$notes_id', '$notes_title', '$notes_desc', '$destinationfile');";
    $result = mysqli_query($conn, $sql);
}
?>

<div id="note" class="">
    <a href="epanel007.php" class="btn"> Go to Dashboard</a>
                    
                    <form  id="video" action="" method="post" enctype="multipart/form-data">
                            <div >
                                <label for="notes_id">Notes Id</label>
                                <input type="number" name="notes_id" id="notes_id" required>
                            </div>
                            <div>
                                <label for="notes_title">Notes Title</label>
                                <input type="text" name="notes_title" id="notes_title" required>
                            </div>
                            <div>
                                <label for="notes_desc">Notes Description</label>
                                <input type="text" name="notes_desc" id="notes_desc" required>
                            </div>
                            <div>
                                <label for="notes">Notes Book</label>
                                <input type="file" name="notes" id="notes">
                            </div>
                            <div>
                                <button id="submit" type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </form>
                        <table  class="table table-striped table-bordered">
                            <tr>
                                <th>Student Id</th>
                                <th>Courses</th>
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
                                <td>Youtube Marketing 
                            </tr>
                        </table>

                    </div>
</body>
</html>
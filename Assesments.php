

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/assements.css">
    <style>
       
    </style>
    <script>
    </script>
</head>
<body>
    

<?php
session_start();
            include("./include/db_connect.php");
            $id = $_GET['id'];
            $name = $_SESSION['username'];
                $sql = "SELECT * FROM `benefits_users` WHERE username='$name'";
                $sql2 = "SELECT * FROM `assesments`";
                $result = mysqli_query($conn , $sql);
                $result2 = mysqli_query($conn , $sql2);
                $row = mysqli_fetch_assoc($result);
                $row2 = mysqli_fetch_assoc($result2);

                if($row['s_id'] == $id && $row2['a_id'] == $id){
                    while($row2 = mysqli_fetch_assoc($result2)){
                        echo'
                        <section height="100vh">
                        <h1>Assesments</h1>
                            <div class="bg">
                            '.$row2['s_code'].'
                                </div> 
                                </section>
        ';
                   
                    }
                 }
                 else {
                     echo 'not';
                 }


?>
    <!-- <h1>Assesments</h1>
    <div class="bg">
    <iframe src="https://docs.google.com/forms/d/e/1FAIpQLSemKpZyh-PnXA9_85AGOzvGrd8G-Gce_tDtg8K_B683q9jbHA/viewform?embedded=true" width="640" height="1967" frameborder="0" marginheight="0" marginwidth="0">Loading…</iframe>
        </div> -->
</body>
</html>


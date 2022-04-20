
<?php
include("./include/authentication.php");
        ?>
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
            $a_name = $_GET['a_name'];
                $sql2 = "SELECT * FROM `assesments` WHERE a_id='$id' AND a_name='$a_name'" ;
                $result2 = mysqli_query($conn , $sql2);
                $row2 = mysqli_fetch_assoc($result2);
                $num_row = mysqli_num_rows($result2);

                echo $num_row;
                echo $row['s_id'];
                echo $row2['a_id'];

                if($num_row>0){

                        echo'
                        <section height="100vh">
                        <h1>Assesments</h1>
                            <div class="bg">
                            '.$row2['s_code'].'
                                </div> 
                                </section>
        ';
                }
                 else {
                     echo 'Assesments Are Not Available Right Now.......';
                 }


?>
    <!-- <h1>Assesments</h1>
    <div class="bg">
    <iframe src="https://docs.google.com/forms/d/e/1FAIpQLSemKpZyh-PnXA9_85AGOzvGrd8G-Gce_tDtg8K_B683q9jbHA/viewform?embedded=true" width="640" height="1967" frameborder="0" marginheight="0" marginwidth="0">Loading…</iframe>
        </div> -->
</body>
</html>

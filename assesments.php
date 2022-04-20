
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
    
<h1>Assesments</h1>
<section class="a-grid">
<?php
session_start();
            include("./include/db_connect.php");
            $id = $_GET['id'];
                $sql2 = "SELECT * FROM `assesments` WHERE a_id='$id'" ;
                $result2 = mysqli_query($conn , $sql2);
                $num_row = mysqli_num_rows($result2);

                    if($num_row>0){
                    
                    while($row2 = mysqli_fetch_assoc($result2)){
                        echo'
                        
                        <a href="Assesment.php?id='.$id.'&a_name='.$row2['a_name'].'">
                            <div class="a-card">
                            '.$row2['a_name'].'
                            <p>Timing : 30min</p>
                            <p>Timing Will be started when You enter the Assesment </p>
                                </div> 
                                </a>
                                
        ';
                   
                    }
                }
                //  }
                 else {
                     echo 'Assesments Are Not Available Right Now.......';
                 }


?>
</section>
   
</body>
</html>

 <!DOCTYPE html>
 <html lang="en">
 <head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Document</title>
     <link rel="stylesheet" href="./css/assements.css">
</head>
<body>

<?php
include("./include/db_connect.php");
$sql="SELECT * FROM `assesments`";
$result = mysqli_query($conn,$sql);
echo var_dump($result);
echo'
    <h1>Assesments For Graphics</h1>
    <div class="bg">
    '.$row['s_code'].'
        </div>
        ';
    ?>
</body>
</html>
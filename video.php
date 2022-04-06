<?php
session_start();
        if(isset($_SESSION['loggedin']) && $_SESSION['loggedin']==true){
            $login = true; 
            $loggedin = true;
        }
        else {
            $loggedin = false;
            header("location: benefits.php"); 
        }
?>

$sql = "SELECT * FROM `students` WHERE s_id_no=$id";
                            $result = mysqli_query($conn , $sql);
                            $row = mysqli_fetch_assoc($result);

            if($row['s_id_no'] == 8 || $row['s_id_no'] == 7 || $row['s_id_no'] == 9 ){             
            echo '
            <a href="video.php">
            <div class="b_card">
                <img src="./img/uploaded/1.png" alt="" srcset="">
                <h4>heading</h4>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quia, porro.</p>
            </div>
            </a>
            ';
              }
              else {
                echo '
                <div class="b_card">
                <img src="./img/uploaded/1.png" alt="" srcset="">
                <h4>Not In Your Course</h4>
                <p>Talk to Admin for access this Content.</p>
            </div>';
             
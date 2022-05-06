<?php
session_start();
        if(isset($_SESSION['loggedin']) && $_SESSION['loggedin']==true){
            $login = true; 
            $loggedin = true;
        }
        else {
            $loggedin = false;
            header("location: login.php");  
        }
        ?>
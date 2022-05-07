<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css" integrity="sha512-10/jx2EXwxxWqCLX/hHth/vu2KY3jCF70dCQB8TSgNjbCVAC/8vai53GfMDrO2Emgwccf2pJqxct9ehpzG+MTw==" crossorigin="anonymous" referrerpolicy="no-referrer"/>
<?php
include("./include/db_connect_copy.php");
    if(isset($_SESSION['loggedin']) && $_SESSION['loggedin']==true){
        $loggedin = true;
    }
    else {
        $loggedin = false;
    }
?>
<header class="header" id="header">
            <div class="header-top">
                <div class="wrapper">
                </div>
            </div>
            <div class="wrapper">
                <div class="nav-logo">
                    <a href="index.php" class="logo">
                        <img src="img/uploaded/elogo.png" alt="Ekwik Online">
                    </a>
                </div>
                <div class="header-right">
                    <div id="mainNav" class="menu-box">
                        <div class="footer-menu">
                            <ul class="js-menu-footer">
                                <a href="captaincode.php">  
                                    <li>
                                        Dashboard
                                    </li>
                                </a>
                                <li>
                                    <a href="uploadbatch.php">Batch</a>
                                </li>
                                <li>
                                    <a href="uploadcontent.php">Content</a>
                                </li>
                                <li>
                                    <a href="courses.php">Book</a>
                                </li>
                                <li>
                                    <a href="demo.php">Video</a>
                                </li>
                                <li>
                                    <a href="demo.php">Note</a>
                                </li>
                                <li>
                                    <a href="demo.php">Class</a>
                                </li>
                                <li>
                                    <a href="demo.php">Assesment</a>
                                </li>
                                <li>
                                    <a href="demo.php">Blog</a>
                                </li>
                                <li>
                                    <a href="demo.php">Website Data</a>
                                </li>
                            </ul>
                        </div>
                </div>
            </div>
        </header>
       
    <script>
        var body = document.body;
        if (/Android|webOS|iPhone|iPad|iPod|BlackBerry/i.test(navigator.userAgent)) {
            body.classList.add("ios");
        } else {
            body.classList.add("web")
        }
        setTimeout(function() {
            body.classList.add("content-loaded");
        }, 50)
    </script>
   

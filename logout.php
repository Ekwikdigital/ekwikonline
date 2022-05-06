<?php
// include('./include/db_connect_copy.php');

session_start();

// $s_email = $_SESSION['email'];
//  $sql_access = "INSERT INTO `loginaccess` (`Login/logout`, `email`, `timestamp`) VALUES ('Logout', '$s_email', current_timestamp())";
//  $result_access = mysqli_query($conn, $sql_access);
session_unset();
session_destroy();

header("location: index.php");
exit;

?>
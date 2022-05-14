<?php

include("./include/db_connect_copy.php");

if(isset($_POST['delete'])) 
{
    $s_no = $_POST['id'];

    $sql = "DELETE FROM books WHERE s_no ='$s_no'";
    $result = mysqli_query($conn, $sql);

    if($result)
{
    echo '<script> alert("Delete Successfully")</script>';
    header("location:captaincode.php#books");
}
else {
    echo '<script> alert("Delete Error")</script>';

}
}



elseif(isset($_POST['deletestudent'])){
    $s_no = $_POST['deletestudents_s_no'];

    $sql = "DELETE FROM students WHERE s_no ='$s_no'";
    $result = mysqli_query($conn, $sql);

    if($result)
{
    echo '<script> alert("Delete Successfully")</script>';
    header("location:captaincode.php#students");
}
else {
    echo '<script> alert("Delete Error")</script>';

}
}



elseif(isset($_POST['deletebatch'])){
    $s_no = $_POST['deletebatch_s_no'];

    $sql = "DELETE FROM batch WHERE s_no ='$s_no'";
    $result = mysqli_query($conn, $sql);

    if($result)
{
    echo '<script> alert("Delete Successfully")</script>';
    header("location:captaincode.php#batch");
}
else {
    echo '<script> alert("Delete Error")</script>';

}
}



elseif(isset($_POST['deletecontent'])){
    $s_no = $_POST['deletecontent_s_no'];

    $sql = "DELETE FROM content WHERE s_no ='$s_no'";
    $result = mysqli_query($conn, $sql);

    if($result)
{
    echo '<script> alert("Delete Successfully")</script>';
    header("location:captaincode.php#content");
}
else {
    echo '<script> alert("Delete Error")</script>';

}
}



elseif(isset($_POST['deletevideo'])){
    $s_no = $_POST['deletevideo_s_no'];

    $sql = "DELETE FROM videos WHERE s_no ='$s_no'";
    $result = mysqli_query($conn, $sql);

    if($result)
{
    echo '<script> alert("Delete Successfully")</script>';
    header("location:captaincode.php#videos");
}
else {
    echo '<script> alert("Delete Error")</script>';

}
}


elseif(isset($_POST['deletenote'])){
    $s_no = $_POST['deletenote_s_no'];

    $sql = "DELETE FROM notes WHERE s_no ='$s_no'";
    $result = mysqli_query($conn, $sql);

    if($result)
{
    echo '<script> alert("Delete Successfully")</script>';
    header("location:captaincode.php#notes");
}
else {
    echo '<script> alert("Delete Error")</script>';

}
}



elseif(isset($_POST['deleteclass'])){
    $s_no = $_POST['deleteclass_s_no'];

    $sql = "DELETE FROM classes WHERE s_no ='$s_no'";
    $result = mysqli_query($conn, $sql);

    if($result)
{
    echo '<script> alert("Delete Successfully")</script>';
    header("location:captaincode.php#classes");
}
else {
    echo '<script> alert("Delete Error")</script>';

}
}


elseif(isset($_POST['deleteassesment'])){
    $s_no = $_POST['deleteassesment_s_no'];

    $sql = "DELETE FROM assesment WHERE s_no ='$s_no'";
    $result = mysqli_query($conn, $sql);

    if($result)
{
    echo '<script> alert("Delete Successfully")</script>';
    header("location:captaincode.php#assesment");
}
else {
    echo '<script> alert("Delete Error")</script>';

}
}



elseif(isset($_POST['deleteblog'])){
    $s_no = $_POST['deleteblog_s_no'];

    $sql = "DELETE FROM blogs WHERE s_no ='$s_no'";
    $result = mysqli_query($conn, $sql);

    if($result)
{
    echo '<script> alert("Delete Successfully")</script>';
    header("location:captaincode.php#blog");
}
else {
    echo '<script> alert("Delete Error")</script>';

}
}



elseif(isset($_POST['deleteconsultation'])){
    $s_no = $_POST['deleteconsultation_s_no'];

    $sql = "DELETE FROM consultation WHERE s_no ='$s_no'";
    $result = mysqli_query($conn, $sql);

    if($result)
{
    echo '<script> alert("Delete Successfully")</script>';
    header("location:websitedata.php#consultation");
}
else {
    echo '<script> alert("Delete Error")</script>';

}
}



elseif(isset($_POST['deletebrochure'])){
    $s_no = $_POST['deletebrochure_s_no'];

    $sql = "DELETE FROM brochure WHERE s_no ='$s_no'";
    $result = mysqli_query($conn, $sql);

    if($result)
{
    echo '<script> alert("Delete Successfully")</script>';
    header("location:websitedata.php#brochure");
}
else {
    echo '<script> alert("Delete Error")</script>';

}
}




elseif(isset($_POST['deletenewsletter'])){
    $s_no = $_POST['deletenewsletter_s_no'];

    $sql = "DELETE FROM newsletter WHERE s_no ='$s_no'";
    $result = mysqli_query($conn, $sql);

    if($result)
{
    echo '<script> alert("Delete Successfully")</script>';
    header("location:websitedata.php#newsletter");
}
else {
    echo '<script> alert("Delete Error")</script>';

}
}


?>
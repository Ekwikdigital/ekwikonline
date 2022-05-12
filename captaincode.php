<?php
include("./include/db_connect_copy.php");
?>

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
</head>
<style>
    .table-responsive {
        margin: 20px;
        
    }
    .sub-section {
        text-align: center;
        align-items: center;
    }
    .margin {
        margin-top: 150px;
    }
    table thead tr td {
        font-weight: bold;
    }
</style>

<body id="body" class="home loaded">
    <div class="main-wrapper">
        <main class="content">
            <section class="margin">



            
                <div id="" class="sub-section">
                    <h2 class="btn"> Who login to Website</h2>
                        <div class="table-responsive">
                            <table id="employee_data" class="table table-striped table-bordered">
                                <thead>
                                    <tr>
                                        <td> So.No. </td>
                                        <td> Status </td>
                                        <td> User </td>
                                        <td> Timing (YY-MM-DD Time) </td>
                                        <td> Edit </td>
                                        <td> Delete </td>
                                    </tr> 
                                </thead>
                            <?php                           
                                $sql = "SELECT * FROM `loginaccess` ORDER BY s_no DESC LIMIT 1";
                                $result = mysqli_query($conn , $sql);
                                $l=1;
                                if(mysqli_num_rows($result) > 0)
                                {
                                
                                    foreach($result as $row)
                                    {
                                        echo "
                                            <tr>  
                                            <td>$l</td>  
                                            <td>" . $row['Login/logout'] . "</td>   
                                            <td>" . $row['email'] . "</td>   
                                            <td>" . $row['timestamp'] . "</td>     
                                            </tr>  
                                            ";
                                            $l++;
                                    }
                                }
                            ?>
                            
                            </table>    
                        </div>
                </div>


                <div id="students" class="sub-section">
                    <h2 class="btn"> students Details</h2>
                        <div class="table-responsive">
                            <table id="employee_data1" class="table table-striped table-bordered">
                                <thead>
                                    <tr>
                                        <td> So.No. </td>
                                        <td> Batch Id </td>
                                        <td> Batch Name </td>
                                        <td> Student Name </td>
                                        <td> Phone No </td>
                                        <td> Email </td>
                                        <td> Password </td>
                                        <td> Aadhar link </td>
                                        <td> Pancard Link </td>
                                        <td> Edit </td>
                                         <td> Delete </td>
                                    </tr> 
                                </thead></a>
                            <?php
                            $sql_batch = "SELECT * FROM `students`";
                            $result_batch = mysqli_query($conn, $sql_batch);
                            $s =1;
                            while ($row = mysqli_fetch_assoc($result_batch)) {
                                echo "  
                                       <tr>  
                                       <td>$s</td>  
                                       <td>" . $row["s_batch_id"] . "</td>   
                                       <td>" . $row["s_batch_name"] . "</td>   
                                       <td>" . $row["s_name"] . "</td>  
                                       <td>" . $row["s_phone"] . "</td>  
                                       <td>" . $row["s_email"] . "</td>  
                                       <td>" . $row["s_password"] . "</td>  
                                       <td><a href=' " . $row["s_aadhar"] . "'> Go to Link</td>  
                                       <td><a href='" . $row["s_pancard"] . "'> Go to Link</td> 
        
                                       <td> <form action='updatestudents.php' method='get'>
                                       <input type='hidden' name='s_no' value='" . $row['s_no'] . "'>
                                           <input type='hidden' name='s_batch_id' value='" . $row["s_batch_id"] . "'>
                                           <input type='hidden' name='s_batch_name' value='" . $row["s_batch_name"] . "'>
                                           <input type='hidden' name='s_name' value='" . $row["s_name"] . "'>
                                           <input type='hidden' name='s_phone' value='" . $row["s_phone"] . "'>
                                           <input type='hidden' name='s_email' value='" . $row["s_email"] . "'>
                                           <input type='hidden' name='s_password' value='" . $row["s_password"] . "'>
                                           <input type='hidden' name='s_aadhar' value='" . $row["s_aadhar"] . "'>
                                           <input type='hidden' name='s_pancard' value='" . $row["s_pancard"] . "'>
                                           <input type='hidden' name='s_image' value='" . $row["s_image"] . "'>
                                           <input type='submit' name='editstudent' value='Edit' class='btn-2'>
                                           </form>
                                       </td>
                                       <td> <form action='delete.php' method='post'>
                                           <input type='hidden' name='deletestudents_s_no' value='" . $row['s_no'] . "'>
                                           <input type='submit' name='deletestudent' value='Delete' class='btn-2' onclick = 'return confirmdelete()' >
                                           </form>
                                       </td>   
                                        </tr>  
                                    ";
                                    $s++;
                            }
                            ?>
                            </table>
                        </div>
                </div>



                


                <div id="batch" class="sub-section">
                    <h2 class="btn"> Batch Details</h2>
                        <div class="table-responsive">
                            <table id="employee_data1" class="table table-striped table-bordered">
                                <thead>
                                    <tr>
                                        <td> So.No. </td>
                                        <td> Batch Id </td>
                                        <td> Batch Name </td>
                                        <td>Batch Timings </td>
                                        <td> Edit </td>
                                         <td> Delete </td>
                                    </tr> 
                                </thead>
                            <?php
                            $sql_batch = "SELECT * FROM `batch`";
                            $result_batch = mysqli_query($conn, $sql_batch);
                            $ba=1;
                            while ($row = mysqli_fetch_assoc($result_batch)) {
                                echo "  
                                       <tr>  
                                       <td>$ba</td>  
                                       <td>" . $row["batch_id"] . "</td>   
                                       <td>" . $row["batch_name"] . "</td>   
                                       <td>" . $row["batch_time"] . "</td>  

                                       <td> <form action='updatebatch.php' method='get'>
                                       <input type='hidden' name='s_no' value='" . $row['s_no'] . "'>
                                           <input type='hidden' name='batch_id' value='" . $row["batch_id"] . "'>
                                           <input type='hidden' name='batch_name' value='" . $row["batch_name"] . "'>
                                           <input type='hidden' name='batch_time' value='" . $row["batch_time"] . "'>
                                           <input type='submit' name='editbatch' value='Edit' class='btn-2'>
                                           </form>
                                       </td>
                                       <td> <form action='delete.php' method='post'>
                                           <input type='hidden' name='deletebatch_s_no' value='" . $row['s_no'] . "'>
                                           <input type='submit' name='deletebatch' value='Delete' class='btn-2' onclick = 'return confirmdelete()' >
                                           </form>
                                       </td>    
                                        </tr>  
                                    ";
                                    $ba++;
                            }
                            ?>
                            </table>
                        </div>
                </div>




                <div id="content" class="sub-section">
                    <h2 class="btn"> Content Details</h2>
                        <div class="table-responsive">
                            <table id="employee_data2" class="table table-striped table-bordered">
                                <thead>
                                    <tr>
                                        <td> So.No. </td>
                                        <td> Batch Id </td>
                                        <td> Content Id </td>
                                        <td> Content Name</td>
                                        <td> Content Description</td>
                                        <td> Default Code</td>
                                        <td> Edit </td>
                                         <td> Delete </td>
                                    </tr> 
                                </thead>
                            <?php
                            $sql_content = "SELECT * FROM `content`";
                            $result_content = mysqli_query($conn, $sql_content);
                            $co=1;
                            while ($row = mysqli_fetch_assoc($result_content)) {
                                echo  " 
                                    <tr>  
                                        <td>$co</td>  
                                        <td>" . $row["batch_id"] . "</td>   
                                        <td>" . $row["content_id"] . "</td>   
                                        <td>" . $row["content_name"] . "</td>   
                                        <td>" . $row["content_desc"] . "</td>   
                                        <td>" . $row["default_code"] . "</td>  

                                        <td> <form action='updatecontent.php' method='get'>
                                        <input type='hidden' name='s_no' value='" . $row['s_no'] . "'>
                                            <input type='hidden' name='batch_id' value='" . $row["batch_id"] . "'>
                                            <input type='hidden' name='content_id' value='" . $row["content_id"] . "'>
                                            <input type='hidden' name='content_name' value='" . $row["content_name"] . "'>
                                            <input type='hidden' name='content_desc' value='" . $row["content_desc"] . "'>
                                            <input type='hidden' name='default_code' value='" . $row["default_code"] . "'>
                                            <input type='submit' name='editcontent' value='Edit' class='btn-2'>
                                            </form>
                                        </td>
                                        <td> <form action='delete.php' method='post'>
                                            <input type='hidden' name='deletecontent_s_no' value='" . $row['s_no'] . "'>
                                            <input type='submit' name='deletecontent' value='Delete' class='btn-2' onclick = 'return confirmdelete()' >
                                            </form>
                                        </td>     
                                        </tr>  
                                    ";
                                    $co++;
                            }
                            ?>
                            </table>
                        </div>
                </div>



                <div id="books" class="sub-section">
                    <h2 class="btn" id="books"> Batch Material Details of Book</h2>
                        <div class="table-responsive">
                            <table id="employee_data2" class="table table-striped table-bordered">
                                <thead>
                                    <tr>
                                        <td> So.No. </td>
                                        <td> Batch Id </td>
                                        <td> Content Id </td>
                                        <td> Book Id</td>
                                        <td> Book Name</td>
                                         <td> Edit </td>
                                         <td> Delete </td>
                                    </tr> 
                                </thead>
                            <?php
                            $sql_books = "SELECT * FROM `books`";
                            $result_books = mysqli_query($conn, $sql_books);
                            $a = 1;
                            while ($row = mysqli_fetch_assoc($result_books)) {
                                echo "  
                                        <tr>  
                                        <td> $a </td>  
                                        <td>" . $row["batch_id"] . "</td>   
                                        <td>" . $row["content_id"] . "</td>   
                                        <td>" . $row["book_id"] . "</td>   
                                        <td>" . $row["book_name"] . "</td>   
                                        

                                        <td> <form action='updatebook.php' method='get'>
                                        <input type='hidden' name='s_no' value='" . $row['s_no'] . "'>
                                            <input type='hidden' name='batch_id' value='" . $row["batch_id"] . "'>
                                            <input type='hidden' name='content_id' value='" . $row["content_id"] . "'>
                                            <input type='hidden' name='book_id' value='" . $row["book_id"] . "'>
                                            <input type='hidden' name='book_name' value='" . $row["book_name"] . "'>
                                            <input type='submit' name='edit' value='Edit' class='btn-2'>
                                            </form>
                                        </td>
                                        <td> <form action='delete.php' method='post'>
                                            <input type='hidden' name='id' value='" . $row['s_no'] . "'>
                                            <input type='submit' name='delete' value='Delete' class='btn-2' onclick = 'return confirmdelete()' >
                                            </form>
                                        </td>  
                                        </tr>  
                                        ";
                                        $a++;
                            }
                            ?>
                            
                            </table>
                        </div>
                </div>



                <div id="videos" class="sub-section">
                    <h2 class="btn"> Batch Material Details of Videos</h2>
                        <div class="table-responsive">
                            <table id="employee_data2" class="table table-striped table-bordered">
                                <thead>
                                    <tr>
                                        <td> So.No. </td>
                                        <td> Batch Id </td>
                                        <td> Content Id </td>
                                        <td> Video Id</td>
                                        <td> Video Title</td>
                                        <td> Edit </td>
                                         <td> Delete </td>
                                    </tr> 
                                </thead>
                            <?php
                            $sql_videos = "SELECT * FROM `videos`";
                            $result_videos = mysqli_query($conn, $sql_videos);
                            $v=1;
                            while ($row = mysqli_fetch_assoc($result_videos)) {
                                echo "  
                                        <tr>  
                                        <td>$v</td>  
                                        <td>" . $row["batch_id"] . "</td>   
                                        <td>" . $row["content_id"] . "</td>   
                                        <td>" . $row["video_id"] . "</td>   
                                        <td>" . $row["video_title"] . "</td>  
                                        <td> <form action='updatevideo.php' method='get'>
                                        <input type='hidden' name='s_no' value='" . $row['s_no'] . "'>
                                            <input type='hidden' name='batch_id' value='" . $row["batch_id"] . "'>
                                            <input type='hidden' name='content_id' value='" . $row["content_id"] . "'>
                                            <input type='hidden' name='video_id' value='" . $row["video_id"] . "'>
                                            <input type='hidden' name='video_title' value='" . $row["video_title"] . "'>
                                            <input type='hidden' name='video_code' value='" . $row["video_code"] . "'>
                                            <input type='submit' name='editvideo' value='Edit' class='btn-2'>
                                            </form>
                                        </td>
                                        <td> <form action='delete.php' method='post'>
                                            <input type='hidden' name='deletevideo_s_no' value='" . $row['s_no'] . "'>
                                            <input type='submit' name='deletevideo' value='Delete' class='btn-2' onclick = 'return confirmdelete()' >
                                            </form>
                                        </td>
                                        </tr>  
                                        ";
                                        $v++;
                            }
                            ?>
                            </table>
                        </div>
                </div>


                <div id="notes" class="sub-section">
                    <h2 class="btn"> Batch Material Details of Notes</h2>
                        <div class="table-responsive">
                            <table id="employee_data2" class="table table-striped table-bordered">
                                <thead>
                                    <tr>
                                        <td> So.No. </td>
                                        <td> Batch Id </td>
                                        <td> Content Id </td>
                                        <td> Notes Id</td>
                                        <td> Notes Title</td>
                                        <td> Edit </td>
                                         <td> Delete </td>
                                    </tr> 
                                </thead>
                            <?php
                            $sql_notes = "SELECT * FROM `notes`";
                            $result_notes = mysqli_query($conn, $sql_notes);
                            $no=1;
                            while ($row = mysqli_fetch_assoc($result_notes)) {
                                echo "  
                                        <tr>  
                                        <td>$no</td>  
                                        <td>" . $row["batch_id"] . "</td>   
                                        <td>" . $row["content_id"] . "</td>   
                                        <td>" . $row["notes_id"] . "</td>   
                                        <td>" . $row["notes_title"] . "</td>  
                                        <td> <form action='updatenotes.php' method='get'>
                                        <input type='hidden' name='s_no' value='" . $row['s_no'] . "'>
                                            <input type='hidden' name='batch_id' value='" . $row["batch_id"] . "'>
                                            <input type='hidden' name='content_id' value='" . $row["content_id"] . "'>
                                            <input type='hidden' name='notes_id' value='" . $row["notes_id"] . "'>
                                            <input type='hidden' name='notes_title' value='" . $row["notes_title"] . "'>
                                            <input type='submit' name='editnotes' value='Edit' class='btn-2'>
                                            </form>
                                        </td>
                                        <td> <form action='delete.php' method='post'>
                                            <input type='hidden' name='deletenote_s_no' value='" . $row['s_no'] . "'>
                                            <input type='submit' name='deletenote' value='Delete' class='btn-2' onclick = 'return confirmdelete()' >
                                            </form>
                                        </td>    
                                        </tr>  
                                        ";
                                        $no++;
                            }
                            ?>
                            </table>
                        </div>
                </div>




                <div id="classes" class="sub-section">
                    <h2 class="btn"> Batch Material Details of Classes</h2>
                        <div class="table-responsive">
                            <table id="employee_data2" class="table table-striped table-bordered">
                                <thead>
                                    <tr>
                                        <td> So.No. </td>
                                        <td> Batch Id </td>
                                        <td> Content Id </td>
                                        <td> Class Id</td>
                                        <td> Class Title</td>
                                        <td> Edit </td>
                                         <td> Delete </td>
                                    </tr> 
                                </thead>
                            <?php
                            $sql_classes = "SELECT * FROM `classes`";
                            $result_classes = mysqli_query($conn, $sql_classes);
                            $cl=1;
                            while ($row = mysqli_fetch_assoc($result_classes)) {
                                echo "  
                                        <tr>  
                                        <td>$cl</td>  
                                        <td>" . $row["batch_id"] . "</td>   
                                        <td>" . $row["content_id"] . "</td>   
                                        <td>" . $row["class_id"] . "</td>   
                                        <td>" . $row["class_title"] . "</td> 
                                        <td> <form action='updateclass.php' method='get'>
                                        <input type='hidden' name='s_no' value='" . $row['s_no'] . "'>
                                            <input type='hidden' name='batch_id' value='" . $row["batch_id"] . "'>
                                            <input type='hidden' name='content_id' value='" . $row["content_id"] . "'>
                                            <input type='hidden' name='class_id' value='" . $row["class_id"] . "'>
                                            <input type='hidden' name='class_title' value='" . $row["class_title"] . "'>
                                            <input type='hidden' name='class_code' value='" . $row["class_code"] . "'>
                                            <input type='submit' name='editclass' value='Edit' class='btn-2'>
                                            </form>
                                        </td>
                                        <td> <form action='delete.php' method='post'>
                                            <input type='hidden' name='deleteclass_s_no' value='" . $row['s_no'] . "'>
                                            <input type='submit' name='deleteclass' value='Delete' class='btn-2' onclick = 'return confirmdelete()' >
                                            </form>
                                        </td>
                                        </tr>   
                                        ";
                                        $cl++;
                            }
                            ?>
                            </table>
                        </div>
                </div>






                <div id="assesment" class="sub-section">
                    <h2 class="btn"> Batch Material Details of Assesments</h2>
                        <div class="table-responsive">
                            <table id="employee_data2" class="table table-striped table-bordered">
                                <thead>
                                    <tr>
                                        <td> So.No. </td>
                                        <td> Batch Id </td>
                                        <td> Content Id </td>
                                        <td> Assesment Id</td>
                                        <td> Assesment Title</td>
                                        <td> Edit </td>
                                         <td> Delete </td>
                                    </tr> 
                                </thead>
                            <?php
                            $sql_assesment = "SELECT * FROM `assesment`";
                            $result_assesment = mysqli_query($conn, $sql_assesment);
                            $ass=1;
                            while ($row = mysqli_fetch_assoc($result_assesment)) {
                                echo "  
                                        <tr>  
                                        <td>$ass</td>  
                                        <td>" . $row["batch_id"] . "</td>   
                                        <td>" . $row["content_id"] . "</td>   
                                        <td>" . $row["assesment_id"] . "</td>   
                                        <td>" . $row["assesment_name"] . "</td> 
                                        <td> <form action='updateassesment.php' method='get'>
                                        <input type='hidden' name='s_no' value='" . $row['s_no'] . "'>
                                            <input type='hidden' name='batch_id' value='" . $row["batch_id"] . "'>
                                            <input type='hidden' name='content_id' value='" . $row["content_id"] . "'>
                                            <input type='hidden' name='assesment_id' value='" . $row["assesment_id"] . "'>
                                            <input type='hidden' name='assesment_name' value='" . $row["assesment_name"] . "'>
                                            <input type='hidden' name='assesment_code' value='" . $row["assesment_code"] . "'>
                                            <input type='submit' name='editassesment' value='Edit' class='btn-2'>
                                            </form>
                                        </td>
                                        <td> <form action='delete.php' method='post'>
                                            <input type='hidden' name='deleteassesment_s_no' value='" . $row['s_no'] . "'>
                                            <input type='submit' name='deleteassesment' value='Delete' class='btn-2' onclick = 'return confirmdelete()' >
                                            </form>
                                        </td>    
                                        </tr>   
                                        ";
                                        $ass++;
                            }
                            ?>
                            </table>
                        </div>
                </div>





                <div id="blog" class="sub-section">
                    <h2 class="btn"> Blog Details</h2>
                        <div class="table-responsive">
                            <table id="employee_data2" class="table table-striped table-bordered">
                                <thead>
                                    <tr>
                                        <td> So.No. </td>
                                        <td> Blog Id </td>
                                        <td> Blog Heading </td>
                                        <td> Blog Date</td>
                                        <td> Edit </td>
                                         <td> Delete </td>
                                    </tr> 
                                </thead>
                            <?php
                            $sql_assesment = "SELECT * FROM `blogs`";
                            $result_assesment = mysqli_query($conn, $sql_assesment);
                            $bl=1;
                            while ($row = mysqli_fetch_assoc($result_assesment)) {
                                echo "  
                                        <tr>  
                                        <td>$bl</td>  
                                        <td>" . $row["blog_id"] . "</td>   
                                        <td>" . $row["blog_heading"] . "</td>   
                                        <td>" . $row["blog_date"] . "</td> 
                                        <td> <form action='updateblog.php' method='get'>
                                        <input type='hidden' name='s_no' value='" . $row['s_no'] . "'>
                                            <input type='hidden' name='blog_id' value='" . $row["blog_id"] . "'>
                                            <input type='hidden' name='blog_heading' value='" . $row["blog_heading"] . "'>
                                            <input type='hidden' name='blog_summary' value='" . $row["blog_summary"] . "'>
                                            <input type='hidden' name='blog_desc' value='" . $row["blog_desc"] . "'>
                                            <input type='hidden' name='blog_image' value='" . $row["blog_image"] . "'>
                                            <input type='hidden' name='blog_date' value='" . $row["blog_date"] . "'>
                                            <input type='submit' name='editblog' value='Edit' class='btn-2'>
                                            </form>
                                        </td>
                                        <td> <form action='delete.php' method='post'>
                                            <input type='hidden' name='deleteblog_s_no' value='" . $row['s_no'] . "'>
                                            <input type='submit' name='deleteblog' value='Delete' class='btn-2' onclick = 'return confirmdelete()' >
                                            </form>
                                        </td>    
                                        </tr>   
                                        ";
                                        $bl++;
                            }
                            ?>
                            </table>
                        </div>
                </div>




            </section>
    </div>
        </main>
        <?php
    include("./include/adminheader.php");
    ?>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="css/style.css" />
    <script src="js/jquery-3.5.1.min.js" defer></script>
    <script src="js/components/jquery.lazy.min.js" defer></script>
    <script src="js/components/jquery.fancybox.min.js" defer></script>
    <script src="js/components/jquery.singlePageNav.min.js" defer></script>
    <script src="js/components/swiper.js" defer></script>
    <script src="js/custom.js" defer></script>
    <script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>
    <script>
        function confirmdelete() {
            return confirm('Are you sure... You want to Delete this Record ???');
        }
    </script>
    <script>
        $(document).ready(function() {
    $('#employee_data').DataTable();
    $('#employee_data1').DataTable();
    $('#employee_data2').DataTable();
});
    </script>
</body>

</html>
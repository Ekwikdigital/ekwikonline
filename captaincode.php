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
    .btn-2 {
        padding: 10px;
        margin: 5px;
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
                                        <td> Manage </td>
                                    </tr> 
                                </thead>
                            <?php                           
                                $sql = "SELECT * FROM `loginaccess` ORDER BY s_no DESC LIMIT 1";
                                $result = mysqli_query($conn , $sql);

                                if(mysqli_num_rows($result) > 0)
                                {
                                
                                    foreach($result as $row)
                                    {
                                        echo "
                                            <tr>  
                                            <td>" . $row['s_no'] . "</td>  
                                            <td>" . $row['Login/logout'] . "</td>   
                                            <td>" . $row['email'] . "</td>   
                                            <td>" . $row['timestamp'] . "</td>   
                                            <td>
                                            <a href='' class='btn-2'> Edit </a>
                                            <a href='' class='btn-2'> Delete </a>
                                            </td>   
                                            </tr>  
                                            ";
                                    }
                                }
                            ?>
                            </table>    
                        </div>
                </div>



                <div id="" class="sub-section">
                    <h2 class="btn"> Batch Details</h2>
                        <div class="table-responsive">
                            <table id="employee_data1" class="table table-striped table-bordered">
                                <thead>
                                    <tr>
                                        <td> So.No. </td>
                                        <td> Batch Id </td>
                                        <td> Batch Name </td>
                                        <td>Batch Timings </td>
                                        <td> Manage </td>
                                    </tr> 
                                </thead>
                            <?php
                            $sql_batch = "SELECT * FROM `batch`";
                            $result_batch = mysqli_query($conn, $sql_batch);
                            while ($row = mysqli_fetch_assoc($result_batch)) {
                                echo "  
                                       <tr>  
                                       <td>" . $row["s_no"] . "</td>  
                                       <td>" . $row["batch_id"] . "</td>   
                                       <td>" . $row["batch_name"] . "</td>   
                                       <td>" . $row["batch_time"] . "</td>  
                                        <td>
                                            <a href='' class='btn-2'> Edit </a>
                                            <a href='' class='btn-2'> Delete </a>
                                            </td>    
                                        </tr>  
                                    ";
                            }
                            ?>
                            </table>
                        </div>
                </div>



                <div id="" class="sub-section">
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
                                        <td> Manage </td>
                                    </tr> 
                                </thead>
                            <?php
                            $sql_content = "SELECT * FROM `content`";
                            $result_content = mysqli_query($conn, $sql_content);
                            while ($row = mysqli_fetch_assoc($result_content)) {
                                echo  " 
                                    <tr>  
                                        <td>" . $row["s_no"] . "</td>  
                                        <td>" . $row["batch_id"] . "</td>   
                                        <td>" . $row["content_id"] . "</td>   
                                        <td>" . $row["content_name"] . "</td>   
                                        <td>" . $row["content_desc"] . "</td>   
                                        <td>" . $row["default_code"] . "</td>  
                                        <td>
                                            <a href='' class='btn-2'> Edit </a>
                                            <a href='' class='btn-2'> Delete </a>
                                            </td>    
                                        </tr>  
                                    ";
                            }
                            ?>
                            </table>
                        </div>
                </div>



                <div id="" class="sub-section">
                    <h2 class="btn"> Batch Material Details of Book</h2>
                        <div class="table-responsive">
                            <table id="employee_data2" class="table table-striped table-bordered">
                                <thead>
                                    <tr>
                                        <td> So.No. </td>
                                        <td> Batch Id </td>
                                        <td> Content Id </td>
                                        <td> Book Id</td>
                                        <td> Book Name</td>
                                         <td> Manage </td>
                                    </tr> 
                                </thead>
                            <?php
                            $sql_books = "SELECT * FROM `books`";
                            $result_books = mysqli_query($conn, $sql_books);
                            while ($row = mysqli_fetch_assoc($result_books)) {
                                echo "  
                                        <tr>  
                                        <td>" . $row["s_no"] . "</td>  
                                        <td>" . $row["batch_id"] . "</td>   
                                        <td>" . $row["content_id"] . "</td>   
                                        <td>" . $row["book_id"] . "</td>   
                                        <td>" . $row["book_name"] . "</td>   
                                        <td>
                                            <a href='' class='btn-2'> Edit </a>
                                            <a href='' class='btn-2'> Delete </a>
                                            </td>   
                                        </tr>  
                                        ";
                            }
                            ?>
                            </table>
                        </div>
                </div>



                <div id="" class="sub-section">
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
                                        <td> Manage </td>
                                    </tr> 
                                </thead>
                            <?php
                            $sql_videos = "SELECT * FROM `videos`";
                            $result_videos = mysqli_query($conn, $sql_videos);
                            while ($row = mysqli_fetch_assoc($result_videos)) {
                                echo "  
                                        <tr>  
                                        <td>" . $row["s_no"] . "</td>  
                                        <td>" . $row["batch_id"] . "</td>   
                                        <td>" . $row["content_id"] . "</td>   
                                        <td>" . $row["video_id"] . "</td>   
                                        <td>" . $row["video_title"] . "</td>  
                                        <td>
                                            <a href='' class='btn-2'> Edit </a>
                                            <a href='' class='btn-2'> Delete </a>
                                            </td>    
                                        </tr>  
                                        ";
                            }
                            ?>
                            </table>
                        </div>
                </div>


                <div id="" class="sub-section">
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
                                        <td> Manage </td>
                                    </tr> 
                                </thead>
                            <?php
                            $sql_notes = "SELECT * FROM `notes`";
                            $result_notes = mysqli_query($conn, $sql_notes);
                            while ($row = mysqli_fetch_assoc($result_notes)) {
                                echo "  
                                        <tr>  
                                        <td>" . $row["s_no"] . "</td>  
                                        <td>" . $row["batch_id"] . "</td>   
                                        <td>" . $row["content_id"] . "</td>   
                                        <td>" . $row["notes_id"] . "</td>   
                                        <td>" . $row["notes_title"] . "</td>  
                                        <td>
                                            <a href='' class='btn-2'> Edit </a>
                                            <a href='' class='btn-2'> Delete </a>
                                            </td>    
                                        </tr>  
                                        ";
                            }
                            ?>
                            </table>
                        </div>
                </div>




                <div id="" class="sub-section">
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
                                        <td> Manage </td>
                                    </tr> 
                                </thead>
                            <?php
                            $sql_classes = "SELECT * FROM `classes`";
                            $result_classes = mysqli_query($conn, $sql_classes);
                            while ($row = mysqli_fetch_assoc($result_classes)) {
                                echo "  
                                        <tr>  
                                        <td>" . $row["s_no"] . "</td>  
                                        <td>" . $row["batch_id"] . "</td>   
                                        <td>" . $row["content_id"] . "</td>   
                                        <td>" . $row["class_id"] . "</td>   
                                        <td>" . $row["class_title"] . "</td> 
                                        <td>
                                            <a href='' class='btn-2'> Edit </a>
                                            <a href='' class='btn-2'> Delete </a>
                                            </td>     
                                        </tr>  
                                        ";
                            }
                            ?>
                            </table>
                        </div>
                </div>






                <div id="" class="sub-section">
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
                                        <td> Manage </td>
                                    </tr> 
                                </thead>
                            <?php
                            $sql_assesment = "SELECT * FROM `assesment`";
                            $result_assesment = mysqli_query($conn, $sql_assesment);
                            while ($row = mysqli_fetch_assoc($result_assesment)) {
                                echo "  
                                        <tr>  
                                        <td>" . $row["s_no"] . "</td>  
                                        <td>" . $row["batch_id"] . "</td>   
                                        <td>" . $row["content_id"] . "</td>   
                                        <td>" . $row["assesment_id"] . "</td>   
                                        <td>" . $row["assesment_title"] . "</td> 
                                        <td>
                                            <a href='' class='btn-2'> Edit </a>
                                            <a href='' class='btn-2'> Delete </a>
                                            </td>     
                                        </tr>  
                                        ";
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
        $(document).ready(function() {
    $('#employee_data').DataTable();
    $('#employee_data1').DataTable();
    $('#employee_data2').DataTable();
});
    </script>
</body>

</html>
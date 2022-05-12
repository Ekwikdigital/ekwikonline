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
                <div id="consultation" class="sub-section">
                    <h2 class="btn"> Get Started Data</h2>
                        <div class="table-responsive">
                            <table id="employee_data" class="table table-striped table-bordered">
                                <thead>
                                    <tr>
                                        <td> So.No. </td>
                                        <td> Name </td>
                                        <td> Email </td>
                                        <td> Phone </td>
                                        <td> Message </td>
                                        <td> Manage </td>
                                    </tr> 
                                </thead>
                            <?php                           
                                $sql = "SELECT * FROM `consultation`";
                                $result = mysqli_query($conn , $sql);
                                        $c=1;
                                        while ($row = mysqli_fetch_assoc($result)) {
                                        echo "
                                            <tr>  
                                            <td>$c</td>  
                                            <td>" . $row['s_name'] . "</td>   
                                            <td>" . $row['s_email'] . "</td>   
                                            <td>" . $row['s_phone'] . "</td>   
                                            <td>" . $row['s_message'] . "</td>   
                                            <td> <form action='delete.php' method='post'>
                                           <input type='hidden' name='deleteconsultation_s_no' value='" . $row['s_no'] . "'>
                                           <input type='submit' name='deleteconsultation' value='Delete' class='btn-2' onclick = 'return confirmdelete()' >
                                           </form>
                                       </td>     
                                            </tr>  
                                            ";
                                            $c++;
                                    }
                                
                            ?>
                            </table>    
                        </div>
                </div>



                <div id="brochure" class="sub-section">
                    <h2 class="btn"> Brochure Details</h2>
                        <div class="table-responsive">
                            <table id="employee_data1" class="table table-striped table-bordered">
                                <thead>
                                    <tr>
                                        <td> So.No. </td>
                                        <td> Name </td>
                                        <td> Email </td>
                                        <td> Phone </td>
                                        <td> Manage </td>
                                    </tr> 
                                </thead>
                            <?php
                            $sql_batch = "SELECT * FROM `brochure`";
                            $result_batch = mysqli_query($conn, $sql_batch);
                            $b=1;
                            while ($row = mysqli_fetch_assoc($result_batch)) {
                                echo "  
                                       <tr>  
                                       <td>$b</td>  
                                       <td>" . $row["b_name"] . "</td>   
                                       <td>" . $row["b_email"] . "</td>   
                                       <td>" . $row["b_phone"] . "</td>  
                                       <td> <form action='delete.php' method='post'>
                                           <input type='hidden' name='deletebrochure_s_no' value='" . $row['s_no'] . "'>
                                           <input type='submit' name='deletebrochure' value='Delete' class='btn-2' onclick = 'return confirmdelete()' >
                                           </form>
                                       </td>         
                                        </tr>  
                                    ";
                                    $b++;
                            }
                            ?>
                            </table>
                        </div>
                </div>



                <div id="newsletter" class="sub-section">
                    <h2 class="btn"> Newsletter Details</h2>
                        <div class="table-responsive">
                            <table id="employee_data2" class="table table-striped table-bordered">
                                <thead>
                                    <tr>
                                        <td> So.No. </td>
                                        <td> Email </td>
                                        <td> Manage </td>
                                    </tr> 
                                </thead>
                            <?php
                            $sql_content = "SELECT * FROM `newsletter`";
                            $result_content = mysqli_query($conn, $sql_content);
                            $n=1;
                            while ($row = mysqli_fetch_assoc($result_content)) {
                                echo  " 
                                    <tr>  
                                        <td>$n</td>  
                                        <td>" . $row["newsletter"] . "</td>   
                                        <td> <form action='delete.php' method='post'>
                                           <input type='hidden' name='deletenewsletter_s_no' value='" . $row['s_no'] . "'>
                                           <input type='submit' name='deletenewsletter' value='Delete' class='btn-2' onclick = 'return confirmdelete()' >
                                           </form>
                                       </td>         
                                        </tr>  
                                    ";
                                    $n++;
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
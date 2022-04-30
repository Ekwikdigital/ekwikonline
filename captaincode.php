<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="css/captain.css">
</head>
<body>

<section class="main-container b">
    <div class="menu b">
        <ul>
        <a href="index.php">
                           
                               <img src="./img/uploaded/elogo.png" alt="" srcset="">
                           
                       </a>
            <a href="#book">
                <li>
                     Book
                </li>
            </a>
            <a href="#video">
                <li>
                     Video
                </li>
            </a>
            <a href="#notes">
                <li>
                    Notes
                </li>
            </a>
            <a href="#class">
                <li>
                     Class
                </li>
            </a>
            <a href="#assesments">
                <li>
                     Assesments
                </li>
            </a>
        </ul>
    </div>
 
<div class="contant b">
    <div id="book" class="box">
    <div>
        <form  method="post" enctype="multipart/form-data">
                            <div>
                                <label for="book_id">Book Id</label>
                                <br>
                                <input type="number" name="book_id" id="book_id" required>
                            </div>
                            <div>
                                <label for="book_title">Book Title</label>
                                <br>
                                <input type="text" name="book_title" id="book_title" required>
                            </div>
                            <div>
                                <label for="book_desc">Book Description</label>
                                <br>
                                <input type="text" name="book_desc" id="book_desc" required>
                            </div>
                            <div>
                                <label for="book">Upload Book</label>
                                <br>
                                <input type="file" name="book" id="book" class="file">
                            </div>
                            <div>
                                <button id="submit" type="submit" >Submit</button>
                            </div>
                        </form>
                        </div>
                    <div>
<table>
    <thead>
        <tr>
            <th>

            </th>
        </tr>
    </thead>
    <tbody>
        tr
    </tbody>
</table>                        
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Student Id</th>
                                <th>Courses</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Wordpress development
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Web development
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>Google Ads
                            </tr>
                            <tr>
                                <td>4</td>
                                <td>Facebook Ads
                            </tr>
                            <tr>
                                <td>5</td>
                                <td>Social Media Marketing
                            <tr>
                                <td>6</td>
                                <td>Search Engine Optimization
                            </tr>
                            <tr>
                                <td>7</td>
                                <td>Graphic Designing
                            </tr>
                            <tr>
                                <td>8</td>
                                <td>Youtube Marketing 
                            </tr>
</tbody>
                        </table></div>
    </div>
    <div id="video" class="box">
    <form  action="" method="post" enctype="multipart/form-data">
                            <div >
                                <label for="video_id">Video Id</label>
                                <br>
                                <input type="number" name="video_id" id="video_id" required>
                            </div>
                            <div>
                                <label for="video_title">Video Title</label>
                                <br>
                                <input type="text" name="video_title" id="video_title" required>
                            </div>
                            <div>
                                <label for="video_desc">Video Description</label>
                                <br>
                                <input type="text" name="video_desc" id="video_desc" required>
                            </div>
                            <div>
                                <label for="v_code">Video Code</label>
                                <br>
                                <textarea name="v_code" id="v_code" cols="30" rows="10"></textarea>
                            </div>
                            <div>
                                <button id="submit" type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </form>
    </div>
    <div id="notes" class="box">
        <h2>Heading</h2>
        <h2>Heading</h2>
        <h2>Heading</h2>
        <h2>Heading</h2>
        <h2>Heading</h2>
        <h2>Heading</h2>
        <h2>Heading</h2>
        <h2>Heading</h2>
        <h2>Heading</h2>
        <h2>Heading</h2>
        <h2>Heading</h2>
        <h2>Heading</h2>
        <h2>Heading</h2>
        <h2>Heading</h2>
        <h2>Heading</h2>
        <h2>Heading</h2>
        <h2>Heading</h2>
        <h2>Heading</h2>
        <h2>Heading</h2>
        <h2>Heading</h2>
    </div>
    <div id="class" class="box">
        <h2>Heading</h2>
        <h2>Heading</h2>
        <h2>Heading</h2>
        <h2>Heading</h2>
        <h2>Heading</h2>
        <h2>Heading</h2>
        <h2>Heading</h2>
        <h2>Heading</h2>
        <h2>Heading</h2>
        <h2>Heading</h2>
        <h2>Heading</h2>
        <h2>Heading</h2>
        <h2>Heading</h2>
        <h2>Heading</h2>
        <h2>Heading</h2>
        <h2>Heading</h2>
        <h2>Heading</h2>
        <h2>Heading</h2>
        <h2>Heading</h2>
        <h2>Heading</h2>
    </div>
    <div id="assesments" class="box">
        <h2>Heading</h2>
        <h2>Heading</h2>
        <h2>Heading</h2>
        <h2>Heading</h2>
        <h2>Heading</h2>
        <h2>Heading</h2>
        <h2>Heading</h2>
        <h2>Heading</h2>
        <h2>Heading</h2>
        <h2>Heading</h2>
        <h2>Heading</h2>
        <h2>Heading</h2>
        <h2>Heading</h2>
        <h2>Heading</h2>
        <h2>Heading</h2>
        <h2>Heading</h2>
        <h2>Heading</h2>
        <h2>Heading</h2>
        <h2>Heading</h2>
        <h2>Heading</h2>
    </div>
    <div id="61" class="box">
        <h2>Heading</h2>
        <h2>Heading</h2>
        <h2>Heading</h2>
        <h2>Heading</h2>
        <h2>Heading</h2>
        <h2>Heading</h2>
        <h2>Heading</h2>
        <h2>Heading</h2>
        <h2>Heading</h2>
        <h2>Heading</h2>
        <h2>Heading</h2>
        <h2>Heading</h2>
        <h2>Heading</h2>
        <h2>Heading</h2>
        <h2>Heading</h2>
        <h2>Heading</h2>
        <h2>Heading</h2>
        <h2>Heading</h2>
        <h2>Heading</h2>
        <h2>Heading</h2>
    </div>
    <div id="71" class="box">
        <h2>Heading</h2>
        <h2>Heading</h2>
        <h2>Heading</h2>
        <h2>Heading</h2>
        <h2>Heading</h2>
        <h2>Heading</h2>
        <h2>Heading</h2>
        <h2>Heading</h2>
        <h2>Heading</h2>
        <h2>Heading</h2>
        <h2>Heading</h2>
        <h2>Heading</h2>
        <h2>Heading</h2>
        <h2>Heading</h2>
        <h2>Heading</h2>
        <h2>Heading</h2>
        <h2>Heading</h2>
        <h2>Heading</h2>
        <h2>Heading</h2>
        <h2>Heading</h2>
    </div>
    <div id="81" class="box">
        <h2>Heading</h2>
        <h2>Heading</h2>
        <h2>Heading</h2>
        <h2>Heading</h2>
        <h2>Heading</h2>
        <h2>Heading</h2>
        <h2>Heading</h2>
        <h2>Heading</h2>
        <h2>Heading</h2>
        <h2>Heading</h2>
        <h2>Heading</h2>
        <h2>Heading</h2>
        <h2>Heading</h2>
        <h2>Heading</h2>
        <h2>Heading</h2>
        <h2>Heading</h2>
        <h2>Heading</h2>
        <h2>Heading</h2>
        <h2>Heading</h2>
        <h2>Heading</h2>
    </div>





    </div>    


</section>

    
</body>
</html>
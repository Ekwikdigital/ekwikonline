
<?php
session_start();
include("./include/db_connect_copy.php");

$blog_id = $_GET['id'];

$sql = "SELECT * FROM `blogs` WHERE blog_id='$blog_id'";
$result = mysqli_query($conn , $sql);
$row = mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="format-detection" content="telephone=no">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/x-icon" href="favicon.ico" />
    <title>Article</title>
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

<body class="loaded">
    <div class="main-wrapper">

        <main class="content">
            <div class="section-main-screen section-main-screen_inner" style="background-image: url(img/bg/header.svg);">
                <div class="wrapper">
                    <div class="main-screen main-screen_inner">
                        <div class="h1 h1-2">Post</div>
                        <ul class="breadcrumbs" itemscope="" itemtype="https://schema.org/BreadcrumbList">
                            <li itemprop="itemListElement" itemscope="" itemtype="https://schema.org/ListItem"><a href="#" itemprop="item"><span itemprop="name">Home</span></a>
                                <meta itemprop="position" content="1">
                            </li>
                            <li itemprop="itemListElement" itemscope="" itemtype="https://schema.org/ListItem"><a href="#" itemprop="item"><span itemprop="name">Blog</span></a>
                                <meta itemprop="position" content="2">
                            </li>

                        </ul>
                        <div class="leaf-left-decor"></div>
                    </div>
                    <div class="circle-decor"></div>
                </div>
                <div class="leaf-right-decor"></div>
            </div>
            <div class="section-post section-post-inner">
                <div class="wrapper">
                    <div class="columns">
                        <div class="columns_center">
                            <article class="article-wrap">
                                <div class="article">

                                    <picture>
                                        <img src=" <?php echo $row['blog_image']; ?> " alt="" class="img-article-main" />
                                    </picture>
                                    <div class="news-header news-header_article">
                                        <div class="news__date"> <?php echo $row['blog_date']; ?> </div>  
                                    </div>
                                    <h1><?php echo $row['blog_heading']; ?> </h1>
                                    <p><?php echo $row['blog_desc']; ?></p>
                                    <!-- <blockquote>
                                        “As a participatory media culture, social media platforms or social networking sites are forms of mass communication that, through media technologies, allow large amounts of product and distribution of content to reach the largest audience possible. “
                                        <cite>Ralph Edwards</cite>
                                    </blockquote>
                                    <h2>Pariatur cupidatat Lorem irure nisi Velit qui</h2>
                                    <p>Pariatur cupidatat Lorem irure nisi. Velit qui irure consectetur do cupi roident id est ex sunt nostrud nisi mine consectetur do cupi roident id est ex sunt nostrud nisi minim ut. Cupidatat velit dolore consectetur
                                        deserunt laboris magna eiusmod aliquip consectetur commodo in eiusmod aliqua cupidatat. Nostrud laboris et eu mollit qui esse dolore exercitation in dolore sint nisi eu aliqua.</p>
                                    <ol>
                                        <li>As a participatory media culture, social media platforms or social networking sites are forms of mass communication that, through media technologies.</li>
                                        <li>Allow large amounts of product and distribution of content to reach the largest audience possible. </li>
                                        <li>However, there are downsides to virtual promotions as servers, systems, and websites may crash, fail, or become overloaded with information. You also can stand risk of losing uploaded information and storage and
                                            at a use can also be effected by a number of outside variables.</li>
                                    </ol> -->
                                </div>
                                <div class="tags-article">
                                    <div class="tags-article__title">Tags:</div>
                                    <div class="tags">
                                        <a href="blog.php" class="tags__item">Technology</a>
                                        <a href="blog.php" class="tags__item">Office</a>
                                        <a href="blog.php" class="tags__item">Mobile</a>
                                    </div>
                                </div>
                                <div class="article-author">
                                    <!-- <div class="article-author__img">
                                        <img data-src="img/examples/author.jpg" alt="" class="js-lazy" src="data:image/gif;base64,R0lGODlhAQABAAAAACw=">
                                    </div>
                                    <div class="article-author__info">
                                        <div>
                                            <div class="article-author__title">Cameron Williamson</div>
                                            <div class="article-author__text">Web developer since 2006. Create hundreds of websites, HTML and CSS3 expert, who started to learn web design on a world-class level.</div>
                                        </div>
                                        <div class="socials">
                                            <div class="socials__item">
                                                <a href="#" target="_blank" class="socials__link">Fb</a>
                                            </div>
                                            <div class="socials__item">
                                                <a href="#" target="_blank" class="socials__link">Ins</a>
                                            </div>
                                            <div class="socials__item">
                                                <a href="#" target="_blank" class="socials__link">In</a>
                                            </div>
                                        </div>
                                    </div> -->
                                </div>
                            </article>
                            <div class="article-form">
                                <div class="h3">leave a comment</div>
                                <form>
                                    <div class="box-fileds-3">
                                        <div class="box-filed">
                                            <input type="text" placeholder="Your name">
                                        </div>
                                        <div class="box-filed">
                                            <input type="tel" placeholder="Enter your phone">
                                        </div>
                                        <div class="box-filed">
                                            <input type="email" placeholder="Enter your email">
                                        </div>
                                        <div class="box-filed box-filed_textarea">
                                            <textarea placeholder="Comment"></textarea>
                                        </div>
                                        <div class="box-filed box-filed_button">
                                            <input type="submit" class="btn" value="Post comment">
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <aside class="columns_sidebar sidebar">
                            <div class="sidebar_search">
                                <form>
                                    <div class="search">
                                        <input type="text" placeholder="Search...">
                                        <button type="submit"><span class="icon-search"></span></button>
                                    </div>
                                </form>
                            </div>
                            <div class="sidebar-widget sidebar-widget_post">
                                <h3 class="sidebar-widget__title">Recent posts</h3>
                                <div class="stories">
                                    <div class="stories-item">
                                        <a href="article.html" class="stories-item__img"><img data-src="img/examples/img1.jpg" src="data:image/gif;base64,R0lGODlhAQABAAAAACw=" class="js-lazy" alt=""></a>
                                        <div class="stories-item__infoline">
                                            <div class="stories-item__title"><a href="article.html">How the Victorian fashion came to be</a></div>
                                            <div class="stories-item__date">Jun 25, 2021</div>
                                        </div>
                                    </div>
                                    <div class="stories-item">
                                        <a href="article.html" class="stories-item__img"><img data-src="img/examples/img2.jpg" src="data:image/gif;base64,R0lGODlhAQABAAAAACw=" class="js-lazy" alt=""></a>
                                        <div class="stories-item__infoline">
                                            <div class="stories-item__title"><a href="article.html">How the Victorian fashion came to be</a></div>
                                            <div class="stories-item__date">Jun 25, 2021</div>
                                        </div>
                                    </div>
                                    <div class="stories-item">
                                        <a href="article.html" class="stories-item__img"><img data-src="img/examples/img3.jpg" src="data:image/gif;base64,R0lGODlhAQABAAAAACw=" class="js-lazy" alt=""></a>
                                        <div class="stories-item__infoline">
                                            <div class="stories-item__title"><a href="article.html">How the Victorian fashion came to be</a></div>
                                            <div class="stories-item__date">Jun 25, 2021</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="sidebar-widget sidebar-widget_datepicker">
                                <div id="datepicker" class="datepicker"></div>
                            </div>
                            <div class="sidebar-widget sidebar-widget_gallery">
                                <h3 class="sidebar-widget__title">gallery</h3>
                                <div class="gallery">
                                    <a href="img/examples/gallery_1_big.jpg" class="gallery__item js-fancybox" data-fancybox="gallery">
                                        <img data-src="img/examples/gallery_1.jpg" src="data:image/gif;base64,R0lGODlhAQABAAAAACw=" class="js-lazy" alt="">
                                    </a>
                                    <a href="img/examples/gallery_2_big.jpg" class="gallery__item js-fancybox" data-fancybox="gallery">
                                        <img data-src="img/examples/gallery_2.jpg" src="data:image/gif;base64,R0lGODlhAQABAAAAACw=" class="js-lazy" alt="">
                                    </a>
                                    <a href="img/examples/gallery_3_big.jpg" class="gallery__item js-fancybox" data-fancybox="gallery">
                                        <img data-src="img/examples/gallery_3.jpg" src="data:image/gif;base64,R0lGODlhAQABAAAAACw=" class="js-lazy" alt="">
                                    </a>
                                    <a href="img/examples/gallery_4_big.jpg" class="gallery__item js-fancybox" data-fancybox="gallery">
                                        <img data-src="img/examples/gallery_4.jpg" src="data:image/gif;base64,R0lGODlhAQABAAAAACw=" class="js-lazy" alt="">
                                    </a>
                                    <a href="img/examples/gallery_5_big.jpg" class="gallery__item js-fancybox" data-fancybox="gallery">
                                        <img data-src="img/examples/gallery_5.jpg" src="data:image/gif;base64,R0lGODlhAQABAAAAACw=" class="js-lazy" alt="">
                                    </a>
                                    <a href="img/examples/gallery_6_big.jpg" class="gallery__item js-fancybox" data-fancybox="gallery">
                                        <img data-src="img/examples/gallery_6.jpg" src="data:image/gif;base64,R0lGODlhAQABAAAAACw=" class="js-lazy" alt="">
                                    </a>
                                </div>
                            </div>
                            <div class="sidebar-widget sidebar-widget_tags">
                                <h3 class="sidebar-widget__title">Tags</h3>
                                <div class="tags">
                                    <a href="blog.php" class="tags__item">Technology</a>
                                    <a href="blog.php" class="tags__item">Office</a>
                                    <a href="blog.php" class="tags__item">Mobile</a>
                                    <a href="blog.php" class="tags__item">Business</a>
                                    <a href="blog.php" class="tags__item">Community</a>
                                    <a href="blog.php" class="tags__item">Web</a>
                                    <a href="blog.php" class="tags__item">Collaboration</a>
                                    <a href="blog.php" class="tags__item">Promotion</a>
                                </div>
                            </div>
                        </aside>
                    </div>
                </div>
            </div>
        </main>
        <?php
            include("./include/header.php");
        ?>
    <link rel="stylesheet" type="text/css" href="css/style.css" />
    <link rel="stylesheet" type="text/css" href="css/inner.css" />
    <script src="js/jquery-3.5.1.min.js" defer></script>
    <script src="js/components/jquery.lazy.min.js" defer></script>
    <script src="js/components/jquery.fancybox.min.js" defer></script>
    <script src="js/components/jquery-ui.min.js" defer></script>
    <script src="js/custom.js" defer></script>
</body>


<?php
session_start();
include("./include/db_connect_copy.php");
?>


<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="format-detection" content="telephone=no">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="img/uploaded/elogo.png" href="favicon.ico" />
    <title>Blog</title>
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
                        <h1 class="h1-2">Blog</h1>
                        <ul class="breadcrumbs" itemscope="" itemtype="https://schema.org/BreadcrumbList">
                            <li itemprop="itemListElement" itemscope="" itemtype="https://schema.org/ListItem"><a href="#" itemprop="item"><span itemprop="name">Home</span></a>
                                <meta itemprop="position" content="1">
                            </li>
                            <li itemprop="itemListElement" itemscope="" itemtype="https://schema.org/ListItem"><span itemprop="name">Blog</span>
                                <meta itemprop="position" content="2">
                            </li>
                        </ul>
                        <div class="leaf-left-decor"></div>
                    </div>
                    <div class="circle-decor"></div>
                </div>
                <div class="leaf-right-decor"></div>
            </div>
            <div class="section-post">
                <div class="wrapper">
                    <div class="columns">
                        <div class="columns_center">
                            <div class="news news-page">
                            <?php
                            $sql = "SELECT * FROM `blogs`";
                            $result = mysqli_query($conn , $sql);
                            while($row = mysqli_fetch_assoc($result)){
                            echo "
                                <div class='news__item'>
                                    <a href='article.php?id=".$row['blog_id']."' class='news__img'>

                                        <picture>
                                            <img src='";echo $row['blog_image'];echo"' alt='' />
                                        </picture>
                                    </a>
                                    <div class='news__content'>
                                        <div class='news-header'>
                                            <div class='news__date'>". $row['blog_date']."</div>
                                        </div>
                                        <div class='news__title'><a href='article.php?id=".$row['blog_id']."'>
                                        ". $row['blog_heading']."
                                        </a></div>
                                        <div class='news__text'>". $row['blog_summary']."...</div>
                                    </div>
                                </div>
                                    ";
                            }
                                ?>
                                <!-- <div class="news__item">
                                    <a href="article.php" class="news__img">
                                        <picture>
                                            <source type="image/jpeg" data-srcset="img/examples/blog_2.jpg" srcset="data:image/gif;base64,R0lGODlhAQABAAAAACw=" media="(min-width: 768px)" />
                                            <source type="image/jpeg" data-srcset="img/examples/blog_2_mob.jpg" srcset="data:image/gif;base64,R0lGODlhAQABAAAAACw=" />
                                            <img data-src="img/examples/blog_2_mob.jpg" src="data:image/gif;base64,R0lGODlhAQABAAAAACw=" alt="" class="js-lazy" />
                                        </picture>
                                    </a>
                                    <div class="news__content">
                                        <div class="news-header">
                                            <div class="news__date">Jun 25, 2021</div>
                                            <div class="news__author">
                                                <img data-src="img/examples/avatar_3.jpg" alt="" class="js-lazy" src="data:image/gif;base64,R0lGODlhAQABAAAAACw=">
                                                <span class="news__author-title">Dianne Russell</span>
                                            </div>
                                            <a href="#" class="news__category">Community</a>
                                        </div>
                                        <div class="news__title"><a href="article.php">Dolor duis voluptate enim exercitation consequat ex.</a></div>
                                        <div class="news__text">Dolor duis voluptate enim exercitation consequat ex. Voluptate in sunt commodo aute do. Dolor enim dolor labore velit nulla sit exercitation irure esse proident velit commodo. Est non officia proident esse...</div>
                                    </div>
                                </div> -->
                                <!-- <div class="news__item">
                                    <a href="article.php" class="news__img">

                                        <picture>
                                            <source type="image/jpeg" data-srcset="img/examples/blog_3.jpg" srcset="data:image/gif;base64,R0lGODlhAQABAAAAACw=" media="(min-width: 768px)" />
                                            <source type="image/jpeg" data-srcset="img/examples/blog_3_mob.jpg" srcset="data:image/gif;base64,R0lGODlhAQABAAAAACw=" />
                                            <img data-src="img/examples/blog_3_mob.jpg" src="data:image/gif;base64,R0lGODlhAQABAAAAACw=" alt="" class="js-lazy" />
                                        </picture>
                                    </a>
                                    <div class="news__content">
                                        <div class="news-header">
                                            <div class="news__date">Jun 25, 2021</div>
                                            <div class="news__author">
                                                <img data-src="img/examples/avatar_3.jpg" alt="" class="js-lazy" src="data:image/gif;base64,R0lGODlhAQABAAAAACw=">
                                                <span class="news__author-title">Dianne Russell</span>
                                            </div>
                                            <a href="#" class="news__category">Community</a>
                                        </div>
                                        <div class="news__title"><a href="article.php">Dolor duis voluptate enim exercitation consequat ex.</a></div>
                                        <div class="news__text">Dolor duis voluptate enim exercitation consequat ex. Voluptate in sunt commodo aute do. Dolor enim dolor labore velit nulla sit exercitation irure esse proident velit commodo. Est non officia proident esse...</div>
                                    </div>
                                </div> -->
                                <!-- <div class="blog-more blog-more-inner">
                                    <a href="#" class="btn">Load more</a>
                                </div> -->
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
                                        <a href="article.php" class="stories-item__img"><img data-src="img/examples/img1.jpg" src="data:image/gif;base64,R0lGODlhAQABAAAAACw=" class="js-lazy" alt=""></a>
                                        <div class="stories-item__infoline">
                                            <div class="stories-item__title"><a href="article.php">How the Victorian fashion came to be</a></div>
                                            <div class="stories-item__date">Jun 25, 2021</div>
                                        </div>
                                    </div>
                                    <div class="stories-item">
                                        <a href="article.php" class="stories-item__img"><img data-src="img/examples/img2.jpg" src="data:image/gif;base64,R0lGODlhAQABAAAAACw=" class="js-lazy" alt=""></a>
                                        <div class="stories-item__infoline">
                                            <div class="stories-item__title"><a href="article.php">How the Victorian fashion came to be</a></div>
                                            <div class="stories-item__date">Jun 25, 2021</div>
                                        </div>
                                    </div>
                                    <div class="stories-item">
                                        <a href="article.php" class="stories-item__img"><img data-src="img/examples/img3.jpg" src="data:image/gif;base64,R0lGODlhAQABAAAAACw=" class="js-lazy" alt=""></a>
                                        <div class="stories-item__infoline">
                                            <div class="stories-item__title"><a href="article.php">How the Victorian fashion came to be</a></div>
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
                                    <a href="blog.html" class="tags__item">Technology</a>
                                    <a href="blog.html" class="tags__item">Office</a>
                                    <a href="blog.html" class="tags__item">Mobile</a>
                                    <a href="blog.html" class="tags__item">Business</a>
                                    <a href="blog.html" class="tags__item">Community</a>
                                    <a href="blog.html" class="tags__item">Web</a>
                                    <a href="blog.html" class="tags__item">Collaboration</a>
                                    <a href="blog.html" class="tags__item">Promotion</a>
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



<?php
session_start();

?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Ekwik Online || Best Digital Marketing Institute</title>
    <meta name='description' content="" />
    <meta name="keywords" content="" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="format-detection" content="telephone=no">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
    <link rel="icon" type="img/uploaded/elogo.png" href="favicon.ico" />
    <meta name="it-rating" content="it-rat-cd303c3f80473535b3c667d0d67a7a11" />
    <meta name="cmsmagazine" content="3f86e43372e678604d35804a67860df7" />
    <link rel="stylesheet" type="text/css" href="css/first-screen.css" />
    <link rel="stylesheet" type="text/css" href="css/first-screen-inner.css" />
    <link rel="preload " href="fonts/AleoBold.woff2" as="font" crossorigin>
    <link rel="preload " href="fonts/Lato/LatoRegular.woff2" as="font" crossorigin>
    <link rel="preload " href="fonts/Lato/LatoBold.woff2" as="font" crossorigin>
    <link rel="preload " href="css/style.css" as="style">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css" integrity="sha512-10/jx2EXwxxWqCLX/hHth/vu2KY3jCF70dCQB8TSgNjbCVAC/8vai53GfMDrO2Emgwccf2pJqxct9ehpzG+MTw==" crossorigin="anonymous" referrerpolicy="no-referrer"/>
    <style>
        .section-logos {
            margin-top: 150px !important;
        }
        .bg {
            height: 100%;
            width: 100%;
            position: relative;
            left: 0%;
            top: -12%;
            z-index: 99;
        }
        .all-modules {
            width: max-content;
            margin: 20px;
            /* border: 2px solid black; */
            border-radius: 15px;
            box-shadow: 0px 1rem 2.6rem rgba(36, 73, 168, 0.15);
        }
        .all-modules .fa-medal{
            color: rgb(250,80,119);
        }
        .about__content {
            width: 100% !important;
        }
        .fa-person-circle-question {
            color: rgb(250,80,119);
        }
        object {
            height: 180px;
            width: 230px;
        }
        .first-screen,.section-screen-main{
            margin-top: -120px;
        }
        .all-content {
            width: 100%;
            /* border: 2px solid black; */
            margin: 0;
        }
        
    </style>
</head>
<body id="body" class="home loaded">
    <div class="main-wrapper">
        <main class="content">
            <div class="first-screen section-screen-main">
        <video class="bg" autoplay muted loop>
            <source src="./img/video/diplom.mp4" type="video/mp4">
        </video>
                
                <!-- <div class="bg" style="background: no-repeat center center/cover url(img/uploaded/b.jpg);"></div> -->
               
                    <!-- <div class="screen-main">
                        <div class="get">
                            <div class="section-heading"><span>Are You Ready for</span></div>
                                <h1 class="h1 h1-main">Diploma in Digital Marketing</h1>
                                    <div class="screen-main__text">Agency with 7&nbsp;years of history, 15&nbsp;employees, Fortune 2000&nbsp;clients and proven results. <br> Login for More Benefits</div>
                                        <a href="#formOrder" class="btn btn_started-header js-fancybox ">get started</a>
                                    </div>
                            </div>
                        </div>
                    </div> -->
            <!-- <div class="section-services-main" id="course">
                <div class="wrapper"> -->
                    <!-- <div id="courses" class="services">
                        <div class="services__item">
                            <div class="services__decor"></div>
                            <div class="services__icon">
                                <img src="img/icons-svg/exellence-1.svg" alt="" loading="lazy">
                            </div>
                            <a href="./website-pages/digital-marketing.html">
                                <div class="services__title"><abbr title="Any marketing that uses electronic devices and can be used by marketing specialists to convey promotional messaging and measure its impact through your customer journey. In practice, digital marketing typically refers to marketing campaigns that appear on a computer, phone, tablet, or other device. It can take many forms, including online video, display ads, search engine marketing, paid social ads and social media posts. Digital marketing is often compared to “traditional marketing” such as magazine ads, billboards, and direct mail. Oddly, television is usually lumped in with traditional marketing."> Digital Marketing </abbr></div>
                                <div class="services__text">Any marketing that uses electronic devices and can be used by marketing specialists</div>
                            </a>
                        </div>
                        <div class="services__item">
                            <div class="services__decor"></div>
                            <div class="services__icon">
                                <img src="img/icons-svg/exellence-2.svg" alt="" loading="lazy">
                            </div>
                            <a href="./website-pages/web-designing.html">
                                <div class="services__title"><abbr title="Web design is the art of planning and arranging content on a website so that it can be shared and accessed online with the world. A combination of aesthetic and functional elements, web design is what determines the look of a website—such as its colors, fonts, and graphics—as well as shaping the site’s structure and the users’ experience of it."> Web Designing  </abbr></div>
                                <div class="services__text">Web design is the art of planning and arranging content on a website</div>
                            </a>
                        </div>
                        <div class="services__item">
                            <div class="services__decor"></div>
                            <div class="services__icon">
                                <img src="img/icons-svg/exellence-3.svg" alt="" loading="lazy">
                            </div>
                            <a href="./website-pages/web-development.html">
                                <div class="services__title"><abbr title="Every Web Developer must have a basic understanding of HTML, CSS, and JavaScript. Responsive Web Design is used in all types of modern web development."> Web Development  </abbr></div>
                                <div class="services__text">Every Web Developer must have a basic understanding of HTML, CSS, and JavaScript.</div>
                            </a>
                        </div>
                        <div class="services__item">
                            <div class="services__decor"></div>
                            <div class="services__icon">
                                <img src="img/icons-svg/exellence-4.svg" alt="" loading="lazy">
                            </div>
                            <a href="./website-pages/wordpress-development.html">
                                <div class="services__title"><abbr title="What is WordPress? At its core, WordPress is the simplest, most popular way to create your own website or blog. In fact, WordPress powers over 43.3% of all the websites on the Internet. Yes – more than one in four websites that you visit are likely powered by WordPress."> Wordpress Development </abbr></div>
                                <div class="services__text">What is WordPress? At its core, WordPress is the simplest, most popular way to create your own website or blog.</div>
                            </a>
                        </div>
                    </div> -->
                <!-- </div>
            </div> -->

            <!-- <div class="wrapper"> -->
            <section class="all-content">
<!-- Course section Starts here -->
<h6>Course</h6>
              <section>
              <div id="sub_c_section1" class="sub-c-section">
                    <h2>Digital Marketing</h2>
                    <p>In this digital world, we all want to be a walking digital encyclopedia. Isn’t it? But how many of us have learnt the core digital techniques which help us to be a digital expert in a short time? The answer is only a few of us. Your enrolment in our digital marketing course will enable to encash your knowledge in the future.
                        Make it a mission now and know what you can learn in digital marketing to spread the wings of knowledge in a world which needs you.</p>
                    <div class="card-container">
                        <a href="login.php">
                        <div id="card1" class="cards">
                        <iframe width='230' height='180' src='https://www.youtube.com/embed/MqdPNXRFRXs' title='YouTube video player' allow='accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture' allowfullscreen></iframe>
                            <h3>Video</h3>
                            <p>Ekwik Digital provides best video content for boost up you learning and achieve your goals.</p>
                        </div>
                        </a>
                        <a href="login.php">
                        <div id="card2" class="cards">
                        <object data='./note/EKWIK Digital  BROCHURE (website).pdf' type='application/pdf'></object>
                            <h3>Notes</h3>
                            <p>Ekwik Digital provides best Notes content for clearing your basic knowledge for Advanced courses.</p>
                        </div>
                        </a>
                        <a href="login.php">
                        <div id="card3" class="cards">
                        <iframe width='230' height='180' src='https://www.youtube.com/embed/teyfPTEyqeM' title='YouTube video player' allow='accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture' allowfullscreen></iframe>
                            <h3>Class Recording</h3>
                            <p>Ekwik Digital provides Class recordings so, you don't miss any class and stay up to date.</p>
                        </div>
                        </a>
                        <a href="login.php">
                        <div id="card4" class="cards">
                        <object data='./note/EKWIK Digital  BROCHURE (website).pdf' type='application/pdf'></object>
                            <h3>Books</h3>
                            <p>Ekwik Digital provides best book to study all topics in a Advanced manner for boost up you learning and achieve your goals.</p>
                        </div>
                        </a>
                    </div>
                    <div class="price">
                        <div class="sub-price">
                            <h2>Course Pricing</h2>
                            <p>Rs. 57,999/- + 10,439/- (18% GST) = Rs 68,438/- <br> In 6 Easy Instalments Per Month... <br> 9,666/- + 1,739/- (18% GST) = Rs 60,430/-</p>
                        </div>
                    </div>
                    <div class="tools">
                        <h2>Tools You will Learn ?</h2>
                        <div class="tools-grid">
                            <div class="tools-card">
                            <img src="./img/uploaded/icons8-digital-marketing-128.png" alt="" srcset="">
                                    <p>Digital Marketing Overview</p>
                            </div>
                            <div class="tools-card">
                                 <img src="./img/uploaded/icons8-cms-system-128.png" alt="" srcset="">
                                    <p>CMS Systems</p>
                            </div>
                            <div class="tools-card">
                                 <img src="./img/uploaded/icons8-seo-128.png" alt="" srcset="">
                                    <p>Advanced SEO</p>
                            </div>
                            <div class="tools-card">
                                 <img src="./img/uploaded/icons8-sem-128.png" alt="" srcset="">
                                    <p>Search Engine Marketing</p>
                            </div>
                            <div class="tools-card">
                                 <img src="./img/uploaded/icons8-social-media-marketing-128.png" alt="" srcset="">
                                    <p>Social Media Marketing</p>
                            </div>
                            <div class="tools-card">
                                 <img src="./img/uploaded/icons8-content-marketing-128.png" alt="" srcset="">
                                    <p>Content Marketing</p>
                            </div>
                            <div class="tools-card">
                                 <img src="./img/uploaded/icons8-ecommerce-128.png" alt="" srcset="">
                                    <p>Ecommerce Marketing</p>
                            </div>
                            <div class="tools-card">
                                 <img src="./img/uploaded/icons8-blog-128.png" alt="" srcset="">
                                    <p>Blog Marketing</p>
                            </div>
                            <div class="tools-card">
                                 <img src="./img/uploaded/icons8-google-ads-144.png" alt="" srcset="">
                                    <p>Google Adsense</p>
                            </div>
                            <div class="tools-card">
                                 <img src="./img/uploaded/icons8-affiliate-marketing-128.png" alt="" srcset="">
                                    <p>Affiliates Marketing</p>
                            </div>
                            <div class="tools-card">
                                 <img src="./img/uploaded/icons8-online-payment-with-a-credit-card-150.png" alt="" srcset="">
                                    <p>Make Money Online</p>
                            </div>
                            <div class="tools-card">
                                 <img src="./img/uploaded/icons8-sales-funnel-128.png" alt="" srcset="">
                                    <p>Sales Funnels</p>
                            </div>
                            <div class="tools-card">
                                 <img src="./img/uploaded/icons8-email-marketing-128.png" alt="" srcset="">
                                    <p>Email Marketing</p>
                            </div>
                            <div class="tools-card">
                                 <img src="./img/uploaded/icons8-mobile-marketing-128.png" alt="" srcset="">
                                    <p>Mobile Marketing</p>
                            </div>
                            <div class="tools-card">
                                 <img src="./img/uploaded/icons8-management-128.png" alt="" srcset="">
                                    <p>ORM Marketing</p>
                            </div>
                            <div class="tools-card">
                                 <img src="./img/uploaded/icons8-freelancing-120.png" alt="" srcset="">
                                    <p>Freelancing</p>
                            </div>
                            <div class="tools-card">
                                 <img src="./img/uploaded/icons8-maintenance-200.png" alt="" srcset="">
                                    <p>Digital Marketing Tools</p>
                            </div>
                            <div class="tools-card">
                                 <img src="./img/uploaded/icons8-business-group-200.png" alt="" srcset="">
                                    <p>Business Strategies</p>
                            </div>
                            <div class="tools-card">
                                 <img src="./img/uploaded/icons8-interview-128.png" alt="" srcset="">
                                    <p>Interview Preperation</p>
                            </div>
                            <div class="tools-card">
                                 <img src="./img/uploaded/icons8-certification-128.png" alt="" srcset="">
                                    <p>Certifications</p>
                            </div>
                        </div>
                    </div>
                </div>  
                </section>
<!-- Course section ends here -->

            <section class="modules">
                <h2>Covers 45+ Modules in Advanced Digital Marketing Program </h2>
                <div class="modules-container">
                    <div class="all-modules">
                        <ul>
                            <li> <i class="fa-solid fa-medal"></i> Digital Marketing Overview </li>
                            <li> <i class="fa-solid fa-medal"></i> Website Structure </li>
                            <li> <i class="fa-solid fa-medal"></i> Domain and Hosting </li>
                            <li> <i class="fa-solid fa-medal"></i> HTML Website Creation </li>
                            <li> <i class="fa-solid fa-medal"></i> Word Press Website Creation </li>
                            <li> <i class="fa-solid fa-medal"></i> Google Algorithms </li>
                            <li> <i class="fa-solid fa-medal"></i> Keywords Research & Planning </li>
                            <li> <i class="fa-solid fa-medal"></i> Advanced SEO Course </li>
                            <li> <i class="fa-solid fa-medal"></i> Top SEO Tools and Uses </li>
                            <li> <i class="fa-solid fa-medal"></i> Advanced SMO Course </li>
                            <li> <i class="fa-solid fa-medal"></i> Facebook Marketing </li>
                            <li> <i class="fa-solid fa-medal"></i> Instagram Marketing </li>
                        </ul>
                    </div>
                    <div class="all-modules">
                        <ul>
                            <li> <i class="fa-solid fa-medal"></i> Quora Marketing </li>
                            <li> <i class="fa-solid fa-medal"></i> PPC with Google Ads </li>
                            <li> <i class="fa-solid fa-medal"></i> Search Advertising </li>
                            <li> <i class="fa-solid fa-medal"></i> Display Advertising </li>
                            <li> <i class="fa-solid fa-medal"></i> Video Advertising </li>
                            <li> <i class="fa-solid fa-medal"></i> App Advertising </li>
                            <li> <i class="fa-solid fa-medal"></i> Shopping Advertising </li>
                            <li> <i class="fa-solid fa-medal"></i> Dynamic Remarketing Ads </li>
                            <li> <i class="fa-solid fa-medal"></i> PPC with Bing ads </li>
                            <li> <i class="fa-solid fa-medal"></i> PPC with Yahoo ads </li>
                            <li> <i class="fa-solid fa-medal"></i> YouTube Marketing </li>
                            <li> <i class="fa-solid fa-medal"></i> Mobile Marketing </li>
                            
                        </ul>
                    </div>
                    <div class="all-modules">
                        <ul>
                            <li> <i class="fa-solid fa-medal"></i> Google Search Console </li>
                            <li> <i class="fa-solid fa-medal"></i> Bing Webmaster Tool </li>
                            <li> <i class="fa-solid fa-medal"></i> Google Ad Sense </li>
                            <li> <i class="fa-solid fa-medal"></i> Google Map Creation </li>
                            <li> <i class="fa-solid fa-medal"></i> Bing Map Creation </li>
                            <li> <i class="fa-solid fa-medal"></i> ORM Techniques </li>
                            <li> <i class="fa-solid fa-medal"></i> E-mail Marketing </li>
                            <li> <i class="fa-solid fa-medal"></i> SMS/WhatsApp Marketing </li>
                            <li> <i class="fa-solid fa-medal"></i> Content Marketing </li>
                            <li> <i class="fa-solid fa-medal"></i> Ecommerce Marketing </li>
                            <li> <i class="fa-solid fa-medal"></i> Influencer Marketing </li>
                            <li> <i class="fa-solid fa-medal"></i> Canva Editing </li>
                            
                        </ul>
                    </div>
                    <div class="all-modules">
                        <ul>
                        <li> <i class="fa-solid fa-medal"></i> LinkedIn Marketing </li>
                            <li> <i class="fa-solid fa-medal"></i> Twitter Marketing </li>
                            <li> <i class="fa-solid fa-medal"></i> Viral Marketing </li>
                            <li> <i class="fa-solid fa-medal"></i> True Caller Marketing </li>
                            <li> <i class="fa-solid fa-medal"></i> Marketing Place Selling </li>
                            <li> <i class="fa-solid fa-medal"></i> Blogging </li>
                            <li> <i class="fa-solid fa-medal"></i> Online Earning Secretes </li>
                            <li> <i class="fa-solid fa-medal"></i> Interview Preparation </li>
                            <li> <i class="fa-solid fa-medal"></i> Inbound Marketing </li>
                            <li> <i class="fa-solid fa-medal"></i> Leads and Traffic Generation </li>
                            <li> <i class="fa-solid fa-medal"></i> Affiliate Marketing </li>
                            <li> <i class="fa-solid fa-medal"></i> Google Analytics </li>
                        </ul>
                    </div>
                </div>
            </section>
            <div class="d-bro">
                <a href="#formOrder2" class="btn btn_started js-fancybox">Download Brochure</a>
            </div>
            <section class="career-container">
                <h2>Perks of Ekwik Digital</h2>
                <p>Do you lack the skills you need to move ahead? Now, you can become a digital marketing specialist without leaving your job. Boost your career with the Delhi Institute of Digital Marketing. A place to learn digital marketing from Executive
                    Level to Manager Level in all practical ways. The high demand for a digital marketing course is best suited for working professionals, job seekers, freelancers, students, and entrepreneurs.</p>
                <div class="career">
                    <div class="ca">
                        <img src="./img/new/1.png" alt="" srcset="">
                        <p>100% Placement Asssistance</p>
                    </div>
                    <div class="ca">
                        <img src="./img/new/2.png" alt="" srcset="">
                        <p>Focus On Practical Learning</p> 
                    </div>
                    <div class="ca">
                        <img src="./img/new/3.png" alt="" srcset="">
                        <p>Experienced Trainers</p>
                    </div>
                    <div class="ca">
                        <img src="./img/new/4.png" alt="" srcset="">
                        <p>High Quality Training</p>
                    </div>
                    <div class="ca">
                        <img src="./img/new/5.png" alt="" srcset="">
                        <p>Free Doubt Clearing Session</p>
                    </div>
                    <div class="ca">
                        <img src="./img/new/6.png" alt="" srcset="">
                        <p>Free Backup Session</p>
                    </div>
                    <div class="ca">
                        <img src="./img/new/7.png" alt="" srcset="">
                        <p>100+ Placement Partner</p>
                    </div>
                    <div class="ca">
                        <img src="./img/new/8.png" alt="" srcset="">
                        <p>Freelance & Live Projects</p>
                    </div>
                    <div class="ca">
                        <img src="./img/new/9.png" alt="" srcset="">
                        <p>Proven Track Record</p>
                    </div>
                    <div class="ca">
                        <img src="./img/new/10.png" alt="" srcset="">
                        <p>Internship Offers In Companies</p>
                    </div>
                    <div class="ca">
                        <img src="./img/new/11.png" alt="" srcset="">
                        <p>24x7 Customer Support</p>
                    </div>
                    <div class="ca">
                        <img src="./img/new/12.png" alt="" srcset="">
                        <p>Google Certification</p>
                    </div>
                </div>
            </section>
            <div class="section-about" id="about">
                <div class="wrapper">
                    <div class="about">
                        <div class="about__img">
                            <div class="about__picture">
                                <img data-src="img/way.svg" alt="" class="js-lazy" src="data:image/gif;base64,R0lGODlhAQABAAAAACw=">
                            </div>
                        </div>
                        <div class="about__content">
                            <div class="section-heading"><span>the history</span></div>
                            <div class="h2">Our way to succesful future</div>
                            <div class="section-subtitle">Ekwik Digital is a Digital Marketing training institute registered under ISO:9001 & MSME. It is one of the leading and best digital marketing training institutes in Delhi, India. </div>
                           
                            <div class="content-block__text">
                                <p>Do you want to explore career opportunities and secure your future through online promotion  with Digital Marketing Training Institute in Laxmi Nagar Delhi? Are you concerned about your career that you simply aren’t getting desired job with good salary? If your answer is affirmative, you’re at the right place. Learn Advanced SEO, SMO, PPC Course from Best Digital Marketing Training Institute in Laxmi Nagar Delhi, India and become an expert in the industry.
                                    Ekwik Classes provides you 100% practical based classes of Digital Marketing Modules which includes SEO Course , SMO Course, PPC Course, Affiliate marketing course up to 45+ Modules in Basic to Advanced educational program . Get 12+ certificates in 3 months course duration and 1 months internship.
                                </p></div>
                            <a href="https://youtu.be/teyfPTEyqeM" class="about__btn play-video js-fancybox">
                                <span class="play-icon">
                                    <i class="icon-play"></i>
                                    </span>
                                <div class="play-video__text">
                                    <div class="play-video__title">about us</div>
                                    <div class="play-video__link">Watch our process!</div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="about-details">
                        <div class="about-details__item">
                            <div class="about-details__val">1000<span class="about-details__val_plus">+</span></div>
                            <div class="about-details__text">Students</div>
                            <div class="about-details__decor"></div>
                        </div>
                        <div class="about-details__item">
                            <div class="about-details__val">10<span class="about-details__val_plus">+</span></div>
                            <div class="about-details__text">Regular Batches</div>
                            <div class="about-details__decor"></div>
                        </div>
                        <div class="about-details__item">
                            <div class="about-details__val">100<span class="about-details__val_plus">+</span></div>
                            <div class="about-details__text">Placement Agencies</div>
                            <div class="about-details__decor"></div>
                        </div>
                        <div class="about-details__item">
                            <div class="about-details__val">100<span class="about-details__val_plus">%</span></div>
                            <div class="about-details__text">Job Assistance</div>
                            <div class="about-details__decor"></div>
                        </div>
                    </div>
                </div>
                <div class="about-decor about-decor_1"></div>
                <div class="about-decor about-decor_2"></div>
                <div class="about-decor about-decor_3"></div>
            </div>
            <div class="section-get">
                <div class="wrapper">
                    <div class="section-heading h-center"><span>what we do</span></div>
                    <div class="h-decor-1">
                        <h2 class="h2 h-center"><span>what you will get with us</span></h2>
                        <div class="section-subtitle h-center">Benefits with Ekwik Digital.</div>
                    </div>
                    <div class="get-list">
                        <div class="get-list__item">
                            <div class="get-list__heading">
                                <div class="get-list__icon">
                                    <img src="img/icons-svg/get-1.svg" alt="" loading="lazy">
                                </div>
                                <div class="get-list__title"> Latest 45+ modules</div>
                            </div>
                        </div>
                        <div class="get-list__item">
                            <div class="get-list__heading">
                                <div class="get-list__icon">
                                    <img src="img/icons-svg/get-2.svg" alt="" loading="lazy">
                                </div>
                                <div class="get-list__title">30+ Tools </div>
                            </div>
                        </div>
                        <div class="get-list__item">
                            <div class="get-list__heading">
                                <div class="get-list__icon">
                                    <img src="img/icons-svg/get-3.svg" alt="" loading="lazy">
                                </div>
                                <div class="get-list__title">12 International Certifications </div>
                            </div>
                        </div>
                        <div class="get-list__item">
                            <div class="get-list__heading">
                                <div class="get-list__icon">
                                    <img src="img/icons-svg/get-4.svg" alt="" loading="lazy">
                                </div>
                                <div class="get-list__title">1 Month free Internship</div>
                            </div>
                        </div>
                        <div class="get-list__item">
                            <div class="get-list__heading">
                                <div class="get-list__icon">
                                    <img src="img/icons-svg/get-5.svg" alt="" loading="lazy">
                                </div>
                                <div class="get-list__title">3+ Certified Certifications</div>
                            </div>
                        </div>
                        <div class="get-list__item">
                            <div class="get-list__heading">
                                <div class="get-list__icon">
                                    <img src="img/icons-svg/get-6.svg" alt="" loading="lazy">
                                </div>
                                <div class="get-list__title">Live Project Training</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>       
            <!-- <div class="section-consultation">
                <div class="section-consultation__bg js-lazy" data-src="img/bg/bg-2.svg"></div>
                <div class="wrapper">
                    <div class="consultation-form-wrap">
                        <div class="consultation-form">
                            <div class="section-heading"><span>get started</span></div>
                            <h2 class="h2">get a free consultation</h2>
                            <div class="content-block__text">
                                <p>Get A Free Counselling Session to know more about in Your future in Digital Marketing.</p>
                            </div>
                            <div class="consultation-form__form">
                                <form action="" method="POST">
                                    <div class="box-fileds">
                                        <div class="box-filed">
                                            <input type="text" placeholder="First name" name="name" required>
                                        </div>
                                        <div class="box-filed">
                                            <input type="text" placeholder="Second name" name="surname" required>
                                        </div>
                                        <div class="box-filed">
                                            <input type="tel" placeholder="Enter your phone" name="phoneno" maxlength="10" minlength="10" required>
                                        </div>
                                        <div class="box-filed">
                                            <input type="email" placeholder="Enter your email" name="email" maxlength="40" required>
                                        </div>
                                        <div class="box-filed box-filed_btn">
                                            <input type="submit" class="btn" value="Submit">
                                        </div>
                                        <div class="box-filed box-field__accept">
                                            <label class="checkbox-element">
                                                <input type="checkbox" >
                                                <span class="checkbox-text">I accept the <a href="#" target="_blank">Terms and Conditions.</a></span>
                                                </label>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="consultation-img">
                            <img data-src="img/consultation.svg" alt="" class="js-lazy" src="data:image/gif;base64,R0lGODlhAQABAAAAACw=">
                        </div>
                    </div>
                </div>
            </div> -->
            <div class="section-logos">
                <div class="wrapper">
                    <div class="logos">
                        <a href="#" target="_blank" class="logos__item" id="f" >
                        </a>
                        <a href="#" target="_blank" class="logos__item" id="g">
                        </a>
                        <a href="#" target="_blank" class="logos__item" id="c">
                        </a>
                        <a href="#" target="_blank" class="logos__item" id="h">
                        </a>
                        <a href="#" target="_blank" class="logos__item" id="w">
                        </a>
                    </div>
                </div>
            </div>
            <div class="section-steps" id="steps">
                <div class="wrapper">
                    <div class="section-heading h-center"><span>steps</span></div>
                    <div class="h-decor-3">
                        <h2 class="h2 h-center"><span>main milestones</span></h2>
                    </div>
                    <div class="steps">
                        <div class="steps__item">
                            <span class="steps__count">01</span>
                            <div class="steps__icon">
                                <img data-src="img/icons-svg/step-1.svg" alt="" loading="lazy" class="js-lazy" src="data:image/gif;base64,R0lGODlhAQABAAAAACw=">
                            </div>
                            <div class="steps__title">Planning</div>
                        </div>
                        <div class="steps__item">
                            <span class="steps__count">02</span>
                            <div class="steps__icon">
                                <img data-src="img/icons-svg/step-2.svg" alt="" loading="lazy" class="js-lazy" src="data:image/gif;base64,R0lGODlhAQABAAAAACw=">
                            </div>
                            <div class="steps__title">Research</div>
                        </div>
                        <div class="steps__item">
                            <span class="steps__count">03</span>
                            <div class="steps__icon">
                                <img data-src="img/icons-svg/step-3.svg" alt="" loading="lazy" class="js-lazy" src="data:image/gif;base64,R0lGODlhAQABAAAAACw=">
                            </div>
                            <div class="steps__title">Optimization</div>
                        </div>
                        <div class="steps__item">
                            <span class="steps__count">04</span>
                            <div class="steps__icon">
                                <img data-src="img/icons-svg/step-4.svg" alt="" loading="lazy" class="js-lazy" src="data:image/gif;base64,R0lGODlhAQABAAAAACw=">
                            </div>
                            <div class="steps__title">Results</div>
                        </div>
                    </div>
                    <!-- <div class="steps-text">Pariatur magna cupidatat magna sit incididunt non pariatur. Sint nulla commodo qui magna eiusmod quis aliqua laboris officia excepteur non eu in. Consequat esse in dolore laborum dolore ut duis elit deserunt minim.</div> -->
                </div>
            </div>       
            <!-- <div class="section-prices" id="price">
                <div class="wrapper">
                    <div class="section-heading h-center"><span>prices</span></div>
                    <div class="h-decor-2">
                        <h2 class="h2 h-center"><span>discover our price - list</span></h2>
                        <div class="section-subtitle h-center">Dolor duis voluptate enim exercitation consequat ex.</div>
                    </div>
                    <div class="prices">
                        <a href="#" class="prices__item">
                            <div class="prices__head">
                                <div class="prices__decor"><span></span></div>
                                <div class="prices__inner">
                                    <div class="prices__category">Master</div>
                                    <div class="prices__title">Basic Plan</div>
                                    <div class="prices__cost">INR<span class="prices__cost-val">35000</span>only</div>
                                </div>
                            </div>
                            <div class="prices__content">
                                <ul class="prices__list">
                                    <li> <i class="fa-solid fa-check"></i> 45+ Modules (500+ Hrs Training) </li>
                                    <li> <i class="fa-solid fa-check"></i> E-Notes </li>
                                    <li> <i class="fa-solid fa-check"></i> Internship / Placement </li>
                                    <li> <i class="fa-solid fa-check"></i> Iive Project </li>
                                    <li> <i class="fa-solid fa-check"></i> 10+ Globally Recognised (Certifications) </li>
                                    <li> <i class="fa-solid fa-check"></i> Live Q/A Forum </li>
                                    <li> <i class="fa-solid fa-check"></i> Experience Certification </li>
                                    <li> <i class="fa-solid fa-check"></i> On Board Training (2 Months) </li>
                                    <li> <i class="fa-solid fa-check"></i> WordPress Theme Membership </li>
                                    <li> <i class="fa-solid fa-check"></i> Tools & Software </li>
                                    <li> <i class="fa-solid fa-check"></i> LMS Recorded </li>
                                    <li> <i class="fa-solid fa-check"></i> E-Books </li>
                                    <li> <i class="fa-solid fa-check"></i> Case Studies & Capstone Projects </li>
                                    <li> <i class="fa-solid fa-check"></i> Graphic Design Course <br> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(Elementary Module) </li>
                                    <li> <i class="fa-solid fa-check"></i> Creative Content Writing <br> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(Fundamentals Module) </li>
                                    <li> <i class="fa-solid fa-check"></i> NSDC ( Skill India ) Certification </li>
                                </ul>
                                <div class="prices__btn">
                                    <span class="btn btn-2 btn-3 btn_buy">buy now</span>
                                </div>
                            </div>
                        </a>
                        <a href="#" class="prices__item prices__item-recomendation">
                            <div class="prices__head">
                                <div class="prices__decor"><span></span></div>
                                <div class="prices__inner">
                                    <div class="prices__category">Advanced</div>
                                    <div class="prices__title">Standard Plan</div>
                                    <div class="prices__cost">INR<span class="prices__cost-val">25000</span> Only</div>
                                </div>
                            </div>
                            <div class="prices__content">
                                <ul class="prices__list">
                                    <li> <i class="fa-solid fa-check"></i> 45+ Modules (500+ Hrs Training) </li>
                                    <li> <i class="fa-solid fa-check"></i> E-Notes </li>
                                    <li> <i class="fa-solid fa-check"></i> Internship / Placement </li>
                                    <li> <i class="fa-solid fa-check"></i> Tools & Software </li>
                                    <li> <i class="fa-solid fa-check"></i> Case Studies & Capstone Projects </li>
                                    <li> <i class="fa-solid fa-check"></i> Graphic Design Course <br> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(Elementary Module) </li>
                                    <li> <i class="fa-solid fa-check"></i> Creative Content Writing <br> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(Fundamentals Module) </li>
                                    <li> <i class="fa-solid fa-xmark"></i> NSDC ( Skill India ) Certification </li>
                                    <li> <i class="fa-solid fa-xmark"></i> Live Project </li>
                                    <li> <i class="fa-solid fa-xmark"></i> 10+ Globally Recognised (Certifications) </li>
                                    <li> <i class="fa-solid fa-xmark"></i> LMS Recorded </li>
                                    <li> <i class="fa-solid fa-xmark"></i> E-Books </li>
                                    <li> <i class="fa-solid fa-xmark"></i> Live Q/A Forum </li>
                                    <li> <i class="fa-solid fa-xmark"></i> Experience Certification </li>
                                    <li> <i class="fa-solid fa-xmark"></i> On Board Training (2 Months) </li>
                                    <li> <i class="fa-solid fa-xmark"></i> WordPress Theme Membership </li>
                                </ul>
                                <div class="prices__btn">
                                    <span class="btn btn-2 btn-3 btn_buy">buy now</span>
                                </div>
                                <div class="prices__rec">
                                    <div class="checkbox-element ">
                                        <span class="checkbox-text">Recommended</span>
                                    </div>
                                </div>
                            </div>
                        </a>
                        <a href="#" class="prices__item">
                            <div class="prices__head">
                                <div class="prices__decor"><span></span></div>
                                <div class="prices__inner">
                                    <div class="prices__category">Customized</div>
                                    <div class="prices__title">power Plan</div>
                                    <div class="prices__cost">INR<span class="prices__cost-val">15000</span>only</div>
                                </div>
                            </div>
                            <div class="prices__content">
                                <ul class="prices__list">
                                    <li> <i class="fa-solid fa-check"></i> 45+ Modules (500+ Hrs Training) </li>
                                    <li> <i class="fa-solid fa-check"></i> E-Notes </li>
                                    <li> <i class="fa-solid fa-check"></i> Internship / Placement </li>
                                    <li> <i class="fa-solid fa-check"></i> Iive Project </li>
                                    <li> <i class="fa-solid fa-check"></i> 10+ Globally Recognised (Certifications) </li>
                                    <li> <i class="fa-solid fa-xmark"></i> Case Studies & Capstone Projects </li>
                                    <li> <i class="fa-solid fa-xmark"></i> Live Q/A Forum </li>
                                    <li> <i class="fa-solid fa-xmark"></i> Experience Certification </li>
                                    <li> <i class="fa-solid fa-xmark"></i> On Board Training (2 Months) </li>
                                    <li> <i class="fa-solid fa-xmark"></i> WordPress Theme Membership </li>
                                    <li> <i class="fa-solid fa-xmark"></i> Tools & Software </li>
                                    <li> <i class="fa-solid fa-xmark"></i> LMS Recorded </li>
                                    <li> <i class="fa-solid fa-xmark"></i> E-Books </li>
                                    <li> <i class="fa-solid fa-xmark"></i> Graphic Design Course <br> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(Elementary Module) </li>
                                    <li> <i class="fa-solid fa-xmark"></i> Creative Content Writing <br> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(Fundamentals Module) </li>
                                    <li> <i class="fa-solid fa-xmark"></i> NSDC ( Skill India ) Certification </li>
                                </ul>
                                <div class="prices__btn">
                                    <span class="btn btn-2 btn-3 btn_buy">buy now</span>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div> -->

<section class="qu">
    <h2>Top Queries For Institute</h2>
    <p>Top Queries asked by our students.</p>
    <div class="q-flex">
        <div class="question">
            <h3><i class="fa-solid fa-person-circle-question"></i> In Case Of Missed Classes.</h3>
            <p>You can cover the topics in next class or in upcoming batches at 0 cost.</p>
        </div>
        <div class="question">
            <h3><i class="fa-solid fa-person-circle-question"></i> If I could not Understand The Topic?</h3>
            <p>You can take extra time for that during or after class.</p>
        </div>
        <div class="question">
            <h3><i class="fa-solid fa-person-circle-question"></i> What About Placements?</h3>
            <p>We provide 100% placement assistance. However it's upto you to clear the interview.</p>
        </div>
        <div class="question">
            <h3><i class="fa-solid fa-person-circle-question"></i> How Much Salary I Can Expect?</h3>
            <p>It's upto the course or feild you have selected. But at Intial stage you can expect somewhere around 10-15K/Mon.</p>
        </div>
        <div class="question">
            <h3><i class="fa-solid fa-person-circle-question"></i> Eligibility Critirea of Joining Delhi Courses.</h3>
            <p>If You've sucessfully completed 12th, you can join us. and incase of faluires you can call us.</p>
        </div>
        <div class="question">
            <h3><i class="fa-solid fa-person-circle-question"></i> Do You Provide Training Material?</h3>
            <p>Yes, we do provide training material in form of soft copies.</p>
        </div>
        <div class="question">
            <h3><i class="fa-solid fa-person-circle-question"></i> Do You Provide Online Training Also?</h3>
            <p>Yes, we do provide online training sessions. But you have to pay extra 35% of the course fee for online trainng sessions.</p>
        </div>
        <div class="question">
            <h3><i class="fa-solid fa-person-circle-question"></i> If You're a Working Professional or Business Owner</h3>
            <p>Our timings are flexible, so you need not to be worried about that. You can join us as per your convinience. however, you have to disscuss the time with our faculty.</p>
        </div>
        <div class="question">
            <h3><i class="fa-solid fa-person-circle-question"></i> I'm Impressed, Where is Your Institute Located?</h3>
            <p>Thanks for Showing interest. We're in East Delhi. Our institutes are situated in delhi-NCR. For complete Address Click Here.</p>
        </div>
    </div>



</section>

            <div class="section-newsletter">
                <div class="section-newsletter__bg js-lazy" data-src="img/bg/bg-3.svg"></div>
                <div class="wrapper">
                    <div class="newsletter">
                        <div class="newsletter__content">
                            <h3 class="h3">Newsletter</h3>
                            <div class="newsletter__text">
                                <p>Subscribe For Newsletter.</p>
                            </div>
                            <form method="POST" action="">
                                <div class="box-fileds-newsletter">
                                    <div class="box-filed box-filed_1">
                                        <input type="email" placeholder="Enter your email" id="newsletter" name="newsletter" required>
                                    </div>
                                    <div class="box-filed box-filed_submit">
                                        <input type="submit" class="btn" value="Subscribe">
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="newsletter__img">
                            <div class="newsletter__picture">
                                <img data-src="img/newsletter.svg" alt="" class="js-lazy" src="data:image/gif;base64,R0lGODlhAQABAAAAACw=">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="section-testimonials" id="testimonials">
                <div class="wrapper">
                    <div class="testimonials">
                        <div class="testimonials__img">
                            <div class="testimonials__picture">
                                <img data-src="img/testimonials.svg" alt="" class="js-lazy" src="data:image/gif;base64,R0lGODlhAQABAAAAACw=">
                            </div>
                        </div>
                        <div class="testimonials__content">
                            <div class="section-heading"><span>they say</span></div>
                            <div class="h2">Testimonials</div>
                            <div class="swiper-container reviews-slider js-slider-1">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide testimonials-card">
                                        <div class="testimonials-card__text">
                                            <p>“I run a small printing company and needed a local SEO service. Hence, I contacted Mr. Durgesh, who helped me meet my goals. I'm currently delighted with the service I got and paid for. If you also need an affordable marketing service, I suggest Ekwik Digital..”</p>
                                        </div>
                                        <div class="author">
                                            <!-- <img class="author__img js-lazy" data-src="img/examples/avatar_1.jpg" src="data:image/gif;base64,R0lGODlhAQABAAAAACw=" alt=""> -->
                                            <div class="author__details">
                                                <div class="author__title">Parvati Rao</div>
                                                <!-- <div class="author__position">Marketing Coordinator</div> -->
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide testimonials-card">
                                        <div class="testimonials-card__text">
                                            <p>“It has professional and experienced digital marketers. They know how to deal with a variety of technical and search errors..”</p>
                                        </div>
                                        <div class="author">
                                            <!-- <img class="author__img js-lazy" data-src="img/examples/avatar_1.jpg" src="data:image/gif;base64,R0lGODlhAQABAAAAACw=" alt=""> -->
                                            <div class="author__details">
                                                <div class="author__title">Praveena Narang</div>
                                                <!-- <div class="author__position">Marketing Coord</div> -->
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide testimonials-card">
                                        <div class="testimonials-card__text">
                                            <p>“I have excellent experience with Ekwik Digital; its team designed my eCommerce website. Now it looks fantastic, and also it loads faster than ever. Also, because of Ekwik's service, our website gets high engagement with visitors...”</p>
                                        </div>
                                        <div class="author">
                                            <!-- <img class="author__img js-lazy" data-src="img/examples/avatar_1.jpg" src="data:image/gif;base64,R0lGODlhAQABAAAAACw=" alt=""> -->
                                            <div class="author__details">
                                                <div class="author__title">Chetana D'Cruze</div>
                                                <!-- <div class="author__position">Marketing Coord</div> -->
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide testimonials-card">
                                        <div class="testimonials-card__text">
                                            <p>“Ekwik Digital is the best place for freshers to work and gain experience. The work culture here is fantastic and pleasant. You will love to work here and get different projects to work on...”</p>
                                        </div>
                                        <div class="author">
                                            <!-- <img class="author__img js-lazy" data-src="img/examples/avatar_1.jpg" src="data:image/gif;base64,R0lGODlhAQABAAAAACw=" alt=""> -->
                                            <div class="author__details">
                                                <div class="author__title">Shivani Tamboli</div>
                                                <!-- <div class="author__position">Marketing Coord</div> -->
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide testimonials-card">
                                        <div class="testimonials-card__text">
                                            <p>“I took an SEO service from this marketing agency. And within a couple of weeks, I got the first lead for my business. Now every month, we get excellent leads and convert them; hence we recommend Ekwik's digital marketing services....”</p>
                                        </div>
                                        <div class="author">
                                            <!-- <img class="author__img js-lazy" data-src="img/examples/avatar_1.jpg" src="data:image/gif;base64,R0lGODlhAQABAAAAACw=" alt=""> -->
                                            <div class="author__details">
                                                <div class="author__title">Ramesh</div>
                                                <!-- <div class="author__position">Marketing Coord</div> -->
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide testimonials-card">
                                        <div class="testimonials-card__text">
                                            <p>“Ekwik Digital is the best place for marketers. Here we do not get forced instead of getting polite instructions and motivations. Founders are excellent; they will support you when you work here....”</p>
                                        </div>
                                        <div class="author">
                                            <!-- <img class="author__img js-lazy" data-src="img/examples/avatar_1.jpg" src="data:image/gif;base64,R0lGODlhAQABAAAAACw=" alt=""> -->
                                            <div class="author__details">
                                                <div class="author__title">Naveen Chaudhari</div>
                                                <!-- <div class="author__position">Marketing Coord</div> -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

                 
<!-- About section  -->

<h6>About US</h6>
<section class="about">

                    <section class="a-content">
                        <div class="a-sub-content a-img"></div>
                        <div class="a-sub-content">
                            <p>In the modern world, corporate and industrial Practices have changed considerably. We did thorough market research on the education industry and found that there is a low-quality education available and high fee structure. This forced us to get into the education system where we can offer education at an economical cost and provide employment opportunities as soon as students complete these vocational courses. We believe in the highest quality teaching to deliver our professional programs that shape the career of the young generation by providing them employment opportunities. Due to the constant transformation, there is a need for continuous development in the education industry. We make sure that our students learn and work best in the business environments and deliver efficient results irrespective of change in challenging business environments. Our trainers are expert in making the learners result-oriented, decisive, flexible, and ethical managers.</p>
                        </div>
                    </section>


                    <div id="courses" class="services">
                        <div class="services__item">
                            <div class="services__decor"></div>
                            <div class="services__icon">
                                <img src="img/icons-svg/exellence-1.svg" alt="" loading="lazy">
                            </div>
                            <a href="./website-pages/digital-marketing.html">
                                <div class="services__title"> Our Vision </div>
                                <div class="services__text">To be a leader in the integration of teaching and advancement of the knowledge base that accentuates the career path of students for better opportunities.</div>
                            </a>
                        </div>
                        <div class="services__item">
                            <div class="services__decor"></div>
                            <div class="services__icon">
                                <img src="img/icons-svg/exellence-2.svg" alt="" loading="lazy">
                            </div>
                            <a href="./website-pages/web-designing.html">
                                <div class="services__title">Our Mission</div>
                                <div class="services__text">To deepen and extend knowledge among learners so they can grow with complete utilization of education skills.</div>
                            </a>
                        </div>
                        <div class="services__item">
                            <div class="services__decor"></div>
                            <div class="services__icon">
                                <img src="img/icons-svg/exellence-3.svg" alt="" loading="lazy">
                            </div>
                            <a href="./website-pages/web-development.html">
                                <div class="services__title"> Our Goals</div>
                                <div class="services__text">Doubts slow us down. So, we impart quality education and teaching that leaves no room for doubts.</div>
                            </a>
                        </div>
                        <div class="services__item">
                            <div class="services__decor"></div>
                            <div class="services__icon">
                                <img src="img/icons-svg/exellence-3.svg" alt="" loading="lazy">
                            </div>
                            <a href="./website-pages/web-development.html">
                                <div class="services__title"> Our Goals</div>
                                <div class="services__text">Doubts slow us down. So, we impart quality education and teaching that leaves no room for doubts.</div>
                            </a>
                        </div>
                        <h1 style="text-align: center;">Director Message</h1>
                        <section class="a-content">
                            <div class="a-sub-content">
                                <p>In the modern world, corporate and industrial practices have changed considerably. Due to the constant transformation, there is a need for continuous development in the education industry. We make sure that our students learn and work best in the business environments and deliver efficient results irrespective of change in challenging business environments. Our trainers are expert in making the learners result-oriented, decisive, flexible, and ethical managers. We are committed to providing cost-effective and high-quality education in the field of Marketing and Technology. We align with the requirements of the global market and make sure that the right set of knowledge, skills, talents, and attitudes is the key to meet the opportunities available worldwide.
                                    We want to expose our learners to the dynamics of corporate culture and teach them the latest skills that have competitive advantages. At Ekwik Digital, we extend our support to the young generation with customized efforts to nurture their talents and abilities which help in bridging the gap between the Indian and Global markets.
                                    We want to shape the winning personas in the young generation so they can contribute the best into society. This is only possible by developing a passion for learning.</p>
                            </div>
                            <div class="a-sub-content a-img"></div>
                        </section>
                    </div>

                    </section>

<!-- Contact section  -->

<h6>Contact US</h6>                

  <section class="about">
        <section class="contact-container">
            <div class="contact-sub-container">
                <h1> Ekwik Classes </h1>
                <p> So, are you ready to get web development, marketing, and SEO services in India? </p>
                <h1> Contact us </h1> 
                <p>  <i class="fas fa-blender-phone"></i> Office no </p>  
                <p> 011-42175423 </p> 
                <p> <i class="fas fa-mobile-alt"></i> Mobile no </p>  
                <p> +91 9717666076 </p>
                <p>  <i class="fas fa-envelope"></i> Email </p>  
                <p> hello@ekwikdigital.com  </p>
                <h1> Address </h1>
                <p> A-20, First Floor, Guru Nanak Pura, Street No. 3, Laxmi Nagar, Delhi – 110092, Landmark – In Front Of V3s Mall  </p>
            </div>
            <div class="contact-sub-container ">
                <form class="cuc" action="" method="post">
                    <label for="name">Name</label>
                    <input type="text" name="name" id="name" required >
                    <label for="">Email</label>
                    <input type="email" name="email" id="email" required>
                    <label for="">Contact Number</label>
                    <input type="tel" name="phone" id="phone" maxlength="10" minlength="10" required>
                    <label for="message">Short Message</label>
                    <textarea name="message" id="message" cols="30" rows="10"></textarea>
                    <button type="submit" class="btn">Submit</button>
                </form>
            </div>
        </section>
    </div>
</section>



                    <div class="about">
                    <iframe id="google-map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4139.671128948162!2d77.28249300892676!3d28.636323180071926!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390ce3b6a48a38d9%3A0x9f0dae49642f744a!2sEkwik%20Digital!5e0!3m2!1sen!2sin!4v1634535783091!5m2!1sen!2sin" width="100%" height="500px"  style="border-radius:20px;" allowfullscreen="" loading="lazy"></iframe>
                        </div>
                    </div>
 
            <!-- <div class="section-main-blog" id="blog">
                <div class="wrapper">
                    <div class="section-heading h-center"><span>news</span></div>
                    <h2 class="h2 h-center">read our blog</h2>
                    <div class="section-subtitle h-center">Dolor duis voluptate enim exercitation consequat ex. </div>
                    <div class="blog-more">
                        <a href="./blog.php" class="btn">view all</a>
                    </div>
                    <div class="news">
                        <div class="news__item">
                            <a href="./article.php" class="news__img">
                                <img data-src="img/examples/news_1.jpg" alt="" class="js-lazy" src="data:image/gif;base64,R0lGODlhAQABAAAAACw=">
                            </a>
                            <div class="news__content">
                                <div class="news-header">
                                    <div class="news__date">Jun 25, 2021</div>
                                    <div class="news__author">
                                        <img data-src="img/examples/avatar_2.jpg" alt="" class="js-lazy" src="data:image/gif;base64,R0lGODlhAQABAAAAACw=">
                                        <span class="news__author-title">Annette Black</span>
                                    </div>
                                    <a href="./blog.php" class="news__category">Community</a>
                                </div>
                                <div class="news__title"><a href="./article.php">Dolor duis voluptate enim exercitation consequat ex. Voluptate in sunt </a></div>
                            </div>
                        </div>
                        <div class="news__item">
                            <a href="./article.php" class="news__img">
                                <img data-src="img/examples/news_2.jpg" alt="" class="js-lazy" src="data:image/gif;base64,R0lGODlhAQABAAAAACw=">
                            </a>
                            <div class="news__content">
                                <div class="news-header">
                                    <div class="news__date">Jun 25, 2021</div>
                                    <div class="news__author">
                                        <img data-src="img/examples/avatar_3.jpg" alt="" class="js-lazy" src="data:image/gif;base64,R0lGODlhAQABAAAAACw=">
                                        <span class="news__author-title">Dianne Russell</span>
                                    </div>
                                    <a href="./blog.php" class="news__category">Community</a>
                                </div>
                                <div class="news__title"><a href="./article.php">Dolor duis voluptate enim exercitation consequat ex. Voluptate in sunt </a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> -->
            </section>
           
            
        </main>
        <?php
            include("./include/header.php");
        ?>
    <link rel="stylesheet" type="text/css" href="css/style.css" />
    <script src="js/jquery-3.5.1.min.js" defer></script>
    <script src="js/components/jquery.lazy.min.js" defer></script>
    <script src="js/components/jquery.fancybox.min.js" defer></script>
    <script src="js/components/jquery.singlePageNav.min.js" defer></script>
    <script src="js/components/swiper.js" defer></script>
    <script src="js/custom.js" defer></script>
</body>


</html>
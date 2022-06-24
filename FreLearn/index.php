<?php 
    include_once 'connect/connect.php';
    session_start();
    if(isset($_SESSION['password']) && isset($_SESSION['email'])) {

    $query=mysqli_query($con, "SELECT * FROM `clients` WHERE email='?'");
     

    // echo $_SESSION['email'];
     ?>
     <!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US">

<head>

    <meta charset="utf-8">
    <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
    <title>Solearn</title>

    <meta name="author" content="SoliLearn">

    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- Theme Style -->
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <link rel="stylesheet" type="text/css" href="assets/css/cat.css">
    <!-- Reponsive -->
    <link rel="stylesheet" type="text/css" href="assets/css/responsive.css">

    <!-- Favicon and Touch Icons  -->
    <link rel="shortcut icon" href="">
    <link rel="apple-touch-icon-precomposed" href="">

</head>

<body class="body header-fixed is_dark">

    <!-- preloade -->
    <div class="preload preload-container">
        <div class="preload-logo"></div>
    </div>
    <!-- /preload -->

    <div id="wrapper">
        <div id="page" class="clearfix">

            <header id="header_main " class="header_1 js-header">
                <div class="container-fluid">
                    <div class="row ">
                        <div class="col-md-12">
                            <div class="mobile-button"><span></span></div><!-- /.mobile-button -->
                            <div id="site-header-inner" class="flex">
                                <div id="site-logo" class="clearfix">
                                    <div id="site-logo-inner">
                                        <a href="index.php" rel="home" class="main-logo">
                                            <img id="logo_header" src="assets/images/freLearn.png" alt=""
                                                width="151" height="45">
                                        </a>
                                    </div>
                                </div>
                                <div class="form-search">
                                </div>
                                <div id="site-menu">
                                    <nav id="main-nav" class="main-nav">
                                        <ul id="menu-primary-menu" class="menu">
                                            <li class=" ">
                                                <a href="#">Home</a>
                                            </li>
                                            <li class="menu-item ">
                                                <a href="#EX">Explore</a>
                                            </li>
                                            <li class="menu-item ">
                                                <a href="#CA">Categories</a>
                                            </li>
                                          
                                            <li class="menu-item ">
                                                <a href="#US">about us</a>
                                            </li>
                                        </ul>
                                    </nav><!-- /#main-nav -->
                                </div>
                                <div class="mode_switcher">
                                    <h6><span>Dark Mode</span> <strong>Activate</strong></h6>
                                    <a href="#" class="light d-flex align-items-center">
                                        <img src="assets/images/icon/sun.png" alt="">
                                    </a>
                                    <a href="#" class="dark d-flex align-items-center is_active">
                                        <img id="moon_dark" src="assets/images/icon/moon.png" alt="">
                                    </a>
                                    <p>Dear <?php echo $_SESSION['username'];?></p>
                                    <a href="aut/logout.php" class="cta"> <button>logout</button></a>

                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>







          <?php
    }
else{  ?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US">

<head>

    <meta charset="utf-8">
    <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
    <title>Solearn</title>

    <meta name="author" content="SoliLearn">

    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- Theme Style -->
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <link rel="stylesheet" type="text/css" href="assets/css/cat.css">
    <!-- Reponsive -->
    <link rel="stylesheet" type="text/css" href="assets/css/responsive.css">

    <!-- Favicon and Touch Icons  -->
    <link rel="shortcut icon" href="">
    <link rel="apple-touch-icon-precomposed" href="">

</head>

<body class="body header-fixed is_dark">

    <!-- preloade -->
    <div class="preload preload-container">
        <div class="preload-logo"></div>
    </div>
    <!-- /preload -->

    <div id="wrapper">
        <div id="page" class="clearfix">

            <header id="header_main " class="header_1 js-header">
                <div class="container-fluid">
                    <div class="row ">
                        <div class="col-md-12">
                            <div class="mobile-button"><span></span></div><!-- /.mobile-button -->
                            <div id="site-header-inner" class="flex">
                                <div id="site-logo" class="clearfix">
                                    <div id="site-logo-inner">
                                        <a href="index.php" rel="home" class="main-logo">
                                            <img id="logo_header" src="assets/images/freLearn.png" alt=""
                                                width="151" height="45">
                                        </a>
                                    </div>
                                </div>
                                <div class="form-search">
                                </div>
                                <div id="site-menu">
                                    <nav id="main-nav" class="main-nav">
                                        <ul id="menu-primary-menu" class="menu">
                                            <li class=" ">
                                                <a href="#">Home</a>
                                            </li>
                                            <li class="menu-item ">
                                                <a href="#EX">Explore</a>
                                            </li>
                                            <li class="menu-item ">
                                                <a href="#CA">Categories</a>
                                            </li>
                                           
                                            <li class="menu-item ">
                                                <a href="#US">about us</a>
                                            </li>
                                        </ul>
                                    </nav><!-- /#main-nav -->
                                </div>
                                <div class="mode_switcher">
                                    <h6><span>Dark Mode</span> <strong>Activate</strong></h6>
                                    <a href="#" class="light d-flex align-items-center">
                                        <img src="assets/images/icon/sun.png" alt="">
                                    </a>
                                    <a href="#" class="dark d-flex align-items-center is_active">
                                        <img id="moon_dark" src="assets/images/icon/moon.png" alt="">
                                    </a>
                                    <a href="aut/login.php" class="cta"> <button>login</button></a>
                                    <a href="admin/categoriesform.php" class="cta"> <button>admin</button></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <?php
}
?>
            <section class="tf-slider">
                <div class="swiper-container slider">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="slider-item">

                                <div class="slider-inner home-2 flex">
                                    <div class="slider-content">
                                        <h1 class="heading">Do you want to learn to code but feel put off by the cost of coding classes?</h1>
                                        <p class="sub-heading">Here, you find all free courses with Certificates that exist in Internet.  </p>
                                        <div class="button-slider">
                                            <a href="#Ca"
                                                class="sc-button btn-bordered-white style letter "><span>Get Started</span></a>
                                        
                                        </div>
                                    </div>
                                    <div class="slider-img">
                                        <div class="img-home-1"><img  src="assets/images/slider/img.gif"
                                                alt="Image"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="slider-item ">
                                <div class="container">
                                   

                                </div>
                            </div><!-- item-->
                        </div>
                    </div>
                    <div class="swiper-pagination"></div>
                    <div class="swiper-button-next btn-slide-next "></div>
                    <div class="swiper-button-prev btn-slide-prev"></div>
                </div>
            </section>
           
                      
            <section id="CA" class="tf-trendy-collections tf-section">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="sc-heading style-2">
                                <div class="content-left">
                                    <div class="group">

                                        <h3>Categories</h3>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <h6>You can choose any categories that you want</h6>
                            <div class="swiper-container trendy">
                                <div class="swiper-wrapper">
                                    <a href="#aaaww">
                                        <div class="swiper-slide">
                                            <div class="slider-item">
                                                <div class="sc-product-item  style-2">
                                                    <div class="product-img">
                                                        <a href="#a5">
                                                        <img src="assets/images/categorie/robotic/r1.jpg" height="600"
                                                            alt="Image"></a>

                                                        <label>Robotics</label>
                                                    </div>
                                                    <div class="product-content">
                                                        <h5 class="title">‘’
                                                            Learn to program robots to do whatever you want.’’ </h5>
                                                        <div class="product-author flex">
                                                            <div class="avatar">
                                                                <img src="assets/images/categorie/robotic/1111.ico"
                                                                    alt="Image">
                                                            </div>
                                                            <div class="infor">
                                                                <div class="author-name"><a
                                                                        href="https://www.ecolerobots.com/">
                                                                        Ecole Robots</a></div>

                                                            </div>
                                                        </div>
                                                        <div class="product-price flex">
                                                            <div class="title"><a
                                                                    href="https://www.ecolerobots.com/">Read More!</a>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div><!-- item-->
                                        </div>
                                    </a>
                                    <a href="#aaaw">
                                        <div class="swiper-slide">
                                            <div class="slider-item">
                                                <div class="sc-product-item style-2">
                                                    <div class="product-img">
                                                        <a href="#aaaw">
                                                        <img src="assets/images/categorie/AI/ai1.jpg" height="600"
                                                            alt="Image"></a>

                                                        <label>Artificial Intelligence</label>
                                                    </div>
                                                    <div class="product-content">
                                                        <h5 class="title"> ‘’Just discover the field of artificial
                                                            intelligence.‘’ </h5>
                                                        <div class="product-author flex">
                                                            <div class="avatar">
                                                                <img src="assets/images/categorie/AI/ai icon.jpg"
                                                                    alt="Image">
                                                            </div>
                                                            <div class="infor">
                                                                <div class="author-name"><a
                                                                        href="https://edufiq.com/artificial-intelligence-course-for-kids/">Edufiq</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="product-price flex">
                                                            <div class="title"><a
                                                                    href="https://edufiq.com/artificial-intelligence-course-for-kids/">Read
                                                                    More!</a></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div><!-- item-->
                                        </div>
                                    </a>
                                    <a href="#aaawt">
                                        <div class="swiper-slide">
                                            <div class="slider-item">
                                                <div class="sc-product-item style-2">
                                                    <div class="product-img">
                                                        <a href="#aaawt">
                                                        <img src="assets/images/categorie/gaming/g2.jpg" height="600"
                                                            alt="Image"></a>

                                                        <label>Game Development</label>
                                                    </div>
                                                    <div class="product-content">
                                                        <h5 class="title"><a href="item-details.html">‘’Playing is fun
                                                                You can now make your own fun by developing games.’’</a>
                                                        </h5>
                                                        <div class="product-author flex">
                                                            <div class="avatar">
                                                                <img src="assets/images/categorie/gaming/udemy-icon.webp"
                                                                    alt="Image">
                                                            </div>
                                                            <div class="infor">
                                                                <div class="author-name"><a
                                                                        href="https://www.udemy.com/course/game-development-for-children/">Udemy</a>
                                                                </div>

                                                            </div>
                                                        </div>
                                                        <div class="product-price flex">
                                                            <div class="title"><a
                                                                    href="https://www.udemy.com/course/game-development-for-children/">Read
                                                                    More!</a></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="#aaawtt">
                                        <div class="swiper-slide">
                                            <div class="slider-item">
                                                <div class="sc-product-item style-2">
                                                    <div class="product-img">
                                                        <a href="#aaawtt">
                                                        <img src="assets/images/categorie/dev web/DEV4.jpg" height="600"
                                                            alt="Image"></a>

                                                        <label>Web development</label>
                                                    </div>
                                                    <div class="product-content">
                                                        <h5 class="title"><a href="item-details.html">‘’Do you want to
                                                                lose weight, you can do that through web
                                                                development.’’</a> </h5>
                                                        <div class="product-author flex">
                                                            <div class="avatar">
                                                                <img src="assets/images/categorie/dev web/icon-debweb.webp"
                                                                    alt="Image">
                                                            </div>
                                                            <div class="infor">
                                                                <div class="author-name"><a
                                                                        href="https://www.codewizardshq.com/web-1-coding-class/">Codewizardshq</a>
                                                                </div>

                                                            </div>
                                                        </div>
                                                        <div class="product-price flex">
                                                            <div class="title"><a
                                                                    href="https://www.codewizardshq.com/web-1-coding-class/">Read
                                                                    More!</a></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div><!-- item-->
                                        </div>
                                    </a>
                                    <a href="#aaawtt">
                                        <div class="swiper-slide">
                                            <div class="slider-item">
                                                <div class="sc-product-item style-2">
                                                    <div class="product-img">
                                                        <a href="#aaawtt">
                                                        <img src="assets/images/categorie/mobile app dev/m1.jpg"
                                                            height="600" alt="Image"></a>

                                                        <label>Mobile development</label>
                                                    </div>
                                                    <div class="product-content">
                                                        <h5 class="title"><a href="item-details.html">‘’Learn mobile app
                                                                development now’’</a> </h5>
                                                        <div class="product-author flex">
                                                            <div class="avatar">
                                                                <img src="assets/images/categorie/mobile app dev/mmob icon.png"
                                                                    alt="Image">
                                                            </div>
                                                            <div class="infor">
                                                                <div class="author-name"><a
                                                                        href="https://tekkieuni.com/fr/courses/build-your-first-app/">tekkieuni</a>
                                                                </div>

                                                            </div>
                                                        </div>
                                                        <div class="product-price flex">
                                                            <div class="title"><a
                                                                    href="https://tekkieuni.com/fr/courses/build-your-first-app/">Read
                                                                    More!</a></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div><!-- item-->
                                        </div>
                                    </a>
                                    <a href="#a5">
                                        <div class="swiper-slide">
                                            <div class="slider-item">
                                                <div class="sc-product-item style-2">
                                                    <div class="product-img">
                                                        <a href="#a5">
                                                        <img src="assets/images/categorie/HACKING/H4.jpg" height="600"
                                                            alt="Image"></a>

                                                        <label>Cyber Security</label>
                                                    </div>
                                                    <div class="product-content">
                                                        <h5 class="title"><a href="item-details.html">‘’You Can Protect
                                                                Yourself from Cyber Attacks’’</a> </h5>
                                                        <div class="product-author flex">
                                                            <div class="avatar">
                                                                <img src="assets/images/categorie/HACKING/HACKING ICON.png"
                                                                    alt="Image">
                                                            </div>
                                                            <div class="infor">
                                                                <div class="author-name"><a
                                                                        href="https://redteam360.com/courses/ethical-hacker-junior/#:~:text=Ethical%20Hacker%20Junior%20is%20an,age%20of%2013%20to%2018.">redteam360</a>
                                                                </div>

                                                            </div>
                                                        </div>
                                                        <div class="product-price flex">
                                                            <div class="title"><a
                                                                    href="https://redteam360.com/courses/ethical-hacker-junior/#:~:text=Ethical%20Hacker%20Junior%20is%20an,age%20of%2013%20to%2018.">Read
                                                                    More!</a></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div><!-- item-->
                                        </div>
                                    </a>
                                </div>
                                <div class="swiper-button-next btn-slide-next "></div>
                                <div class="swiper-button-prev btn-slide-prev"></div>
                            </div>
                        </div>

                    </div>
                </div>
            </section>
           
            <hr>
            <section class="tf-latest-collections tf-section bg-color-2" style="height:125vh ;">
                <div class="container">
                    <div class="inner">
                        <h3>Latest Collections</h3>
                        <p class="desc"> </p>
                    </div>
                    <div class="row">


                        <div id="carouselExampleControls" class="carousel slide w-100" data-ride="carousel">
                            <div class="carousel-inner">
                                <!-- slide 1 -->

                                <div id="aaaww" class="carousel-item active row">

                                    <div class="h2-titel col-4">
                                        <h2 class="p-5 m-5" style="color: #6ce6fb;">Robotics</h2>
                                        <p>Robotics is an interdisciplinary branch of computer science and
                                            engineering.[1] Robotics involves design, construction, operation, and use
                                            of robots. The goal of robotics is to design machines that can help and
                                            assist humans. Robotics integrates fields of mechanical engineering,
                                            electrical engineering, information engineering, mechatronics, electronics,
                                            bioengineering, computer engineering, control engineering, software
                                            engineering, mathematics, etc.

                                            Robotics develops machines that can substitute for humans and replicate
                                            human actions. Robots can be used in many situations for many purposes, but
                                            today many are used in dangerous environments (including inspection of
                                            radioactive materials.</p>
                                    </div>
                                    <div class="img-photo col-8">
                                        <img class="d-block w-100" src="https://images2.alphacoders.com/167/167502.jpg"
                                            alt="First slide" style="height:80vh ;">
                                    </div>

                                </div>

                                

                                <div id="aaaw" class="carousel-item">
                                    <div class="h2-titel col-4">
                                        <h2 class="p-5 m-5" style="color:#1e3678 ;">Artificial Intelligence</h2>
                                        <p>Artificial intelligence (AI) is intelligence demonstrated by machines, as
                                            opposed to the natural intelligence displayed by animals including humans.
                                            AI research has been defined as the field of study of intelligent agents,
                                            which refers to any system that perceives its environment and takes actions
                                            that maximize its chance of achieving its goals.[a]
                                            The term "artificial intelligence" had previously been used to describe
                                            machines that mimic and display "human" cognitive skills that are associated
                                            with the human mind, such as "learning" and "problem-solving".</p>
                                    </div>
                                    <div class="img-photo col-8">
                                        <img class="d-block w-100"
                                            src="https://browsecat.net/sites/default/files/brain-artificial-intelligence-human-hd-wallpapers-51017-747969-3651926.png"
                                            alt="First slide" style="height:80vh ;">
                                    </div>
                                </div>

                                <!-- slide 3 -->

                                <div id="aaawt" class="carousel-item">
                                    <div class="h2-titel col-4">
                                        <h2 class="p-5 m-5" style="color: #14ccac;">Gaming</h2>
                                        <p>A video game[a] or computer game is an electronic game that involves
                                            interaction with a user interface or input device such as a joystick,
                                            controller, keyboard, or motion sensing device to generate visual feedback.
                                            This feedback mostly commonly is shown on a video display device, such as a
                                            TV set, monitor, touchscreen, or virtual reality headset. Some computer
                                            games do not always depend on a graphics display, for example text adventure
                                            games and computer chess can be played through teletype printers. Video
                                            games are often augmented with audio feedback delivered through speakers or
                                            headphones, and sometimes with other types of feedback, including haptic
                                            technology.</p>
                                    </div>
                                    <div class="img-photo col-8">
                                        <img class="d-block w-100"
                                            src="https://images7.alphacoders.com/370/thumb-1920-370408.png"
                                            alt="First slide" style="height:80vh ;">
                                    </div>
                                </div>
                                <!-- slide 4 -->

                                <div id="aaawtt" class="carousel-item">
                                    <div class="h2-titel col-4">
                                        <h2 class="p-5 m-5" style="color: #14ccac;">Web Development</h2>
                                        <p>Web development is the work involved in developing a website for the Internet
                                            (World Wide Web) or an intranet (a private network).[1] Web development can
                                            range from developing a simple single static page of plain text to complex
                                            web applications, electronic businesses, and social network services. A more
                                            comprehensive list of tasks to which Web development commonly refers, may
                                            include Web engineering, Web design, Web content development, client
                                            liaison, client-side/server-side scripting, Web server and network security
                                            configuration, and e-commerce development.</p>
                                    </div>
                                    <div class="img-photo col-8">
                                        <img class="d-block w-100" src="assets/images/categorie/dev web/DEV5.jpg"
                                            alt="First slide" style="height:80vh ;">
                                    </div>

                                </div>


                                <!-- slide 5 -->

                                <div id="a5" class="carousel-item">
                                    <div class="h2-titel col-4">
                                        <h2 class="p-5 m-5" style="color: #14ccac;">Mobile Development</h2>
                                        <p>Mobile app development is the act or process by which a mobile app is
                                            developed for mobile devices, such as personal digital assistants,
                                            enterprise digital assistants or mobile phones. These software applications
                                            are designed to run on mobile devices, such as a smartphone or tablet
                                            computer. These applications can be pre-installed on phones during
                                            manufacturing platforms, or delivered as web applications using server-side
                                            or client-side processing (e.g., JavaScript) to provide an
                                            "application-like" experience within a web browser. Application software
                                            developers also must consider a long array of screen sizes.</p>
                                    </div>
                                    <div class="img-photo col-8">
                                        <img class="d-block w-100" src="assets/images/categorie/mobile app dev/m3.jpg"
                                            alt="First slide" style="height:80vh ;">
                                    </div>

                                </div>



                                <!-- slide 6 -->

                                <div id="a6" class="carousel-item">
                                    <div class="h2-titel col-4">
                                        <h2  class="p-5 m-5" style="color: #14ccac;">Cyber Security</h2>
                                        <p>is the protection of computer systems and networks from information
                                            disclosure, theft of, or damage to their hardware, software, or electronic
                                            data, as well as from the disruption or misdirection of the services they
                                            provide.The field has become significant due to the expanded reliance on computer
                                            systems, the Internet, and wireless network standards such as Bluetooth and
                                            Wi-Fi, and due to the growth of "smart" devices, including smartphones,
                                            televisions, and the various devices that constitute the Internet of things
                                            (IoT). Cybersecurity is also one of the significant challenges in the
                                            contemporary world, due to its complexity, both in terms of political usage
                                            and technology. Its primary goal is to ensure the system's dependability,
                                            integrity, and data privacy.</p>
                                    </div>
                                    <div class="img-photo col-8">
                                        <img class="d-block w-100" src="assets/images/categorie/HACKING/H3.jpg"
                                            alt="First slide" style="height:80vh ;">
                                    </div>

                                </div>
                            </div>
                            <a class="carousel-control-prev" href="#carouselExampleControls" role="button"
                                data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#carouselExampleControls" role="button"
                                data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>


                        <div class="col-md-12">
                            <div class="sc-heading style-2">
                                <div class="content-left">

                                </div>
                            </div>
                        </div>

                </div>
                </div>
            </section>
            <section id="US" class="tf-category tf-section US">
                <div class="category-inner ">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="sc-heading style-2">
                                <div class="content-left">
                                    <div class="inner">
                                        <h3>By FreLearn</h3>
                                        <p class="desc">You learn expensive while you pay cheap </p>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-12">
                            <div class="sc-category">
                                <div class="card-media">
                                    <img src="data:image/jpeg;base64,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" alt="">
                                </div>
                                <div class="card-content">
                                    <h5><a href="#">Salma El Khourrib</a></h5>
                                    <p>Creatrice de contenu</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-12">
                            <div class="sc-category pl-19">
                                <div class="card-media">
                                    <img src="" alt="">
                                </div>
                                <div class="card-content">
                                    <h5><a href="#">Samantha Kennedy</a></h5>
                                    <p>Developer</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
           
            <!-- Footer -->
            <footer id="footer" class="clearfix bg-style ft-home-1">
                <div class="container">
                    <div class="row">

                        <div class="col-lg-2 col-md-6 col-sm-6 col-6">

                        </div>
                        <div class="col-lg-3 col-md-6 col-12">
                            <div class="widget widget-logo">
                                <div class="logo-footer" id="logo-footer">
                                    <a href="index.html">
                                        <img id="logo_footer" src="assets/images/logo/logo_dark.png">
                                    </a>
                                </div>
                                <p class="sub-widget-logo">For you to initiate the world of programming, we send you via your email all discounts courses that suit your interest weekly.</p>

                            </div>
                        </div>

                        <div class="col-lg-2 col-md-6 col-sm-6 col-6">
                            <div class="widget widget-menu menu-marketplace">
                                <h5 class="title-widget mt-5">Links</h5>
                                <ul>
                                    <li><a href="#">Home </a></li>
                                    <li><a href="#EX">Explore </a></li>
                                    <li><a href="#CA">Categories</a></li>
                                    <li><a href="#US">About Us</a></li>


                                </ul>
                            </div>
                        </div>

                        <div class="col-lg-2 col-md-6 col-sm-6 col-6">
                            <div class="widget widget-menu menu-marketplace">
                                <h5 class="title-widget mt-5">Social media</h5>
                                <div class="widget-social">
                                    <ul>
                                        <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                                        <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="#" class="active"><i class="fab fa-facebook-f"></i></a></li>
                                    </ul>
                                </div>

                            </div>
                        </div>

                    </div>
                </div>
            </footer><!-- /#footer -->
            <!-- Bottom -->
            <div class="bottom">
                <div class="container">
                    <div class="bottom-inner">
                        Copyright © 2022 FreLearn | Designed by <strong>FreLearn </strong>
                    </div>
                </div>
            </div>


        </div>
        <!-- /#page -->
    </div>
    <!-- /#wrapper -->

    <a id="scroll-top"></a>

    <!-- Modal Popup Bid -->
    <div class="modal fade popup" id="popup_bid_success" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <div class="modal-body space-y-20 pd-40">
                    <h3 class="text-center">Your Bidding
                        Successfuly Added</h3>
                    <p class="text-center">your bid <span class="price color-popup">(5.23ETH) </span> has been listing
                        to our database</p>
                    <a href="#" class="btn btn-primary"> Watch the listings</a>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade popup" id="popup_bid" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <div class="modal-body space-y-20 pd-40">
                    <h3>Place a Bid</h3>
                    <p class="text-center">You must bid at least <span class="price color-popup">5.23 ETH</span>
                    </p>
                    <input type="text" class="form-control" placeholder="00.00 ETH">
                    <p>Enter quantity. <span class="color-popup">1 available</span>
                    </p>
                    <input type="text" class="form-control quantity" value="1">
                    <div class="hr"></div>

                    <div class="d-flex justify-content-between">
                        <p> Current Bid</p>
                        <p class="text-right price color-popup"> 5.23 ETH </p>
                    </div>
                    <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#popup_bid_success"
                        data-dismiss="modal" aria-label="Close"> Place a bid</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Javascript -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/jquery.easing.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/swiper-bundle.min.js"></script>
    <script src="assets/js/swiper.js"></script>

    <script src="assets/js/plugin.js"></script>
    <script src="assets/js/count-down.js"></script>
    <script src="assets/js/shortcodes.js"></script>
    <script src="assets/js/main.js"></script>
</body>

</html>
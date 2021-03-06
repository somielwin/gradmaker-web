
<?php
    $file = __DIR__.'/counter.txt';

    $count = file_get_contents($file, true);
    $count = intval($count);
?>
<!doctype html>
<html class="no-js" lang="">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Gradmaker | Home</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <link rel="stylesheet" href="css/style.css" media="all"/>

    <!--[if lt IE 9]> <script src="js/css3-mediaqueries.js"></script> <![endif]-->
    <script src="js/html5.js"></script>
    <script src="js/lib/modernizr-2.8.3.min.js"></script>

</head>
<body>
<div class="popup-wrap" id="youtube-video">
    <a href="#" class="popup-close"><img src="images/home/icon-close.svg" alt=""></a>
    <div class="popup-content">
        <div class="popup-ratio">
            <div class="video-holder"></div>
        </div>
    </div>
</div>
<section id="main-container">
    <div class="section-nav">
        <div class="sn-menu animated hiding" data-animation="fadeIn" data-delay="500">
            <ul>
                <li class="active"><a href="#section1">01</a></li>
                <li><a href="#section2">02</a></li>
                <li><a href="#section3">03</a></li>
                <li><a href="#section4">04</a></li>
                <li><a href="#section5">05</a></li>
                <li><a href="#section6">06</a></li>
                <li><a href="#section7">07</a></li>
                <li><a href="#section8">08</a></li>
            </ul>
        </div>
    </div>
    <div class="header-hamburger"><span></span></div>
    <header >
        <div class="logo">
            <a href="index.html">
                <img class="desktop-logo" src="images/page_template/logo.png" alt="">
            </a>
        </div>
        <nav>
            <ul>
                <li class="active"><a href="index.html">Home</a></li>
                <li><a href="faq.html">FAQs</a></li>
                <li><a href="co-creator.html">Co-creators</a></li>
                <li><a href="contact.html">Contact Us</a></li>
            </ul>
        </nav>
        <div class="head-btn">
            <a href="#" class="btn btn-early-access"><span class="i-icon icon-access"></span>Get Early Access</a>
            <!-- <a href="#" class="btn btn-get-app">Get the app</a> -->
        </div>
    </header>

    <div class="mobile-menu">
        <nav>
            <ul>
                <li class="active"><a href="index.html">Home</a></li>
                <li><a href="faq.html">FAQs</a></li>
                <li><a href="co-creator.html">Co-creators</a></li>
                <li><a href="contact.html">Contact Us</a></li>
            </ul>
        </nav>
        <div class="head-btn">
            <a href="#" class="btn btn-early-access"><span class="i-icon icon-access"></span>Get Early Access</a>
        </div>
    </div>
    <section id="main-wrapper">

        <section id="section1" class="section1 sec-full jq-section">
            <div class="table-wrap">
                <div class="table-cell">
                    <div class="bottom-group-img">
                        <figure class="clouds1"><img  class="lazyload" src="images/page_template/lazyload.jpg" data-src="images/home/clouds1.svg" alt=""></figure>
                        <figure class="clouds2"><img class="lazyload" src="images/page_template/lazyload.jpg" data-src="images/home/clouds2.svg" alt=""></figure>
                        <figure class="school"><img class="lazyload" src="images/page_template/lazyload.jpg" data-src="images/home/school.svg" alt=""></figure>
                        <figure class="girl"><img class="lazyload" src="images/page_template/lazyload.jpg" data-src="images/home/girl.svg" alt=""></figure>
                        <figure class="heart1"><img class="lazyload" src="images/page_template/lazyload.jpg" data-src="images/home/heart.svg" alt=""></figure>
                        <figure class="heart2"><img class="lazyload" src="images/page_template/lazyload.jpg" data-src="images/home/heart.svg" alt=""></figure>
                    </div>
                    <div class="container">
                        <div class="banner-text animated hiding" data-animation="fadeInUp">
                            <h1><span>Make your </span>Child’s <br>Dream <br class="mobile-br">Come True</h1>
                            <p>Now made easy for you with the GradMaker <br>mobile app.</p>
                            <a href="#" class="btn btn-primary play-video" data-videoid="BZP1rYjoBgI"> <span class="i-icon icon-watch-video"></span>Watch How</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="section2" class="sec-wrap section2 sec-full bg-green jq-section">
            <div class="container">
                <div class="sec-head-title text-center animated hiding" data-animation="fadeInUp">
                    <h2>Education <span>is the best gift you can give</span></h2>
                    <p>GradMaker is here to make that dream happen.</p>
                </div>
            </div>
            <!-- Mobile Carousel Desktop -->
            <div id="dream-carousel" class="dream-carousel animated hiding" data-animation="fadeInUp">
                <div class="dc-item" data-num="1">
                    <div class="dc-link" id="item-1">
                        <div class="dc-wrap">
                            <div class="dc-box">
                                <div class="dc-content">
                                    <p>His dream is <br>to become a</p>
                                    <h3>Doctor</h3>
                                </div>
                            </div>
                            <figure><img class="lazyload" src="images/page_template/lazyload.jpg" data-src="images/home/doctor.svg" alt=""></figure>
                        </div>
                    </div>
                </div>
                <div class="dc-item" data-num="2">
                    <div class="dc-link" id="item-2">
                        <div class="dc-wrap">
                            <div class="dc-box">
                                <div class="dc-content">
                                    <p>Her dream is <br>to become a</p>
                                    <h3>Teacher</h3>
                                </div>
                            </div>
                            <figure><img class="lazyload" src="images/page_template/lazyload.jpg" data-src="images/home/teacher.svg" alt=""></figure>
                        </div>
                    </div>
                </div>
                <div class="dc-item" data-num="3">
                    <div class="dc-link" id="item-3">
                        <div class="dc-wrap">
                            <div class="dc-box">
                                <div class="dc-content">
                                    <p>His dream is <br>to become an</p>
                                    <h3>Astronaut</h3>
                                </div>
                            </div>
                            <figure><img class="lazyload" src="images/page_template/lazyload.jpg" data-src="images/home/astronaut.svg" alt=""></figure>
                        </div>
                    </div>
                </div>
                <div class="dc-item" data-num="4">
                    <div class="dc-link" id="item-4">
                        <div class="dc-wrap">
                            <div class="dc-box">
                                <div class="dc-content">
                                    <p>His dream is <br>to become a</p>
                                    <h3>Lawyer</h3>
                                </div>
                            </div>
                            <figure><img class="lazyload" src="images/page_template/lazyload.jpg" data-src="images/home/lawyer.svg" alt=""></figure>
                        </div>
                    </div>
                </div>
                <div class="dc-item" data-num="5">
                    <div class="dc-link" id="item-5">
                        <div class="dc-wrap">
                            <div class="dc-box">
                                <div class="dc-content">
                                    <p>Her dream is <br>to become a</p>
                                    <h3>Ballerina</h3>
                                </div>
                            </div>
                            <figure><img class="lazyload" src="images/page_template/lazyload.jpg" data-src="images/home/ballerina.svg" alt=""></figure>
                        </div>
                    </div>
                </div>
                <div class="dc-item" data-num="6">
                    <div class="dc-link" id="item-6">
                        <div class="dc-wrap">
                            <div class="dc-box">
                                <div class="dc-content">
                                    <p>Her dream is <br>to become a</p>
                                    <h3>Flight <br>attendant</h3>
                                </div>
                            </div>
                            <figure><img class="lazyload" src="images/page_template/lazyload.jpg" data-src="images/home/flight-attendant.svg" alt=""></figure>
                        </div>
                    </div>
                </div>
                <div class="dc-item" data-num="7">
                    <div class="dc-link" id="item-7">
                        <div class="dc-wrap">
                            <div class="dc-box">
                                <div class="dc-content">
                                    <p>His dream is <br>to become a</p>
                                    <h3>Fireman</h3>
                                </div>
                            </div>
                            <figure><img class="lazyload" src="images/page_template/lazyload.jpg" data-src="images/home/fireman.svg" alt=""></figure>
                        </div>
                    </div>
                </div>
                <div class="dc-item" data-num="8">
                    <div class="dc-link" id="item-8">
                        <div class="dc-wrap">
                            <div class="dc-box">
                                <div class="dc-content">
                                    <p>Her dream is <br>to become a</p>
                                    <h3>Nurse</h3>
                                </div>
                            </div>
                            <figure><img class="lazyload" src="images/page_template/lazyload.jpg" data-src="images/home/nurse.svg" alt=""></figure>
                        </div>
                    </div>
                </div>
                <div class="dc-item" data-num="9">
                    <div class="dc-link" id="item-9">
                        <div class="dc-wrap">
                            <div class="dc-box">
                                <div class="dc-content">
                                    <p>His dream is <br>to become a</p>
                                    <h3>Police</h3>
                                </div>
                            </div>
                            <figure><img class="lazyload" src="images/page_template/lazyload.jpg" data-src="images/home/police.svg" alt=""></figure>
                        </div>
                    </div>
                </div>
                <div class="dc-item" data-num="10">
                    <div class="dc-link" id="item-10">
                        <div class="dc-wrap">
                            <div class="dc-box">
                                <div class="dc-content">
                                    <p>Her dream is <br>to become a</p>
                                    <h3>Designer</h3>
                                </div>
                            </div>
                            <figure><img class="lazyload" src="images/page_template/lazyload.jpg" data-src="images/home/designer.svg" alt=""></figure>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Mobile Carouse Mobile -->
            <div class="container">
                <div id="dream-carousel-mobile" class="dream-carousel">
                    <div class="dc-item" data-num="1">
                        <div class="dc-link" id="item-1">
                            <div class="dc-wrap">
                                <div class="dc-box">
                                    <div class="dc-content">
                                        <p>His dream is <br>to become a</p>
                                        <h3>Doctor</h3>
                                    </div>
                                </div>
                                <figure><img class="lazyload" src="images/page_template/lazyload.jpg" data-src="images/home/doctor.svg" alt=""></figure>
                            </div>
                        </div>
                    </div>
                    <div class="dc-item" data-num="2">
                        <div class="dc-link" id="item-2">
                            <div class="dc-wrap">
                                <div class="dc-box">
                                    <div class="dc-content">
                                        <p>Her dream is <br>to become a</p>
                                        <h3>Teacher</h3>
                                    </div>
                                </div>
                                <figure><img class="lazyload" src="images/page_template/lazyload.jpg" data-src="images/home/teacher.svg" alt=""></figure>
                            </div>
                        </div>
                    </div>
                    <div class="dc-item" data-num="3">
                        <div class="dc-link" id="item-3">
                            <div class="dc-wrap">
                                <div class="dc-box">
                                    <div class="dc-content">
                                        <p>His dream is <br>to become an</p>
                                        <h3>Astronaut</h3>
                                    </div>
                                </div>
                                <figure><img class="lazyload" src="images/page_template/lazyload.jpg" data-src="images/home/astronaut.svg" alt=""></figure>
                            </div>
                        </div>
                    </div>
                    <div class="dc-item" data-num="4">
                        <div class="dc-link" id="item-4">
                            <div class="dc-wrap">
                                <div class="dc-box">
                                    <div class="dc-content">
                                        <p>His dream is <br>to become a</p>
                                        <h3>Lawyer</h3>
                                    </div>
                                </div>
                                <figure><img class="lazyload" src="images/page_template/lazyload.jpg" data-src="images/home/lawyer.svg" alt=""></figure>
                            </div>
                        </div>
                    </div>
                    <div class="dc-item" data-num="5">
                        <div class="dc-link" id="item-5">
                            <div class="dc-wrap">
                                <div class="dc-box">
                                    <div class="dc-content">
                                        <p>Her dream is <br>to become a</p>
                                        <h3>Ballerina</h3>
                                    </div>
                                </div>
                                <figure><img class="lazyload" src="images/page_template/lazyload.jpg" data-src="images/home/ballerina.svg" alt=""></figure>
                            </div>
                        </div>
                    </div>
                    <div class="dc-item" data-num="6">
                        <div class="dc-link" id="item-6">
                            <div class="dc-wrap">
                                <div class="dc-box">
                                    <div class="dc-content">
                                        <p>Her dream is <br>to become a</p>
                                        <h3>Flight <br>attendant</h3>
                                    </div>
                                </div>
                                <figure><img class="lazyload" src="images/page_template/lazyload.jpg" data-src="images/home/flight-attendant.svg" alt=""></figure>
                            </div>
                        </div>
                    </div>
                    <div class="dc-item" data-num="7">
                        <div class="dc-link" id="item-7">
                            <div class="dc-wrap">
                                <div class="dc-box">
                                    <div class="dc-content">
                                        <p>His dream is <br>to become a</p>
                                        <h3>Fireman</h3>
                                    </div>
                                </div>
                                <figure><img class="lazyload" src="images/page_template/lazyload.jpg" data-src="images/home/fireman.svg" alt=""></figure>
                            </div>
                        </div>
                    </div>
                    <div class="dc-item" data-num="8">
                        <div class="dc-link" id="item-8">
                            <div class="dc-wrap">
                                <div class="dc-box">
                                    <div class="dc-content">
                                        <p>Her dream is <br>to become a</p>
                                        <h3>Nurse</h3>
                                    </div>
                                </div>
                                <figure><img class="lazyload" src="images/page_template/lazyload.jpg" data-src="images/home/nurse.svg" alt=""></figure>
                            </div>
                        </div>
                    </div>
                    <div class="dc-item" data-num="9">
                        <div class="dc-link" id="item-9">
                            <div class="dc-wrap">
                                <div class="dc-box">
                                    <div class="dc-content">
                                        <p>His dream is <br>to become a</p>
                                        <h3>Police</h3>
                                    </div>
                                </div>
                                <figure><img class="lazyload" src="images/page_template/lazyload.jpg" data-src="images/home/police.svg" alt=""></figure>
                            </div>
                        </div>
                    </div>
                    <div class="dc-item" data-num="10">
                        <div class="dc-link" id="item-10">
                            <div class="dc-wrap">
                                <div class="dc-box">
                                    <div class="dc-content">
                                        <p>Her dream is <br>to become a</p>
                                        <h3>Designer</h3>
                                    </div>
                                </div>
                                <figure><img class="lazyload" src="images/page_template/lazyload.jpg" data-src="images/home/designer.svg" alt=""></figure>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="dream-dots" id="dream-dots-mobile">
                    <a href="#" class="dream-dot active" data-num="1"><span>1</span></a>
                    <a href="#" class="dream-dot" data-num="2"><span>2</span></a>
                    <a href="#" class="dream-dot" data-num="3"><span>3</span></a>
                    <a href="#" class="dream-dot" data-num="4"><span>4</span></a>
                    <a href="#" class="dream-dot" data-num="5"><span>5</span></a>
                    <a href="#" class="dream-dot" data-num="6"><span>2</span></a>
                    <a href="#" class="dream-dot" data-num="7"><span>3</span></a>
                    <a href="#" class="dream-dot" data-num="8"><span>4</span></a>
                    <a href="#" class="dream-dot" data-num="9"><span>5</span></a>
                    <a href="#" class="dream-dot" data-num="10"><span>5</span></a>
                </div>
            </div>
        </section>

        <section id="section3" class="sec-wrap section3 bg-grey jq-section">
            <div class="container">
                <div class="sec-head-title text-center animated hiding" data-animation="fadeInUp">
                    <h2>Why <span>GradMaker?</span></h2>
                </div>
                <div class="carousel-feature animated hiding" data-animation="fadeInUp">
                    <div class="item active">
                        <div class="cf-box-flex text-center">
                            <div class="cf-box">
                                <small>FEATURE</small>
                                <figure><img class="lazyload" src="images/page_template/lazyload.jpg" data-src="images/home/feature-simple.svg" alt=""></figure>
                                <h3>Simple</h3>
                                <p>Investing made easy &amp; <br>mobile. No appointments. <br>No pen &amp; paper. No hassle.</p>
                            </div>
                            <div class="cf-num">
                                <span>02</span>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="cf-box-flex text-center">
                            <div class="cf-box">
                                <small>FEATURE</small>
                                <figure><img class="lazyload" src="images/page_template/lazyload.jpg" data-src="images/home/feature-smart.svg" alt=""></figure>
                                <h3>Smart</h3>
                                <p>First Mobile App designed <br>for busy moms &amp; dads. <br>Sign Up &amp; Pay in minutes.</p>
                            </div>
                            <div class="cf-num">
                                <span>01</span>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="cf-box-flex text-center">
                            <div class="cf-box">
                                <small>FEATURE</small>
                                <figure><img class="lazyload" src="images/page_template/lazyload.jpg" data-src="images/home/feature-personal.svg" alt=""></figure>
                                <h3>Personal</h3>
                                <p>Organize and Track <br>your investment per child. <br>In one tap.</p>
                            </div>
                            <div class="cf-num">
                                <span>03</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="section4" class="sec-wrap section4 jq-section">
            <div class="container">
                <div class="comparison-wrap">
                    <div class="compa-content col-wrap fl animated hiding" data-animation="fadeInUp">
                        <h2>GradMaker <small>vs</small> Bank Savings <span>Comparison</span></h2>
                        <p>Compared to a regular bank savings account, GradMaker gives a higher potential yield.</p>
                        <div class="cc-box">
                            <p><span class="cc-star">*</span> Projection only; this is NOT GUARANTEED and will depend on actual fund performance. </p>
                            <p>Your money in a savings account currently can earn a guaranteed interest rate of 0.2% annually.</p>
                            <p>You can contact your bank for the actual interest rate.</p>
                        </div>
                    </div>
                    <div class="compa-graph col-wrap fr">
                        <div class="flex">
                            <div class="cg-item animated hiding" data-animation="fadeInUp" data-delay="300">
                                <div class="cg-box">
                                    <div class="cg-investment">
                                        <div class="cg-top">
                                            <div class="cg-top-content">
                                                <figure><img src="images/home/logo-cap-orig.png" alt=""></figure>
                                                <p><sup>*</sup>8<span>%</span></p>
                                            </div>
                                        </div>
                                        <div class="cg-bot">
                                            <p>Investing with</p>
                                            <h4>GradMaker</h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="cg-item cg-vs-wrap animated hiding" data-animation="fadeInUp" data-delay="500">
                                <div class="cg-box">
                                    <div class="cg-vs">
                                        <span>VS</span>
                                    </div>
                                </div>
                            </div>
                            <div class="cg-item animated hiding" data-animation="fadeInUp" data-delay="700">
                                <div class="cg-box">
                                    <div class="cg-bank">
                                        <div class="cg-top">
                                            <div class="cg-top-content">
                                                <figure><img src="images/home/icon-house.png" alt=""></figure>
                                                <p><sup style="visibility: hidden;">*</sup>0.2<span>%</span></p>
                                            </div>
                                        </div>
                                        <div class="cg-bot">
                                            <p>Savings in a </p>
                                            <h4>Bank</h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="cc-box">
                            <p><span class="cc-star">*</span> Projection only; this is NOT GUARANTEED and will depend on actual fund performance. </p>
                            <p>Your money in a savings account currently can earn a guaranteed interest rate of 0.2% annually.</p>
                            <p>You can contact your bank for the actual interest rate.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="section5" class="sec-wrap section5 sec-full bg-grey jq-section">
            <div class="container">
                <div class="sec-head-title text-center animated hiding" data-animation="fadeInUp">
                    <h2>The Future <span>is Now</span></h2>
                    <p>The longer you stay invested, the closer you get to securing your child's college fund. <br>Invest early and give your investment more time to grow.</p>
                    <a href="#" class="btn btn-start">Start now for as <br>low as Php 10,000! <span class="i-icon icon-small-arrow"></span></a>
                </div>
            </div>
            <figure class="graph-whole animated hiding" data-animation="fadeInUp" data-delay="700"><img src="images/home/graph.svg" alt=""></figure>
            <figure class="graph-mobile"><img class="lazyload" src="images/page_template/lazyload.jpg" data-src="images/home/graph-mobile1.svg" alt=""></figure>
        </section>

        <section id="section6" class="sec-wrap section6 jq-section">
            <div class="container">
                <div class="investment-wrap">
                    <div class="col-wrap iw-text fl animated hiding" data-animation="fadeInUp">
                        <h2><span>It’s</span> more than <br><span>an investment.</span></h2>
                        <p>Co-created with parents just like you, this app is packed with all the features you need and want!</p>
                        <p class="p-small">Click the features to view details</p>
                    </div>
                    <div class="col-wrap investment-graph fr">
                        <div class="ii-tab-wrap">
                            <div class="table-wrap">
                                <div class="table-cell">
                                    <a href="#" class="popup-close"><img src="images/home/icon-close.svg" alt=""></a>
                                    <div class="popup-right" id="product">
                                        <h4><a href="#">Product</a></h4>
                                        <p>You are not just investing but you are also insured. <br>In case anything happens.</p>

                                        <figure><img class="lazyload-trigger" src="images/home/pop-product.svg" data-src="images/home/pop-product.svg" alt="">
                                            <div class="wavy-loader"><span></span><span></span><span></span></div>
                                        </figure>
                                        <p><a href="https://www.manulife.com.ph/GradMaker_faqs">Learn about the Product</a></p>
                                        <div class="popup-menu">
                                            <ul>
                                                <li class="active"><a href="#product">1</a></li>
                                                <li><a href="#company">2</a></li>
                                                <li><a href="#security">3</a></li>
                                                <li><a href="#payitforward">4</a></li>
                                                <li><a href="#rewards">5</a></li>
                                                <li><a href="#payonline">5</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="popup-right" id="company">
                                        <h4><a href="#">Company</a></h4>
                                        <p>Manulife is a leading global financial services company with over C$47 Billion Market Capitalization</p>

                                        <figure><img class="lazyload-trigger" src="images/page_template/lazyload.jpg" data-src="images/home/pop-company.svg" alt="">
                                            <div class="wavy-loader"><span></span><span></span><span></span></div>
                                        </figure>
                                        <div class="popup-menu">
                                            <ul>
                                                <li><a href="#product">1</a></li>
                                                <li class="active"><a href="#company">2</a></li>
                                                <li><a href="#security">3</a></li>
                                                <li><a href="#payitforward">4</a></li>
                                                <li><a href="#rewards">5</a></li>
                                                <li><a href="#payonline">5</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="popup-right" id="security">
                                        <h4><a href="#">Security</a></h4>
                                        <p>Safeguards are in place to protect your <br>data and transactions.</p>

                                        <figure><img class="lazyload-trigger" src="images/page_template/lazyload.jpg" data-src="images/home/pop-security.svg" alt="">
                                            <div class="wavy-loader"><span></span><span></span><span></span></div>
                                        </figure>
                                        <div class="popup-menu">
                                            <ul>
                                                <li><a href="#product">1</a></li>
                                                <li><a href="#company">2</a></li>
                                                <li class="active"><a href="#security">3</a></li>
                                                <li><a href="#payitforward">4</a></li>
                                                <li><a href="#rewards">5</a></li>
                                                <li><a href="#payonline">5</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="popup-right" id="payitforward">
                                        <h4>Pay it Forward</h4>
                                        <p>Our vision is to create a world where all children, rich and poor, get access to education.</p>

                                        <figure><img class="lazyload-trigger" src="images/page_template/lazyload.jpg" data-src="images/home/pop-payit.svg" alt="">
                                            <div class="wavy-loader"><span></span><span></span><span></span></div>
                                        </figure>
                                        <div class="popup-menu">
                                            <ul>
                                                <li><a href="#product">1</a></li>
                                                <li><a href="#company">2</a></li>
                                                <li><a href="#security">3</a></li>
                                                <li class="active"><a href="#payitforward">4</a></li>
                                                <li><a href="#rewards">5</a></li>
                                                <li><a href="#payonline">5</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="popup-right" id="payonline">
                                        <h4>Pay Online</h4>
                                        <p>Fully online payments in minutes! <br>Invest on the go, anytime.</p>

                                        <figure><img class="lazyload-trigger" src="images/page_template/lazyload.jpg" data-src="images/home/pop-payonline.svg" alt="">
                                            <div class="wavy-loader"><span></span><span></span><span></span></div>
                                        </figure>
                                        <div class="popup-menu">
                                            <ul>
                                                <li><a href="#product">1</a></li>
                                                <li><a href="#company">2</a></li>
                                                <li><a href="#security">3</a></li>
                                                <li><a href="#payitforward">4</a></li>
                                                <li><a href="#rewards">5</a></li>
                                                <li class="active"><a href="#payonline">5</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="popup-right" id="rewards">
                                        <h4><a href="#">Rewards</a></h4>
                                        <p>Earn additional units to your account on the first anniversary of each purchase.</p>

                                        <figure><img class="lazyload-trigger" src="images/page_template/lazyload.jpg" data-src="images/home/pop-reward.svg" alt="">
                                            <div class="wavy-loader"><span></span><span></span><span></span></div>
                                        </figure>
                                        <div class="popup-menu">
                                            <ul>
                                                <li><a href="#product">1</a></li>
                                                <li><a href="#company">2</a></li>
                                                <li><a href="#security">3</a></li>
                                                <li><a href="#payitforward">4</a></li>
                                                <li class="active"><a href="#rewards">5</a></li>
                                                <li><a href="#payonline">5</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="ii-investment-main">
                            <div class="ii-circle ii-one animated hiding" data-animation="zoomIn" data-delay="200">
                                <a href="#product">
                                    <div class="ii-border">
                                        <h5>Product</h5>
                                    </div>
                                </a>
                            </div>
                            <div class="ii-circle ii-two animated hiding" data-animation="zoomIn" data-delay="300">
                                <a href="#company">
                                    <div class="ii-border">
                                        <h5>Company</h5>
                                    </div>
                                </a>
                            </div>
                            <div class="ii-circle ii-three animated hiding" data-animation="zoomIn" data-delay="700">
                                <a href="#payitforward">
                                    <div class="ii-border">
                                        <h5>Pay it <br>Forward</h5>
                                    </div>
                                </a>
                            </div>
                            <div class="ii-circle ii-four animated hiding" data-animation="zoomIn" data-delay="400">
                                <a href="#security">
                                    <div class="ii-border">
                                        <h5>Security</h5>
                                    </div>
                                </a>
                            </div>
                            <div class="ii-circle ii-five animated hiding" data-animation="zoomIn" data-delay="600">
                                <a href="#rewards">
                                    <div class="ii-border">
                                        <h5>Rewards</h5>
                                    </div>
                                </a>
                            </div>
                            <div class="ii-circle ii-six animated hiding" data-animation="zoomIn" data-delay="600">
                                <a href="#payonline">
                                    <div class="ii-border">
                                        <h5>Pay Online</h5>
                                    </div>
                                </a>
                            </div>
                            <div class="investment-icon">
                                <img src="images/home/logo-cap-svg.svg" alt="">
                            </div>
                            <figure class="dots dot1"><img src="images/home/dots.svg" alt=""></figure>
                            <figure class="dots dot2"><img src="images/home/dots.svg" alt=""></figure>
                            <figure class="dots dot3"><img src="images/home/dots.svg" alt=""></figure>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="section7" class="sec-wrap section7 bg-green jq-section">
            <figure class="shape1 animated hiding" data-animation="fadeInUp"><img src="images/home/shape1.svg" alt=""></figure>
            <figure class="shape3 animated hiding" data-animation="fadeInUp"><img src="images/home/shape3.svg" alt=""></figure>
            <figure class="shape2 animated hiding" data-animation="fadeInUp"><img src="images/home/shape2.svg" alt=""></figure>
            <figure class="shape4 animated hiding" data-animation="fadeInUp"><img src="images/home/shape4.svg" alt=""></figure>
            <!-- <figure class="icon-download"><img src="images/home/icon-download.svg" alt=""></figure>d -->
            <div class="container">
                <div class="slots-left">
                    <div class="slots-content">
                        <span>Slots Left</span>
                        <h4 class="slot-num"><?php echo $count; ?></h4>
                    </div>
                </div>
                <div class="get-early-access">
                    <div class="get-access-title">
                        <h3>Get Early Access</h3>
                        <p>Be one of the first to experience mobile investing.</p>
                    </div>
                    <div class="form-wrapper">
                        <form id="access-form" method="post" action="" novalidate="">
                            <div class="row-wrap">
                                <div class="input-wrap input-half">
                                    <input type="text" id="first-name" name="" placeholder="First Name">
                                </div>
                                <div class="input-wrap input-half">
                                    <input type="text" id="last-name" name="" placeholder="Last Name">
                                </div>
                            </div>
                            <div class="row-wrap">
                                <div class="input-wrap input-half">
                                    <input type="email" id="email-account" name="" placeholder="Email Address">
                                </div>
                                <div class="input-wrap input-half">
                                    <input type="tel" id="contact-num" name="" placeholder="Mobile Number" maxlength="15" onkeypress="return event.charCode === 0 || /[\d-+=,()]/.test(String.fromCharCode(event.charCode));">
                                </div>
                            </div>
                            <div class="custom-checkbox">
                                <input type="checkbox" name="" id="term-checkbox">
                                <label for="term-checkbox"><span><i>I agree to allow Manulife to use my information to contact me about<br>Manulife products and information.</i></span></label>
                            </div>
                            <div class="custom-checkbox">
                                <input id="qualified-checkbox" type="checkbox">
                                <label for="qualified-checkbox"><span><i>Are you qualified to buy GradMaker? </i><a id="qualified-faq">Click here to find out</a></span></label>
                            </div>
                            <p class="form-privacy"><i>Manulife values your privacy. By clicking</i> I’m in!, <i>You're giving Manulife consent to process the data and information that you provided.</i></p>
                            <div class="text-center">
                                <div class="wavy-loader"><span></span><span></span><span></span></div>
                                <div class="input-wrap">
                                    <input class="btn" type="submit" name="" value="I'm in!">
                                </div>
                                <p class="ty-message">You've secured your slot to get notified when the app is ready. Thanks and we'll be in touch!</p>
                            </div>
                        </form>
                    </div>
                </div>

                <!-- <div class="act-now">
                    <div class="sec-head-title text-center animated hiding" data-animation="fadeInUp">
                        <h2>Download the <br class="mobile-br">app now!</h2>
                        <p>Be a GradMaker today!</p>
                    </div>
                    <div class="act-download animated hiding" data-animation="fadeInUp">
                        <ul>
                            <li><a href="#" class="btn"><span class="i-icon icon-icon-apple"></span>App Store</a></li>
                            <li><a href="#" class="btn"><span class="i-icon icon-icon-google"></span>Google Play</a></li>
                        </ul>
                    </div>
                </div> -->
            </div>
        </section>

        <section id="section8" class="sec-wrap section8 bg-white jq-section">
            <div class="container">
                <div class="sec-head-title text-center animated hiding" data-animation="fadeInUp">
                    <h2><span>Meet Our</span> Co-creators</h2>
                </div>
                <div class="carousel-cocreate owl-carousel">
                    <div class="item">
                        <div class="cc-people">
                            <a href="co-creator.html">
                                <div class="cc-img"><img src="images/co-creator/catherine_esguerra.jpg" alt=""></div>
                                <div class="cc-text">
                                    <h5>Catherine Esguerra</h5>
                                    <h6><span>Product Manager, </span><span>Mom of Cahlean</span></h6>
                                    <div class="cc-excerpt">
                                        <span class="icon-blockquote">“</span>
                                        <p>An easy and hassle-free way of building your child's education fund</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="item">
                        <div class="cc-people">
                            <a href="co-creator.html">
                                <div class="cc-img"><img src="images/co-creator/jericho_bautista.jpg" alt=""></div>
                                <div class="cc-text">
                                    <h5>Jericho Bautista</h5>
                                    <h6><span>Local Product Risk Manager, </span><span>Dad of Connor</span></h6>
                                    <div class="cc-excerpt">
                                        <span class="icon-blockquote">“</span>
                                        <p>GradMaker is a smart saving for your kid’s education.</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="item">
                        <div class="cc-people">
                            <a href="co-creator.html">
                                <div class="cc-img"><img src="images/co-creator/steve_ng.jpg" alt=""></div>
                                <div class="cc-text">
                                    <h5>Steve Ng </h5>
                                    <h6><span>Product Manager, </span><span>Dad of Rachel and Sam</span></h6>
                                    <div class="cc-excerpt">
                                        <span class="icon-blockquote">“</span>
                                        <p>This is the future of insurance as it is very simple to understand and very easy and convenient to buy</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="item">
                        <div class="cc-people">
                            <a href="co-creator.html">
                                <div class="cc-img"><img src="images/co-creator/jeannie_domingo.jpg" alt=""></div>
                                <div class="cc-text">
                                    <h5>Jeannie Domingo </h5>
                                    <h6><span>Investment Specialist, </span><span>Mom of Charles and Andre</span></h6>
                                    <div class="cc-excerpt">
                                        <span class="icon-blockquote">“</span>
                                        <p>Its a good innovation for busy moms and dads like me, with this app I can secure my children's future</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="item">
                        <div class="cc-people">
                            <a href="co-creator.html">
                                <div class="cc-img"><img src="images/co-creator/cherrylyn_sanjuan.jpg" alt=""></div>
                                <div class="cc-text">
                                    <h5>Cherrylyn San Juan</h5>
                                    <h6><span>Cherrylyn San Juan, </span><span>Mom of Rain, Ayesha and Reese</span></h6>
                                    <div class="cc-excerpt">
                                        <span class="icon-blockquote">“</span>
                                        <p>I believe that through this app, a lot of parents will have clearer vision for their kids</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="item">
                        <div class="cc-people">
                            <a href="co-creator.html">
                                <div class="cc-img"><img src="images/co-creator/gary_largazon.jpg" alt=""></div>
                                <div class="cc-text">
                                    <h5>Gary Lagrazon</h5>
                                    <h6><span>Underwriting Specialist, </span><span>Dad to Yesha and Faye</span></h6>
                                    <div class="cc-excerpt">
                                        <span class="icon-blockquote">“</span>
                                        <p>Being the first educational plan with a lot to offer through GradMaker app is truly unique</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="item">
                        <div class="cc-people">
                            <a href="co-creator.html">
                                <div class="cc-img"><img src="images/co-creator/michelle_valle.jpg" alt=""></div>
                                <div class="cc-text">
                                    <h5>Michelle Valle </h5>
                                    <h6><span>Business Development Head , </span><span>Mom of Toby, Lukas and Joey</span></h6>
                                    <div class="cc-excerpt">
                                        <span class="icon-blockquote">“</span>
                                        <p>GradMaker motivates me to invest now for my child's future.</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="item">
                        <div class="cc-people">
                            <a href="co-creator.html">
                                <div class="cc-img"><img src="images/co-creator/jaymie_mirandilla.jpg" alt=""></div>
                                <div class="cc-text">
                                    <h5>Jaymie Mirandilla</h5>
                                    <h6><span>Claims Sr. Supervisor  , </span><span>Mom of Rafael</span></h6>
                                    <div class="cc-excerpt">
                                        <span class="icon-blockquote">“</span>
                                        <p>I love GradMaker because I can invest and save for my child's future at the palm of my hands. Try it!</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="item">
                        <div class="cc-people">
                            <a href="co-creator.html">
                                <div class="cc-img"><img src="images/co-creator/jean_decastro.jpg" alt=""></div>
                                <div class="cc-text">
                                    <h5>Jean De Castro </h5>
                                    <h6><span>Fixed Income Fund Manager  , </span><span>Mom of Manolo</span></h6>
                                    <div class="cc-excerpt">
                                        <span class="icon-blockquote">“</span>
                                        <p>GradMaker is an innovative,  convenient and hassle-free way to invest and save for your child‘s future. I highly recommend it.</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </section>
</section>
<footer>
    <div class="top-footer">
        <div class="container">
            <ul>
                <li><a href="https://www.manulife.com.ph/Products_Solutions" target="_blank">Product &amp; Solutions </a></li>
                <li><a href="https://www.manulife.com.ph/Customer-Support" target="_blank">Customer Support</a></li>
                <li><a href="https://www.manulife.com.ph/Careers" target="_blank">Careers</a></li>
                <li><a href="https://www.manulife.com.ph/About-Us" target="_blank">About Us</a></li>
            </ul>
        </div>
    </div>
    <div class="container">
        <div class="social-wrap">
            <ul>
                <li><a href="https://www.facebook.com/ManulifePH" target="_blank"><span class="i-icon icon-icon-fb"></span></a></li>
                <li><a href="https://twitter.com/ManulifePH" target="_blank"><span class="i-icon icon-icon-twitter"></span></a></li>
                <li><a href="https://www.instagram.com/manulife/" target="_blank"><span class="i-icon icon-instagram"></span></a></li>
                <li><a href="https://www.linkedin.com/company/manulife-financial" target="_blank"><span class="i-icon icon-linkedin"></span></a></li>
                <li><a href="https://www.youtube.com/user/ManulifeFinancial" target="_blank"><span class="i-icon icon-youtube"></span></a></li>
            </ul>
        </div>
        <div class="sitemap-wrap">
            <ul>
                <li><a href="http://www.manulife.com/" target="_blank">Manulife Worldwide</a></li>
                <li><a href="https://www.manulife.com.ph/Sitemap" target="_blank">Sitemap</a></li>
                <li><a href="https://manulife.secure.force.com/Privacy-Policy?rdr=y" target="_blank">Privacy Policy</a></li>
                <li><a href="https://www.manulife.com.ph/Terms-of-Use" target="_blank">Terms of Use</a></li>
            </ul>
        </div>
        <p class="copyright m-b-space">"GradMaker - Investing in your child's future, made easy" is a Registered Trademark of Manulife Philippines.</p>
        <p class="copyright">Copyright © 2016, The Manufacturers Life Insurance Company and its subsidiaries. All rights reserved.</p>
    </div>
</footer>

<script src="js/lib/jquery.min.js"></script>
<script src="js/owl.carousel.js"></script>
<script src="js/jquery.appear.js"></script>
<script src="js/TweenMax.js"></script>
<!-- <script src="js/ScrollToPlugin.min.js"></script> -->
<script src="js/jquery.waterwheelCarousel.js"></script>
<script src="js/jquery.unveil.js"></script>
<script src="js/custom.js"></script>

<script type="text/javascript">
    var player;
    var playerVideo = "unloaded";

    $(window).load(function(){
        // Youtube Video
        setupYTAPI();

        $(document).on('click', '#youtube-video .popup-close', function(e){
            e.preventDefault();
            player.pauseVideo(2);
            $('.popup-wrap').removeClass('active');
        });

        $(document).on('click', '.popup-menu a', function(e){
            e.preventDefault();

            var _this = $(this).attr('href');

            $('.ii-tab-wrap').addClass('active');
            $('.popup-right').css({'display' : 'none'});
            $(_this).css({'display' : 'block'});

            $(_this).find('.lazyload-trigger').unveil(200, function() {
                $(this).load(function() {
                    $(this).siblings('.wavy-loader').remove();
                });
            });

            // $('.popup-wrap').removeClass('active');
            // $(_this).addClass('active');
            // $(_this).find('.lazyload-trigger').unveil(200, function() {
            //        $(_this).find('.wavy-loader').remove();
            //    });


        });



    });

    $(document).ready(function () {

        // $('.popup-wrap').bind('touchmove',function(e){
        //     e.preventDefault();

        //     var touch = e.originalEvent.touches[0] || e.originalEvent.changedTouches[0];
        //     console.log(touch.pageX);
        // });

        $('.popup-right').bind('touchstart', function(e) {
            var touch = e.originalEvent.touches[0] || e.originalEvent.changedTouches[0];
            currentX = touch["clientX"];
            currentY = touch["clientY"];
        });

        var carouselPopBusy = false;

        $('.popup-right').bind('touchmove', function(e) {
            var touch = e.originalEvent.touches[0] || e.originalEvent.changedTouches[0];
            var newX = touch["clientX"];
            var newY = touch["clientY"];
            if (newX > currentX) {

                if( carouselPopBusy == false) {
                    carouselPopBusy = true;

                    // console.log($(this).find('.popup-menu li.active'));
                    if($(this).find('.popup-menu li.active').is(':first-child')) {
                        $(this).find('.popup-menu li:last-child > a').click();
                        setTimeout(function(){
                            carouselPopBusy = false;
                        },500);
                    } else {
                        $(this).find('.popup-menu li.active').prev().find('a').click();
                        setTimeout(function(){
                            carouselPopBusy = false;
                        },500);
                    }

                }

            } else {
                if( carouselPopBusy == false) {
                    carouselPopBusy = true;
                    if($(this).find('.popup-menu li.active').is(':last-child')) {
                        $(this).find('.popup-menu li:first-child > a').click();
                    } else {
                        $(this).find('.popup-menu li.active').next().find('a').click();
                    }

                    setTimeout(function(){
                        carouselPopBusy = false;
                    },500);
                }
            }
            currentX = newX;
            currentY = newY;
        });

        // Carousel Co-Creator
        $('.carousel-cocreate').owlCarousel({
            loop: false,
            margin: 0,
            nav: true,
            dots: true,

            responsive: {
                0: {
                    items: 1,
                    center: true,
                    loop:true,
                    margin: 30,
                },

                375: {
                    items: 1,
                    center: true,
                    loop:true,
                    margin: 50,
                },

                640: {
                    items: 2,
                    center: true,
                    loop:true,
                    margin: 30,
                },

                767: {
                    items: 2
                },

                1000: {
                    items: 3
                }
            }
        })

        // Carousel Feature
        $('.carousel-feature').owlCarousel({
            loop: false,
            margin: 10,
            nav: false,
            dots: true,

            responsive: {
                0: {
                    items: 1,
                    center: true,
                    loop:true
                },

                640: {
                    items: 1,
                    margin: 0,
                    center: true,
                    loop:true,

                },

                767: {
                    items: 2,
                    center: true,
                    loop:true
                },
                1000: {
                    items: 3
                }
            }
        });

        // Section Menu
        $('.sn-menu ul li a').click(function(e){
            e.preventDefault();

            var _this = $(this);
            $targetDiv = $(_this.attr('href'));
            $('.sn-menu ul li').removeClass('active');
            _this.closest('li').addClass('active');
            scrollToDiv($targetDiv, 0);

            // if($(this).parent('li:nth-child(4)').hasClass('active')) {
            //              $('.sn-menu').addClass('sn-green');

            //          }
            //          else if($(this).parent('li:nth-child(6)').hasClass('active')) {
            //              $('.sn-menu').addClass('sn-green');

            //          } else if($(this).parent('li:nth-child(8)').hasClass('active')) {
            //              $('.sn-menu').addClass('sn-green');
            //          }
            //          else {
            //              $('.sn-menu').removeClass('sn-green');
            //          }





        });

        // Early Access
        $('.btn-early-access').click(function(e){
            e.preventDefault();
            var wH = $('header').outerHeight(false);
            $("html, body").animate({ scrollTop: $('#section7').offset().top - (wH - 2) }, 700);

            $('.mobile-menu').removeClass('active');
            $('.header-hamburger').removeClass('active');
        });

        //
        $('.btn-get-app, .btn-start').click(function(e){
            e.preventDefault();
            var wH = $('header').outerHeight(false);
            $("html, body").animate({ scrollTop: $('#section7').offset().top - (wH - 2) }, 700);
        });

        // Section 2 Carousel
        if($("#dream-carousel").length > 0) {

            var carousel = $("#dream-carousel").waterwheelCarousel({
                flankingItems: 3,
                separation: ($(window).width() < 1024) ? 200 : 294,
                opacityMultiplier: 1,
                animationEasing: 'swing',
                activeClassName: 'active',
                keyboardNav: true,
            });

            // $("#dream-carousel").on("swipeleft",function(){
            //   carousel.next();
            // });
            // $("#dream-carousel").on("swiperight",function(){
            //   carousel.prev();
            // });

            $(window).resize(function(){
                carousel.reload({
                    lankingItems: 3,
                    separation: ($(window).width() < 1024) ? 200 : 294,
                    opacityMultiplier: 1,
                    animationEasing: 'swing',
                    activeClassName: 'active',
                    keyboardNav: true,
                });
                return false;
            });

            $('.dc-item').click(function(){

                var _thisNum = $(this).data('num');


                $('.dream-dot').removeClass('active');
                $('.dream-dots .dream-dot[data-num='+ _thisNum +']').addClass('active');
            });

            $('.dream-dots .dream-dot').click(function(e){
                e.preventDefault();

                var _thisNum = $(this).data('num');
                $('.dream-dots .dream-dot').removeClass('active');
                $(this).addClass('active');
                $('#item-'+_thisNum+'').closest('.dc-item').click();
            });
        }


        $('.ii-circle a').click(function(e){
            e.preventDefault();
            var _this = $(this).attr('href');

            $('.ii-tab-wrap').addClass('active');
            $('.popup-right').css({'display' : 'none'});
            $(_this).css({'display' : 'block'});

            $(_this).find('.lazyload-trigger').unveil(200, function() {
                $(this).load(function() {
                    $(this).siblings('.wavy-loader').remove();
                });
            });
        });

        $(document).on('click', '.popup-close', function(e){
            e.preventDefault();

            $(this).closest('.ii-tab-wrap').removeClass('active');
        });


        // Mobile Section 2 Carousel
        (function() {
            var rotate, timeline;

            rotate = function() {
                // return $('#dream-carousel-mobile .dc-item:first-child').animate(400, 'swing', function() {
                // return $('#dream-carousel-mobile .dc-item:first-child').appendTo('#dream-carousel-mobile').hide();
                // }).fadeIn(400, 'swing');

                $('#dream-carousel-mobile .dc-item:first-child').animate({'opacity' : 0, transform : 'scale(0)'}, 'swing', function(){
                    $('#dream-carousel-mobile .dc-item:first-child').appendTo('#dream-carousel-mobile').css({'opacity' : 0, transform : 'scale(0)'});
                }).animate({'opacity' : 1, transform : 'scale(1)', 'display' : 'block'}, function(){
                    setTimeout(function(){
                        $('#dream-carousel-mobile .dc-item:last-child').removeAttr('style');
                    }, 100);
                });
            };


            //timeline = setInterval(rotate, 7000);

            $('#dream-carousel-mobile').hover(function() {
                return clearInterval(timeline);
            });

            isBusy = false;

            $('#dream-carousel-mobile .dc-item').click(function(e) {
                e.preventDefault();

                if( isBusy == false) {

                    isBusy = true;
                    setTimeout(function(){
                        isBusy = false;
                    }, 400);
                    return rotate();
                }

            });

            $('#dream-dots-mobile a').click(function(e){
                e.preventDefault();

                $('#dream-dots-mobile .dream-dot').removeClass('active');
                $(this).closest('.dream-dot').addClass('active');
                var _this = $(this).data('num');
                var test = $('#dream-carousel-mobile .dc-item[data-num='+ _this +']').prevAll('.dc-item').css({'opacity' : 0});

                // $('#dream-carousel-mobile  .dc-item[data-num='+ _this +']').prevAll('.dc-item').fadeOut(400, 'swing', function() {
                // 	$('#dream-carousel-mobile').append(test);
                // }).fadeIn(400, 'swing');

                $('#dream-carousel-mobile  .dc-item[data-num='+ _this +']').prevAll('.dc-item').animate({'opacity' : 0,  transform : 'scale(0)'}, 'swing', function(){
                    $('#dream-carousel-mobile').append(test).css({'opacity' : 1,  transform : 'scale(1)'}).removeAttr('style');
                }).animate({'opacity' : 1,  transform : 'scale(1)', 'display' : 'block'}, function(){
                    setTimeout(function(){
                        $('#dream-carousel-mobile .dc-item').removeAttr('style');
                    }, 100);
                });

                return clearInterval(timeline);
            });

            var isBusyFill = false;

            $('#dream-carousel-mobile')[0].addEventListener('touchstart', function(e) {
                var touch = e.touches[0] || e.changedTouches[0];
                currentX = touch["clientX"];
                currentY = touch["clientY"];
            });
            $('#dream-carousel-mobile')[0].addEventListener('touchmove', function(e) {
                var touch = e.touches[0] || e.changedTouches[0];
                var newX = touch["clientX"];
                var newY = touch["clientY"];
                if (Math.abs(newX - currentX) > Math.abs(newY - currentY)) {
                    e.preventDefault();
                    var itScrolledDir = "";
                    if (newX > currentX) {

                        if( isBusyFill == false) {
                            isBusyFill = true;
                            $('#dream-carousel-mobile .dc-item').click();
                            setTimeout(function(){
                                isBusyFill = false;
                            },500);

                            return clearInterval(timeline);
                        }

                    } else {
                        if( isBusyFill == false) {
                            isBusyFill = true;
                            $('#dream-carousel-mobile .dc-item').click();
                            setTimeout(function(){
                                isBusyFill = false;
                            },500);

                            return clearInterval(timeline);
                        }
                    }
                }
                currentX = newX;
                currentY = newY;
            });

        }).call(this);
    });


    function setupYTAPI() {
        tag = document.createElement('script');
        tag.src = "https://www.youtube.com/iframe_api";
        firstScriptTag = document.getElementsByTagName('script')[0];
        firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);
    }



    function onYouTubeIframeAPIReady() {
        playerVideo = "ready";
        //$(".home-slide-thumb li").each(function(index) {
        $(document).on('click', '.play-video', function(e) {
            e.preventDefault();
            var _thisbtn = $(this);
            var videoId = $(this).attr('data-videoid');

            if ( $(_thisbtn).hasClass("isPlaying") ) {

                if($(_thisbtn).hasClass('pause')) {
                    $('#youtube-video').addClass('active');
                    player.playVideo();
                }
            } else {
                stopVideo();
                $('#youtube-video').addClass('active');
                $('.play-video').removeClass('isPlaying').removeClass('pause');
                $(_thisbtn).addClass("isPlaying").addClass('pause');
                $('#youtube-video').find('.video-holder').append("<div id='player'></div>");
                $(_thisbtn).closest('li').addClass('active');
                player = new YT.Player('player', {
                    height: $(".video-holder").height(),
                    width: $(".video-holder").width(),
                    playerVars: { 'controls':0, 'showinfo':0, 'cc_load_policy':0, 'rel':0, 'autoplay':1},
                    videoId: videoId,
                    events: {
                        'onReady': onPlayerReady,
                        'onStateChange': onPlayerStateChange
                    }
                });
            }
        });

    }

    function onPlayerReady(event) {
    }

    function onPlayerStateChange(event) {
        if (event.data == YT.PlayerState.ENDED) {
            playerVideo = "complete";
            stopVideo();
        }

        if(event.data == YT.PlayerState.PLAYING ) {

        }
    }

    function stopVideo() {
        if (player) {
            player = null;
            $("#player").attr("src","");
            $("#player").remove();
            $('.popup-wrap').removeClass('active');
            $(".play-video.isPlaying").removeClass("isPlaying").removeClass('pause');
            $('.video-holder').html('');
        }

    }
</script>

</body>
</html>

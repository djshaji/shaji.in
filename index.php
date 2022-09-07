<?php
if (sizeof ($_GET) != 0)
        include 'r.php';
die () ;
?>

<!DOCTYPE html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>Shaji Khan</title>
    <meta name="description" content="There's a little bit of Shaji in all of us." />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="shortcut icon" type="image/x-icon" href="assets/images/favicon.svg" />

    <!-- ========================= CSS here ========================= -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="assets/css/LineIcons.3.0.css" />
    <link rel="stylesheet" href="assets/css/animate.css" />
    <link rel="stylesheet" href="assets/css/tiny-slider.css" />
    <link rel="stylesheet" href="assets/css/glightbox.min.css" />
    <link rel="stylesheet" href="assets/css/main.css" />

</head>
<body>
<div class="preloader">
        <div class="preloader-inner">
            <div class="preloader-icon">
                <span></span>
                <span></span>
            </div>
        </div>
    </div>
    <!-- Start Header Area -->
    <header class="header navbar-area">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <div class="nav-inner">
                        <!-- Start Navbar -->
                        <nav class="navbar navbar-expand-lg">
                            <a class="navbar-brand bg-primary text-white p-3" style="border-radius:30px" href="index.html">
                                <!-- <img src="assets/images/logo/logo.svg" alt="Logo"> -->
                                <i class="lni lni-friendly pe-2"></i>
                                Shaji Khan
                            </a>
                            <button class="navbar-toggler mobile-menu-btn" type="button" data-bs-toggle="collapse"
                                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                                aria-expanded="false" aria-label="Toggle navigation">
                                <span class="toggler-icon"></span>
                                <span class="toggler-icon"></span>
                                <span class="toggler-icon"></span>
                            </button>
                            <div class="collapse navbar-collapse sub-menu-bar" id="navbarSupportedContent">
                                <ul id="nav" class="navbar-nav ms-auto">
                                    <li class="nav-item">
                                        <a class="dd-menu active collapsed" href="index.html" data-bs-toggle="collapse"
                                            data-bs-target="#submenu-1-1" aria-controls="navbarSupportedContent"
                                            aria-expanded="false" aria-label="Toggle navigation">Home</a>
                                        <ul class="sub-menu collapse" id="submenu-1-1">
                                            <li class="nav-item active"><a href="index.html">Saas Homepage</a></li>
                                            <li class="nav-item"><a href="index2.html">Startup Homepage</a></li>
                                        </ul>
                                    </li>
                                    <li class="nav-item">
                                        <a href="https://music.shaji.in" aria-label="Toggle navigation">Music</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="https://blog.shaji.in" aria-label="Toggle navigation">Blog</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="https://wa.me/917006351732" aria-label="Toggle navigation">Contact</a>
                                    </li>
                                </ul>
                            </div> <!-- navbar collapse -->
                        </nav>
                        <!-- End Navbar -->
                    </div>
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </header>
    <!-- End Header Area -->
    <section class="hero-area">
        <div class="main__circle"></div>
        <div class="main__circle2"></div>
        <div class="main__circle3"></div>
        <div class="main__circle4"></div>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5 col-md-12 col-12">
                    <div class="hero-content">
                        <h1><span style="font-size:70%" class="wow fadeInUp" data-wow-delay=".4s">There's a little bit of</span>
                            <span class="color2 wow fadeInUp" data-wow-delay=".8s">Shaji</span>
                            <span style="font-size:70%" class="wow fadeInUp" data-wow-delay="1.2s">in all</span>
                            <span style="font-size:70%" class="color2 wow fadeInUp" data-wow-delay="1.6s">of us</span>
                        </h1>
                        <p>My Music, Code, Travel and more!</p>
                        <div class="button">
                            <a href="https://wa.me/917006351732" class="btn ">Talk to me</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7 col-12">
                    <div class="app-image">
                        <div class="image-bg-shape"></div>
                        <img class="shadow" style="border-radius: 35px" src="assets/images/hero/hero.jpg" alt="#">
                    </div>
                </div>
            </div>
        </div>

        
    </section>

    <!-- Start Services Area -->
    <section class="services section">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-title">
                        <h3 class="wow zoomIn" data-wow-delay=".2s">My World</h3>
                        <h2 class="wow fadeInUp" data-wow-delay=".4s">Explore the World of Shaji</h2>
                        <p class="wow fadeInUp" data-wow-delay=".6s">Things I have made</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 col-12 wow fadeInUp" data-wow-delay=".4s">
                    <!-- Start Single Service -->
                    <div class="single-service one">
                        <div class="service-icon">
                            <i class="lni lni-music"></i>
                        </div>
                        <h3>My Music</h3>
                        <p>I sing, write my own songs, play guitar and synth, record, produce and master from my own home studio.</p>
                        <a href="https://music.shaji.in">Learn More <i class="lni lni-arrow-right"></i></a>
                    </div>
                    <!-- End Single Service -->
                </div>
                <div class="col-lg-4 col-md-6 col-12 wow fadeInUp" data-wow-delay=".6s">
                    <!-- Start Single Service -->
                    <div class="single-service two">
                        <div class="service-icon">
                            <i class="lni lni-code"></i>
                        </div>
                        <h3>My Code</h3>
                        <p>I love to code. I delve in C, Python, Java (short for Javascript), PHP, and most of all, HTML.</p>
                        <a href="https://github.com/djshaji/">My code on Github <i class="lni lni-arrow-right"></i></a>
                    </div>
                    <!-- End Single Service -->
                </div>
                <div class="col-lg-4 col-md-6 col-12  wow fadeInUp" data-wow-delay=".8s">
                    <!-- Start Single Service -->
                    <div class="single-service three">
                        <div class="service-icon">
                            <i class="lni lni-car"></i>
                        </div>
                        <h3>My Blog</h3>
                        <p>I love to drive, and home is wherever the road takes me. Check out my mazy meanderings.</p>
                        <a href="https://blog.shaji.in">Learn More <i class="lni lni-arrow-right"></i></a>
                    </div>
                    <!-- End Single Service -->
                </div>
            </div>
        </div>
    </section>
    <!-- /End Services Area -->

    <div class="d-print-none" style="opacity: 80%; height: 40px;transition: all 0.4s; position: fixed;bottom:15px;left:15px;z-index: 9999;">
      <a href="https://wa.me/917006351732" type="button" class="btn btn-sm btn-success bmd-btn-fab">
        <i class="lni lni-whatsapp" style="font-size: 20;" aria-hidden="true"></i>
      </a>
      <a href="tel://+917006351732" type="button" class="btn btn-sm btn-danger bmd-btn-fab">
          <i class="lni lni-phone"  style="font-size: 20;" id='fab-phone'></i>
      </a>      
      <!-- <label class="badge badge-info p-2">Contact me</label> -->
    </div>

    <div id="footer" class="p-4 text-center">
      <div class="copyright">
        Made with <i class="lni text-danger lni-heart-filled"></i> and Coffee.
      </div>

    </div>

    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/wow.min.js"></script>
    <script src="assets/js/tiny-slider.js"></script>
    <script src="assets/js/glightbox.min.js"></script>
    <script src="assets/js/count-up.min.js"></script>
    <script src="assets/js/main.js"></script>
</body>
</html>
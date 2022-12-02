<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Interior Design</title>
    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- slick -->
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css"/>
    <!-- animate -->
    <!-- <link rel="stylesheet" href="assets/css/animate.min.css"> -->
    <!-- style -->
    <link rel="stylesheet" href="assets/css/style.css">

</head>
<body>
    <div class="main">
    <!-- header -->
    <?php include 'inc/header.php';?>
    <!-- header end -->

    <!-- hero -->

        <div class="hero-section">
            <div class="container">
                <div class="row">
                    <div class="col-md-7 col-12 d-flex align-items-center">
                        <div class="hero-head-section">
                            <p class="sm-hero-head"><span>I</span>nterior <span>D</span>esign</p>
                            <h3 >Explore <span>Interior</span><br> Design</h3>
                            <p class="desc">Architecture is basically a container of something. I hope they will enjoy not so much the teacup, but the tea.</p>
                            <a href="#" class="hero-btn">Explore More</a>
                        </div>
                    </div>
                    <div class="col-md-5 col-12">
                        <div class="hero-right-slider">
                            <div class="hero-slider">
                                <div class="d-flex justify-content-center align-items-center">
                                    <div class="bg-slider-box">
                                        <img src="assets/images/hero-slider/slider-2.png" class="img-fluid" alt="">
                                        <div class="bg-slider"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hero-slider">
                                <div class="d-flex justify-content-center align-items-center">
                                    <div class="bg-slider-box">
                                        <img src="assets/images/hero-slider/slider-2.png" class="img-fluid" alt="">
                                        <div class="bg-slider"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <!-- hero end -->

    <!-- about section -->

    <div class="about-section">
        <div class="container">
            <div class="row">
                <div class="row">
                    <div class="col-md-6 col-12 p-0">
                        <img src="assets/images/about.png" class="img-fluid" alt="">
                    </div>
                    <div class="col-md-6 col-12 about-desc-sec">
                        <div class="about-right">
                            <h3 class="main-head">About Us</h3>
                            <p class="main-para">Lorem ipsum dolor sit amet consectetur. Dictum justo faucibus pulvinar pulvinar purus donec id tristique.
                             Vulputate amet arcu sed in facilisis. Lorem ipsum dolor sit amet consectetur. Dictum justo faucibus pulvinar
                              pulvinar purus donec id tristique. Vulputate amet arcu sed in facilisis.</p>
                              <p class="main-para">Lorem ipsum dolor sit amet consectetur. Dictum justo faucibus pulvinar pulvinar purus donec id tristique.
                             Vulputate amet arcu sed in facilisis. Lorem ipsum dolor sit amet consectetur.</p>
                            <div class="counter-interior mt-3">
                                <div class="me-4">
                                    <div class="counter-div"><span class="counter">123</span>+</div>
                                    <div class="counter-label">Projects</div>
                                </div>
                                <div>
                                    <div class="counter-div"><span class="counter">600</span>+</div>
                                    <div class="counter-label">Clients</div>
                                </div>
                            </div>
                            <div class="mt-4">
                                <a href="" class="btn-read-more bn632-hover bn20">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- about section end -->

    <!-- latest project section -->

        <div class="latest-projects-section">
            <div class="gray-box-1"></div>
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-12">
                        <h3 class="main-head mt-md-5 mt-3">Our Latest Projects</h3>
                        <p class="main-para mt-md-5 mt-3">Lorem ipsum dolor sit amet consectetur. Dictum justo faucibus pulvinar pulvinar purus donec id tristique.
                        Vulputate amet arcu sed in facilisis. Lorem ipsum dolor sit amet consectetur. Dictum justo faucibus pulvinar
                        pulvinar</p>
                    </div>
                    <div class="col-md-8 col-12"></div>
                </div>
            </div>
        </div>

    
    <!-- latest project section end -->




    <!-- jquery -->
    <script src="https://code.jquery.com/jquery-3.6.1.js"></script>
    <!-- slick -->
    <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <!-- bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <!-- waypoint -->
    <script src="assets/js/jquery.waypoints.min.js"></script>
    <!-- counter -->
    <script src="assets/js/jquery.countup.js"></script>
    <!-- main js -->
    <script src="assets/js/main.js"></script>



    <!-- counter -->
    <script>
        $('.counter').countUp(
            {
            delay: 5,
            time: 1500
            }
        );
    </script>
    <!-- counter end -->
</body>
</html>



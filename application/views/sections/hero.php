<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- animate css -->
    <link rel="stylesheet" href="<?php echo base_url('assets2/css/plugins/animate.min.css'); ?>">
    <!-- fontawesome 6.4.2 -->
    <link rel="stylesheet" href="<?php echo base_url('assets2/css/plugins/fontawesome.min.css'); ?>">
    <!-- bootstrap min css -->
    <link rel="stylesheet" href="<?php echo base_url('assets2/css/vendor/bootstrap.min.css'); ?>">
    <!-- swiper Css 10.2.0 -->
    <link rel="stylesheet" href="<?php echo base_url('assets2/css/plugins/swiper.min.css'); ?>">
    <!-- Bootstrap 5.0.2 -->
    <link rel="stylesheet" href="<?php echo base_url('assets2/css/vendor/magnific-popup.css'); ?>">
    <!-- metismenu scss -->
    <link rel="stylesheet" href="<?php echo base_url('assets2/css/vendor/metismenu.css'); ?>">
    <!-- nice select js -->
    <link rel="stylesheet" href="<?php echo base_url('assets2/css/plugins/nice-select.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets2/css/plugins/jquery-ui.css'); ?>">
    <!-- custom style css -->
    <link rel="stylesheet" href="<?php echo base_url('assets2/css/style.css'); ?>">
</head>

<body>

    <!-- hero slider start -->
    <div class="rts-hero-slider rt-relative v_2">
        <div class="rts-hero-slider-active swiper swiper-data" data-swiper='{
            "slidesPerView":1,
            "effect": "fade",
            "loop": false,
            "speed": 1000,
            "navigation":{
                "nextEl":".rt-next",
                "prevEl":".rt-prev"
            },
            "pagination":{
                "el": ".rts-swiper-dots",
                "clickable": "true"
            },
            "autoplay":{
                "delay":"7000"
            }
}'>
            <div class="swiper-wrapper">
                <!-- single slider -->
                <div class="swiper-slide">
                    <div class="rts-slider-height rts-slider-overlay rt-relative ">
                        <div class="rts-slider-overlay-element">
                            <img src="<?php echo base_url('assets2/images/banner/shape/002.svg'); ?>" alt="">
                        </div>
                        <div class="rt-rounded-shape">
                            <svg class="rt-svg" viewBox="0 0 120 120" width="120" height="120">
                                <defs>
                                    <!-- Circle Path for Text (radius reduced from 50 to 45) -->
                                    <path id="circlePath" d="M60,60 m-45,0 a45,45 0 1,1 90,0 a45,45 0 1,1 -90,0"></path>
                                </defs>

                                <!-- Text Along Circle -->
                                <text font-size="10" fill="white" textLength="300">
                                    <textPath href="#circlePath" startOffset="0%">
                                        Studyhub University • Estd-1971 • Explore Future
                                    </textPath>
                                </text>
                            </svg>

                            <!-- Icon in the Center -->
                            <div class="rt-icon" style="
      position:absolute;
      top:50%; left:50%;
      transform:translate(-50%, -50%);
      font-size:20px;
  ">
                                <i class="fa-thin fa-arrow-right"></i>
                            </div>
                        </div>

                        <div class="rts-slider-bg" data-background="<?php echo base_url('assets2/images/banner/01.jpg'); ?>"
                            style="background-image: url('<?php echo base_url('assets2/images/banner/02-01.jpg'); ?>')">
                        </div>

                        <div class="container">
                            <div class="row justify-content-lg-center justify-content-xl-start">
                                <div class="col-lg-6 col-xl-6 col-md-8 col-sm-9">
                                    <div class="rts-slider">
                                        <div class="rts-slider-content">
                                            <h6 class="rts-subtitle"><img
                                                    src="<?php echo base_url('assets2/images/icon/e-cap.svg'); ?>"
                                                    alt="education hat"> knowledge meets innovation</h6>
                                            <h1 class="rts-slider-title">
                                                Empowering Vision
                                                Crafting Destinies
                                            </h1>
                                            <p class="rts-slider-desc">
                                                Remember to tailor the section names to fit the specific needs and
                                                structure of your university website.
                                            </p>
                                            <div class="rts-slider-btn">
                                                <a href="<?php echo site_url('welcome'); ?>" class="rts-theme-btn btn-arrow">View Our
                                                    Program <span><i class="fa-thin fa-arrow-right"></i></span></a>
                                                <a href="https://www.youtube.com/watch?v=7ahgosTZJHg"
                                                    class="video-play rts-video-btn popup-video"><span><img
                                                            src="<?php echo base_url('assets2/images/icon/video-btn.svg'); ?>"
                                                            alt="video-btn"></span> Watch Video</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- single slider -->


                <!-- single slider -->
                <div class="swiper-slide">
                    <div class="rts-slider-height rts-slider-overlay rt-relative ">
                        <div class="rts-slider-overlay-element">
                            <img src="<?php echo base_url('assets2/images/banner/shape/002.svg'); ?>" alt="">
                        </div>
                        <div class="rt-rounded-shape">
                            <svg class="rt-svg" viewBox="0 0 120 120" width="120" height="120">
                                <defs>
                                    <!-- Circle Path for Text (radius reduced from 50 to 45) -->
                                    <path id="circlePath" d="M60,60 m-45,0 a45,45 0 1,1 90,0 a45,45 0 1,1 -90,0"></path>
                                </defs>

                                <!-- Text Along Circle -->
                                <text font-size="10" fill="white" textLength="300">
                                    <textPath href="#circlePath" startOffset="0%">
                                        Studyhub University • Estd-1971 • Explore Future
                                    </textPath>
                                </text>
                            </svg>

                            <!-- Icon in the Center -->
                            <div class="rt-icon" style="
      position:absolute;
      top:50%; left:50%;
      transform:translate(-50%, -50%);
      font-size:20px;
  ">
                                <i class="fa-thin fa-arrow-right"></i>
                            </div>
                        </div>

                        <div class="rts-slider-bg" data-background="<?php echo base_url('assets2/images/banner/0.3jpg'); ?>"
                            style="background-image: url('<?php echo base_url('assets2/images/banner/0011.jpg'); ?>') "></div>
                        <div class="container">
                            <div class="row justify-content-lg-center justify-content-xl-start">
                                <div class="col-lg-6 col-xl-6 col-md-8 col-sm-9">
                                    <div class="rts-slider">
                                        <div class="rts-slider-content">
                                            <h6 class="rts-subtitle"><img
                                                    src="<?php echo base_url('assets2/images/icon/e-cap.svg'); ?>"
                                                    alt="education hat"> knowledge meets innovation</h6>
                                            <h1 class="rts-slider-title">
                                                Empowering Vision
                                                Crafting Destinies
                                            </h1>
                                            <p class="rts-slider-desc">
                                                Remember to tailor the section names to fit the specific needs and
                                                structure of your university website.
                                            </p>
                                            <div class="rts-slider-btn">
                                                <a href="<?php echo site_url('welcome'); ?>" class="rts-theme-btn btn-arrow">View Our
                                                    Program <span><i class="fa-thin fa-arrow-right"></i></span></a>
                                                <a href="https://www.youtube.com/watch?v=7ahgosTZJHg"
                                                    class="video-play rts-video-btn popup-video"><span><img
                                                            src="<?php echo base_url('assets2/images/icon/video-btn.svg'); ?>"
                                                            alt="video-btn"></span> Watch Video</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- single slider -->

                <!-- single slider -->
                <div class="swiper-slide">
                    <div class="rts-slider-height rts-slider-overlay rt-relative ">
                        <div class="rts-slider-overlay-element">
                            <img src="<?php echo base_url('assets2/images/banner/shape/002.svg'); ?>" alt="">
                        </div>
                        <div class="rt-rounded-shape">
                            <svg class="rt-svg" viewBox="0 0 120 120" width="120" height="120">
                                <defs>
                                    <!-- Circle Path for Text (radius reduced from 50 to 45) -->
                                    <path id="circlePath" d="M60,60 m-45,0 a45,45 0 1,1 90,0 a45,45 0 1,1 -90,0"></path>
                                </defs>

                                <!-- Text Along Circle -->
                                <text font-size="10" fill="white" textLength="300">
                                    <textPath href="#circlePath" startOffset="0%">
                                        Studyhub University • Estd-1971 • Explore Future
                                    </textPath>
                                </text>
                            </svg>

                            <!-- Icon in the Center -->
                            <div class="rt-icon" style="
      position:absolute;
      top:50%; left:50%;
      transform:translate(-50%, -50%);
      font-size:20px;
  ">
                                <i class="fa-thin fa-arrow-right"></i>
                            </div>
                        </div>

                        <div class="rts-slider-bg" data-background="<?php echo base_url('assets2/images/banner/02-01.jpg'); ?>"
                            style="background-image: url('<?php echo base_url('assets2/images/banner/0022.jpg'); ?>') "></div>
                        <div class="container">
                            <div class="row justify-content-lg-center justify-content-xl-start">
                                <div class="col-lg-6 col-xl-6 col-md-8 col-sm-9">
                                    <div class="rts-slider">
                                        <div class="rts-slider-content">
                                            <h6 class="rts-subtitle"><img
                                                    src="<?php echo base_url('assets2/images/icon/e-cap.svg'); ?>"
                                                    alt="education hat"> knowledge meets innovation</h6>
                                            <h1 class="rts-slider-title">
                                                Empowering Vision
                                                Crafting Destinies
                                            </h1>
                                            <p class="rts-slider-desc">
                                                Remember to tailor the section names to fit the specific needs and
                                                structure of your university website.
                                            </p>
                                            <div class="rts-slider-btn">
                                                <a href="academic.html" class="rts-theme-btn btn-arrow">View Our Program
                                                    <span><i class="fa-thin fa-arrow-right"></i></span></a>
                                                <a href="https://www.youtube.com/watch?v=7ahgosTZJHg"
                                                    class="video-play rts-video-btn popup-video"><span><img
                                                            src="<?php echo base_url('assets2/images/icon/video-btn.svg'); ?>"
                                                            alt="video-btn"></span> Watch Video</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- single slider -->

                <!-- single slider -->
                <div class="swiper-slide">
                    <div class="rts-slider-height rts-slider-overlay rt-relative ">
                        <div class="rts-slider-overlay-element">
                            <img src="<?php echo base_url('assets2/images/banner/shape/002.svg'); ?>" alt="">
                        </div>
                        <div class="rt-rounded-shape">
                            <svg class="rt-svg" viewBox="0 0 120 120" width="120" height="120">
                                <defs>
                                    <!-- Circle Path for Text (radius reduced from 50 to 45) -->
                                    <path id="circlePath" d="M60,60 m-45,0 a45,45 0 1,1 90,0 a45,45 0 1,1 -90,0"></path>
                                </defs>

                                <!-- Text Along Circle -->
                                <text font-size="10" fill="white" textLength="300">
                                    <textPath href="#circlePath" startOffset="0%">
                                        Studyhub University • Estd-1971 • Explore Future
                                    </textPath>
                                </text>
                            </svg>

                            <!-- Icon in the Center -->
                            <div class="rt-icon" style="
      position:absolute;
      top:50%; left:50%;
      transform:translate(-50%, -50%);
      font-size:20px;
  ">
                                <i class="fa-thin fa-arrow-right"></i>
                            </div>
                        </div>

                        <div class="rts-slider-bg" data-background="<?php echo base_url('assets2/images/banner/02-01.jpg'); ?>"
                            style="background-image: url('<?php echo base_url('assets2/images/banner/02-01.jpg'); ?>') "></div>
                        <div class="container">
                            <div class="row justify-content-lg-center justify-content-xl-start">
                                <div class="col-lg-6 col-xl-6 col-md-8 col-sm-9">
                                    <div class="rts-slider">
                                        <div class="rts-slider-content">
                                            <h6 class="rts-subtitle"><img
                                                    src="<?php echo base_url('assets2/images/icon/e-cap.svg'); ?>"
                                                    alt="education hat"> knowledge meets innovation</h6>
                                            <h1 class="rts-slider-title">
                                                Empowering Vision
                                                Crafting Destinies
                                            </h1>
                                            <p class="rts-slider-desc">
                                                Remember to tailor the section names to fit the specific needs and
                                                structure of your university website.
                                            </p>
                                            <div class="rts-slider-btn">
                                                <a href="academic.html" class="rts-theme-btn btn-arrow">View Our Program
                                                    <span><i class="fa-thin fa-arrow-right"></i></span></a>
                                                <a href="https://www.youtube.com/watch?v=7ahgosTZJHg"
                                                    class="video-play rts-video-btn popup-video"><span><img
                                                            src="<?php echo base_url('assets2/images/icon/video-btn.svg'); ?>"
                                                            alt="video-btn"></span> Watch Video</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- single slider -->

                <!-- single slider -->
                <div class="swiper-slide">
                    <div class="rts-slider-height rts-slider-overlay rt-relative ">
                        <div class="rts-slider-overlay-element">
                            <img src="<?php echo base_url('assets2/images/banner/shape/002.svg'); ?>" alt="">
                        </div>
                        <div class="rt-rounded-shape">
                            <svg class="rt-svg" viewBox="0 0 120 120" width="120" height="120">
                                <defs>
                                    <!-- Circle Path for Text (radius reduced from 50 to 45) -->
                                    <path id="circlePath" d="M60,60 m-45,0 a45,45 0 1,1 90,0 a45,45 0 1,1 -90,0"></path>
                                </defs>

                                <!-- Text Along Circle -->
                                <text font-size="10" fill="white" textLength="300">
                                    <textPath href="#circlePath" startOffset="0%">
                                        Studyhub University • Estd-1971 • Explore Future
                                    </textPath>
                                </text>
                            </svg>

                            <!-- Icon in the Center -->
                            <div class="rt-icon" style="
      position:absolute;
      top:50%; left:50%;
      transform:translate(-50%, -50%);
      font-size:20px;
  ">
                                <i class="fa-thin fa-arrow-right"></i>
                            </div>
                        </div>

                        <div class="rts-slider-bg" data-background="<?php echo base_url('assets2/images/banner/02-01.jpg'); ?>"
                            style="background-image: url('<?php echo base_url('assets2/images/banner/02-03.jpg'); ?>') "></div>
                        <div class="container">
                            <div class="row justify-content-lg-center justify-content-xl-start">
                                <div class="col-lg-6 col-xl-6 col-md-8 col-sm-9">
                                    <div class="rts-slider">
                                        <div class="rts-slider-content">
                                            <h6 class="rts-subtitle"><img
                                                    src="<?php echo base_url('assets2/images/icon/e-cap.svg'); ?>"
                                                    alt="education hat"> knowledge meets innovation</h6>
                                            <h1 class="rts-slider-title">
                                                Empowering Vision
                                                Crafting Destinies
                                            </h1>
                                            <p class="rts-slider-desc">
                                                Remember to tailor the section names to fit the specific needs and
                                                structure of your university website.
                                            </p>
                                            <div class="rts-slider-btn">
                                                <a href="index-three.html#" class="rts-btn btn-arrow">View Our Program
                                                    <i class="fa-light fa-arrow-right"></i></a>
                                                <a href="https://www.youtube.com/watch?v=7ahgosTZJHg"
                                                    class="video-play rts-video-btn popup-video"><span><img
                                                            src="<?php echo base_url('assets2/images/icon/video-btn.svg'); ?>"
                                                            alt="video-btn"></span> Watch Video</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- single slider -->

                <!-- slider arrow -->
                <!--   <div class="rts-slider-arrow">
                <div class="rt-slider-btn rt-next">
                    <i class="fa-regular fa-arrow-left"></i>
                </div>
                <div class="rt-slider-btn rt-prev">
                    <i class="fa-regular fa-arrow-right"></i>
                </div>
            </div> -->
                <div class="rts-swiper-dots"></div>
            </div>
        </div>
        <!-- hero slider  end -->








        <!-- scripts -->
        <!-- jquery js -->
        <script src="<?php echo base_url('assets2/js/vendor/jquery.min.js'); ?>"></script>
        <!-- bootstrap 5.0.2 -->
        <script src="<?php echo base_url('assets2/js/plugins/bootstrap.min.js'); ?>"></script>
        <!-- jquery ui js -->
        <script src="<?php echo base_url('assets2/js/vendor/jquery-ui.js'); ?>"></script>
        <!-- wow js -->
        <script src="<?php echo base_url('assets2/js/vendor/waw.js'); ?>"></script>
        <!-- mobile menu -->
        <script src="<?php echo base_url('assets2/js/vendor/metismenu.js'); ?>"></script>
        <!-- magnific popup -->
        <script src="<?php echo base_url('assets2/js/vendor/magnifying-popup.js'); ?>"></script>
        <!-- swiper JS 10.2.0 -->
        <script src="<?php echo base_url('assets2/js/plugins/swiper.js'); ?>"></script>
        <!-- counterup -->
        <script src="<?php echo base_url('assets2/js/plugins/counterup.js'); ?>"></script>
        <script src="<?php echo base_url('assets2/js/vendor/waypoint.js'); ?>"></script>
        <!-- isotop mesonary -->
        <script src="<?php echo base_url('assets2/js/plugins/isotop.js'); ?>"></script>
        <script src="<?php echo base_url('assets2/js/plugins/imagesloaded.pkgd.min.js'); ?>"></script>
        <!-- isotop mesonary end-->
        <script src="<?php echo base_url('assets2/js/plugins/resizer-sensor.js'); ?>"></script>
        <script src="<?php echo base_url('assets2/js/plugins/sticky-sidebar.js'); ?>"></script>
        <script src="<?php echo base_url('assets2/js/vendor/chroma.min.js'); ?>"></script>
        <script src="<?php echo base_url('assets2/js/plugins/twinmax.js'); ?>"></script>
        <!-- dymanic Contact Form -->
        <script src="<?php echo base_url('assets2/js/plugins/contact.form.js'); ?>"></script>
        <script src="<?php echo base_url('assets2/js/plugins/nice-select.min.js'); ?>"></script>
        <!-- main Js -->
        <script src="<?php echo base_url('assets2/js/main.js'); ?>"></script>

</body>

</html>
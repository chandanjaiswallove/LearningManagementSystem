<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url('assets/images/fav.png'); ?>">
    <title></title>
    <!-- fontawesome 6.4.2 -->
    <link rel="stylesheet" href="<?php echo base_url('assets/css/plugins/fontawesome-6.css'); ?>">
    <!-- swiper Css 10.2.0 -->
    <link rel="stylesheet" href="<?php echo base_url('assets/css/plugins/swiper.min.css'); ?>">
    <!-- magnific popup css -->
    <link rel="stylesheet" href="<?php echo base_url('assets/css/vendor/magnific-popup.css'); ?>">
    <!-- Bootstrap 5.0.2 -->
    <link rel="stylesheet" href="<?php echo base_url('assets/css/vendor/bootstrap.min.css'); ?>">
    <!-- jquery ui css -->
    <link rel="stylesheet" href="<?php echo base_url('assets/css/vendor/jquery-ui.css'); ?>">
    <!-- metismenu scss -->
    <link rel="stylesheet" href="<?php echo base_url('assets/css/vendor/metismenu.css'); ?>">
    <!-- custom style css -->
    <link rel="stylesheet" href="<?php echo base_url('assets/css/style.css'); ?>">
</head>

<body>

    <!-- header style one -->
    <header class="header-one v-2 header--sticky">
        <div class="header-top-one-wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="header-top-one">
                            <div class="left-information">
                                <a href="mailto:someone@example.com" class="email"><i
                                        class="fa-light fa-envelope"></i>info@studyhub.com</a>
                                <a href="tel:+4733378901" class="email"><i class="fa-light fa-phone"></i>+61 012 012
                                    445</a>
                            </div>
                            <div class="right-information">
                                <div class="right-information">
                                    <ul class="rts-dropdown-menu switcher-language">
                                        <li class="has-child-menu">
                                            <a href="#">
                                                <img class="left-image"
                                                    src="<?php echo base_url('assets/images/flag-01.svg'); ?>"
                                                    alt="Language Images">
                                                <span class="menu-item">English</span>
                                                <i class="fa-regular fa-chevron-down"></i>
                                            </a>
                                            <ul class="sub-menu">
                                                <li>
                                                    <a href="#">
                                                        <img class="left-image"
                                                            src="<?php echo base_url('assets/images/flag-03.svg'); ?>"
                                                            alt="Language Images">
                                                        <span class="menu-item">Deutsch</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <img class="left-image"
                                                            src="<?php echo base_url('assets/images/flag-02.svg'); ?>"
                                                            alt="Language Images">
                                                        <span class="menu-item">Portuguese</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <img class="left-image"
                                                            src="<?php echo base_url('assets/images/flag-04.svg'); ?>"
                                                            alt="Language Images">
                                                        <span class="menu-item">Russian</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                    <ul class="rts-dropdown-menu switcher-currency">
                                        <li class="has-child-menu">
                                            <a href="#">
                                                <span class="menu-item">INR</span>
                                                <i class="fa-regular fa-chevron-down"></i>
                                            </a>
                                            <ul class="sub-menu">
                                                <li>
                                                    <a href="#">
                                                        <span class="menu-item">Euro</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <span class="menu-item">Real</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <span class="menu-item">Ruble</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="header-one-wrapper">
                        <div class="left-side-header">
                            <a href="#" class="logo-area">
                                <img src="<?php echo base_url('assets/images/logo/logo-1.svg'); ?>" alt="logo">
                            </a>

                            <div class="main-nav-one">
                                <nav>
                                    <ul>
                                        <li class="" style="position: static; ">
                                            <a class="nav-link" href="<?php echo site_url('welcome'); ?>"
                                                style="color:#553cde;">Home</a>


                                        </li>


                                        <!-- <li class="has-dropdown">
                                            <a class="nav-link" href="">Pages</a>
                                            <ul class="submenu">
                                                <li><a href="<?php echo site_url('welcome'); ?>">About Us</a></li>
                                                <li><a href="about-two.html">About Two</a></li>
                                                <li><a href="instructor-profile.html">Profile</a></li>
                                                <li><a href="contact.html">Contact</a></li>
                                                <li class="sub-dropdown">
                                                    <a href="javascript:void(0);">Zoom</a>
                                                    <ul class="submenu third-lvl base">
                                                        <li><a class="mobile-menu-link" href="zoom-meeting.html">Zoom Meeting</a></li>
                                                        <li><a class="mobile-menu-link" href="zoom-details.html">Zoom Details</a></li>
                                                    </ul>
                                                </li>
                                                <li class="sub-dropdown">
                                                    <a href="javascript:void(0);">Event</a>
                                                    <ul class="submenu third-lvl base">
                                                        <li><a class="mobile-menu-link" href="event.html">Event</a></li>
                                                        <li><a class="mobile-menu-link" href="event-2.html">Event Two</a></li>
                                                        <li><a class="mobile-menu-link" href="event-details.html">Event Details</a></li>
                                                    </ul>
                                                </li>
                                                <li class="sub-dropdown">
                                                    <a href="javascript:void(0);">Shop</a>
                                                    <ul class="submenu third-lvl base">
                                                        <li><a class="mobile-menu-link" href="shop.html">Shop</a></li>
                                                        <li><a class="mobile-menu-link" href="product-details.html">Product Details</a></li>
                                                        <li><a class="mobile-menu-link" href="checkout.html">Checkout</a></li>
                                                        <li><a class="mobile-menu-link" href="cart.html">Cart</a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="404.html">Error 404</a></li>
                                            </ul>
                                        </li>  -->

                                        <li class="has-dropdown" style="position: static;">
                                            <a class="nav-link" href="#">Pages</a>
                                            <ul class="megamenu-hub">
                                                <li>
                                                    <ul class="submenu me-1">

                                                        <?php $this->load->view('tabpages/tabpagesone'); ?>




                                                    </ul>
                                                    <ul class="submenu">

                                                        <?php $this->load->view('tabpages/tabpagestwo'); ?>

                                                    </ul>
                                                    <div class="absolute-image-shape shape-image">
                                                        <img class="shape one"
                                                            src="<?php echo base_url('assets/images/nav/02.png'); ?>"
                                                            data-speed="0.04" data-revert="true" alt="nav">
                                                        <img class="shape two"
                                                            src="<?php echo base_url('assets/images/nav/03.png'); ?>"
                                                            data-speed="0.04" alt="nav">
                                                    </div>

                                                    <div class="nav-mega-image">
                                                        <!-- navsinglebanner invoke here -->
                                                        <?php $this->load->view('sections/navsinglebanner'); ?>
                                                        <!-- navsinglebanner invoke here -->
                                                    </div>
                                                </li>
                                            </ul>
                                        </li>


                                        <li class="has-dropdown" style="position: static;">
                                            <a class="nav-link" href="#">Courses</a>

                                            <ul class="megamenu-hub">
                                                <li>
                                                    <ul class="submenu me-1">


                                                        <?php $this->load->view('tabcourses/tabcoursesone'); ?>
                                                    </ul>
                                                    <ul class="submenu">

                                                        <?php $this->load->view('tabcourses/tabcoursestwo'); ?>



                                                    </ul>
                                                    <div class="absolute-image-shape shape-image">
                                                        <img class=" shape one" src="assets/images/nav/02.png"
                                                            data-speed="0.04" data-revert="true" alt="nav">
                                                        <img class=" shape two" src="assets/images/nav/03.png"
                                                            data-speed="0.04" alt="nav">
                                                    </div>
                                                    <div class="nav-mega-image">
                                                        <!-- navsinglebanner invoke here -->
                                                        <?php $this->load->view('sections/navsinglebanner'); ?>
                                                        <!-- navsinglebanner invoke here -->
                                                    </div>
                                                </li>
                                            </ul>
                                        </li>


                                        <li class=""><a class="nav-link" href="<?php echo site_url('aboutus'); ?>">About
                                                us</a></li>
                                        <li class=""><a class="nav-link "
                                                href="<?php echo site_url('contactus'); ?>">Contact</a></li>
                                    </ul>
                                </nav>
                            </div>

                        </div>
                        <div class="header-right-area-one">
                            <div class="actions-area">
                                <div class="search-btn" id="search">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 22 22"
                                        fill="none">
                                        <path
                                            d="M19.9375 18.9652L14.7454 13.7732C15.993 12.2753 16.6152 10.3542 16.4824 8.40936C16.3497 6.46453 15.4722 4.64575 14.0326 3.33139C12.593 2.01702 10.7021 1.30826 8.75326 1.35254C6.8044 1.39683 4.94764 2.19075 3.56924 3.56916C2.19083 4.94756 1.39691 6.80432 1.35263 8.75317C1.30834 10.702 2.0171 12.5929 3.33147 14.0325C4.64584 15.4721 6.46461 16.3496 8.40944 16.4823C10.3543 16.6151 12.2754 15.993 13.7732 14.7453L18.9653 19.9374L19.9375 18.9652ZM2.75 8.93742C2.75 7.71365 3.11289 6.51736 3.79278 5.49983C4.47267 4.4823 5.43903 3.68923 6.56965 3.22091C7.70026 2.7526 8.94436 2.63006 10.1446 2.86881C11.3449 3.10756 12.4474 3.69686 13.3127 4.56219C14.1781 5.42753 14.7674 6.53004 15.0061 7.7303C15.2449 8.93055 15.1223 10.1747 14.654 11.3053C14.1857 12.4359 13.3926 13.4022 12.3751 14.0821C11.3576 14.762 10.1613 15.1249 8.9375 15.1249C7.29703 15.1231 5.72427 14.4706 4.56429 13.3106C3.4043 12.1506 2.75182 10.5779 2.75 8.93742Z"
                                            fill="#553CDF" />
                                    </svg>
                                </div>
                                <div class="cart cart-icon">
                                    <i class="fa-regular fa-cart-shopping"></i>
                                </div>
                            </div>
                            <div class="buttons-area ">
                                
                                <!-- here joinnow button calling -->
                                <?php if (!empty($showjoinsnowBtn) && $showjoinsnowBtn): ?>
                                 <?php $this->load->view('sections/joinsnowBtn'); ?>
                              <?php endif; ?>
                                    <!-- here joinnow button calling -->

                                <?php if (!empty($showdashboardAccount) && $showdashboardAccount): ?>
                                 <?php $this->load->view('sections/dashboardAccount'); ?>
                              <?php endif; ?>
                                        <!-- here dashabord account logo calling -->
                            </div>
                            <div class="menu-btn" id="menu-btn">
                                <svg width="20" height="16" viewBox="0 0 20 16" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <rect y="14" width="20" height="2" fill="#1F1F25"></rect>
                                    <rect y="7" width="20" height="2" fill="#1F1F25"></rect>
                                    <rect width="20" height="2" fill="#1F1F25"></rect>
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- header style end -->



    <!-- cart area start -->
    <div class="cart-bar">
        <div class="cart-header">
            <h3 class="cart-heading">MY CART (3 ITEMS)</h3>
            <div class="close-cart"><i class="fal fa-times"></i></div>
        </div>
        <div class="product-area">
            <div class="product-item">
                <div class="product-detail">
                    <div class="product-thumb"><img src="<?php echo base_url('assets/images/course/cart/01.jpg'); ?>"
                            alt="product-thumb"></div>
                    <div class="item-wrapper">
                        <span class="product-name">Construct Map</span>
                        <div class="item-wrapper">
                            <span class="product-variation"><span class="color">Green /</span>
                                <span class="size">XL</span></span>
                        </div>
                        <div class="item-wrapper">
                            <span class="product-qnty">3 ×</span>
                            <span class="product-price">$198.00</span>
                        </div>
                    </div>
                </div>
                <div class="cart-edit">
                    <div class="quantity-edit">
                        <button class="button"><i class="fal fa-minus minus"></i></button>
                        <input type="text" class="input" value="3">
                        <button class="button plus">+<i class="fal fa-plus plus"></i></button>
                    </div>
                    <div class="item-wrapper d-flex mr--5 align-items-center">
                        <a href="#" class="product-edit"><i class="fal fa-edit"></i></a>
                        <a href="#" class="delete-cart"><i class="fal fa-times"></i></a>
                    </div>
                </div>
            </div>
            <div class="product-item">
                <div class="product-detail">
                    <div class="product-thumb"><img src="<?php echo base_url('assets/images/course/cart/02.jpg'); ?>"
                            alt="product-thumb"></div>
                    <div class="item-wrapper">
                        <span class="product-name"> Bridge product</span>
                        <div class="item-wrapper">
                            <span class="product-variation"><span class="color">Green /</span>
                                <span class="size">XL</span></span>
                        </div>
                        <div class="item-wrapper">
                            <span class="product-qnty">2 ×</span>
                            <span class="product-price">$88.00</span>
                        </div>
                    </div>
                </div>
                <div class="cart-edit">
                    <div class="quantity-edit">
                        <button class="button"><i class="fal fa-minus minus"></i></button>
                        <input type="text" class="input" value="2">
                        <button class="button plus">+<i class="fal fa-plus plus"></i></button>
                    </div>
                    <div class="item-wrapper d-flex mr--5 align-items-center">
                        <a href="#" class="product-edit"><i class="fal fa-edit"></i></a>
                        <a href="#" class="delete-cart"><i class="fal fa-times"></i></a>
                    </div>
                </div>
            </div>
            <div class="product-item last-child">
                <div class="product-detail">
                    <div class="product-thumb"><img src="<?php echo base_url('assets/images/course/cart/03.jpg'); ?>"
                            alt="product-thumb"></div>
                    <div class="item-wrapper">
                        <span class="product-name">Labour helmet</span>
                        <div class="item-wrapper">
                            <span class="product-variation"><span class="color">Green /</span>
                                <span class="size">XL</span></span>
                        </div>
                        <div class="item-wrapper">
                            <span class="product-qnty">1 ×</span>
                            <span class="product-price">$289.00</span>
                        </div>
                    </div>
                </div>
                <div class="cart-edit">
                    <div class="quantity-edit">
                        <button class="button"><i class="fal fa-minus minus"></i></button>
                        <input type="text" class="input" value="2">
                        <button class="button plus">+<i class="fal fa-plus plus"></i></button>
                    </div>
                    <div class="item-wrapper d-flex mr--5 align-items-center">
                        <a href="#" class="product-edit"><i class="fal fa-edit"></i></a>
                        <a href="#" class="delete-cart"><i class="fal fa-times"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="cart-bottom-area">
            <span class="spend-shipping"><i class="fal fa-truck"></i> SPENT <span class="amount">$199.00</span> MORE
                FOR FREE SHIPPING</span>
            <span class="total-price">TOTAL: <span class="price">$556</span></span>
            <a href="<?php echo site_url('page_Not_Found'); ?>" class="checkout-btn cart-btn">PROCEED TO CHECKOUT</a>
            <a href=" <?php echo site_url('page_Not_Found'); ?> " class="view-btn cart-btn">VIEW CART</a>
        </div>
    </div>
    <!-- cart area edn -->

    <!-- Modal -course-save--icon modal-->
    <div class="modal login-pupup-modal fade" id="exampleModal-login" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Hi, Welcome back!</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="#" class="login-form">
                        <input type="text" placeholder="Username of Email Address" required>
                        <input type="password" placeholder="Password" required>
                        <div class="d-flex mb--20 align-items-center">
                            <input type="checkbox" id="examplecheck-modal">
                            <label for="examplecheck-modal">I agree to the terms of use and privacy policy.</label>
                        </div>
                        <button type="submit" class="rts-btn btn-primary">Sign In</button>

                        <p class="dont-acc mt--20">Dont Have an Account? <a href="registration.html">Sign-up</a> </p>
                    </form>
                </div>
            </div>
        </div>
    </div>


    <!-- header style two -->
    <div id="side-bar" class="side-bar header-two">
        <button class="close-icon-menu"><i class="far fa-times"></i></button>
        <div class=" text-center">
            <a href="index.html" class="logo-area">
                <img src="<?php echo base_url('assets/images/logo/logo-1.svg'); ?>" alt="logo">
            </a>
        </div>
        <!-- inner menu area desktop start -->
        <!-- <div class="inner-main-wrapper-desk">
            <div class="thumbnail">
                <img src="<?php echo base_url('assets/images/banner/04.jpg'); ?>" alt="elevate">
            </div>
            <div class="inner-content">
                <h4 class="title">We Build Building and Great Constructive welcomes.</h4>
                <p class="disc">
                    We successfully cope with tasks of varying complexity, provide long-term guarantees and regularly
                    master new technologies.
                </p>
                <div class="footer">
                    <h4 class="title">Got a project in mind?</h4>
                    <a href="contact.html" class="rts-btn btn-primary">Let's talk</a>
                </div>
            </div>
        </div>  -->


        <!-- mobile menu area start -->
        <div class="mobile-menu-main">
            <nav class="nav-main mainmenu-nav mt--30">
                <ul class="mainmenu metismenu" id="mobile-menu-active">
                    <li class="">
                        <a href="<?php echo site_url('welcome'); ?>" class="main">Home</a>
                    </li>

                    <li class="has-droupdown">
                        <a href="#" class="main">Pages</a>
                        <ul class="submenu mm-collapse">



                            <?php $this->load->view('tabpages/tabpagesone'); ?>
                            <?php $this->load->view('tabpages/tabpagestwo'); ?>


                        </ul>
                    </li>
                    <li class="has-droupdown">
                        <a href="#" class="main">Courses</a>
                        <ul class="submenu mm-collapse">


                            <?php $this->load->view('tabcourses/tabcoursesone'); ?>
                            <?php $this->load->view('tabcourses/tabcoursestwo'); ?>

                        </ul>
                    </li>
                    <li class="">
                        <a href="<?php echo site_url('aboutus'); ?>" class="main">About us</a>
                        <ul class="submenu mm-collapse">

                        </ul>
                    </li>
                    <li class="">
                        <a href="<?php echo site_url('contactus'); ?>" class="main">Contact</a>
                        <ul class="submenu mm-collapse">

                        </ul>
                    </li>
                </ul>
            </nav>

            <div class="d-flex justify-content-around">

                                <!-- here joinnow button calling -->
                                <?php if (!empty($showjoinsnowBtn) && $showjoinsnowBtn): ?>
                                 <?php $this->load->view('sections/joinsnowBtn'); ?>
                              <?php endif; ?>
                                    <!-- here joinnow button calling -->

                                <?php if (!empty($showdashboardAccount) && $showdashboardAccount): ?>
                                 <?php $this->load->view('sections/dashboardAccount'); ?>
                              <?php endif; ?>
                                        <!-- here dashabord account logo calling -->
            
            </div>

            <div class="rts-social-style-one  mt--50">
                <ul>
                    <li>
                        <a href="<?php echo site_url('welcome'); ?>">
                            <i class="fa-brands fa-facebook-f"></i>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo site_url('welcome'); ?>">
                            <i class="fa-brands fa-twitter"></i>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo site_url('welcome'); ?>">
                            <i class="fa-brands fa-youtube"></i>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo site_url('welcome'); ?>">
                            <i class="fa-brands fa-linkedin-in"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <!-- mobile menu area end -->
    </div>
    <!-- header style two End -->

    <!-- modal--pop-up -->
    <div id="myModal-1" class="modal fade" role="dialog">
        <div class="modal-dialog bg_image">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-bs-dismiss="modal"><i class="fa-light fa-x"></i></button>
                </div>
                <div class="modal-body text-center">
                    <div class="inner-content">
                        <div class="title-area">
                            <span class="pre">Get Our Courses Free</span>
                            <h4 class="title">Wonderful for Learning</h4>
                        </div>
                        <form action="#">
                            <input type="text" placeholder="Your Mail.." required>
                            <button>Download Now</button>
                            <span>Your information will never be shared with any third party</span>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- offcanvase search -->
    <div class="search-input-area">
        <div class="container">
            <div class="search-input-inner ">
                <div class="input-div">
                    <input class="search-input autocomplete" type="text" placeholder="Search by keyword or #">
                    <button><i class="far fa-search"></i></button>
                </div>
            </div>
        </div>
        <div id="close" class="search-close-icon"><i class="far fa-times"></i></div>
    </div>
    <!-- offcanvase search -->
    <div id="anywhere-home" class="">
    </div>

    <!-- all scripts -->
    <!-- jquery min js -->
    <script src="<?php echo base_url('assets/js/vendor/jquery.min.js'); ?>"></script>
    <!-- jquery ui js -->
    <script src="<?php echo base_url('assets/js/vendor/jquery-ui.js'); ?>"></script>
    <!-- metismenu js -->
    <script src="<?php echo base_url('assets/js/vendor/metismenu.js'); ?>"></script>
    <!-- magnific popup js-->
    <script src="<?php echo base_url('assets/js/vendor/magnifying-popup.js'); ?>"></script>
    <!-- swiper JS 10.2.0 -->
    <script src="<?php echo base_url('assets/js/plugins/swiper.js'); ?>"></script>
    <!-- counterup js -->
    <script src="<?php echo base_url('assets/js/plugins/counterup.js'); ?>"></script>
    <!-- waypoint js -->
    <script src="<?php echo base_url('assets/js/vendor/waypoint.js'); ?>"></script>
    <!-- wow js -->
    <script src="<?php echo base_url('assets/js/vendor/waw.js'); ?>"></script>
    <!-- isotop mesonary -->
    <script src="<?php echo base_url('assets/js/plugins/isotop.js'); ?>"></script>
    <!-- jquery imageloaded -->
    <script src="<?php echo base_url('assets/js/plugins/imagesloaded.pkgd.min.js'); ?>"></script>
    <!-- resize sensor js -->
    <script src="<?php echo base_url('assets/js/plugins/resizer-sensor.js'); ?>"></script>
    <!-- sticky sidebar -->
    <script src="<?php echo base_url('assets/js/plugins/sticky-sidebar.js'); ?>"></script>
    <!-- gsap twinmax js -->
    <script src="<?php echo base_url('assets/js/plugins/twinmax.js'); ?>"></script>
    <!-- chroma js -->
    <script src="<?php echo base_url('assets/js/vendor/chroma.min.js'); ?>"></script>
    <!-- bootstrap 5.0.2 -->
    <script src="<?php echo base_url('assets/js/plugins/bootstrap.min.js'); ?>"></script>
    <!-- dymanic Contact Form -->
    <script src="<?php echo base_url('assets/js/plugins/contact.form.js'); ?>"></script>
    <!-- calender js -->
    <script src="<?php echo base_url('assets/js/plugins/calender.js'); ?>"></script>
    <!-- main Js -->
    <script src="<?php echo base_url('assets/js/main.js'); ?>"></script>


</body>

</html>
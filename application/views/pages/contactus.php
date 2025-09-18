    <!-- navbar section include -->
  <?php
    $this->load->view('sections/navbar', [
        'showjoinsnowBtn' => true,
        'showdashboardAccount' => false
    ]);
    ?>


    <!-- bread crumb area -->
    <div class="rts-bread-crumbarea-1 rts-section-gap bg_image">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-main-wrapper">
                        <h1 class="title">Contact Us</h1>
                        <!-- breadcrumb pagination area -->
                        <div class="pagination-wrapper">
                            <a href="<?php echo site_url('welcome'); ?>">Home</a>
                            <i class="fa-regular fa-chevron-right"></i>
                            <a class="active" href="<?php echo site_url('contactus'); ?>">Contact us</a>
                        </div>
                        <!-- breadcrumb pagination area end -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- bread crumb area end -->


<!-- - --director--section --including--here - -->
<?php $this->load->view('sections/director'); ?>
<!-- - --director--section --including--here -- -->

    <!-- rts contact area start -->
    <div class="rts-contact-area rts-section-gapTop">
        <div class="container">
            <div class="row g-5">
                <div class="col-xl-5">
                    <!-- contact left area start -->
                    <div class="contact-left-area-start">
                        <div class="title-area-left-style">
                            <div class="pre-title">
                                <img src="<?php echo base_url('assets/images/banner/bulb.png'); ?>
" alt="icon">
                                <span>Courses</span>
                            </div>
                            <h2 class="title">Love to hear from you <br>
                                <span>Get in touch!</span>
                            </h2>
                        </div>
                        <form action="#" method="post" class="contact-page-form" id="contact-form">
                            <div class="single-input">
                                <label for="name">Your Name*</label>
                                <input id="name" name="name" type="text" placeholder="Example @name ...." required>
                            </div>
                            <div class="single-input">
                                <label for="email">Your Email*</label>
                                <input id="email" name="email" type="email" placeholder="info@studyhub.net">
                            </div>
                            <div class="single-input">
                                <label for="message">Message*</label>
                                <textarea id="message" name="message" placeholder="Let tell us about your projects"></textarea>
                            </div>
                            <button class="rts-btn btn-primary pt-3">Send Message</button>
                        </form>
                        <div id="form-messages" class="mt--20"></div>
                    </div>
                    <!-- contact left area end -->
                </div>
                <div class="col-xl-7 pl--50 pl_lg--15 pl_md--15 pl_sm--15 pb_md--100 pb_sm--100">
                    <div class="contact-map-area-start">
                        <div class="single-maptop-info">
                            <div class="icon">
                                <img src="<?php echo base_url('assets/images/contact/02.png'); ?>
" alt="contact">
                            </div>
                            <p class="disc">
                                123 Main Street,
                                New York, AV 10013
                            </p>
                        </div>
                        <div class="single-maptop-info">
                            <div class="icon">
                                <img src="<?php echo base_url('assets/images/contact/03.png'); ?>
" alt="contact">
                            </div>
                            <a href="tel:+4733378901">(555) 123-4567</a> <br>
                            <a href="tel:+4733378901">(555) 123-4567</a>
                        </div>
                        <div class="single-maptop-info">
                            <div class="icon">
                                <img src="<?php echo base_url('assets/images/contact/04.png'); ?>
" alt="contact">
                            </div>
                            <p class="disc">
                                Mon-Fri: 9 AM – 6 PM <br>
                                Saturday: 9 AM – 4 PM
                            </p>
                        </div>
                    </div>
                    <div class="map-bottom-area mt--30">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2239.708609412205!2d84.51044388860592!3d26.79934546132925!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39936ebc52d7b7fd%3A0xc4ca14bb8ee79f28!2sBettiah%2C%20Bihar!5e1!3m2!1sen!2sin!4v1756310847320!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- rts contact area end -->

	<!-- Home page view file with singleheading file -with--gapsection -->
	<?php
	$this->load->view('sections/footer', [
		'showSingleHeading' => true,
		'showGapSection' => true
	]);
	?>

    
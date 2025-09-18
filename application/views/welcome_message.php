
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url('assets/images/fav.png'); ?>">
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




	<!-- navbar section include -->
    <?php
    $this->load->view('sections/navbar', [
        'showjoinsnowBtn' => true,
        'showdashboardAccount' => false
    ]);
    ?>


	<!-- Hero section include -->
	<?php $this->load->view('sections/hero'); ?>

	<!-- HeroTwo section include -->
	<?php // $this->load->view('sections/heroTwo'); ?>

	<!-- HeroThree section include -->
	<?php // $this->load->view('sections/heroThree'); ?>


	<!-- studenttag section include -->
	<?php $this->load->view('sections/studenttag'); ?>

	<!-- brandCourse section include -->
	<?php $this->load->view('sections/brandCourse'); ?>

	<!-- topcategory section include -->
	<?php $this->load->view('sections/topcategory'); ?>

	<!-- courses section include with -with--gapsection -->
	<?php $this->load->view('sections/courses', ['showGapSection' => true]); ?>

	<!-- courseIntro section include -->
	<?php $this->load->view('sections/courseIntro'); ?>

	<!-- events section include -->
	<?php $this->load->view('sections/events'); ?>

	<!-- teachers section include with view all btn  -->
	<?php $this->load->view('sections/teachers', ['showAllteachersBtn' => true]); ?>

	<!-- stfeedback section include -->
	<?php $this->load->view('sections/stfeedback'); ?>

	<!-- blogs section include -->
	<?php $this->load->view('sections/blogs'); ?>


	<!-- Home page view file with singleheading file -with--gapsection -->
	<?php
	$this->load->view('sections/footer', [
		'showSingleHeading' => true,
		'showGapSection' => false
	]);
	?>












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
    <!-- dynamic Contact Form -->
    <script src="<?php echo base_url('assets/js/plugins/contact.form.js'); ?>"></script>
    <!-- calender js -->
    <script src="<?php echo base_url('assets/js/plugins/calender.js'); ?>"></script>
    <!-- main Js -->
    <script src="<?php echo base_url('assets/js/main.js'); ?>"></script>

</body>

</html>


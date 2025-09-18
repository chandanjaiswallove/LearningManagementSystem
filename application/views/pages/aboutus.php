    <!-- navbar section include -->
  <?php
    $this->load->view('sections/navbar', [
        'showjoinsnowBtn' => true,
        'showdashboardAccount' => false
    ]);
    ?>


<!-- Bread crumb area -->
<div class="rts-bread-crumbarea-1 rts-section-gap bg_image">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb-main-wrapper">
                    <h1 class="title">About Us</h1>
                    <!-- Breadcrumb pagination area -->
                    <div class="pagination-wrapper">
                        <a href="<?php echo site_url('welcome'); ?>">Home</a>
                        <i class="fa-regular fa-chevron-right"></i>
                        <a class="active" href="<?php echo site_url('aboutus'); ?>">About us</a>
                    </div>
                    <!-- Breadcrumb pagination area end -->
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Bread crumb area end -->

<?php
// Brand course section include
$this->load->view('sections/brandCourse');

// Student tag section include
$this->load->view('sections/studenttag');

// Student feedback section include
$this->load->view('sections/stfeedback');

// Course introduction section include
$this->load->view('sections/courseIntro');

// Instructors/teachers section include
$this->load->view('sections/teachers');

// Footer include with parameters
$this->load->view('sections/footer', [
    'showSingleHeading' => true,
    'showGapSection' => true
]);
?>

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
                        <h1 class="title">Gallery</h1>
                        <!-- breadcrumb pagination area -->
                        <div class="pagination-wrapper">
                            <a href="<?php echo site_url('welcome'); ?>">Home</a>
                            <i class="fa-regular fa-chevron-right"></i>
                            <a class="active" href="<?php echo site_url('blog'); ?>">Blogs</a>
                        </div>
                        <!-- breadcrumb pagination area end -->
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php $this->load->view('sections/gallerys'); ?>






	<!-- Home page view file with singleheading file -with--gapsection -->
	<?php
	$this->load->view('sections/footer', [
		'showSingleHeading' => true,
		'showGapSection' => false
	]);
	?>

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
					<h1 class="title">Course Seven</h1>
					<!-- breadcrumb pagination area -->
					<div class="pagination-wrapper">
						<a href="<?php echo site_url('category6'); ?>">Previous</a>
						<i class="fa-regular fa-chevron-right"></i>
						<a class="active" href="<?php echo site_url('category8'); ?>">Next</a>
					</div>
					<!-- breadcrumb pagination area end -->
				</div>
			</div>
		</div>
	</div>
</div>
<!-- bread crumb area -->





<!-- Home page view file with singleheading file -with--gapsection -->
<?php
$this->load->view('sections/footer', [
	'showSingleHeading' => true,
	'showGapSection' => true
]);
?>
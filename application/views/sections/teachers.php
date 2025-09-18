<!-- instructor area start -->
<div class="instrustor-area rts-section-gap">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="title-between-area align-items-end">
                    <div class="title-area-left-style">
                        <div class="pre-title">
                            <img src="<?php echo base_url('assets/images/banner/bulb.png'); ?> " alt="icon">
                            <span>Instructor</span>
                        </div>
                        <h2 class="title">Our Professional Instructor</h2>
                        <p class="post-title">You'll find something to spark your curiosity and enhance</p>
                    </div>
                    <!-- adding view all teachers button here  -->
                    <?php if (!empty($showAllteachersBtn) && $showAllteachersBtn): ?>
                        <?php $this->load->view('sections/allteachersbtn'); ?>
                    <?php endif; ?>

                </div>
            </div>
        </div>
        <div class="row g-5 mt--10">
            <div class="col-lg-3 col-md-6 col-sm-12 col-12">
                <!-- single instrustor -->
                <div class="single-instructor">
                    <div class="thumbnail-img">
                        <a href="<?php echo site_url('instructor'); ?>" class="thumbnail">
                            <img src="<?php echo base_url('assets/images/instructor/01.jpg'); ?> " alt="instructor">
                        </a>
                        <div class="social-img-instructor">
                            <ul>
                                <li><a href="<?php echo site_url('welcome'); ?>"><i
                                            class="fa-sharp fa-light fa-share-nodes"></i></a></li>
                                <li class="bottom"><a href="<?php echo site_url('instructor'); ?>"><i
                                            class="fa-brands fa-skype"></i></a></li>
                                <li class="bottom"><a href="<?php echo site_url('instructor'); ?>"><i
                                            class="fa-brands fa-linkedin"></i></a></li>
                                <li class="bottom"><a href="<?php echo site_url('instructor'); ?>"><i
                                            class="fa-brands fa-facebook-f"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <a href="<?php echo site_url('instructor'); ?>">
                        <h5 class="title">Emma Elizabeth</h5>
                    </a>
                    <p>Assistant Teacher</p>
                </div>
                <!-- single instrustor end -->
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 col-12">
                <!-- single instrustor -->
                <div class="single-instructor">
                    <div class="thumbnail-img">
                        <a href="<?php echo site_url('instructor'); ?>" class="thumbnail">
                            <img src="assets/images/instructor/02.jpg" alt="instructor">
                        </a>
                        <div class="social-img-instructor">
                            <ul>
                                <li><a href="<?php echo site_url('instructor'); ?>"><i
                                            class="fa-sharp fa-light fa-share-nodes"></i></a></li>
                                <li class="bottom"><a href="<?php echo site_url('instructor'); ?>"><i
                                            class="fa-brands fa-skype"></i></a></li>
                                <li class="bottom"><a href="<?php echo site_url('instructor'); ?>"><i
                                            class="fa-brands fa-linkedin"></i></a></li>
                                <li class="bottom"><a href="<?php echo site_url('instructor'); ?>"><i
                                            class="fa-brands fa-facebook-f"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <a href="<?php echo site_url('instructor'); ?>">
                        <h5 class="title">Thomas Fred</h5>
                    </a>
                    <p>Assistant Teacher</p>
                </div>
                <!-- single instrustor end -->
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 col-12">
                <!-- single instrustor -->
                <div class="single-instructor">
                    <div class="thumbnail-img">
                        <a href="<?php echo site_url('instructor'); ?>" class="thumbnail">
                            <img src="<?php echo base_url('assets/images/instructor/03.jpg'); ?> " alt="instructor">
                        </a>
                        <div class="social-img-instructor">
                            <ul>
                                <li><a href="<?php echo site_url('instructor'); ?>"><i
                                            class="fa-sharp fa-light fa-share-nodes"></i></a></li>
                                <li class="bottom"><a href="<?php echo site_url('instructor'); ?>"><i
                                            class="fa-brands fa-skype"></i></a></li>
                                <li class="bottom"><a href="<?php echo site_url('instructor'); ?>"><i
                                            class="fa-brands fa-linkedin"></i></a></li>
                                <li class="bottom"><a href="<?php echo site_url('instructor'); ?>"><i
                                            class="fa-brands fa-facebook-f"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <a href="<?php echo site_url('instructor'); ?>">
                        <h5 class="title">Dana White</h5>
                    </a>
                    <p>UI/UX Exparet</p>
                </div>
                <!-- single instrustor end -->
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 col-12">
                <!-- single instrustor -->
                <div class="single-instructor">
                    <div class="thumbnail-img">
                        <a href="<?php echo site_url('instructor'); ?>" class="thumbnail">
                            <img src=" <?php echo base_url('assets/images/instructor/04.jpg'); ?> " alt="instructor">
                        </a>
                        <div class="social-img-instructor">
                            <ul>
                                <li><a href="<?php echo site_url('instructor'); ?>"><i
                                            class="fa-sharp fa-light fa-share-nodes"></i></a></li>
                                <li class="bottom"><a href="<?php echo site_url('instructor'); ?>"><i
                                            class="fa-brands fa-skype"></i></a></li>
                                <li class="bottom"><a href="<?php echo site_url('instructor'); ?>"><i
                                            class="fa-brands fa-linkedin"></i></a></li>
                                <li class="bottom"><a href="<?php echo site_url('instructor'); ?>"><i
                                            class="fa-brands fa-facebook-f"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <a href="<?php echo site_url('instructor'); ?>">
                        <h5 class="title">Elizabeth Olsen</h5>
                    </a>
                    <p>Assistant Teacher</p>
                </div>
                <!-- single instrustor end -->
            </div>
        </div>
    </div>
</div>
<!-- instructor area start -->
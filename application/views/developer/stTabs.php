    <!-- rts dahboard-area-main-wrapper -->
    <div class="dashboard--area-main pt--100">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-3">
                    <div class="left-sindebar-dashboard">
                        <div class="dashboard-left-single-wrapper">
                            <!-- single item -->
                            <a href="<?php echo site_url('developer_dashboard') ?>" class="single-item active">
                                <i class="fa-light fa-house"></i>
                                <p>Dashboard</p>
                            </a>
                            <!-- single item end -->
                            <!-- single item -->
                            <a href=" <?php echo site_url('developer_profile') ?>" class="single-item ">
                                <i class="fa-regular fa-user"></i>
                                <p>My Profile</p>
                            </a>
                            <!-- single item end -->
                            <!-- single item -->
                            <a href="student-enroll-course.html" class="single-item ">
                                <i class="fa-light fa-graduation-cap"></i>
                                <p>Enrolled Courses</p>
                            </a>
                            <!-- single item end -->
                            <!-- single item -->
                            <a href="student-wishlist.html" class="single-item ">
                                <i class="fa-sharp fa-light fa-bookmark"></i>
                                <p>Wishlist</p>
                            </a>
                            <!-- single item end -->
                            <!-- single item -->
                            <a href="student-reviews.html" class="single-item ">
                                <i class="fa-regular fa-star"></i>
                                <p>Reviews</p>
                            </a>
                            <!-- single item end -->
                            <!-- single item -->
                            <a href="student-quiz-attempts.html" class="single-item ">
                                <i class="fa-sharp fa-light fa-bullseye-pointer"></i>
                                <p>My Quiz Attempts</p>
                            </a>
                            <!-- single item end -->
                            <!-- single item -->
                            <a href="student-order-history.html" class="single-item ">
                                <i class="fa-sharp fa-light fa-bag-shopping"></i>
                                <p>Order History</p>
                            </a>
                            <!-- single item end -->
                            <!-- single item -->
                            <a href="student-question-answer.html" class="single-item ">
                                <i class="fa-regular fa-circle-question"></i>
                                <p>Question & Answer</p>
                            </a>
                            <!-- single item end -->
                            <!-- single item -->
                            <a href="student-calender.html" class="single-item ">
                                <i class="fa-light fa-calendar-days"></i>
                                <p>Calendar</p>
                            </a>
                            <!-- single item end -->
                        </div>
                        <div class="dashboard-left-single-wrapper bbnone mt--40">
                            <h4 class="title mb--5">User</h4>
                            <!-- single item -->
                            <a href=" <?php echo site_url('developer_setting') ?> " class="single-item ">
                                <i class="fa-sharp fa-regular fa-gear"></i>
                                <p>Settings</p>
                            </a>
                            <!-- single item end -->
                            <!-- single item -->
                            <a href=" <?php echo site_url('developerLogout') ?> " class="single-item">
                                <i class="fa-light fa-right-from-bracket"></i>
                                <p>Logout</p>
                            </a>
                            <!-- single item end -->
                        </div>
                    </div>
                </div>
                <!-- tabs menu all end -->

                <!-- dashboaord all  menu page calling here   -->
                <!-- dashboard -->
               <?php if (!empty($showdashboardMenu) && $showdashboardMenu): ?>
                                 <?php $this->load->view('developer/sections/dashboardMenu'); ?>
                              <?php endif; ?>

                              <!-- Profile -->
               <?php if (!empty($showdashboardProfile) && $showdashboardProfile): ?>
                                 <?php $this->load->view('developer/sections/dashboardProfile'); ?>
                              <?php endif; ?>

                             <!-- Setting -->
               <?php if (!empty($showdashboardSetting) && $showdashboardSetting): ?>
                                 <?php $this->load->view('developer/sections/dashboardSetting'); ?>
                              <?php endif; ?>

                               <!-- Create Admin form -->
               <?php if (!empty($showenrollAdmin) && $showenrollAdmin): ?>
                                 <?php $this->load->view('developer/sections/enrollAdmin'); ?>
                              <?php endif; ?>
                              


                <!-- dashboaord all menu page calling here   -->


            </div>
        </div>
    </div>
    <!-- rts dahboard-area-main-wrapper end -->
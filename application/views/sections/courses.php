<!-- rgapsection-adding here -->

<?php if (!empty($showGapSection) && $showGapSection): ?>
    <?php $this->load->view('sections/gapsection'); ?>
<?php endif; ?>

<!-- rgapsection-adding here -->


<!-- course area start -->
<div class="course-area-two rts-section-gapBottom">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="title-between-area align-items-end">
                    <div class="title-area-left-style">
                        <div class="pre-title">
                            <img src="<?php echo base_url('assets/images/banner/bulb.png'); ?>" alt="icon">
                            <span>Courses</span>
                        </div>
                        <h2 class="title mb--5">Explore Featured Courses</h2>
                        <p class="disc">
                            You'll find something to spark your curiosity and enhance
                        </p>
                    </div>
                    <a href="#" class="rts-btn btn-primary with-arrow">View All Course <i
                            class="fa-light fa-arrow-right"></i></a>
                </div>
            </div>
        </div>
        <div class="row g-5 mt--20">
            <div class="swiper mySwiper-category-1 swiper-float-right-course swiper-data" data-swiper='{
                    "spaceBetween":30,
                    "slidesPerView":4,
                    "loop": true,
                    "autoplay":{
                        "delay":"2000"
                    },
                    "navigation":{
                        "nextEl":".swiper-button-next",
                        "prevEl":".swiper-button-prev"
                    },
                    "pagination":{
                        "el": ".swiper-pagination",
                        "clickable": "true"
                    },
                    "breakpoints":{
                    "320":{
                        "slidesPerView":1,
                        "spaceBetween":30},
                    "420":{
                        "slidesPerView":1,
                        "spaceBetween":30},
                    "500":{
                        "slidesPerView":2,
                        "spaceBetween":30},
                    "740":{
                        "slidesPerView":2,
                        "spaceBetween":30},
                    "940":{
                        "slidesPerView":3,
                        "spaceBetween":30},
                    "1240":{
                        "slidesPerView":4,
                        "spaceBetween":30}
                    }
                }'>
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <!-- single course style two -->
                        <div class="rts-single-course">
                            <a href="single-course.html" class="thumbnail">
                                <img src="<?php echo base_url('assets/images/course/01.jpg'); ?>" alt="course">
                            </a>
                            <div class="save-icon" data-bs-toggle="modal" data-bs-target="#exampleModal-login">
                                <i class="fa-sharp fa-light fa-bookmark"></i>
                            </div>
                            <div class="tags-area-wrapper">
                                <div class="single-tag">
                                    <span>Web Development</span>
                                </div>
                            </div>
                            <div class="lesson-studente">
                                <div class="lesson">
                                    <i class="fa-light fa-calendar-lines-pen"></i>
                                    <span>25 Lessons</span>
                                </div>
                                <div class="lesson">
                                    <i class="fa-light fa-user-group"></i>
                                    <span>54 Students</span>
                                </div>
                            </div>
                            <a href="single-course.html">
                                <h5 class="title">The Complete Web Developer in
                                    2023: Zero to Mastery</h5>
                            </a>
                            <p class="teacher">Dr. Angela Yu</p>
                            <div class="rating-and-price">
                                <div class="rating-area">
                                    <span>4.5</span>
                                    <div class="stars">
                                        <ul>
                                            <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                            <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                            <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                            <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                            <li><i class="fa-sharp fa-regular fa-star"></i></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="price-area">
                                    <div class="not price">
                                        $79.99
                                    </div>
                                    <div class="price">
                                        $79.99
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- single course style two end -->
                    </div>
                    <div class="swiper-slide">
                        <!-- rts single course -->
                        <div class="rts-single-course">
                            <a href="single-course.html" class="thumbnail">
                                <img src="<?php echo base_url('assets/images/course/02.jpg'); ?>" alt="course">
                            </a>
                            <div class="save-icon" data-bs-toggle="modal" data-bs-target="#exampleModal-login">
                                <i class="fa-sharp fa-light fa-bookmark"></i>
                            </div>
                            <div class="tags-area-wrapper">
                                <div class="single-tag">
                                    <span>Marketing</span>
                                </div>
                                <div class="single-tag">
                                    <span>Finance</span>
                                </div>
                            </div>
                            <div class="lesson-studente">
                                <div class="lesson">
                                    <i class="fa-light fa-calendar-lines-pen"></i>
                                    <span>22 Lessons</span>
                                </div>
                                <div class="lesson">
                                    <i class="fa-light fa-user-group"></i>
                                    <span>60 Students</span>
                                </div>
                            </div>
                            <a href="single-course.html">
                                <h5 class="title">How to Write the Ultimate 1 Page
                                    Strategic Business Plan</h5>
                            </a>
                            <p class="teacher">William U. Peña, MBA</p>
                            <div class="rating-and-price">
                                <div class="rating-area">
                                    <span>4.5</span>
                                    <div class="stars">
                                        <ul>
                                            <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                            <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                            <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                            <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                            <li><i class="fa-sharp fa-regular fa-star"></i></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="price-area">
                                    <div class="price">
                                        $79.99
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- rts single course end -->
                    </div>
                    <div class="swiper-slide">
                        <!-- rts single course -->
                        <div class="rts-single-course">
                            <a href="single-course.html" class="thumbnail">
                                <img src="<?php echo base_url('assets/images/course/03.jpg'); ?>" alt="course">
                            </a>
                            <div class="save-icon" data-bs-toggle="modal" data-bs-target="#exampleModal-login">
                                <i class="fa-sharp fa-light fa-bookmark"></i>
                            </div>
                            <div class="tags-area-wrapper">
                                <div class="single-tag">
                                    <span>Web Development</span>
                                </div>
                            </div>
                            <div class="lesson-studente">
                                <div class="lesson">
                                    <i class="fa-light fa-calendar-lines-pen"></i>
                                    <span>23 Lessons</span>
                                </div>
                                <div class="lesson">
                                    <i class="fa-light fa-user-group"></i>
                                    <span>40 Students</span>
                                </div>
                            </div>
                            <a href="single-course.html">
                                <h5 class="title">100 Days Of Code - 2023 Web
                                    Development Bootcamp</h5>
                            </a>
                            <p class="teacher">Dr. Angela Yu</p>
                            <div class="rating-and-price">
                                <div class="rating-area">
                                    <span>4.5</span>
                                    <div class="stars">
                                        <ul>
                                            <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                            <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                            <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                            <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                            <li><i class="fa-sharp fa-regular fa-star"></i></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="price-area">
                                    <div class="not price">
                                        $79.99
                                    </div>
                                    <div class="price">
                                        $79.99
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- rts single course end -->
                    </div>
                    <div class="swiper-slide">
                        <!-- rts single course -->
                        <div class="rts-single-course">
                            <a href="single-course.html" class="thumbnail">
                                <img src="<?php echo base_url('assets/images/course/04.jpg'); ?>" alt="course">
                            </a>
                            <div class="save-icon" data-bs-toggle="modal" data-bs-target="#exampleModal-login">
                                <i class="fa-sharp fa-light fa-bookmark"></i>
                            </div>
                            <div class="tags-area-wrapper">
                                <div class="single-tag">
                                    <span>Design</span>
                                </div>
                                <div class="single-tag">
                                    <span>UI/UX</span>
                                </div>
                            </div>
                            <div class="lesson-studente">
                                <div class="lesson">
                                    <i class="fa-light fa-calendar-lines-pen"></i>
                                    <span>19 Lessons</span>
                                </div>
                                <div class="lesson">
                                    <i class="fa-light fa-user-group"></i>
                                    <span>14 Students</span>
                                </div>
                            </div>
                            <a href="single-course.html">
                                <h5 class="title">User Experience The Ultimate
                                    Guide to Usability and UX</h5>
                            </a>
                            <p class="teacher">David Travis</p>
                            <div class="rating-and-price">
                                <div class="rating-area">
                                    <span>4.5</span>
                                    <div class="stars">
                                        <ul>
                                            <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                            <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                            <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                            <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                            <li><i class="fa-sharp fa-regular fa-star"></i></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="price-area">
                                    <div class="not price">
                                        $79.99
                                    </div>
                                    <div class="price">
                                        $79.99
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- rts single course end -->
                    </div>
                </div>
                <div class="swiper-button-next"><i class="fa-solid fa-chevron-right"></i></div>
                <div class="swiper-button-prev"><i class="fa-solid fa-chevron-left"></i></div>
                <div class="swiper-pagination"></div>
            </div>
        </div>
    </div>
</div>
<!-- course area end -->
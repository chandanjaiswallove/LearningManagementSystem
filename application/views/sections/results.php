<!-- rts blog area start -->
<div class="rts-section-gap rts-blog-area">
    <div class="container pb--130">
        <div class="row g-5 mt--20">

            <?php if (!empty($students)) : ?>
                <?php foreach ($students as $student) : ?>
                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <div class="single-blog-style-one card h-100 text-center">
                            
                            <!-- Student Image -->
                            <a href="<?= base_url('studentresults/details/' . $student->id); ?>" class="thumbnail">
                                <img src="<?= base_url('uploads/students/' . $student->image); ?>" 
                                     alt="<?= $student->name; ?>" 
                                     class="card-img-top img-fluid" 
                                     style="height:200px; object-fit:cover;">
                            </a>

                            <!-- Student Details -->
                            <div class="card-body">
                                <!-- Student Name -->
                                <h5 class="fw-bold"><?= $student->name; ?></h5>

                                <!-- Logo -->
                                <div class="my-2">
                                    <img src="<?= base_url('assets/images/logo/logo-1.svg'); ?>" 
                                         alt="Logo" 
                                         style="height:28px;">
                                </div>

                                <!-- Description -->
                                <p class="text-muted mb-2"><?= $student->board; ?></p>
                                <p class="text-muted mb-2"><?= $student->roll_no; ?></p>

                                <!-- Batch -->
                                <span class="badge" style="background:var(--color-primary); color:#fff; font-size:1rem; padding:6px 14px;">
                                    Batch: <?= $student->batch; ?>
                                </span>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            <?php else : ?>
                <p class="text-center">No students found.</p>
            <?php endif; ?>

        </div>

        <!-- Pagination -->
        <div class="col-lg-12">
            <div class="rts-elevate-pagination">
                <?= $this->pagination->create_links(); ?>
            </div>
        </div>
    </div>
</div>
<!-- rts blog area end -->

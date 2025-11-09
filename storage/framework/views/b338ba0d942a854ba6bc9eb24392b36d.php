

<?php $__env->startSection('title', 'Popular Articles'); ?>

<?php $__env->startSection('konten'); ?>
    <div class="container my-5">
        <h2 class="mb-4">Popular</h2>

        <div class="row">
            <?php $__currentLoopData = $courses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $course): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="col-md-4 mb-4">
                    <div class="card article-card h-100 shadow-sm">
                        <img src="<?php echo e(asset($course->image)); ?>" style="height: 100px; object-fit: cover;" alt="<?php echo e($course->name); ?>">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo e($course->name); ?></h5>
                            <p class="text-muted small"><?php echo e($course->published_at); ?> | By <?php echo e($course->writer->name); ?></p>
                            <p class="card-text"><?php echo e(Str::limit($course->description, 100)); ?></p>
                            <a href="<?php echo e(route('pages.course.show', $course->id)); ?>" class="btn btn-primary btn-sm">Read more...</a>
                        </div>
                    </div>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>

        <div class="d-flex justify-content-center mt-4">
            <nav class="pagination">
                <li class="page-item disabled">
                    <span class="page-link border-0 bg-transparent text-dark">Page |</span>
                </li>

                <?php $__currentLoopData = $courses->getUrlRange(1, $courses->lastPage()); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $page => $url): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li class="page-item <?php echo e($page == $courses->currentPage() ? 'active' : ''); ?>">
                        <a class="page-link border-0 bg-transparent text-dark" href="<?php echo e($url); ?>"><?php echo e($page); ?></a>
                    </li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </nav>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<style>
    .pagination{
        gap: 4px;
    }

    .pagination .page-link{
        padding: 0;
        margin: 0;
        border: none;
        background: none;
        color: black;
        font-weight: 500;
    }

    .pagination .page-item.active .page-link {
        font-weight: 700;
        color: gray;
    } 
</style>
<?php echo $__env->make('layout.master', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\asus\OneDrive\Desktop\Bahan Sekolah Vincent\Tugas Kampus\Semester 5\Web Programming\EduFun\resources\views/pages/popular.blade.php ENDPATH**/ ?>


<?php $__env->startSection('konten'); ?>
    <div class="container my-5">
        <div class="row">
            <div class="col-lg-8 mx-auto">
                <h1 class="mb-3"><?php echo e($course->name); ?></h1>

                <img src="<?php echo e(asset($course->image)); ?>" class="img-fluid w-100 rounded mb-4" alt="<?php echo e(($course->name)); ?>">
                
                <p class="text-muted">
                    <?php echo e($course->published_at); ?> | By <?php echo e($course->writer->name); ?>

                </p>

                <div class="article-content">
                    <?php echo nl2br(e($course->content)); ?>

                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.master', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\asus\OneDrive\Desktop\Bahan Sekolah Vincent\Tugas Kampus\Semester 5\Web Programming\EduFun\resources\views/pages/course.blade.php ENDPATH**/ ?>
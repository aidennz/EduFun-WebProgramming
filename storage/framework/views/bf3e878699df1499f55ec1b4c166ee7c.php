

<?php $__env->startSection('title', 'Home'); ?>

<?php $__env->startSection('konten'); ?>
    <div class="container-fluid">
        <div class="row mb-5">
            <div class="col-12">
                <img src="<?php echo e(asset('img/HomePic.jpg')); ?>" class="img-fluid w-100" style="height:50vh; object-fit:cover;" alt="homePic">
            </div>
        </div>

        <div class="row">
            <?php $__currentLoopData = $courses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $course): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="col-md-4 mb-4">
                <div class="card article-card h-100 shadow-sm">
                    <img src="<?php echo e(asset($course->image)); ?>" class="card-img-top" style="height: 50px; object-fit: cover;" alt="">
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
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.master', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\asus\OneDrive\Desktop\Bahan Sekolah Vincent\Tugas Kampus\Semester 5\Web Programming\EduFun\resources\views/pages/home.blade.php ENDPATH**/ ?>


<?php $__env->startSection('title', $category->name); ?>

<?php $__env->startSection('konten'); ?>
    <div class="container my-5">
        <h2 class="mb-4"><?php echo e($category->name); ?></h2>

        <div class="row">
            <?php $__currentLoopData = $category->courses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $course): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
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
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.master', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\asus\OneDrive\Desktop\Bahan Sekolah Vincent\Tugas Kampus\Semester 5\Web Programming\EduFun\resources\views/pages/category.blade.php ENDPATH**/ ?>
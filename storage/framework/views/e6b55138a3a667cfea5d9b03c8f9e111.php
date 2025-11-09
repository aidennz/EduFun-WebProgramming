

<?php $__env->startSection('title', 'Writers'); ?>

<?php $__env->startSection('konten'); ?>
    <div class="container my-5">
        <h2 class="mb-4">Our Writers:</h2>

        <div class="row justify-content-center">
            <?php $__currentLoopData = $writers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $writer): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="col-md-4 mb-4">
                    <div class="card-body text-center">
                        <a class="d-flex justify-content-center" href="<?php echo e(route('pages.writer.show', $writer->id)); ?>"><img src="<?php echo e(asset($writer->image)); ?>" class="rounded-circle mb-3" alt="<?php echo e(($writer->name)); ?>" style="width: 150px; height: 150px; object-fit: cover;"></a>
                        <h4><?php echo e($writer->name); ?></h4>
                        <p class="text-muted"><?php echo e($writer->specialist); ?></p>
                    </div>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.master', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\asus\OneDrive\Desktop\Bahan Sekolah Vincent\Tugas Kampus\Semester 5\Web Programming\EduFun\resources\views/pages/writers.blade.php ENDPATH**/ ?>
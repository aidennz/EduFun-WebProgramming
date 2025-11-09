

<?php $__env->startSection('title', 'Menu Dosen'); ?> 
<?php $__env->startSection('menuDosen', 'disabled'); ?>

<?php $__env->startSection('konten'); ?>
    <div class="row">
        <div class="col-8 border">
            
            <h1>Ini adalah page Dosen</h1>

            <a href="<?php echo e(route('admin.mahasiswa', $n = 90)); ?>">Menu Mahasiswa</a> <!-- nama variabel nilai itu bebas, ga harus $nilai, karena dia adalah pelempar, sedangkan route di web.php itu penangkap nya -->

            <h1>Daftar Mahasiswa - POV Dosen</h1>
            <ol>

                <?php $__currentLoopData = $mahasiswa; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $mhs): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> 
                    <li><?php echo e($mhs); ?> - <?php echo e($jurusan[$index]); ?> - <?php echo e($nilai[$index]); ?></li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                <!-- Sudah tidak pakai echo lagi probably karna pake with/karena di .blade.php (fungsinya sama kaya echo) -->
                <li><?php echo e($mahasiswa[0]); ?> - <?php echo e($jurusan[0]); ?> - <?php echo e($nilai[0]); ?></li>
                <li><?php echo e($mahasiswa[1]); ?> - <?php echo e($jurusan[1]); ?> - <?php echo e($nilai[1]); ?></li>
                <li><?php echo e($mahasiswa[2]); ?> - <?php echo e($jurusan[2]); ?> - <?php echo e($nilai[2]); ?></li>
                <li><?php echo e($mahasiswa[3]); ?> - <?php echo e($jurusan[3]); ?> - <?php echo e($nilai[3]); ?></li>
            </ol>

            <?php for($i = 0 ; $i <= 10 ; $i++): ?>
                <?php echo e($i); ?>

            <?php endfor; ?>
        </div>
        <div class="col-4 border">
            
            <h3>Belajar Layout Laravel</h3>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.master', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\asus\OneDrive\Desktop\Bahan Sekolah Vincent\Tugas Kampus\Semester 5\Web Programming\coba1\resources\views/universitas/dosen.blade.php ENDPATH**/ ?>
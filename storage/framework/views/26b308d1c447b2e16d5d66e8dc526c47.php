


<?php $__env->startSection('konten'); ?>
<div class="row">
    <div class="col-12">
        <h1>Data Semua Mahasiswa</h1>
        
        <table class="table">
            <tr>
                <th>ID</th>
                <th>NIM</th>
                <th>NAMA</th>
                <th>EMAIL</th>
                <th>JURUSAN</th>
                <th>ALAMAT</th>
            </tr>

            <?php $__currentLoopData = $datamhs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $mhs): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($index + 1); ?></td>
                <td><?php echo e($mhs->nim); ?></td>
                <td><?php echo e($mhs->nama); ?></td>
                <td><?php echo e($mhs->email); ?></td>
                <td><?php echo e($mhs->jurusan); ?></td>
                <td><?php echo e($mhs->alamat); ?></td>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </table>
        
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.master', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\asus\OneDrive\Desktop\Bahan Sekolah Vincent\Tugas Kampus\Semester 5\Web Programming\coba1\resources\views/universitas/data.blade.php ENDPATH**/ ?>
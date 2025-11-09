<div class="row">
    
    <div class="col-12 border"> 
        <img height="50px" width="75px" src="<?php echo e(asset('img/bootstrapLogo.png')); ?>" alt="Logo">
    </div>
</div>
<div class="row">
    
    <div class="col-12 border">
        <nav class="navbar navbar-expand-lg bg-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Navbar</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link <?php echo $__env->yieldContent('menuMahasiswa'); ?>" aria-current="page" href="<?php echo e(route('admin.mahasiswa', $x = 98)); ?>">Mahasiswa</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link <?php echo $__env->yieldContent('menuDosen'); ?>" href="<?php echo e(route('admin.dosen')); ?>">Dosen</a>
                        </li>
                        
                    </ul>
                </div>
                    <ul class="nav justify-content-end">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Active</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Link</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Link</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link disabled">Disabled</a>
                        </li>
                    </ul>
                
            </div>
        </nav>
    </div>
</div><?php /**PATH C:\Users\asus\OneDrive\Desktop\Bahan Sekolah Vincent\Tugas Kampus\Semester 5\Web Programming\coba1\resources\views/layout/header.blade.php ENDPATH**/ ?>
<nav class="navbar navbar-expand-lg navbar-light bg-light shadow-sm">
  <div class="container">
    <img height="50px" width="100px" src="<?php echo e(asset('img/logo.png')); ?>" alt="Logo">
  
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto">
        <li class="navbar-item">
          <a href="<?php echo e(route('pages.home')); ?>" class="nav-link">Home</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Category
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="<?php echo e(route('pages.category.show', 1)); ?>">Data Science</a></li>
            <li><a class="dropdown-item" href="<?php echo e(route('pages.category.show', 2)); ?>">Network Security</a></li>
          </ul>
        </li>
        <li class="navbar-item">
          <a href="<?php echo e(route('pages.writers.index')); ?>" class="nav-link">Writers</a>
        </li>
        <li class="navbar-item">
          <a href="<?php echo e(route('pages.about')); ?>" class="nav-link">About Us</a>
        </li>
        <li class="navbar-item">
          <a href="<?php echo e(route('pages.popular')); ?>" class="nav-link">Popular</a>
        </li>
      </ul>
    </div>
  </div>
</nav><?php /**PATH C:\Users\asus\OneDrive\Desktop\Bahan Sekolah Vincent\Tugas Kampus\Semester 5\Web Programming\EduFun\resources\views/layout/header.blade.php ENDPATH**/ ?>
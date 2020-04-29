<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">

  <!-- CSRF Token -->
  <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

  <title><?php echo $__env->yieldContent('title'); ?> &mdash; JasterMedia</title>

  <!-- General CSS Files -->
  <link rel="stylesheet" href="<?php echo e(asset('assets/modules/bootstrap/css/bootstrap.min.css')); ?>">
  <link rel="stylesheet" href="<?php echo e(asset('assets/modules/fontawesome/css/all.min.css')); ?>">

  <!-- CSS Libraries -->
  <?php $__env->startSection('csslibraries'); ?>
    <?php echo $__env->yieldSection(); ?>

  <!-- Template CSS -->
  <link rel="stylesheet" href="<?php echo e(asset('assets/css/style.css')); ?>">
  <link rel="stylesheet" href="<?php echo e(asset('assets/css/components.css')); ?>">
  <link rel="stylesheet" href="<?php echo e(asset('css/animasi.css')); ?>">
  <link rel="stylesheet" href="<?php echo e(asset('assets/css/custom.css')); ?>">
  <script src="<?php echo e(asset('assets/modules/jquery.min.js')); ?>"></script>
</head>
<body class="layout-2">
    <div id="app">
        <div class="main-wrapper">
            <div class="navbar-bg"></div>
                <?php echo $__env->make('backend.items.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

                <?php echo $__env->make('backend.items.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

                <!-- Main Content -->
                <div class="main-content">
                  <section class="section">
                  <?php echo $__env->yieldContent('content'); ?>
                  </section>
                </div>
                <footer class="main-footer">
                    <div class="footer-left">
                      Copyright &copy; 2018 <div class="bullet"></div> Design By <a href="https://nauval.in/">Muhamad Nauval Azhar</a>
                    </div>
                    <div class="footer-right">

                    </div>
                </footer>
        </div>
    </div>

  <!-- General JS Scripts -->
  <script src="<?php echo e(asset('assets/modules/popper.js')); ?>"></script>
  <script src="<?php echo e(asset('assets/modules/tooltip.js')); ?>"></script>
  <script src="<?php echo e(asset('assets/modules/bootstrap/js/bootstrap.min.js')); ?>"></script>
  <script src="<?php echo e(asset('assets/modules/nicescroll/jquery.nicescroll.min.js')); ?>"></script>
  <script src="<?php echo e(asset('assets/modules/moment.min.js')); ?>"></script>
  <script src="<?php echo e(asset('assets/js/stisla.js')); ?>"></script>

  <!-- JS Libraies -->
  <script src="<?php echo e(asset('assets/modules/sticky-kit.js')); ?>"></script>

  <!-- Page Specific JS File -->
  <?php $__env->startSection('jslibraries'); ?>
    <?php echo $__env->yieldSection(); ?>

  <!-- Template JS File -->
  <script src="<?php echo e(asset('assets/js/scripts.js')); ?>"></script>
  <script src="<?php echo e(asset('assets/js/custom.js')); ?>"></script>
  <?php echo $__env->yieldContent('puter'); ?>
</body>
</html>
<?php /**PATH C:\xampp\htdocs\jaster\resources\views/backend/master.blade.php ENDPATH**/ ?>
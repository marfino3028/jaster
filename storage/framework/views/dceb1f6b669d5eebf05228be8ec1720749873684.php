<?php $__env->startSection('title', 'Dashboard'); ?>
<?php $__env->startSection('content'); ?>
<div class="section-header">
    <h1>Dashboard</h1>
    <div class="section-header-breadcrumb">
        <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
    </div>
</div>

<div class="section-body">
    <h2 class="section-title">Selamat Datang di Dashboard JasterMedia!</h2>
    <p class="section-lead">This page is just an example for you to create your own page.</p>
    <div class="row">
        <div class="col-6">
        <div class="card">
                  <div class="card-header">
                    <h4>Catatan</h4>
                  </div>
                  <div class="card-body">
                    <div id="accordion">
                    <?php $__currentLoopData = $listNotes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $catat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                      <div class="accordion">
                        <div class="accordion-header" role="button" data-toggle="collapse" data-target="#panel-body-<?php echo e($catat->id); ?>" aria-expanded="false">
                          <span>Dari <b><?php echo e($catat->name); ?></b></span>
                        </div>
                        <div class="accordion-body collapse" id="panel-body-<?php echo e($catat->id); ?>" data-parent="#accordion">
                        <?php echo($catat->catatan) ?>
                        </div>
                      </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                  </div>
                </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('backend.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/u6762345/public_html/public/resources/views/backend/dashboard.blade.php ENDPATH**/ ?>
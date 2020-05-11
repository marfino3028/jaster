<?php $__env->startSection('title', 'Edit Antrian'); ?>

<?php $__env->startSection('csslibraries'); ?>
##parent-placeholder-7b1b790aaa0be695520f3372cd9a85443b6faa1f##
<link rel="stylesheet" href="<?php echo e(asset('assets/modules/bootstrap-daterangepicker/daterangepicker.css')); ?>">
<link rel="stylesheet" href="<?php echo e(asset('assets/modules/bootstrap-timepicker/css/bootstrap-timepicker.min.css')); ?>">
<link rel="stylesheet" href="<?php echo e(asset('assets/modules/select2/dist/css/select2.min.css')); ?>">
<?php $__env->stopSection(); ?>



<?php $__env->startSection('content'); ?>
<div class="section-header">
    <h1>Tambah Antrian</h1>
    <div class="section-header-breadcrumb">
        <div class="breadcrumb-item"><a href="#">Antri TF</a></div>
        <div class="breadcrumb-item active"><a href="#">Tambah Antrian</a></div>
    </div>
</div>
<div class="section-body">
    <h2 class="section-title">Tambah Antrian</h2>
    <p class="section-lead">This page is just an example for you to create your own page.</p>
    <form method="post" action="<?php echo e(route('updateTransfer', ['id' => request()->route('id')])); ?>" class="needs-validation" novalidate="">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <?php echo method_field('PATCH'); ?>
                    <?php echo csrf_field(); ?>
                    <div class="col-6">
                        <div class="form-group">
                            <label>Nama Campaign</label>
                            <select class="form-control select2" name="nama_campaign" required>
                                <option value="">None</option>
                                <?php $__currentLoopData = $listCampaign; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $list): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($list->adscampaign_id); ?>" <?php if($list->adscampaign_id == $edit->adscampaign_id): ?> <?php echo e('selected'); ?> <?php endif; ?>><?php echo e($list->nama_customer); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                            <div class="invalid-feedback">
                                Input Namanya bosz
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Tanggal Transfer</label>
                            <input type="text" value="<?php echo e($edit->tanggal_transfer); ?>" class="form-control datepicker" placeholder="YYYY-MM-DD" name="tanggal_tf"
                                required>
                            <div class="invalid-feedback">
                                Input tanggal dengan benar
                            </div>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                            <label>Saldo</label>
                            <input type="text" value="<?php echo e($edit->saldo_transfer); ?>" class="form-control" name="saldo">
                            <div class="invalid-feedback">
                                Input Saldo bosz!
                            </div>
                        </div>
                        <div class="text-right">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </form>
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('jslibraries'); ?>
##parent-placeholder-ffd66c5dac17be6451cca4afe8a4549aa7aad85f##

<script src="<?php echo e(asset('assets/modules/bootstrap-daterangepicker/daterangepicker.js')); ?>"></script>
<script src="<?php echo e(asset('assets/modules/bootstrap-timepicker/js/bootstrap-timepicker.min.js')); ?>"></script>
<script src="<?php echo e(asset('assets/modules/select2/dist/js/select2.full.min.js')); ?>"></script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('backend.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\jaster\resources\views/backend/pages/edit-transfer.blade.php ENDPATH**/ ?>
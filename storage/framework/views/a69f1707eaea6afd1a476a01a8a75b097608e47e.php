<?php $__env->startSection('title', 'Tambah Campaign'); ?>

<?php $__env->startSection('csslibraries'); ?>
##parent-placeholder-7b1b790aaa0be695520f3372cd9a85443b6faa1f##
<link rel="stylesheet" href="<?php echo e(asset('assets/modules/bootstrap-daterangepicker/daterangepicker.css')); ?>">
<link rel="stylesheet" href="<?php echo e(asset('assets/modules/bootstrap-timepicker/css/bootstrap-timepicker.min.css')); ?>">
<link rel="stylesheet" href="<?php echo e(asset('assets/modules/select2/dist/css/select2.min.css')); ?>">
<?php $__env->stopSection(); ?>



<?php $__env->startSection('content'); ?>
<div class="section-header">
    <h1>Tambah Campaign</h1>
    <div class="section-header-breadcrumb">
        <div class="breadcrumb-item"><a href="#">Ringkasan</a></div>
        <div class="breadcrumb-item active"><a href="#">Tambah Campaign</a></div>
    </div>
</div>
<?php if($errors->any()): ?>
    <div class="alert alert-danger">
        <ul>
            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li><?php echo e($error); ?></li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
    </div>
<?php endif; ?>
<div class="section-body">
    <h2 class="section-title">Tambah Campaign</h2>
    <p class="section-lead">This page is just an example for you to create your own page.</p>
    <form method="post" action="<?php echo e(route('addCampaign')); ?>" class="needs-validation" novalidate="">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <?php echo csrf_field(); ?>
                    <div class="col-6">
                        <div class="form-group">
                            <label>Nama Campaign</label>
                            <input type="text" class="form-control" name="nama">
                            <div class="invalid-feedback">
                                Input Nama bosz!
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Akun Adwords</label>
                            <select class="form-control select2" name="akun_adwords" required>
                                <option value="">None</option>
                                <?php $__currentLoopData = $listAkun; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $list): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($list->adsakun_id); ?>"><?php echo e($list->nama_akun); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                            <div class="invalid-feedback">
                                Input akunnya bosz
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Saldo</label>
                            <input type="text" class="form-control" name="saldo">
                            <div class="invalid-feedback">
                                Input Saldo bosz!
                            </div>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                            <label>Tanggal Mulai</label>
                            <input type="text" class="form-control datepicker" placeholder="YYYY-MM-DD" name="tanggal_mulai"
                                required>
                            <div class="invalid-feedback">
                                Input tanggal dengan benar
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Tanggal Akhir</label>
                            <input type="text" class="form-control datepicker" placeholder="YYYY-MM-DD" name="tanggal_akhir"
                                required>
                            <div class="invalid-feedback">
                                Input tanggal dengan benar
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Catatan</label>
                            <textarea name="catatan" id="notes"></textarea>
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
<script src="https://cdn.tiny.cloud/1/ubaylt88d66o8ewdhmw9upizv7g1fbhcunbyhvdfoc5hcnek/tinymce/5/tinymce.min.js"></script>
<script src="<?php echo e(asset('js/tinyce.js')); ?>"></script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('backend.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/u6762345/public_html/public/resources/views/backend/pages/add-campaign.blade.php ENDPATH**/ ?>
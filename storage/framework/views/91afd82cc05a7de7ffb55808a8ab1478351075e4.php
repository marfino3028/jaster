<?php $__env->startSection('title', 'Add Task'); ?>

<?php $__env->startSection('csslibraries'); ?>
##parent-placeholder-7b1b790aaa0be695520f3372cd9a85443b6faa1f##
<link rel="stylesheet" href="<?php echo e(asset('assets/modules/bootstrap-daterangepicker/daterangepicker.css')); ?>">
<link rel="stylesheet" href="<?php echo e(asset('assets/modules/bootstrap-colorpicker/dist/css/bootstrap-colorpicker.min.css')); ?>">
<link rel="stylesheet" href="<?php echo e(asset('assets/modules/select2/dist/css/select2.min.css')); ?>">
<link rel="stylesheet" href="<?php echo e(asset('assets/modules/jquery-selectric/selectric.css')); ?>">
<link rel="stylesheet" href="<?php echo e(asset('assets/modules/bootstrap-timepicker/css/bootstrap-timepicker.min.css')); ?>">
<link rel="stylesheet" href="<?php echo e(asset('assets/modules/bootstrap-tagsinput/dist/bootstrap-tagsinput.css')); ?>">

<?php $__env->stopSection(); ?>



<?php $__env->startSection('content'); ?>
<div class="section-header">
    <h1>Add Task</h1>
    <div class="section-header-breadcrumb">
        <div class="breadcrumb-item"><a href="#">Tasks</a></div>
        <div class="breadcrumb-item active"><a href="#">Add Tasks</a></div>
    </div>
</div>
<div class="section-body">
    <h2 class="section-title">Add Task</h2>
    <p class="section-lead">This page is just an example for you to create your own page.</p>
    <form method="post" action="<?php echo e(route('addCategory')); ?>" class="needs-validation" novalidate="">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <?php echo csrf_field(); ?>
                    <div class="col-6">
                        <div class="form-group">
                            <label>Nama Task</label>
                            <input type="text" class="form-control invoice-input" required="" name="nama_kategori">
                            <div class="invalid-feedback">
                                Input nama Task dengan benar!
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Nilai</label>
                            <select class="form-control select2" name="nilai" id="nilai" disabled>
                                <option value="">None</option>
                                <option value="10">10</option>
                                <option value="15">15</option>
                                <option value="18">18</option>
                                <option value="21">21</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                          <label>Parent Task</label>
                          <select class="form-control select2" name="parent_id" id="parent_id">
                          <option value="">None</option>
                            <?php $__currentLoopData = $showCategory; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $list => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($list); ?>" 
                                <?php echo e(($list == $selectedRole) ? 'selected' : ''); ?>><?php echo e($value); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                          </select>
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

<script src="<?php echo e(asset('assets/modules/cleave-js/dist/cleave.min.js')); ?>"></script>
<script src="<?php echo e(asset('assets/modules/cleave-js/dist/addons/cleave-phone.us.js')); ?>"></script>
<script src="<?php echo e(asset('assets/modules/jquery-pwstrength/jquery.pwstrength.min.js')); ?>"></script>
<script src="<?php echo e(asset('assets/modules/bootstrap-daterangepicker/daterangepicker.js')); ?>"></script>
<script src="<?php echo e(asset('assets/modules/bootstrap-colorpicker/dist/js/bootstrap-colorpicker.min.js')); ?>"></script>
<script src="<?php echo e(asset('assets/modules/bootstrap-timepicker/js/bootstrap-timepicker.min.js')); ?>"></script>
<script src="<?php echo e(asset('assets/modules/bootstrap-tagsinput/dist/bootstrap-tagsinput.min.js')); ?>"></script>
<script src="<?php echo e(asset('assets/modules/select2/dist/js/select2.full.min.js')); ?>"></script>
<script src="<?php echo e(asset('assets/modules/jquery-selectric/jquery.selectric.min.js')); ?>"></script>

<script>
    $(document).ready(function() {
        $('#parent_id').on('change', function() {
            if($('#parent_id').val() == '') {
                $('#nilai').attr('disabled', true);
            } else {
                $('#nilai').attr('disabled', false);
            }
        });
    });
</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('backend.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/u6762345/public_html/public/resources/views/backend/pages/add-category.blade.php ENDPATH**/ ?>
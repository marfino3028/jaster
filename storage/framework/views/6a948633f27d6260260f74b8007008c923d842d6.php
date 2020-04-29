<?php $__env->startSection('title', 'List Antrian Transfer'); ?>

<?php $__env->startSection('csslibraries'); ?>
##parent-placeholder-7b1b790aaa0be695520f3372cd9a85443b6faa1f##
<link rel="stylesheet" href="<?php echo e(asset('assets/css/custom.css')); ?>">
<?php $__env->stopSection(); ?>



<?php $__env->startSection('content'); ?>
<div class="section-header">
    <h1>Password</h1>
    <div class="section-header-breadcrumb">
        <div class="breadcrumb-item active"><a href="#">Password</a></div>
    </div>
</div>

<?php if(session()->has('success')): ?>
    <div class="alert alert-success"><?php echo e(session('success')); ?></div>
<?php endif; ?>

<div class="section-body">
    <h2 class="section-title">Edit Password</h2>
    <p class="section-lead">This page is just an example for you to create your own page.</p>
    <div class="col-12 col-md-12 col-lg-3">
                <div class="card">
                  <form method="post" class="needs-validation" novalidate="" action="<?php echo e(route('updatePassword')); ?>">
                      
                    <?php echo e(csrf_field()); ?>

                    <?php echo e(method_field('put')); ?>


                    <div class="card-header">
                      <h4>Edit Password</h4>
                    </div>
                    <div class="card-body">
                        <div class="row">                               
                          <div class="form-group col-12">
                            <label>Password Lama</label>
                            <input type="password" class="form-control" name="current_password">
                            <span class="help-block"><?php echo e($errors->first('current_password')); ?></span>
                            <div class="invalid-feedback">
                              Masukkan password lama
                            </div>
                          </div>
                          <div class="form-group col-12">
                            <label>Password Baru</label>
                            <input type="password" class="form-control" name="password">
                            <span class="help-block"><?php echo e($errors->first('password')); ?></span>
                            <div class="invalid-feedback">
                              Masukkan password baru
                            </div>
                          </div>
                          <div class="form-group col-12">
                            <label>Konfirmasi Password Baru</label>
                            <input type="password" class="form-control" name="password_confirmation">
                            <span class="help-block"><?php echo e($errors->first('password_confirmation')); ?></span>
                            <div class="invalid-feedback">
                              Masukkan verifikasi password baru
                            </div>
                          </div>
                        </div>
                    </div>
                    <div class="card-footer text-right">
                      <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                  </form>
                </div>
              </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('jslibraries'); ?>
##parent-placeholder-ffd66c5dac17be6451cca4afe8a4549aa7aad85f##
<script src="<?php echo e(asset('assets/modules/jquery-ui/jquery-ui.min.js')); ?>"></script>
<script src="<?php echo e(asset('assets/js/custom.js')); ?>"></script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('backend.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/u6762345/public_html/public/resources/views/backend/pages/update-password.blade.php ENDPATH**/ ?>
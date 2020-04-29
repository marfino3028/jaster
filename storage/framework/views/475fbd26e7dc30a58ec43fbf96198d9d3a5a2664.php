<?php $__env->startSection('title', 'Edit Order'); ?>

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
    <h1>Edit Order</h1>
    <div class="section-header-breadcrumb">
        <div class="breadcrumb-item"><a href="#">Orders</a></div>
        <div class="breadcrumb-item active"><a href="#">Edit Order</a></div>
    </div>
</div>
<div class="section-body">
    <h2 class="section-title">Edit Order</h2>
    <p class="section-lead">This page is just an example for you to create your own page.</p>
    <form method="post" action="<?php echo e(route('updateOrder', ['id' => request()->route('id')])); ?>" class="needs-validation" novalidate="">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <?php echo method_field('PATCH'); ?>
                    <?php echo csrf_field(); ?>
                    <div class="col-6">
                        <div class="form-group">
                            <label>Nama Order</label>
                            <input type="text" class="form-control" name="nama_order" value="<?php echo e($edit->nama_order); ?>">
                            <div class="invalid-feedback">
                                Input Nama bosz!
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Paket</label>
                            <select class="form-control select2" name="nama_paket" required>
                                <option value="">None</option>
                                <option value="Ekonomis" <?php if($edit->nama_paket == "Ekonomis"): ?> <?php echo e('selected'); ?> <?php endif; ?>>Ekonomis</option>
                                <option value="Basic" <?php if($edit->nama_paket == "Basic"): ?> <?php echo e('selected'); ?> <?php endif; ?>>Basic</option>
                                <option value="Premium" <?php if($edit->nama_paket == "Premium"): ?> <?php echo e('selected'); ?> <?php endif; ?>>Premium</option>
                                <option value="Business" <?php if($edit->nama_paket == "Business"): ?> <?php echo e('selected'); ?> <?php endif; ?>>Business</option>
                                <option value="Luxury" <?php if($edit->nama_paket == "Luxury"): ?> <?php echo e('selected'); ?> <?php endif; ?>>Luxury</option>
                            </select>
                            <div class="invalid-feedback">
                                Input paketnya bosz
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Logo</label>
                            <select class="form-control select2" name="data_logo" required>
                                <option value="">None</option>
                                <option value="Dibuatkan" <?php if($edit->data_logo == "Dibuatkan"): ?> <?php echo e('selected'); ?> <?php endif; ?>>Dibuatkan</option>
                                <option value="Email" <?php if($edit->data_logo == "Email"): ?> <?php echo e('selected'); ?> <?php endif; ?>>Email</option>
                            </select>
                            <div class="invalid-feedback">
                                Logonya darimana bosz?
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Data</label>
                            <select class="form-control select2" name="data_website" required>
                                <option value="">None</option>
                                <option value="Full Kita" <?php if($edit->data_website == "Full Kita"): ?> <?php echo e('selected'); ?> <?php endif; ?>>Full dari Kita</option>
                                <option value="Full Client" <?php if($edit->data_website == "Full Client"): ?> <?php echo e('selected'); ?> <?php endif; ?>>Full Client</option>
                                <option value="Kita Bantu" <?php if($edit->data_website == "Kita Bantu"): ?> <?php echo e('selected'); ?> <?php endif; ?>>Kita Bantu</option>
                            </select>
                            <div class="invalid-feedback">
                                Datanya?
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Tipe Post</label>
                            <select class="form-control select2" name="tipe_post" required>
                                <option value="">None</option>
                                <option value="Artikel" <?php if($edit->tipe_post == "Artikel"): ?> <?php echo e('selected'); ?> <?php endif; ?>>Artikel</option>
                                <option value="Produk" <?php if($edit->tipe_post == "Produk"): ?> <?php echo e('selected'); ?> <?php endif; ?>>Produk</option>
                                <option value="Service" <?php if($edit->tipe_post == "Service"): ?> <?php echo e('selected'); ?> <?php endif; ?>>Service</option>
                                <option value="Gallery" <?php if($edit->tipe_post == "Gallery"): ?> <?php echo e('selected'); ?> <?php endif; ?>>Gallery</option>
                                <option value="Elementor" <?php if($edit->tipe_post == "Elementor"): ?> <?php echo e('selected'); ?> <?php endif; ?>>Elementor</option>
                                <option value="Landing" <?php if($edit->tipe_post == "Landing"): ?> <?php echo e('selected'); ?> <?php endif; ?>>Landing</option>
                            </select>
                            <div class="invalid-feedback">
                                Post nya tentang apa?
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Target</label>
                            <select class="form-control select2" name="target" required>
                                <option value="">None</option>
                                <option value="WA atau Telepon" <?php if($edit->target == "WA atau Telepon"): ?> <?php echo e('selected'); ?> <?php endif; ?>>WA atau Telepon</option>
                                <option value="Email" <?php if($edit->target == "Email"): ?> <?php echo e('selected'); ?> <?php endif; ?>>Email</option>
                                <option value="Checkout" <?php if($edit->target == "Checkout"): ?> <?php echo e('selected'); ?> <?php endif; ?>>Checkout</option>
                            </select>
                            <div class="invalid-feedback">
                                Target action nya?
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Pick Your Color</label>
                            <div class="input-group colorpickerinput">
                                <input type="text" class="form-control" name="warna" value="<?php echo e($edit->warna); ?>">
                                <div class="input-group-append">
                                    <div class="input-group-text">
                                        <i class="fas fa-fill-drip"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                            <label>Username Akun WordPress</label>
                            <input type="text" class="form-control" name="akun_username" value="<?php echo e($edit->akun_username); ?>">
                        </div>
                        <div class="form-group">
                            <label>Email Akun</label>
                            <input type="text" class="form-control" name="akun_email" value="<?php echo e($edit->akun_email); ?>">
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">
                                        <i class="fas fa-lock"></i>
                                    </div>
                                </div>
                                <input type="text" class="form-control pwstrength" data-indicator="pwindicator"
                                    name="akun_password" value="akun_password">
                            </div>
                            <div id="pwindicator" class="pwindicator">
                                <div class="bar"></div>
                                <div class="label"></div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Deadline</label>
                            <input type="text" value=<?php echo e($edit->deadline); ?> class="form-control datepicker" placeholder="YYYY-MM-DD" name="deadline"
                                required>
                            <div class="invalid-feedback">
                                Input tanggal dengan benar
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Request</label>
                            <textarea class="form-control" name="request"><?php echo e($edit->request); ?></textarea>
                        </div>
                        <div class="form-group">
                            <label>Web Pesaing</label>
                            <textarea class="form-control" name="web_pesaing"><?php echo e($edit->web_pesaing); ?></textarea>
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
    $(".colorpickerinput").colorpicker({
        format: 'hex',
        component: '.input-group-append',
    });
</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('backend.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\jasterman\resources\views/backend/pages/edit-order.blade.php ENDPATH**/ ?>
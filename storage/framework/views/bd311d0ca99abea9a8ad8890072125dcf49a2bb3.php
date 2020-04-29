<?php $__env->startSection('title', 'List Progress'); ?>

<?php $__env->startSection('csslibraries'); ?>
##parent-placeholder-7b1b790aaa0be695520f3372cd9a85443b6faa1f##
<link rel="stylesheet" href="<?php echo e(asset('assets/modules/datatables/datatables.min.css')); ?>">
<link rel="stylesheet" href="<?php echo e(asset('assets/modules/datatables/DataTables-1.10.16/css/dataTables.bootstrap4.min.css')); ?>">
<link rel="stylesheet" href="<?php echo e(asset('assets/modules/datatables/Select-1.2.4/css/select.bootstrap4.min.css')); ?>">
<link rel="stylesheet" href="<?php echo e(asset('assets/css/custom.css')); ?>">
<?php $__env->stopSection(); ?>



<?php $__env->startSection('content'); ?>
<div class="section-header">
    <h1>List Progress</h1>
    <div class="section-header-breadcrumb">
        <div class="breadcrumb-item"><a href="#">Progress</a></div>
        <div class="breadcrumb-item active"><a href="#">List Progress</a></div>
    </div>
</div>
<div class="section-body">
    <h2 class="section-title">List Progress</h2>
    <p class="section-lead">This page is just an example for you to create your own page.</p>
    <div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="card-body">
                    <div class="table-responsive">
                      <table id="ordertable" class="table table-striped">
                        <thead>                                 
                          <tr>
                            <th>#</th>
                            <th>Nama Order</th>
                            <th>Terakhir update</th>
                            <th>Presentase</th>
                            <th>Action</th>
                          </tr>
                        </thead>
                        <tbody>
                            <?php $no = 1; ?>
                            <?php $__empty_1 = true; $__currentLoopData = $hasil; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                          <tr>
                            <td><?php echo e($no++); ?></td>
                            <td><?php echo e($row['nama_order']); ?></td>
                            <td><?php if(($row['last_edit']) == null): ?> not updated yet <?php else: ?> <?php echo e(date('l, d F Y h:i A', strtotime($row['last_edit']))); ?> <?php endif; ?></td>
                            <td><?php echo e($row['presentase']); ?>%</td>
                            <td>
                                <div class="form-inline">
                                    <div class="form-group">
                                        <a href="<?php echo e($row['domain']); ?>"
                                            target="_blank"
                                            class="btn btn-primary button-list-order">Cek Website</a>
                                    </div>
                                    <div class="form-group">
                                        <a href="<?php echo e(route('addProgress', ['id' => $row['order_id']])); ?>"
                                            class="btn btn-outline-primary button-list-order">Ganti Progress</a>
                                    </div>
                                </div>
                            </td>
                          </tr>
                          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                          <tr>
                              <td>Tidak ada data</td>
                              <td>Tidak ada data</td>
                              <td>tidak ada data</td>
                              <td>tidak ada data</td>
                              <td>Tidak ada data</td>
                          </tr>
                          <?php endif; ?>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('jslibraries'); ?>
##parent-placeholder-ffd66c5dac17be6451cca4afe8a4549aa7aad85f##
<script src="<?php echo e(asset('assets/modules/datatables/datatables.min.js')); ?>"></script>
<script src="<?php echo e(asset('assets/modules/datatables/DataTables-1.10.16/js/dataTables.bootstrap4.min.js')); ?>"></script>
<script src="<?php echo e(asset('assets/modules/datatables/Select-1.2.4/js/dataTables.select.min.js')); ?>"></script>
<script src="<?php echo e(asset('assets/modules/jquery-ui/jquery-ui.min.js')); ?>"></script>
<script>
    $("#ordertable").dataTable({
      "lengthMenu": [[25, 50, -1], [25, 50, "All"]]
    });
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('backend.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/u6762345/public_html/public/resources/views/backend/pages/list-progress.blade.php ENDPATH**/ ?>
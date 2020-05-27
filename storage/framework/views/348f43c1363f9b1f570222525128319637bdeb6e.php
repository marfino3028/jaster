<?php $__env->startSection('title', 'List Antrian Transfer'); ?>

<?php $__env->startSection('csslibraries'); ?>
##parent-placeholder-7b1b790aaa0be695520f3372cd9a85443b6faa1f##
<link rel="stylesheet" href="<?php echo e(asset('assets/modules/datatables/datatables.min.css')); ?>">
<link rel="stylesheet" href="<?php echo e(asset('assets/modules/datatables/DataTables-1.10.16/css/dataTables.bootstrap4.min.css')); ?>">
<link rel="stylesheet" href="<?php echo e(asset('assets/modules/datatables/Select-1.2.4/css/select.bootstrap4.min.css')); ?>">
<link rel="stylesheet" href="<?php echo e(asset('assets/css/custom.css')); ?>">
<?php $__env->stopSection(); ?>



<?php $__env->startSection('content'); ?>
<div class="section-header">
    <h1>List Antrian</h1>
    <div class="section-header-breadcrumb">
        <div class="breadcrumb-item"><a href="#">Antri TF</a></div>
        <div class="breadcrumb-item active"><a href="#">List Antrian</a></div>
    </div>
</div>
<div class="section-body">
    <h2 class="section-title">List Antrian Transfer</h2>
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
                            <th>Nama</th>
                            <th>Akun</th>
                            <th>Saldo</th>
                            <th>Tanggal Transfer</th>
                            <th>Action</th>
                          </tr>
                        </thead>
                        <tbody>
                            <?php $no = 1; ?>
                            <?php $__empty_1 = true; $__currentLoopData = $listTransfer; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                          <tr>
                            <td><?php echo e($no++); ?></td>
                            <td><?php echo e($row->nama_customer); ?></td>
                            <td><?php echo e($row->nama_akun); ?></td>
                            <td>Rp. <?php echo e(number_format($row->saldo_transfer, '0', ',', '.')); ?></td>
                            <td><?php echo e($row->tanggal_transfer); ?></td>
                            <td>
                                <div class="form-inline">
                                    <div class="form-group">
                                        <a href="<?php echo e(route('editTransfer', ['id' => $row->adstransfer_id])); ?>"
                                            class="btn btn-outline-primary button-list-order">Edit</a>
                                    </div>
                                    <div class="form-group">
                                        <button type="button"
                                            id="deleteTf" class="btn btn-outline-info button-list-order"
                                            data-toggle="modal"
                                            data-target="#transfered"
                                            data-id="<?php echo e($row->adstransfer_id); ?>"
                                            data-cpid="<?php echo e($row->adscampaign_id); ?>"
                                            data-saldo="<?php echo e($row->saldo_transfer); ?>">Transfered</button>
                                    </div>
                                </div>
                            </td>
                          </tr>
                          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                          <tr>
                              <td>Tidak ada data</td>
                              <td>Tidak ada data</td>
                              <td>Tidak ada data</td>
                              <td>Tidak ada data</td>
                              <td>Tidak ada data</td>
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
<script src="<?php echo e(asset('assets/js/custom.js')); ?>"></script>
<script>
    $(document).ready(function() {
    $('.table').DataTable( {
        'paging' : false,
        'lengthChange' : false,
        'searching' : false,
        'ordering' : [[ 1, "asc" ]],
        'order': [[ 1, "asc" ]],
        'autoWidth' : false,
        'info' : false,
        'scrollx' : false

    } );
} );
</script>

<!-- modal untuk delete transfered -->
<div class="modal fade" tabindex="-1" role="dialog" id="transfered">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Transfered</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>Apakah anda yakin sudah di transfer ke Google?</p>
            </div>
            <div class="modal-footer bg-whitesmoke br">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-danger" onclick="deleteTransfered('<?php echo e(url('/')); ?>')" data-dismiss="modal">Yes</button>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('backend.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\jaster\resources\views/backend/pages/list-transfer.blade.php ENDPATH**/ ?>
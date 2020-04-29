<?php $__env->startSection('title', 'Ringkasan Campaign'); ?>

<?php $__env->startSection('csslibraries'); ?>
##parent-placeholder-7b1b790aaa0be695520f3372cd9a85443b6faa1f##
<link rel="stylesheet" href="<?php echo e(asset('assets/modules/datatables/datatables.min.css')); ?>">
<link rel="stylesheet" href="<?php echo e(asset('assets/modules/datatables/DataTables-1.10.16/css/dataTables.bootstrap4.min.css')); ?>">
<link rel="stylesheet" href="<?php echo e(asset('assets/modules/datatables/Select-1.2.4/css/select.bootstrap4.min.css')); ?>">
<link rel="stylesheet" href="<?php echo e(asset('assets/css/custom.css')); ?>">
<?php $__env->stopSection(); ?>



<?php $__env->startSection('content'); ?>
<div class="section-header">
    <h1>Ringkasan Campaign</h1>
    <div class="section-header-breadcrumb">
        <div class="breadcrumb-item"><a href="#">Ringkasan</a></div>
        <div class="breadcrumb-item active"><a href="#">Ringkasan Campaign</a></div>
    </div>
</div>
<div class="section-body">
  <h2 class="section-title">List Campaign</h2>
  <p class="section-lead">This page is just an example for you to create your own page.</p>
  <div class="row">
    <div class="col-12">
      <?php $__currentLoopData = $listCampaign; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $akun => $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <div class="card">
        <div class="card-body">
          <div class="table-responsive">
                      <table id="ordertable" class="table table-striped">
                        <thead>                                 
                          <tr>
                            <th>#</th>
                            <th>Nama</th>
                            <th>Akun</th>
                            <th>Tanggal Mulai</th>
                            <th>Tanggal Akhir</th>
                            <th>Saldo</th>
                            <th>Action</th>
                          </tr>
                        </thead>
                        <tbody>
                            <?php $no = 1; ?>
                            <?php $__empty_1 = true; $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>                              
                          <tr>
                            <td><?php echo e($no++); ?></td>
                            <td><?php echo e($row->nama_customer); ?></td>
                            <td><?php echo e($row->akun->nama_akun); ?></td>
                            <td><?php echo e($row->tanggal_mulai); ?></td>
                            <td><?php echo e($row->tanggal_akhir); ?></td>
                            <td>Rp. <?php echo e(number_format($row->saldo_adwords, '0', ',', '.')); ?></td>
                            <td>
                                <div class="form-inline">
                                    <div class="form-group">
                                        <a href="<?php echo e(route('editCampaign', ['id' => $row->adscampaign_id])); ?>"
                                            class="btn btn-outline-primary button-list-order">Edit</a>
                                    </div>
                                    <div class="form-group">
                                        <button type="button"
                                            class="btn btn-outline-info button-list-order"
                                            data-toggle="modal"
                                            id="nota"
                                            data-note="<?php echo e($row->notes); ?>"
                                            data-target="#viewNotes">View Notes</button>
                                            <button type="button"
                                                    class="btn btn-outline-danger button-list-order" onclick="deleteCampaign(<?php echo e($row->adscampaign_id); ?>)" data-target="#deleteCampaignConfirm" data-toggle="modal">Delete</button>
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
                              <td>Tidak ada data</td>
                          </tr>
                          <?php endif; ?>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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

<!-- modal untuk delete campaign -->
<div class="modal fade" tabindex="-1" role="dialog" id="deleteCampaignConfirm">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Delete Campaign</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>Apakah anda yakin ingin menghapus Campaign ini?</p>
            </div>
            <div class="">
            <form class="modal-footer bg-whitesmoke br" action="" id="deleteForm" method="post">
                <?php echo csrf_field(); ?>
                <?php echo method_field('DELETE'); ?>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                <button type="submit" class="btn btn-danger" onclick="deleteSubmit()">Yes</button>
            </form>
            </div>
        </div>
    </div>
</div>

<!-- modal untuk melihat notes -->
<div class="modal fade" tabindex="-1" role="dialog" id="viewNotes">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">View Notes</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-6">
                        <div class="form-group" id="detailNotes">
                            
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer bg-whitesmoke br">
                <button type="button" class="btn btn-outline-primary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<script>
    $("table").dataTable();

    function deleteCampaign(idCampaign) {
        var id = idCampaign;
        var url = '<?php echo e(route("deleteCampaign", ":id")); ?>';
        url = url.replace(':id', id);
        $("#deleteForm").attr('action', url);
    }

    function deleteSubmit() {
         $("#deleteForm").submit();
    }
</script>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('backend.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/u6762345/public_html/public/resources/views/backend/pages/list-campaign.blade.php ENDPATH**/ ?>
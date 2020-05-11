<?php $__env->startSection('title', 'Website'); ?>

<?php $__env->startSection('csslibraries'); ?>
##parent-placeholder-7b1b790aaa0be695520f3372cd9a85443b6faa1f##
<link rel="stylesheet" href="<?php echo e(asset('assets/modules/datatables/datatables.min.css')); ?>">
<link rel="stylesheet" href="<?php echo e(asset('assets/modules/datatables/DataTables-1.10.16/css/dataTables.bootstrap4.min.css')); ?>">
<link rel="stylesheet" href="<?php echo e(asset('assets/modules/bootstrap-daterangepicker/daterangepicker.css')); ?>">
<link rel="stylesheet" href="<?php echo e(asset('assets/modules/datatables/Select-1.2.4/css/select.bootstrap4.min.css')); ?>">
<link rel="stylesheet" href="<?php echo e(asset('assets/modules/select2/dist/css/select2.min.css')); ?>">
<link rel="stylesheet" href="<?php echo e(asset('assets/css/custom.css')); ?>">
<?php $__env->stopSection(); ?>



<?php $__env->startSection('content'); ?>
<div class="section-header">
    <h1>List Hosting</h1>
    <div class="section-header-breadcrumb">
        <div class="breadcrumb-item"><a href="#">Website</a></div>
        <div class="breadcrumb-item active"><a href="#">List Website</a></div>
    </div>
</div>
<div class="section-body">
    <h2 class="section-title">List Website</h2>
    <p class="section-lead">This page is just an example for you to create your own page.</p>
    <div class="row">
    <div class="col-xl-8 col-12">
    <?php if(!empty($listwebnoHost)): ?>
        <div class="card">
            <div class="card-header">
                    <h4 class="mt-0">Belum masuk Hosting</h4>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Nama Domain</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $no = 1; ?>
                                <?php $__empty_1 = true; $__currentLoopData = $listwebnoHost; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                <?php if(is_array($row)): ?>
                                <tr>
                                    <td><?php echo e($no++); ?></td>
                                    <td><?php echo e($row['domain']); ?></td>
                                    <td>
                                        <div class="form-inline">
                                            <div class="form-group">
                                                <button onclick="show(<?php echo e($row['websiteId']); ?>)" class="btn btn-outline-primary button-list-order">Edit</a>
                                            </div>
                                            <div class="form-group">
                                                <button type="button"
                                                    class="btn btn-outline-danger button-list-order" onclick="deleteDomain(<?php echo e($row['websiteId']); ?>)" data-target="#deleteHostingConfirm" data-toggle="modal">Delete</button>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <?php endif; ?>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                <tr>
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
    <?php endif; ?>
    <?php $__currentLoopData = $listweb; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="card">
            <?php
                foreach ($arrayHosting as $a) {
                    if($a['hostingId'] == $data[0]['hostingId']) {
                        $nama_hosting = $a['nama_hosting'];
                    }
                }
            ?>
            <div class="card-header">
                    <h4 class="mt-0"><?php echo e($nama_hosting); ?></h4>
                    <div class="card-header-action">
                        <span><span class="badge badge-primary mr-2"><?php echo e(count($data)); ?></span> Website didalamnya</span>
                    </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Nama Domain</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $no = 1; ?>
                                <?php $__empty_1 = true; $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                <?php if(is_array($row)): ?>
                                <tr>
                                    <td><?php echo e($no++); ?></td>
                                    <td><a href="<?php echo e($row['domain']); ?>" target="_blank"><?php echo e($row['domain']); ?></a></td>
                                    <td>
                                        <div class="form-inline">
                                            <div class="form-group">
                                                <button onclick="show(<?php echo e($row['websiteId']); ?>)" class="btn btn-outline-primary button-list-order">Edit</a>
                                            </div>
                                            <div class="form-group">
                                                <button type="button"
                                                    class="btn btn-outline-danger button-list-order" onclick="deleteDomain(<?php echo e($row['websiteId']); ?>)" data-target="#deleteHostingConfirm" data-toggle="modal">Delete</button>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <?php endif; ?>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                <tr>
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
        <div class="col-xl-4 col-12">
            <div id="formDomain" class="card position-sticky sticky-top">
                <div class="card-header">
                    <h4>Tambah Website</h4>
                </div>
                <div class="card-body">
                    <form id="kirimDomain" action="<?php echo e(route('addDomain')); ?>" method="post">
                    <?php echo csrf_field(); ?>
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group">
                                    <label>Input Domain</label>
                                    <input type="text" class="form-control" name="nama_domain" id="nama_domain">
                                    <div class="invalid-feedback">
                                        Input Nama bosz!
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Hosting</label>
                                    <select class="form-control select2" name="nama_hosting" id="nama_hosting">
                                        <option value="">None</option>
                                        <?php $__currentLoopData = $listHosting; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $h): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value="<?php echo e($h->hostingId); ?>"><?php echo e($h->nama_hosting); ?></option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Nama Order</label>
                                    <select class="form-control select2" name="brand" id="brand">
                                        <option value="">None</option>
                                        <?php $__currentLoopData = $listOrder; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $or): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value="<?php echo e($or->order_id); ?>"><?php echo e($or->brand); ?></option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Deadline</label>
                                    <input type="text" class="form-control datepicker" placeholder="YYYY-MM-DD" name="deadline" id="deadline">
                                    <div class="invalid-feedback">
                                        Input tanggal dengan benar
                                    </div>
                                </div>
                                <div class="text-right">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('jslibraries'); ?>
##parent-placeholder-ffd66c5dac17be6451cca4afe8a4549aa7aad85f##
<div class="modal fade" tabindex="-1" role="dialog" id="deleteHostingConfirm">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Delete Website</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>Apakah anda yakin ingin menghapus Web ini?</p>
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
<script src="<?php echo e(asset('assets/modules/datatables/datatables.min.js')); ?>"></script>
<script src="<?php echo e(asset('assets/modules/datatables/DataTables-1.10.16/js/dataTables.bootstrap4.min.js')); ?>"></script>
<script src="<?php echo e(asset('assets/modules/datatables/Select-1.2.4/js/dataTables.select.min.js')); ?>"></script>
<script src="<?php echo e(asset('assets/modules/jquery-ui/jquery-ui.min.js')); ?>"></script>
<script src="<?php echo e(asset('assets/modules/bootstrap-daterangepicker/daterangepicker.js')); ?>"></script>
<script src="<?php echo e(asset('assets/modules/bootstrap-colorpicker/dist/js/bootstrap-colorpicker.min.js')); ?>"></script>
<script src="<?php echo e(asset('assets/modules/bootstrap-timepicker/js/bootstrap-timepicker.min.js')); ?>"></script>
<script src="<?php echo e(asset('assets/modules/select2/dist/js/select2.full.min.js')); ?>"></script>
<script src="<?php echo e(asset('assets/modules/jquery-selectric/jquery.selectric.min.js')); ?>"></script>
<script>
    $("table").dataTable({
        pageLength : 5,
        lengthMenu: [[5, 10, 20, -1], [5, 10, 20, 'All']]
    });
</script>
<script>
    function show(webId) {
        var urlShow = '<?php echo e(route("showDomain", ":id")); ?>';
        var urlUpdate = '<?php echo e(route("updateDomain", ":id")); ?>';


        urlShow = urlShow.replace(':id', webId);
        urlUpdate = urlUpdate.replace(':id', webId);


        $.ajax({
            url: urlShow,
            type: 'GET',
            dataType: 'JSON',
            success: function(response) {
                if(response.code == 200) {
                    $('#formDomain h4').text('Edit Website');
                    $('#nama_domain').val(response.result.domain);
                    $('#nama_hosting').val(response.result.hostingId);
                    $('#nama_hosting').select2().trigger('change');
                    $('#brand').val(response.result.order_id);
                    $('#brand').select2().trigger('change');
                    $('#duedate').val(response.result.duedate);
                    $('#kirimDomain').attr('action', urlUpdate);
                }
            }
        });
    }

    function deleteDomain(webId) {
        console.log(webId)
        var id = webId;
        var url = '<?php echo e(route("deleteDomain", ":id")); ?>';
        url = url.replace(':id', id);
        $("#deleteForm").attr('action', url);
    }

    function deleteSubmit() {
         $("#deleteForm").submit();
    }
</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('backend.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\jaster\resources\views/backend/pages/list-website.blade.php ENDPATH**/ ?>
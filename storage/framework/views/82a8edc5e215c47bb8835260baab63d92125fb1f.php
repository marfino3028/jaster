<?php $__env->startSection('title', 'List Hosting'); ?>

<?php $__env->startSection('csslibraries'); ?>
##parent-placeholder-7b1b790aaa0be695520f3372cd9a85443b6faa1f##
<link rel="stylesheet" href="<?php echo e(asset('assets/modules/datatables/datatables.min.css')); ?>">
<link rel="stylesheet"
    href="<?php echo e(asset('assets/modules/datatables/DataTables-1.10.16/css/dataTables.bootstrap4.min.css')); ?>">
<link rel="stylesheet" href="<?php echo e(asset('assets/modules/datatables/Select-1.2.4/css/select.bootstrap4.min.css')); ?>">
<link rel="stylesheet" href="<?php echo e(asset('assets/css/custom.css')); ?>">
<?php $__env->stopSection(); ?>



<?php $__env->startSection('content'); ?>
<div class="section-header">
    <h1>List Hosting</h1>
    <div class="section-header-breadcrumb">
        <div class="breadcrumb-item"><a href="#">Hosting</a></div>
        <div class="breadcrumb-item active"><a href="#">List Hosting</a></div>
    </div>
</div>
<div class="section-body">
    <h2 class="section-title">List Hosting</h2>
    <p class="section-lead">This page is just an example for you to create your own page.</p>
    <div class="row">
    <div class="col-8">
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="categorytable" class="table table-striped">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Nama Hosting</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $no = 1; ?>
                                <?php $__empty_1 = true; $__currentLoopData = $index; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                <tr>
                                    <td><?php echo e($no++); ?></td>
                                    <td><?php echo e($row->nama_hosting); ?></td>
                                    <td>
                                        <div class="form-inline">
                                            <div class="form-group">
                                                <a target="_blank" href="http://<?php echo e($row->nama_hosting); ?>/cpanel" class="btn btn-outline-info button-list-order">Cek Hosting</a>
                                            </div>
                                            <div class="form-group">
                                                <button onclick="showAccount(<?php echo e($row->hostingId); ?>)" class="btn btn-outline-primary button-list-order" data-toggle="modal" data-target="#modalAkun">Akun</a>
                                            </div>
                                            <div class="form-group">
                                                <button onclick="show(<?php echo e($row->hostingId); ?>)" class="btn btn-outline-primary button-list-order">Edit</a>
                                            </div>
                                            <div class="form-group">
                                                <button type="button"
                                                    class="btn btn-outline-danger button-list-order" onclick="deleteHosting(<?php echo e($row['hostingId']); ?>)" data-target="#deleteHostingConfirm" data-toggle="modal">Delete</button>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
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
        </div>
        <div class="col-4">
            <div class="card">
                <div class="card-header">
                    <h4>Tambah Hosting</h4>
                </div>
                <div class="card-body">
                    <form id="kirimHosting" action="<?php echo e(route('addHosting')); ?>" method="post">
                    <?php echo csrf_field(); ?>
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group">
                                    <label>Input Hosting</label>
                                    <input type="text" class="form-control" name="nama_hosting" id="hostingName">
                                    <div class="invalid-feedback">
                                        Input Nama bosz!
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Username</label>
                                    <input type="text" class="form-control" name="username_hosting" id="hostingUsername">
                                    <div class="invalid-feedback">
                                        Input Username bosz!
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Password</label>
                                    <input type="text" class="form-control" name="password_hosting" id="hostingPassword">
                                    <div class="invalid-feedback">
                                        Input Password bosz!
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

<!-- modal untuk delete -->
<div class="modal fade" tabindex="-1" role="dialog" id="deleteHostingConfirm">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Delete Hosting</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>Apakah anda yakin ingin menghapus Hosting ini?</p>
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

<!-- modal untuk lihat akun -->
<div class="modal fade" tabindex="-1" role="dialog" id="modalAkun">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">View Account</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <label>Username</label>
                    <input type="text" class="form-control" readonly="" id="hostingAkunName">
                </div>
                <div class="form-group">
                    <label>Password</label>
                    <input type="text" class="form-control" readonly="" id="hostingAkunPassword">
                </div>
            </div>
            <div class="modal-footer bg-whitesmoke br">
                <button type="button" class="btn btn-outline-primary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<script src="<?php echo e(asset('assets/modules/datatables/datatables.min.js')); ?>"></script>
<script src="<?php echo e(asset('assets/modules/datatables/DataTables-1.10.16/js/dataTables.bootstrap4.min.js')); ?>"></script>
<script src="<?php echo e(asset('assets/modules/datatables/Select-1.2.4/js/dataTables.select.min.js')); ?>"></script>
<script src="<?php echo e(asset('assets/modules/jquery-ui/jquery-ui.min.js')); ?>"></script>
<script>
    $("#categorytable").dataTable();
</script>
<script>
    function deleteHosting(idHosting) {
        console.log(idHosting)
        var id = idHosting;
        var url = '<?php echo e(route("deleteHosting", ":id")); ?>';
        url = url.replace(':id', id);
        $("#deleteForm").attr('action', url);
    }

    function deleteSubmit() {
         $("#deleteForm").submit();
    }

    function show(hostingId) {
        var urlShow = '<?php echo e(route("showHosting", ":id")); ?>';
        var urlUpdate = '<?php echo e(route("updateHosting", ":id")); ?>';


        urlShow = urlShow.replace(':id', hostingId);
        urlUpdate = urlUpdate.replace(':id', hostingId);


        $.ajax({
            url: urlShow,
            type: 'GET',
            dataType: 'JSON',
            success: function(response) {
                if(response.code == 200) {
                    $('#hostingName').val(response.result.nama_hosting);
                    $('#hostingUsername').val(response.result.username_hosting);
                    $('#hostingPassword').val(response.result.password_hosting);
                    $('#kirimHosting').attr('action', urlUpdate);
                }
            }
        });
    }

    function showAccount(hostingId) {
        var urlShow = '<?php echo e(route("showHosting", ":id")); ?>';
        urlShow = urlShow.replace(':id', hostingId);

        $.ajax({
            url: urlShow,
            type: 'GET',
            dataType: 'JSON',
            success: function(response) {
                if(response.code == 200) {
                    $('#hostingAkunName').val(response.result.username_hosting);
                    $('#hostingAkunPassword').val(response.result.password_hosting);
                }
            }
        });
    }
</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('backend.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\jaster\resources\views/backend/pages/list-hosting.blade.php ENDPATH**/ ?>
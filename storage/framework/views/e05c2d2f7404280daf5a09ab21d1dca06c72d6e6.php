<?php $__env->startSection('title', 'Add Progress'); ?>

<?php $__env->startSection('csslibraries'); ?>
##parent-placeholder-7b1b790aaa0be695520f3372cd9a85443b6faa1f##
<!-- <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>"> -->
<link rel="stylesheet" href="<?php echo e(asset('assets/css/custom.css')); ?>">
<link rel="stylesheet" href="<?php echo e(asset('assets/modules/izitoast/css/iziToast.min.css')); ?>">
<link rel="stylesheet" href="<?php echo e(asset('css/animasi.css')); ?>">
<?php $__env->stopSection(); ?>



<?php $__env->startSection('content'); ?>

<div class="section-header">
    <h1>Order Progress</h1>
    <div class="section-header-breadcrumb">
        <div class="breadcrumb-item"><a href="#">Progress</a></div>
        <div class="breadcrumb-item active"><a href="#">Edit Progress</a></div>
    </div>
</div>
<div class="section-body">
    <div class="row">
        <div class="col-6">
            <h2 class="section-title"><b><?php echo e($showOrder->nama_order); ?></b> Progress</h2>
            <p class="section-lead">This page is just an example for you to create your own page.</p>
        </div>
        <div class="col-6">
            <div class="form-group d-flex justify-content-end notes-button">
                <div class="buttons">
                    <button id="lihatAkun" class="btn btn-outline-primary" data-toggle="modal"
                            data-target="#modalAkun">Lihat Akun</button>
                    <button id="addNotes" class="btn btn-outline-primary" data-toggle="modal"
                        data-target="#modalNotes">Add Notes</button>
                    <button data-target="#viewNotes" data-toggle="modal" class="btn btn-outline-info">View
                        Notes</button>
                </div>
            </div>
        </div>
    </div>
    <form method="post" action="#" class="needs-validation" novalidate="">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <?php echo csrf_field(); ?>
                    <?php $__currentLoopData = $showKategori; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $kategori): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="col-2">
                        <div class="section-title mt-0"><?php echo e($kategori->nama_kategori); ?></div>
                        <?php $__currentLoopData = $kategori->children; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $subKategori): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="custom-control custom-checkbox checkbox-margin">
                            <input type="checkbox" class="custom-control-input" name="kategori"
                                value="<?php echo e($subKategori->id); ?>" id="<?php echo e($subKategori->id); ?>">
                            <label class="custom-control-label"
                                for="<?php echo e($subKategori->id); ?>"><?php echo e($subKategori->nama_kategori); ?></label>
                        </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>
        </div>
    </form>
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('jslibraries'); ?>
##parent-placeholder-ffd66c5dac17be6451cca4afe8a4549aa7aad85f##
<!-- JS Libraies -->
<script src="<?php echo e(asset('assets/modules/izitoast/js/iziToast.min.js')); ?>"></script>

<!-- Page Specific JS File -->
<script src="<?php echo e(asset('assets/js/page/modules-toastr.js')); ?>"></script>
<script src="<?php echo e(asset('assets/js/page/bootstrap-modal.js')); ?>"></script>

<!-- modal untuk menambahkan notes -->
<div class="modal fade" tabindex="-1" role="dialog" id="modalNotes">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Add Notes</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>Tambahkan notes progress disini</p>
                <div class="form-group">
                    <textarea id="notes"></textarea>
                </div>
            </div>
            <div class="modal-footer bg-whitesmoke br">
                <button type="button" class="btn btn-outline-danger" data-dismiss="modal">Cancel</button>
                <button type="button" onclick="sendNotes()" class="btn btn-outline-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>
<!-- modal untuk melihat notes -->
<div class="modal fade" tabindex="-1" role="dialog" id="viewNotes">
    <div class="modal-dialog modal-lg" role="document">
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
                        <div class="form-group">
                            <h5>Web Pesaing</h5>
                            <div class="form-group" id="webpesaingnya">
    
                            </div>
                        </div>
                        <div class="form-group">
                            <h5>Request</h5>
                            <div class="form-group" id="requestnya">
                            </div>
                        </div>
                        <div class="form-group">
                            <h5>Notes dari Mas Gusti</h5>
                            <div class="form-group" id="lihatNotes">
                            </div>
                        </div>
                    </div>
                    <div class="col-6">
                        <h5>Detail Order</h5>
                        <div class="form-group" id="detailOrder">
                            
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
<!-- modal untuk melihat akun -->
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
                    <label>Email</label>
                    <input type="text" class="form-control" readonly="" value="<?php echo e($showOrder->akun_email); ?>">
                </div>
                <div class="form-group">
                    <label>Username</label>
                    <input type="text" class="form-control" readonly="" value="<?php echo e($showOrder->akun_username); ?>">
                </div>
                <div class="form-group">
                    <label>Password</label>
                    <input type="text" class="form-control" readonly="" value="<?php echo e($showOrder->akun_password); ?>">
                </div>
            </div>
            <div class="modal-footer bg-whitesmoke br">
                <button type="button" class="btn btn-outline-primary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<script>
    $('document').ready(function () {
        $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            }),
            $.ajax({
                url: "<?php echo e(route('showProgress', ['id' => request()->route('id')])); ?>",
                error: function (xhr, ajaxOptions, thrownError) {
                    console.log(xhr.status);
                    console.log(xhr.responseText);
                    console.log(thrownError);
                },
                success: function (data) {
                    for (let i = 0; i < data.length; i++) {
                        $("#" + data[i].kategori_id).prop('checked', true);

                    }
                }
            }),
            $.ajax({
                url: "<?php echo e(route('viewNotes', ['id' => request()->route('id')])); ?>",
                async: false,
                success: function (datanotes) {
                    // console.log(datanotes[0].notes)
                    $('#notes').html(datanotes[0].notes);
                    $('#detailOrder').append('<div class="form-group"> <label>Nama Paket</label> <input type="text" class="form-control" readonly="" value="'+ datanotes[0].nama_paket +'"> </div> <div class="form-group"> <label>Tipe Post</label> <input type="text" class="form-control" readonly="" value="'+ datanotes[0].tipe_post +'"> </div> <div class="form-group"> <label>Warna</label> <input type="text" class="form-control" readonly="" value="'+ datanotes[0].warna +'"> </div>');
                    $('#lihatNotes').append(datanotes[0].notes);
                    $('#requestnya').append(datanotes[0].request);
                    $('#webpesaingnya').append(datanotes[0].web_pesaing);
                }
            })
    });
    $(".custom-control-input").change(function () {
        if (this.checked) {
            var kategori = $(this).val();
            $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                }),
                $.ajax({
                    url: "<?php echo e(route('storeProgress', ['id' => request()->route('id')])); ?>",
                    method: "post",
                    data: {
                        kategori_id: kategori
                    },
                    success: function (respons) {
                        iziToast.success({
                            title: 'Berhasil!',
                            message: respons.success,
                            position: 'bottomRight'
                        });
                    }
                })

            // delete order jika semua tercentang
            if ($(".custom-control-input:checked").length == $(".custom-control-input").length) {
                $('#deleteConfirm').modal('toggle');
            }
        } else {
            var kategori = $(this).val();
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            // console.log(kategori)
            $.ajax({
                url: "<?php echo e(route('dropProgress', ['id' => request()->route('id')])); ?>",
                method: "post",
                data: {
                    kategori_id: kategori
                },
                error: function (xhr, ajaxOptions, thrownError) {
                    console.log(xhr.status);
                    console.log(xhr.responseText);
                    console.log(thrownError);
                },
                success: function (respons) {
                    iziToast.error({
                        title: 'Berhasil!',
                        message: respons.success,
                        position: 'bottomRight'
                    });
                    $('#modalNotes').modal('hide');
                }
            })
        }
    });

</script>

<!-- modal untuk delete order -->
<div class="modal fade" tabindex="-1" role="dialog" id="deleteConfirm">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Delete Order</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>Apakah anda yakin order ini telah selesai semua progress nya?</p>
            </div>
            <div class="modal-footer bg-whitesmoke br">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-danger" onclick="deleteOrder()" data-dismiss="modal">Yes</button>
            </div>
        </div>
    </div>
</div>
<!-- script untuk menambahkan notes -->
<script>
    function sendNotes() {
        var noteses = tinyMCE.get('notes').getContent();

        $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            }),
            $.ajax({
                url: '<?php echo e(route('editNotes', ['id' => request()->route('id')])); ?>',
                method: "post",
                dataType: 'JSON',
                data: {
                    notes: noteses,
                },
                success: function (respons) {
                    $('#lihatNotes').empty();
                    $('#lihatNotes').append(noteses);

                    if (respons.ping == 200) {
                        iziToast.success({
                            title: 'Berhasil!',
                            message: 'berhasil memasukkan Notes',
                            position: 'bottomRight'
                        });

                        $('#modalNotes').modal('hide');
                    } else {
                        iziToast.info({
                            title: 'gagal!',
                            message: 'gagal memasukkan Notes',
                            position: 'bottomRight'
                        });
                    }
                }
            })
    }

    function viewNotes() {

        $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            }),
            $.ajax({
                url: '<?php echo e(route('viewNotes', ['id' => request()->route('id')])); ?>',
                method: "post",
                success: function (respons) {

                    return respons;

                }
            })
    }

</script>
<script>
    function deleteOrder(idOrder) {
        $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            }),
            $.ajax({
                url: '<?php echo e(route('deleteOrder', ['id' => request()->route('id')])); ?>',
                type: 'DELETE',
                data: {
                    _method: 'delete'
                },
                success: function (respons) {
                    window.location.href = '<?php echo e(route('listProgress')); ?>';
                }
            })

        // window.location.href = '<?php echo e(route('listProgress')); ?>';
    }

</script>
<script src="https://cdn.tiny.cloud/1/ubaylt88d66o8ewdhmw9upizv7g1fbhcunbyhvdfoc5hcnek/tinymce/5/tinymce.min.js"></script>
<script src="<?php echo e(asset('js/tinyce.js')); ?>"></script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('backend.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/u6762345/public_html/public/resources/views/backend/pages/add-progress.blade.php ENDPATH**/ ?>
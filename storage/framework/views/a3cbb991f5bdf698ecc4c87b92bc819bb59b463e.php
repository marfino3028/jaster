<?php $__env->startSection('title', 'Add Order'); ?>

<?php $__env->startSection('csslibraries'); ?>
##parent-placeholder-7b1b790aaa0be695520f3372cd9a85443b6faa1f##

<link rel="stylesheet" href="<?php echo e(asset('assets/modules/bootstrap-daterangepicker/daterangepicker.css')); ?>">
<link rel="stylesheet" href="<?php echo e(asset('assets/modules/bootstrap-colorpicker/dist/css/bootstrap-colorpicker.min.css')); ?>">
<link rel="stylesheet" href="<?php echo e(asset('assets/modules/select2/dist/css/select2.min.css')); ?>">
<link rel="stylesheet" href="<?php echo e(asset('assets/modules/jquery-selectric/selectric.css')); ?>">
<link rel="stylesheet" href="<?php echo e(asset('assets/modules/bootstrap-timepicker/css/bootstrap-timepicker.min.css')); ?>">
<link rel="stylesheet" href="<?php echo e(asset('assets/modules/bootstrap-tagsinput/dist/bootstrap-tagsinput.css')); ?>">
<link rel="stylesheet" href="<?php echo e(asset('assets/modules/summernote/summernote-bs4.css')); ?>">
<link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/button_ic/css/normalize.css')); ?>" />
<link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/button_ic/css/vicons-font.css')); ?>" />
<link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/button_ic/css/buttons.css')); ?>" />
<?php $__env->stopSection(); ?>



<?php $__env->startSection('content'); ?>
<div class="section-header"> <!-- done -->
        <h1>Add Order</h1>
        <div class="section-header-breadcrumb">
            <div class="breadcrumb-item"><a href="#">Orders</a></div>
          <div class="breadcrumb-item active"><a href="#">Add Order</a></div>
        </div>
      </div>

      <div class="section-body">
        <h2 class="section-title">Add Order</h2>
        <p class="section-lead">Tambahkan Ordernya dibawah</p>
        <form method="post" action="<?php echo e(route('addOrder')); ?>" class="needs-validation" novalidate="">


            <!-- table kiri atas -->
        <div class="row" >
            <div class="col-5 col-md-5 col-lg-5">
                <div class="card col-md-12 col-lg-12 rounded-right rounded-left rounded-top rounded-bottom">
                  <div class="card-header" style="margin-bottom: -20px;">
                    <font color="white" weight="bold"><h3>Personal Company</h3> </font>
                  </div>
                  <div class="card-body col-md-12 col-lg-12">
                       <div class="row">
                        <?php echo csrf_field(); ?>
                        <div class="col-7" style="margin-right: -60px;">
                            <div class="form-group">
                            <label>Nama </label>
                            <input type="text" class="form-control col-md-10" name="nama">
                            <div class="invalid-feedback">
                                Input Nama bosz!
                            </div>
                            </div>
                        </div>
                        <div class="col-6">
                        <div class="form-group">
                            <label>Brand / Nama Usaha </label>
                            <input type="text" class="form-control col-md-12" name="brand">
                            <div class="invalid-feedback">
                                Input Nama usaha!
                            </div>
                        </div>
                        </div>
                        <div class="col-7" style="margin-right: -60px;">
                            <div class="form-group">
                            <label>No Whatsapp </label>
                            <input type="number" class="form-control col-md-10" name="wa">
                            <div class="invalid-feedback">
                                Input No Whatsapp!
                            </div>
                        </div>
                        </div>
                        <div class="col-6">
                        <div class="form-group">
                            <label>Email </label>
                            <input type="email" class="form-control col-md-12" name="email">
                            <div class="invalid-feedback">
                                Input Email!
                            </div>
                        </div>
                        </div>
                        <div class="col-7" style="margin-right: -60px;">
                            <div class="form-group">
                            <label>Jabatan </label>
                            <input type="text" class="form-control col-md-10" name="jabatan">
                            <div class="invalid-feedback">
                                Input jabatan bosz!
                            </div>
                        </div>
                        </div>
                        <div class="col-6">
                        <div class="form-group">
                            <label>Alamat </label>
                            <input type="text" class="form-control col-md-12" name="alamat">
                            <div class="invalid-feedback">
                                Input Alamat !
                            </div>
                        </div>
                        </div>

                    </div>
                        </div>


                </div>
              </div>




    <!-- tabel kanan atas -->
        <div class="col-7 col-md-7 col-lg-7">
          <div class="card rounded-right rounded-left rounded-top rounded-bottom">
            <div class="card-header" style="margin-bottom: -20px;">
              <font color="white" weight="bold"><h3>For Website</h3> </font>
            </div>
            <div class="card-body col-md-12">
                <div class="row">
                   <?php echo csrf_field(); ?>
                   <div class="col-4" style="margin-right: -5px;">
                        <div class="form-group">
                        <label>Domain </label>
                        <input type="text" class="form-control col-md-12" name="domain">
                        <div class="invalid-feedback">
                            Input domain bosz!
                        </div>
                        </div>
                    </div>
                    <div class="col-4" style="margin-right: -5px;">
                    <div class="form-group">
                        <label>Data </label>
                        <input type="text" class="form-control col-md-12" name="data">
                        <div class="invalid-feedback">
                            Input data!
                        </div>
                    </div>
                    </div>
                    <div class="col-4">
                        <div class="form-group">
                            <label>Username </label>
                            <input type="text" class="form-control col-md-12" name="username">
                            <div class="invalid-feedback">
                                Input username!
                            </div>
                        </div>
                        </div>
                        <div class="col-4" style="margin-right: -5px;">
                            <div class="form-group">
                                <label>Color</label>
                                <div class="input-group colorpickerinput">
                                    <input type="text" class="form-control" name="warna">
                                    <div class="input-group-append">
                                        <div class="input-group-text">
                                            <i class="fas fa-fill-drip"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-4" style="margin-right: -5px;">
                        <div class="form-group">
                            <label>Tipe Post </label>
                            <input type="text" class="form-control col-md-12" name="tipe_post">
                            <div class="invalid-feedback">
                                Input tipe post!
                            </div>
                        </div>
                        </div>
                        <div class="col-4">
                            <div class="form-group">
                                <label>Password</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">
                                            <i class="fas fa-lock"></i>
                                        </div>
                                    </div>
                                    <input type="text" class="form-control pwstrength" data-indicator="pwindicator"
                                        name="akun_password">
                                </div>
                                <div id="pwindicator" class="pwindicator">
                                    <div class="bar"></div>
                                    <div class="label"></div>
                                </div>
                            </div>
                            </div>
                            <div class="col-4" style="margin-right: -5px;">
                                <div class="form-group">
                                <label>Logo </label>
                                <input type="text" class="form-control col-md-12" name="logo">
                                <div class="invalid-feedback">
                                    Input logo bosz!
                                </div>
                                </div>
                            </div>
                            <div class="col-4" style="margin-right: -5px;">
                            <div class="form-group">
                                <label>Target</label>
                                <input type="text" class="form-control col-md-12" name="target">
                                <div class="invalid-feedback">
                                    Input Target !
                                </div>
                            </div>
                            </div>
                            <div class="col-4">
                                <div class="form-group">
                                    <label>Request </label>
                                    <input type="text" class="form-control col-md-12" name="request">
                                    <div class="invalid-feedback">
                                        Input Request !
                                    </div>
                                </div>
                                </div>
                </div>
              </div>
          </div>
        </div>

<!-- table bawah -->

          <div class="col-12 rounded-left rounded-top rounded-bottom">
            <div class="card rounded-right rounded-left rounded-top rounded-bottom" >
                <div class="card-header" style="margin-bottom: -20px;">
                  <font color="white" weight="bold"><h3>Detail Order</h3> </font>
                </div>
                <div class="card-body col-md-12">
                    <div class="row">
                       <?php echo csrf_field(); ?>
                       <div class="col-4" style="margin-right: -290px;">
                            <div class="form-group rounded">
                            <label class="ulang">Paket </label>
                            <input type="text" class="form-control col-md-5" name="paket">
                            <div class="invalid-feedback">
                                Input paket bosz!
                            </div>
                            </div>

                        </div>
                        <div class="col-4" style="margin-right: -290px;">
                        <div class="form-group rounded">
                            <label class="ulang">Quantity </label>
                            <input type="text" class="form-control col-md-5" name="quantity">
                            <div class="invalid-feedback">
                                Input Quantity!
                            </div>
                        </div>

                        </div>
                        <div class="col-4" style="margin-right: -290px;">

                            <div class="form-group rounded">
                                <label class="ulang">Biaya </label>
                                <input type="text" class="form-control col-md-5" name="biaya">
                                <div class="invalid-feedback">
                                    Input Biaya
                                </div>
                            </div>

                            <br><br><br> <!-- pembatasan antara add order now -->
                     </div>

                     <div class="col-1" style="margin-right: 80px;">
                     <div class="form-group">
                        <button type="button" class="login100-form-btn" name="add" id="add">
                            <i class="fas fa-plus-circle"></i>&nbsp; Add Row
                        </button>
                    </div>
                </div>


                <!-- forline -->

            <div class="col-4" style="margin-right: -380px;">
                <div class="form-group">
                    <label>DP </label>
                    <input type="text" class="form-control col-md-6" name="dp">
                    <div class="invalid-feedback">
                        Input DP!
                    </div><br>
                    <label>via </label>
                                    <input type="text" class="form-control col-md-6" name="via">
                                    <div class="invalid-feedback">
                                        Input via!
                                    </div><br>
                                    <label>renewal </label>
                                    <input type="text" class="form-control col-md-6" name="renewal">
                                    <div class="invalid-feedback">
                                        Input Renewal!
                                    </div>
                    </div>
                    </div>
                    <div class="col-4">
                        <div class="form-group" style="margin-left: 150px">
                            <label>Tanggal Order </label>
                            <input type="text" class="form-control col-md-9" name="tgl_order">
                            <div class="invalid-feedback">
                                Input tanggal!
                            </div><br>
                            <label>Deadline</label>
                            <input type="text" class="form-control col-md-9" name="deadline">
                            <div class="invalid-feedback">
                                Input Nama usaha!
                            </div><br>
                            <label>Tau dari </label>
                            <input type="text" class="form-control col-md-9" name="tau">
                            <div class="invalid-feedback">
                                Input tau!
                            </div>
                            </div>
                            </div>



                    </div>
                  </div>
              </div>
      </div>
      </div>
      <div class="total">Total Order :</div>
      <table class="table1">
		<tr>
			<th>Rp. <?php echo e(number_format(5000000,0,',','.')); ?>-,</th>
		</tr>
    </table>
    <button class="button button--shikoba button--text-medium button--round-l button--inverted"><i class="button__icon icon icon-cart"></i><span>Add Order Now</span></button>
        </form>
    </section>
  </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('jslibraries'); ?>
##parent-placeholder-ffd66c5dac17be6451cca4afe8a4549aa7aad85f##

<script type="text/javascript">
$(document).ready(function () {
    var counter = 0;

    $("#add").on("click", function () {
        var newRow = $("div.rounded");
        var cols = "";
        cols += '<label>Paket </label><input type="text" class="form-control col-md-5" name="paket"><div class="invalid-feedback">Input paket bosz!' + counter + '</div></div>';
        cols += '<label>Quantity </label><input type="text" class="form-control col-md-5" name="quantity"><div class="invalid-feedback">Input Quantity!' + counter + '</div></div>';
        cols += '<label>Biaya </label><input type="text" class="form-control col-md-5" name="biaya"><div class="invalid-feedback">Input Biaya' + counter + '</div></div>';
        newRow.append(cols);
        $("div.form-group").append(newRow);
        counter++;
    });



    $("div.form-group").on("click", function (event) {
        $(this).closest("div.rounded").remove();
        counter -= 1
    });


});



function calculateRow(row) {
    var price = +row.find('input[name^="price"]').val();

}

function calculateGrandTotal() {
    var grandTotal = 0;
    $("table.order-list").find('input[name^="price"]').each(function () {
        grandTotal += +$(this).val();
    });
    $("#grandtotal").text(grandTotal.toFixed(2));
}


</script>
<script src="<?php echo e(asset('assets/modules/cleave-js/dist/cleave.min.js')); ?>"></script>
<script src="<?php echo e(asset('assets/modules/cleave-js/dist/addons/cleave-phone.us.js')); ?>"></script>
<script src="<?php echo e(asset('assets/modules/jquery-pwstrength/jquery.pwstrength.min.js')); ?>"></script>
<script src="<?php echo e(asset('assets/modules/bootstrap-daterangepicker/daterangepicker.js')); ?>"></script>
<script src="<?php echo e(asset('assets/modules/bootstrap-colorpicker/dist/js/bootstrap-colorpicker.min.js')); ?>"></script>
<script src="<?php echo e(asset('assets/modules/bootstrap-timepicker/js/bootstrap-timepicker.min.js')); ?>"></script>
<script src="<?php echo e(asset('assets/modules/bootstrap-tagsinput/dist/bootstrap-tagsinput.min.js')); ?>"></script>
<script src="<?php echo e(asset('assets/modules/select2/dist/js/select2.full.min.js')); ?>"></script>
<script src="<?php echo e(asset('assets/modules/jquery-selectric/jquery.selectric.min.js')); ?>"></script>
<script src="<?php echo e(asset('assets/modules/summernote/summernote-bs4.js')); ?>"></script>
<script>
    $(".colorpickerinput").colorpicker({
        format: 'hex',
        component: '.input-group-append',
    });
</script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('backend.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\jaster\resources\views/backend/pages/add-order.blade.php ENDPATH**/ ?>
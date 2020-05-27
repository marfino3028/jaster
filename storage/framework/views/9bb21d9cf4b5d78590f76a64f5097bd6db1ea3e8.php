<?php $__env->startSection('title', 'View Order'); ?>

<?php $__env->startSection('csslibraries'); ?>
##parent-placeholder-7b1b790aaa0be695520f3372cd9a85443b6faa1f##

<link rel="stylesheet" href="<?php echo e(asset('assets/modules/bootstrap-daterangepicker/daterangepicker.css')); ?>">
<link rel="stylesheet" href="<?php echo e(asset('assets/modules/bootstrap-colorpicker/dist/css/bootstrap-colorpicker.min.css')); ?>">
<link rel="stylesheet" href="<?php echo e(asset('assets/modules/select2/dist/css/select2.min.css')); ?>">
<link rel="stylesheet" href="<?php echo e(asset('assets/modules/jquery-selectric/selectric.css')); ?>">
<link rel="stylesheet" href="<?php echo e(asset('assets/modules/bootstrap-timepicker/css/bootstrap-timepicker.min.css')); ?>">
<link rel="stylesheet" href="<?php echo e(asset('assets/modules/bootstrap-tagsinput/dist/bootstrap-tagsinput.css')); ?>">
<link rel="stylesheet" href="<?php echo e(asset('assets/modules/summernote/summernote-bs4.css')); ?>">
<link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/button_ic/css/vicons-font.css')); ?>" />
<link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/button_ic/css/buttons.css')); ?>" />
<?php $__env->stopSection(); ?>



<?php $__env->startSection('content'); ?>

<div class="section-header"> <!-- done -->
        <h1>View Order</h1>
        <div class="section-header-breadcrumb">
            <div class="breadcrumb-item"><a href="#">Orders</a></div>
          <div class="breadcrumb-item active"><a href="#">View Order</a></div>
        </div>
      </div>

      <div class="section-body">
        <h2 class="section-title">View Order</h2>
        <p class="section-lead">View Order </p>

        <?php $__currentLoopData = $ar_order; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>


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
                            <input type="text" class="form-control col-md-10 " style="color: yellow; font-size:16px; font-weight:bold; background:#5C5A14;" name="nama" value="<?php echo e($row->nama); ?>" disabled>
                            </div>
                        </div>
                        <div class="col-6">
                        <div class="form-group">
                            <label>Brand / Nama Usaha </label>
                            <input type="text" class="form-control col-md-12" style="color: yellow; font-size:16px; font-weight:bold; background:#5C5A14;"  name="brand" value="<?php echo e($row->brand); ?>" disabled>
                            <div class="invalid-feedback">
                                Input Nama usaha!
                            </div>
                        </div>
                        </div>
                        <div class="col-7" style="margin-right: -60px;">
                            <div class="form-group">
                            <label>No Whatsapp </label>
                            <input type="number" class="form-control col-md-10" style="color: yellow; font-size:16px; font-weight:bold; background:#5C5A14;" name="wa" value="<?php echo e($row->wa); ?>" disabled>
                            <div class="invalid-feedback">
                                Input No Whatsapp!
                            </div>
                        </div>
                        </div>
                        <div class="col-6">
                        <div class="form-group">
                            <label>Email </label>
                            <input type="email" class="form-control col-md-12" style="color: yellow; font-size:16px; font-weight:bold; background:#5C5A14;" name="akun_email" value="<?php echo e($row->akun_email); ?>" disabled>
                            <div class="invalid-feedback">
                                Input Email!
                            </div>
                        </div>
                        </div>
                        <div class="col-7" style="margin-right: -60px;">
                            <div class="form-group">
                            <label>Jabatan </label>
                            <input type="text" class="form-control col-md-10" style="color: yellow; font-size:16px; font-weight:bold; background:#5C5A14;" name="jabatan" value="<?php echo e($row->jabatan); ?>" disabled>
                            <div class="invalid-feedback">
                                Input jabatan bosz!
                            </div>
                        </div>
                        </div>
                        <div class="col-6">
                        <div class="form-group">
                            <label>Alamat </label>
                            <input type="text" class="form-control col-md-12" style="color: yellow; font-size:16px; font-weight:bold; background:#5C5A14;" name="alamat" value="<?php echo e($row->alamat); ?>" disabled>
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
                        <input type="text" class="form-control col-md-12" style="color: yellow; font-size:16px; font-weight:bold; background:#5C5A14;" name="domain" value="<?php echo e($row->domain); ?>" disabled>
                        <div class="invalid-feedback">
                            Input domain bosz!
                        </div>
                        </div>
                    </div>
                    <div class="col-4" style="margin-right: -5px;">
                        <div class="form-group">
                            <label>Data</label>
                            <select class="form-control" name="data_website" style="color: yellow; font-size:16px; font-weight:bold; background:#5C5A14;" disabled>
                                <option value="">None</option>
                                <option value="Full Kita" <?php if($row->data_website == "Full Kita"): ?> <?php echo e('selected'); ?> <?php endif; ?>>Full Kita</option>
                                <option value="Full Client" <?php if($row->data_website == "Full Client"): ?> <?php echo e('selected'); ?> <?php endif; ?>>Full Client</option>
                                <option value="Kita Bantu" <?php if($row->data_website == "Kita Bantu"): ?> <?php echo e('selected'); ?> <?php endif; ?>>Kita Bantu</option>
                            </select>
                            <div class="invalid-feedback">
                                Datanya?
                            </div>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="form-group">
                            <label>Username </label>
                            <input type="text" class="form-control col-md-12" style="color: yellow; font-size:17px; font-weight:bold; background:#5C5A14;" name="akun_username" value="<?php echo e($row->akun_username); ?>" disabled>
                        </div>
                        </div>
                        <div class="col-4" style="margin-right: -5px;">
                            <div class="form-group">
                                <label>Color</label>
                                <div class="input-group colorpickerinput">
                                    <input type="text" class="form-control" name="warna" style="color: yellow; font-size:17px; font-weight:bold; background:#5C5A14;" value="<?php echo e($row->warna); ?>" disabled>

                                </div>
                            </div>
                        </div>
                        <div class="col-4" style="margin-right: -5px;">
                            <div class="form-group">
                                <label>Tipe Post</label>
                                <select class="form-control " name="tipe_post"   style="color: yellow; font-size:17px; font-weight:bold; background:#5C5A14;" disabled>
                                    <option value="">None</option>
                                    <option value="Artikel" <?php if($row->tipe_post == "Artikel"): ?> <?php echo e('selected'); ?> <?php endif; ?>>Artikel</option>
                                    <option value="Produk" <?php if($row->tipe_post == "Produk"): ?> <?php echo e('selected'); ?> <?php endif; ?>>Produk</option>
                                    <option value="Service" <?php if($row->tipe_post == "Service"): ?> <?php echo e('selected'); ?> <?php endif; ?>>Service</option>
                                    <option value="Gallery" <?php if($row->tipe_post == "Gallery"): ?> <?php echo e('selected'); ?> <?php endif; ?>>Gallery</option>
                                    <option value="Elementor" <?php if($row->tipe_post == "Elementor"): ?> <?php echo e('selected'); ?> <?php endif; ?>>Elementor</option>
                                    <option value="Landing" <?php if($row->tipe_post == "Landing"): ?> <?php echo e('selected'); ?> <?php endif; ?>>Landing</option>
                                </select>
                                <div class="invalid-feedback">
                                    Post nya tentang apa?
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
                                        name="akun_password" style="color: yellow; font-size:17px; font-weight:bold; background:#5C5A14;" value="<?php echo e($row->akun_password); ?>" disabled>
                                </div>
                                <div id="pwindicator" class="pwindicator">
                                    <div class="bar"></div>
                                    <div class="label"></div>
                                </div>
                            </div>
                            </div>
                            <div class="col-4" style="margin-right: -5px;">
                                <div class="form-group">
                                    <label>Logo</label>
                                    <select class="form-control " name="data_logo" required style="color: yellow; font-size:17px; font-weight:bold; background:#5C5A14;" disabled>
                                        <option value="">None</option>
                                        <option value="Dibuatkan" <?php if($row->data_logo == "Dibuatkan"): ?> <?php echo e('selected'); ?> <?php endif; ?>>Dibuatkan</option>
                                        <option value="Email" <?php if($row->data_logo == "Email"): ?> <?php echo e('selected'); ?> <?php endif; ?>>Email</option>
                                    </select>
                                    <div class="invalid-feedback">
                                        Logonya darimana bosz?
                                    </div>
                                </div>
                            </div>
                            <div class="col-4" style="margin-right: -5px;">
                           <div class="form-group">
                            <label>Target</label>
                            <select class="form-control " name="target" required style="color: yellow; font-size:17px; font-weight:bold; background:#5C5A14;" disabled>
                                <option value="">None</option>
                                <option value="WA atau Telepon" <?php if($row->target == "WA atau Telepon"): ?> <?php echo e('selected'); ?> <?php endif; ?>>WA atau Telepon</option>
                                <option value="Email" <?php if($row->target == "Email"): ?> <?php echo e('selected'); ?> <?php endif; ?>>Email</option>
                                <option value="Checkout" <?php if($row->target == "Checkout"): ?> <?php echo e('selected'); ?> <?php endif; ?>>Checkout</option>
                            </select>
                            <div class="invalid-feedback">
                                Target action nya?
                            </div>
                        </div>
                            </div>
                            <div class="col-4">
                                <div class="form-group">
                                    <label>Cek Request</label>
                                    <button type="button" class="btn btn-outline-primary col-md-12" data-toggle="modal"
                        data-target="#modalRequest" id="addRequest">Request</button>
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

                    <div class="row" >

                       <?php echo csrf_field(); ?>
                       <div class="col-4" style="margin-right: -300px;">
                            <div class="form-group" id='formPaket'>
                                <?php $__currentLoopData = $listTransaksi; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                            <label>Paket </label>
                            <div class="col-md-5" style="margin: 0px; padding: 0px;">
                            <select id="paketInput0" data-input="paket" data-hitung="0" class="form-control" style="color: yellow; font-size:16px; font-weight:bold; background:#5C5A14;" disabled>
                                <option value="">None</option>
                                <option value="Web & Apps" <?php if($item->paket == "Web & Apps"): ?> <?php echo e('selected'); ?> <?php endif; ?>>Web & Apps</option>
                                <option value="Business Kit" <?php if($item->paket == "Business Kit"): ?> <?php echo e('selected'); ?> <?php endif; ?>>Business Kit</option>
                                <option value="Digital Marketing" <?php if($item->paket == "Digital Marketing"): ?> <?php echo e('selected'); ?> <?php endif; ?>>Digital Marketing</option>
                                <option value="Troubleshooting" <?php if($item->paket == "Troubleshooting"): ?> <?php echo e('selected'); ?> <?php endif; ?>>Troubleshooting</option>
                                <option value="Advertising" <?php if($item->paket == "Advertising"): ?> <?php echo e('selected'); ?> <?php endif; ?>>Advertising</option>
                                <option value="Branding" <?php if($item->paket == "Branding"): ?> <?php echo e('selected'); ?> <?php endif; ?>>Branding</option>
                            </select>
                            </div>
                            <div class="invalid-feedback">
                                Input paket bosz!
                            </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </div>
                        </div>
                        <div class="col-4"  style="margin-right: -300px;">
                        <div class="form-group addOrder0" id="formQuantity">
                            <?php $__currentLoopData = $listTransaksi; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $itemi): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <label>Quantity </label>
                            <input type="number" id="quantityInput0" class="form-control col-md-5" onkeyup="sendQuantity($(this), 0)" value="<?php echo e($itemi->quantity); ?>" style="color: yellow; font-size:16px; font-weight:bold; background:#5C5A14;" disabled>
                            <div class="invalid-feedback">
                                Input Quantity!
                            </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>

                        </div>
                        <div class="col-4"  style="margin-right: -300px;">
                            <div class="form-group addOrder0" id="formBiaya">
                                <?php $__currentLoopData = $listTransaksi; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $itemii): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <label>Biaya </label>
                                <input type="text" id="biayaInput0" class="form-control col-md-5" onkeyup="convertToRupiah(this); sendHarga($(this), 0)" value="<?php echo e($itemii->biaya); ?>" style="color: yellow; font-size:16px; font-weight:bold; background:#5C5A14;" disabled>
                                <div class="invalid-feedback">
                                    Input Biaya!
                                </div>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </div>
                        </div>
                        <div class="col-4"  style="margin-right: -280px;">
                            <div class="form-group addOrder0" id="formBiaya">
                                <?php $__currentLoopData = $listTransaksi; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $itemiii): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <label>Total </label>
                                <input type="text" id="biayaInput0" class="form-control col-md-5" onkeyup="convertToRupiah(this); sendHarga($(this), 0)" value="<?php echo e($itemiii->total); ?>" style="color: yellow; font-size:16px; font-weight:bold; background:#5C5A14;" disabled>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </div>
                            <br><br><br> <!-- pembatasan antara add order now -->
                        </div>


                <!-- forline -->

            <div class="col-4" style="margin-right: -380px;">
                <div class="form-group">
                    <label>DP </label>
                    <input type="text" class="form-control col-md-5" name="dp" onkeyup="convertToRupiah(this);" style="color: yellow; font-size:17x; font-weight:bold; background:#5C5A14;" value="<?php echo e($row->dp); ?>" disabled>
                    <div class="invalid-feedback">
                        Input DP!
                    </div><br>
                    <label>via </label>
                    <div class="col-md-5" style="margin: 0px; padding: 0px;">
                    <select class="form-control " name="via" style="color: yellow; font-size:16px; font-weight:bold; background:#5C5A14;" disabled>

                        <option value="">None</option>
                        <option value="BCA" <?php if($row->via == "BCA"): ?> <?php echo e('selected'); ?> <?php endif; ?>>BCA</option>
                        <option value="Mandiri" <?php if($row->via == "Mandiri"): ?> <?php echo e('selected'); ?> <?php endif; ?>>Mandiri</option>
                        <option value="BRI Syariah" <?php if($row->via == "BRI Syariah"): ?> <?php echo e('selected'); ?> <?php endif; ?>>BRI Syariah</option>
                        <option value="OVO" <?php if($row->via == "OVO"): ?> <?php echo e('selected'); ?> <?php endif; ?>>OVO</option>
                        <option value="DANA" <?php if($row->via == "DANA"): ?> <?php echo e('selected'); ?> <?php endif; ?>>DANA</option>
                        <option value="CASH" <?php if($row->via == "CASH"): ?> <?php echo e('selected'); ?> <?php endif; ?>>CASH</option>
                    <div class="invalid-feedback">
                        Input via!
                    </div>

                    </select>
                </div><br>
                    <label>renewal </label>
                    <input type="text" onkeyup="convertToRupiah(this);" class="form-control col-md-5" name="renewal" id="formRenewal" style="color: yellow; font-size:17x; font-weight:bold; background:#5C5A14;" value="<?php echo e($row->renewal); ?>" disabled>
                    <div class="invalid-feedback">
                        Input Renewal!
                    </div>
                    </div>
                    </div>
                    <div class="col-4">
                        <div class="form-group" style="margin-left: 80px">
                            <label>Tanggal Order </label>
                            <input type="text" class="form-control col-md-7 datepicker" placeholder="YYYY-MM-DD" name="tanggal_order" style="color: yellow; font-size:17x; font-weight:bold; background:#5C5A14;" value="<?php echo e($row->tanggal_order); ?>" disabled>
                            <div class="invalid-feedback">
                                Input tanggal Order!
                            </div><br>
                            <label>Deadline</label>
                            <input type="text" class="form-control col-md-7 datepicker" placeholder="YYYY-MM-DD" name="deadline" style="color: yellow; font-size:16px; font-weight:bold; background:#5C5A14;" value="<?php echo e($row->deadline); ?>" disabled>
                            <div class="invalid-feedback">
                                Input Deadline!
                            </div><br>
                            <label>Tau dari </label>
                            <input type="text" class="form-control col-md-7" name="tau_dari" style="color: yellow; font-size:17px; font-weight:bold; background:#5C5A14;" value="<?php echo e($row->tau_dari); ?>" disabled>
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
			<th id="totalOrder">Rp. <?php echo e(number_format($totalsemua,0,',','.')); ?>-,</th>
        </tr>

    </table>

    <button onclick="window.location.href='<?php echo e(route('listOrder')); ?>'" class="button button--shikoba button--text-medium button--round-l button--inverted">
        <i class="button__icon icon icon-forward"></i><span>Back To List Order</span></button>
        </form>
  </div>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('jslibraries'); ?>
##parent-placeholder-ffd66c5dac17be6451cca4afe8a4549aa7aad85f##
<!-- modal reques -->
<!-- JS Libraies -->
<script src="<?php echo e(asset('assets/modules/izitoast/js/iziToast.min.js')); ?>"></script>

<!-- Page Specific JS File -->
<script src="<?php echo e(asset('assets/js/page/modules-toastr.js')); ?>"></script>
<script src="<?php echo e(asset('assets/js/page/bootstrap-modal.js')); ?>"></script>

<!-- modal untuk menambahkan notes -->
<div class="modal fade" tabindex="-1" role="dialog" id="modalRequest">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Isi Request</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

                <div class="form-group" id="modalRequest">
                    <?php echo e($row->request); ?>

                </div>
            </div>
            <div class="modal-footer bg-whitesmoke br">
                <button type="button" class="btn btn-outline-danger" data-dismiss="modal">Kembali</button>

            </div>
        </div>
    </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div>


<script type="text/javascript">
var totals = {};
var totalHarga = {};

$(document).ready(function () {
    var counter = 1;

    $("#add").on("click", function () {
        cols1 = '<div class="form-group addOrder'+ counter +'"><label>Paket </label><div class="col-md-5" style="margin: 0px; padding: 0px;"><select data-input="paket" data-hitung="'+counter+'" class="form-control select2" id="paketInput'+ counter +'" required><option value="">None</option><option value="Ekonomis">Ekonomis</option><option value="Basic">Basic</option><option value="Premium">Premium</option><option value="Business">Business</option><option value="Luxury">Luxury</option></select></div><div class="invalid-feedback">Input paket bosz!' + counter + '</div></div>';
        cols2 = '<div class="form-group addOrder'+ counter +'"><label>Quantity </label><input type="number" id="quantityInput'+ counter +'" class="form-control col-md-5" onkeyup="sendQuantity($(this), '+ counter +')"><div class="invalid-feedback">Input Quantity!' + counter + '</div></div>';
        cols3 = '<div class="form-group addOrder'+ counter +'"><label>Biaya </label><input type="text" id="quantityInput'+ counter +'" class="form-control col-md-5" onkeyup="convertToRupiah(this);sendHarga($(this), '+ counter +')"><div class="invalid-feedback">Input Biaya' + counter + '</div></div>';
        $("#formPaket").after(cols1);
        $("#formQuantity").after(cols2);
        $("#formBiaya").after(cols3);
        $("#addRow").after(cols4);
        $(".select2").select2();

        $("#hapusRow").click(function(){
            $('.addOrder'+ $(this).attr('data-id')).remove();
        });
        counter++;
    });

    $('.select2[data-input="paket"]').change(function() {
        var counts = $(this).data('hitung');
        sendQuantity($('.addOrder'+ counts + ' > #quantityInput'+counts), counts);
        $('.addOrder'+ counts + ' > #quantityInput'+counts).val("");
        sendHarga($('.addOrder'+ counts + ' > #biayaInput'+counts), counts);
        $('.addOrder'+ counts + ' > #biayaInput'+counts).val("");
    });
});

// function untuk kirim kuantitas
function sendQuantity(iki, count) {
    var paket = $('#paketInput'+ count).val();
    var quantity = parseInt(iki.val());
    var biaya= $('.addOrder'+ count + ' > #biayaInput'+count).val();
    var splitBiaya = parseInt(biaya.split('.').join(""));
    var totalItem = quantity * biaya;

    var obj ={
        id: count,
        paket: paket,
        quantity: quantity,
        harga: biaya,
        totalItem: totalItem,
    };

    totalHarga[count] = totalItem;

    // loop value in object and sum all
    var totalSemua = 0;
    for (const key in totalHarga) {
        if (isNaN(totalHarga[key])) {
            totalSemua = totalSemua + 0;
        } else {
            totalSemua += parseInt(totalHarga[key]);
        }
    }

    totals[count] = obj;
    //console.log(totals);
    $('#totalOrder').text('Rp. '+totalSemua);
}

// function untuk kirim harga tiap row
function sendHarga(iki, count) {
    var paket = $('#paketInput'+ count).val();
    // get quantity
    var quantity = parseInt($('.addOrder'+ count + ' > #quantityInput'+count).val());
    // get biaya
    var biaya= iki.val();

    var splitBiaya = parseInt(biaya.split('.').join(""));
    // quantity * biaya
    var totalItem = quantity * splitBiaya

    var obj ={
        id: count,
        paket: paket,
        quantity: quantity,
        harga: splitBiaya,
        totalItem: totalItem,
    };

    totalHarga[count] = totalItem;

    // loop value in object and sum all
    var totalSemua = 0;
    for (const key in totalHarga) {
        if (isNaN(totalHarga[key])) {
            totalSemua = totalSemua + 0;
        } else {
            totalSemua += parseInt(totalHarga[key]);
        }
    }

    totals[count] = obj;

    //console.log(totals);
    $('#totalOrder').text('Rp. '+totalSemua);
}

var dataRequest;

function sendRequest(){
    var editor = tinymce.get('notes');
    var content = editor.getContent();
   dataRequest = (content);
   $
   $('#modalRequest').append('dataRequest');
    $('#modalRequest').modal('hide');


}

function getFormData($form){
    var unindexed_array = $form.serializeArray();
    var indexed_array = {};

    $.map(unindexed_array, function(n, i){
        indexed_array[n['name']] = n['value'];
    });

    return indexed_array;
}

</script>
<script>
        $.ajaxSetup({
          headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          }
      });


      $('.button--shikoba').click(function(){
        var dataToSend = {};

        $('#kirimData').submit(function (e) {
            e.preventDefault();

            dataToSend['data'] = getFormData($(this));
            dataToSend.data['request'] = dataRequest;
            dataToSend.data['transaksi'] = totals;

           $.ajax({
                url:'<?php echo e(route('addOrder')); ?>',
                method:"POST",
                data:dataToSend,
                type:'json',
                success:function(data)
                {
                    // window.location.href = '<?php echo e(route('listOrder')); ?>'
                    // if(data.error){
                    //     printErrorMsg(data.error);
                    // }else{
                    //    //window.location.href = 'orders'
                    //    $('input').val("");
                    // }
                }
           });
        })
      });


      function printErrorMsg (msg) {
         $(".print-error-msg").find(".addOrder").html('');
         $(".print-error-msg").css('display','block');
         $(".print-success-msg").css('display','none');
         $.each( msg, function( key, value ) {
            $(".print-error-msg").find(".addOrder").append('<li>'+value+'</li>');
         });
      }

</script>


<script>
   function convertToRupiah(objek) {
	  separator = ".";
	  a = objek.value;
	  b = a.replace(/[^\d]/g,"");
	  c = "";
	  panjang = b.length;
	  j = 0;
	  for (i = panjang; i > 0; i--) {
	    j = j + 1;
	    if (((j % 3) == 1) && (j != 1)) {
	      c = b.substr(i-1,1) + separator + c;
	    } else {
	      c = b.substr(i-1,1) + c;
	    }
	  }
	  objek.value = c;

	}

	function convertToAngka()
	{	var nominal= document.getElementById("nominal").value;
		var angka = parseInt(nominal.replace(/,.*|[^0-9]/g, ''), 10);
		document.getElementById("angka").innerHTML= angka;
	}

	function convertToAngka()
	{	var nominal1= document.getElementById("nominal1").value;
		var angka1 = parseInt(nominal.replace(/,.*|[^0-9]/g, ''), 10);
		document.getElementById("angka1").innerHTML= angka;
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
<script src="https://cdn.tiny.cloud/1/ubaylt88d66o8ewdhmw9upizv7g1fbhcunbyhvdfoc5hcnek/tinymce/5/tinymce.min.js"></script>
<script src="<?php echo e(asset('js/tinyce.js')); ?>"></script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('backend.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\jaster\resources\views/backend/pages/view-order.blade.php ENDPATH**/ ?>
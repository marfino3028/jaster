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
        <form id="kirimData" method="post" action="<?php echo e(route('addOrder')); ?>" class="needs-validation" novalidate="">


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
                            <label>Data</label>
                            <select class="form-control select2" name="data_website" required>
                                <option value="">None</option>
                                <option value="Full Kita">Full Kita</option>
                                <option value="Full Client">Full Client</option>
                                <option value="Kita Bantu">Kita Bantu</option>
                            </select>
                            <div class="invalid-feedback">
                                Datanya?
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
                                <label>Tipe Post</label>
                                <select class="form-control select2" name="tipe_post" required>
                                    <option value="">None</option>
                                    <option value="Artikel">Artikel</option>
                                    <option value="Produk">Produk</option>
                                    <option value="Service">Service</option>
                                    <option value="Gallery">Gallery</option>
                                    <option value="Elementor">Elementor</option>
                                    <option value="Landing">Landing</option>
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
                                    <label>Logo</label>
                                    <select class="form-control select2" name="data_logo" required>
                                        <option value="">None</option>
                                        <option value="Dibuatkan">Dibuatkan</option>
                                        <option value="Email">Email</option>
                                    </select>
                                    <div class="invalid-feedback">
                                        Logonya darimana bosz?
                                    </div>
                                </div>
                            </div>
                            <div class="col-4" style="margin-right: -5px;">
                           <div class="form-group">
                            <label>Target</label>
                            <select class="form-control select2" name="target" required>
                                <option value="">None</option>
                                <option value="WA atau Telepon">WA atau Telepon</option>
                                <option value="Email">Email</option>
                                <option value="Checkout">Checkout</option>
                            </select>
                            <div class="invalid-feedback">
                                Target action nya?
                            </div>
                        </div>
                            </div>
                            <div class="col-4">
                                <div class="form-group">
                                    <label>Request</label>
                                    <button class="btn btn-outline-primary col-md-12" data-toggle="modal"
                        data-target="#modalRequest">Request</button>
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
                       <div class="col-4" style="margin-right: -290px;">

                            <div class="form-group" id='formPaket'>
                            <label>Paket </label>
                            <div class="col-md-5" style="margin: 0px; padding: 0px;">
                            <select class="form-control select2" name="paket[]" required>
                                <option value="">None</option>
                                <option value="Ekonomis">Ekonomis</option>
                                <option value="Basic">Basic</option>
                                <option value="Premium">Premium</option>
                                <option value="Business">Business</option>
                                <option value="Luxury">Luxury</option>
                            </select>
                            </div>
                            <div class="invalid-feedback">
                                Input paket bosz!
                            </div>
                            </div>
                        </div>
                        <div class="col-4"  style="margin-right: -290px;">
                        <div class="form-group addOrder0" id="formQuantity">
                            <label>Quantity </label>
                            <input type="number" class="form-control col-md-5" name="quantity[]" onkeyup="sendQuantity($(this), 0)">
                            <div class="invalid-feedback">
                                Input Quantity!
                            </div>
                        </div>

                        </div>
                        <div class="col-4"  style="margin-right: -290px;">

                            <div class="form-group addOrder0" id="formBiaya">
                                <label>Biaya </label>
                                <input type="text" class="form-control col-md-5" onkeyup="convertToRupiah(this); sendHarga($(this), 0)" name="biaya[]" >
                                <div class="invalid-feedback">
                                    Input Biaya
                                </div>
                            </div>
                            <br><br><br> <!-- pembatasan antara add order now -->
                     </div>

                     <div class="col-1" style="margin-right: 80px;">
                     <div class="form-group" id="addRow">
                        <button type="button" class="login100-form-btn" name="add" id="add">
                            <i class="fas fa-plus-circle"></i>&nbsp; Add Row
                        </button>
                    </div>

                </div>


                <!-- forline -->

            <div class="col-4" style="margin-right: -380px;">
                <div class="form-group">
                    <label>DP </label>
                    <input type="text" class="form-control col-md-6" name="dp" onkeyup="convertToRupiah(this);">
                    <div class="invalid-feedback">
                        Input DP!
                    </div><br>
                    <label>via </label>
                    <div class="col-md-6" style="margin: 0px; padding: 0px;">
                    <select class="form-control select2" name="via">

                        <option value="">None</option>
                        <option value="BCA">BCA</option>
                        <option value="Mandiri">Mandiri</option>
                        <option value="BRI Syariah">BRI Syariah</option>
                        <option value="OVO">OVO</option>
                        <option value="DANA">DANA</option>
                        <option value="CASH">CASH</option>
                    <div class="invalid-feedback">
                        Input via!
                    </div>

                    </select>
                </div><br>
                    <label>renewal </label>
                    <input type="text" onkeyup="convertToRupiah(this);" class="form-control col-md-6 addOrder" name="renewal" id="formRenewal">
                    <div class="invalid-feedback">
                        Input Renewal!
                    </div>
                    </div>
                    </div>
                    <div class="col-4">
                        <div class="form-group" style="margin-left: 150px">
                            <label>Tanggal Order </label>
                            <input type="date" class="form-control col-md-9 datepicker" value="YYYY-MM-DD" name="tanggal_order">
                            <div class="invalid-feedback">
                                Input tanggal Order!
                            </div><br>
                            <label>Deadline</label>
                            <input type="deadline" class="form-control col-md-9 datepicker" value="YYYY-MM-DD" name="deadline">
                            <div class="invalid-feedback">
                                Input Deadline!
                            </div><br>
                            <label>Tau dari </label>
                            <input type="text" class="form-control col-md-9" name="tau_dari">
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
			<th id="totalOrder">Rp. <?php echo e(number_format(0,0,',','.')); ?>-,</th>
		</tr>
    </table>
    <button type="submit" class="button button--shikoba button--text-medium button--round-l button--inverted"><i class="button__icon icon icon-cart"></i><span>Add Order Now</span></button>
        </form>
    </section>
  </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('jslibraries'); ?>
##parent-placeholder-ffd66c5dac17be6451cca4afe8a4549aa7aad85f##
<!-- modal reques -->
<div class="modal fade" tabindex="-1" role="dialog" id="modalRequest">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Request</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>Tambahkan Request disini</p>
                <div class="form-group">
                    <div class="note-editor note-frame card">
                        <div class="note-dropzone">
                             <div class="note-dropzone-message">
                                 </div>
                                </div>
                                <div class="note-toolbar-wrapper" style="height: 36px;">
                                    <div class="note-toolbar card-header" style="position: relative; top: 0px; width: 100%;">
                                        <div class="note-btn-group btn-group note-style">
                                            <button type="button" class="note-btn btn btn-light btn-sm note-btn-bold" tabindex="-1" title="" data-original-title="Bold (CTRL+B)">
                                                <i class="note-icon-bold"></i>
                                                </button>
                                                <button type="button" class="note-btn btn btn-light btn-sm note-btn-italic" tabindex="-1" title="" data-original-title="Italic (CTRL+I)">
                                                    <i class="note-icon-italic"></i>
                                                </button>
                                                <button type="button" class="note-btn btn btn-light btn-sm note-btn-underline" tabindex="-1" title="" data-original-title="Underline (CTRL+U)">
                                                    <i class="note-icon-underline"></i>
                                                </button><button type="button" class="note-btn btn btn-light btn-sm" tabindex="-1" title="" data-original-title="Remove Font Style (CTRL+\)">
                                                    <i class="note-icon-eraser"></i>
                                                </button>
                                            </div>
                                            <div class="note-btn-group btn-group note-font">
                                                <button type="button" class="note-btn btn btn-light btn-sm note-btn-strikethrough" tabindex="-1" title="" data-original-title="Strikethrough (CTRL+SHIFT+S)">
                                                    <i class="note-icon-strikethrough"></i>
                                                </button>
                                            </div>
                                            <div class="note-btn-group btn-group note-para">
                                                <div class="note-btn-group btn-group">
                                                    <button type="button" class="note-btn btn btn-light btn-sm dropdown-toggle" tabindex="-1" data-toggle="dropdown" title="" data-original-title="Paragraph">
                                                        <i class="note-icon-align-left"></i></button><div class="dropdown-menu"><div class="note-btn-group btn-group note-align"><button type="button" class="note-btn btn btn-light btn-sm" tabindex="-1" title="" data-original-title="Align left (CTRL+SHIFT+L)"><i class="note-icon-align-left"></i></button><button type="button" class="note-btn btn btn-light btn-sm" tabindex="-1" title="" data-original-title="Align center (CTRL+SHIFT+E)"><i class="note-icon-align-center"></i></button><button type="button" class="note-btn btn btn-light btn-sm" tabindex="-1" title="" data-original-title="Align right (CTRL+SHIFT+R)"><i class="note-icon-align-right"></i></button><button type="button" class="note-btn btn btn-light btn-sm" tabindex="-1" title="" data-original-title="Justify full (CTRL+SHIFT+J)"><i class="note-icon-align-justify"></i></button></div><div class="note-btn-group btn-group note-list"><button type="button" class="note-btn btn btn-light btn-sm" tabindex="-1" title="" data-original-title="Outdent (CTRL+[)"><i class="note-icon-align-outdent"></i></button><button type="button" class="note-btn btn btn-light btn-sm" tabindex="-1" title="" data-original-title="Indent (CTRL+])"><i class="note-icon-align-indent"></i></button></div></div></div></div></div></div><div class="note-editing-area"><div class="note-handle"><div class="note-control-selection" style="display: none;"><div class="note-control-selection-bg"></div><div class="note-control-holder note-control-nw"></div><div class="note-control-holder note-control-ne"></div><div class="note-control-holder note-control-sw"></div><div class="note-control-sizing note-control-se"></div><div class="note-control-selection-info"></div></div></div><textarea class="note-codable" id="request"></textarea><div class="note-editable card-block" contenteditable="true" style="min-height: 150px;"><p><br></p></div></div><div class="note-statusbar">  <div class="note-resizebar">    <div class="note-icon-bar"></div>    <div class="note-icon-bar"></div>    <div class="note-icon-bar"></div>  </div></div></div>
                </div>
            </div>
            <div class="modal-footer bg-whitesmoke br">
                <button type="button" class="btn btn-outline-danger" data-dismiss="modal">Cancel</button>
                <button type="button" onclick="sendNotes()" class="btn btn-outline-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>
<script>
    function sendNotes() {
        var noteses = tinyMCE.get('request').getContent();

        $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            }),
            $.ajax({
                url: '<?php echo e(route('editRequest', ['id' => request()->route('id')])); ?>',
                method: "post",
                dataType: 'JSON',
                data: {
                    notes: noteses,
                },
                success: function (respons) {
                    $('#lihatRequest').empty();
                    $('#lihatRequest').append(noteses);

                    if (respons.ping == 200) {
                        iziToast.success({
                            title: 'Berhasil!',
                            message: 'berhasil memasukkan Request',
                            position: 'bottomRight'
                        });

                        $('#modalRequest').modal('hide');
                    } else {
                        iziToast.info({
                            title: 'gagal!',
                            message: 'gagal memasukkan Request',
                            position: 'bottomRight'
                        });
                    }
                }
            })
    }


</script>
<!-- JS Libraies -->
<script src="<?php echo e(asset('assets/modules/izitoast/js/iziToast.min.js')); ?>"></script>

<!-- Page Specific JS File -->
<script src="<?php echo e(asset('assets/js/page/modules-toastr.js')); ?>"></script>
<script src="<?php echo e(asset('assets/js/page/bootstrap-modal.js')); ?>"></script>
<script type="text/javascript">
var totals = {};
var totalHarga = {};

$(document).ready(function () {
    var counter = 1;

    $("#add").on("click", function () {
        cols1 = '<div class="form-group addOrder'+ counter +'"><label>Paket </label><div class="col-md-5" style="margin: 0px; padding: 0px;"><select class="form-control select2" name="paket[]" required><option value="">None</option><option value="Ekonomis">Ekonomis</option><option value="Basic">Basic</option><option value="Premium">Premium</option><option value="Business">Business</option><option value="Luxury">Luxury</option></select></div><div class="invalid-feedback">Input paket bosz!' + counter + '</div></div>';
        cols2 = '<div class="form-group addOrder'+ counter +'"><label>Quantity </label><input type="number" class="form-control col-md-5" name="quantity[]" onkeyup="sendQuantity($(this), '+counter+')"><div class="invalid-feedback">Input Quantity!' + counter + '</div></div>';
        cols3 = '<div class="form-group addOrder'+ counter +'"><label>Biaya </label><input type="text"  class="form-control col-md-5" onkeyup="convertToRupiah(this);sendHarga($(this), '+counter+')" name="biaya[]"><div class="invalid-feedback">Input Biaya' + counter + '</div></div>';
        cols4 = '<div style="margin-top: 65px;" class="form-group addOrder'+ counter +'"><button type="button" class="login100-form-btn" name="add" data-id="'+ counter +'" id="hapusRow"><i class="fas fa-plus-circle"></i>&nbsp; Delete Row</button></div>';
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
});

// function untuk kirim kuantitas
function sendQuantity(iki, count) {
    var quantity = parseInt(iki.val());
    var biaya= $('.addOrder'+ count + ' > input[name="biaya[]"]').val();
    var splitBiaya = parseInt(biaya.split('.').join(""));
    var totalItem = quantity * splitBiaya;

    var obj ={
        id: count,
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
    $('#totalOrder').text('Rp. '+totalSemua);
}

// function untuk kirim harga tiap row
function sendHarga(iki, count) {
    // get quantity
    var quantity = parseInt($('.addOrder'+ count + ' > input[name="quantity[]"]').val());


    // get biaya
    var biaya= iki.val();
    var splitBiaya = parseInt(biaya.split('.').join(""));
    // quantity * biaya
    var totalItem = quantity * splitBiaya;

    var obj ={
        id: count,
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
    $('#totalOrder').text('Rp. '+totalSemua);
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
            dataToSend['data'] = $(this).serializeArray();
            dataToSend['transaksi'] = totals;

           $.ajax({
                url:'<?php echo e(route('addOrder')); ?>',
                method:"POST",
                data:dataToSend,
                type:'json',
                success:function(data)
                {
                    if(data.error){
                        printErrorMsg(data.error);
                    }else{
                        i=1;
                        $('.dynamic-added').remove();
                        $('.button--shikoba')[0].reset();
                        $(".print-success-msg").find(".addOrder").html('');
                        $(".print-success-msg").css('display','block');
                        $(".print-error-msg").css('display','none');
                        $(".print-success-msg").find(".addOrder").append('<li>Record Inserted Successfully.</li>');
                    }
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

<?php echo $__env->make('backend.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\jaster\resources\views/backend/pages/add-order.blade.php ENDPATH**/ ?>
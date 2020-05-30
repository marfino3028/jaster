@section('title', 'Add Order')

@section('csslibraries')
@parent

<link rel="stylesheet" href="{{ asset('assets/modules/bootstrap-daterangepicker/daterangepicker.css') }}">
<link rel="stylesheet" href="{{ asset('assets/modules/bootstrap-colorpicker/dist/css/bootstrap-colorpicker.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/modules/select2/dist/css/select2.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/modules/jquery-selectric/selectric.css') }}">
<link rel="stylesheet" href="{{ asset('assets/modules/bootstrap-timepicker/css/bootstrap-timepicker.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/modules/bootstrap-tagsinput/dist/bootstrap-tagsinput.css') }}">
<link rel="stylesheet" href="{{ asset('assets/modules/summernote/summernote-bs4.css') }}">
<link rel="stylesheet" type="text/css" href="{{asset('assets/button_ic/css/vicons-font.css')}}" />
<link rel="stylesheet" type="text/css" href="{{asset('assets/button_ic/css/buttons.css')}}" />
@endsection

@extends('backend.master')

@section('content')
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
        <form id="kirimData" method="post" action="{{ route('addOrder') }}" class="needs-validation" novalidate="">


            <!-- table kiri atas -->
        <div class="row" >
            <div class="col-5 col-md-5 col-lg-5">
                <div class="card col-md-12 col-lg-12 rounded-right rounded-left rounded-top rounded-bottom">
                  <div class="card-header" style="margin-bottom: -20px;">
                    <font color="white" weight="bold"><h3>Personal Company</h3> </font>
                  </div>
                  <div class="card-body col-md-12 col-lg-12">
                       <div class="row">
                        @csrf
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
                            <input type="email" class="form-control col-md-12" name="akun_email">
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
                   @csrf
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
                            <input type="text" class="form-control col-md-12" name="akun_username">
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
                       @csrf
                       <div class="col-4" style="margin-right: -290px;">

                            <div class="form-group" id='formPaket'>
                            <label>Paket </label>
                            <div class="col-md-5" style="margin: 0px; padding: 0px;">
                            <select id="paketInput0" data-input="paket" data-hitung="0" class="form-control select2" required>
                                <option value="">None</option>
                                <option value="Web & Apps">Web & Apps</option>
                                <option value="Business Kit">Business Kit</option>
                                <option value="Digital Marketing">Digital Marketing</option>
                                <option value="Troubleshooting">Troubleshooting</option>
                                <option value="Advertising">Advertising</option>
                                <option value="Branding">Branding</option>
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
                            <input type="number" id="quantityInput0" class="form-control col-md-5" onkeyup="sendQuantity($(this), 0)">
                            <div class="invalid-feedback">
                                Input Quantity!
                            </div>
                        </div>

                        </div>
                        <div class="col-4"  style="margin-right: -290px;">

                            <div class="form-group addOrder0" id="formBiaya">
                                <label>Biaya </label>
                                <input type="text" id="biayaInput0" class="form-control col-md-5" onkeyup="convertToRupiah(this); sendHarga($(this), 0)" >
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
                    <input type="text" onkeyup="convertToRupiah(this);" class="form-control col-md-6" name="renewal">
                    <div class="invalid-feedback">
                        Input Renewal!
                    </div>
                    </div>
                    </div>
                    <div class="col-4">
                        <div class="form-group" style="margin-left: 150px">
                            <label>Tanggal Order </label>
                            <input type="text" class="form-control col-md-9 datepicker" placeholder="YYYY-MM-DD" name="tanggal_order">
                            <div class="invalid-feedback">
                                Input tanggal Order!
                            </div><br>
                            <label>Deadline</label>
                            <input type="text" class="form-control col-md-9 datepicker" placeholder="YYYY-MM-DD" name="deadline">
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
			<th id="totalOrder">Rp. {{ number_format(0,0,',','.') }}-,</th>
		</tr>
    </table>
    <button type="submit" class="button button--shikoba button--text-medium button--round-l button--inverted">
        <i class="button__icon icon icon-cart"></i><span>Add Order Now</span></button>
        </form>
  </div>
@endsection

@section('jslibraries')
@parent
<!-- modal reques -->
<!-- JS Libraies -->
<script src="{{ asset('assets/modules/izitoast/js/iziToast.min.js') }}"></script>

<!-- Page Specific JS File -->
<script src="{{ asset('assets/js/page/modules-toastr.js') }}"></script>
<script src="{{ asset('assets/js/page/bootstrap-modal.js') }}"></script>

<!-- modal untuk menambahkan notes -->
<div class="modal fade" tabindex="-1" role="dialog" id="modalRequest">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Add Request</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>Tambahkan Request disini</p>
                <div class="form-group">
                    <textarea id="notes"></textarea>
                </div>
            </div>
            <div class="modal-footer bg-whitesmoke br">
                <button type="button" class="btn btn-outline-danger" data-dismiss="modal">Cancel</button>
                <button type="button" onclick="sendRequest()" class="btn btn-outline-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>


<script type="text/javascript">
var totals = {};
var totalHarga = {};
$(document).ready(function () {
    var counter = 1;
    $("#add").on("click", function () {
        cols1 = '<div class="form-group addOrder'+ counter +'"><label>Paket </label><div class="col-md-5" style="margin: 0px; padding: 0px;"><select data-input="paket" data-hitung="'+counter+'" class="form-control select2" id="paketInput'+ counter +'" required><option value="">None</option><option value="Web & Apps">Web & Apps</option><option value="Business Kit">Business Kit</option><option value="Digital Marketing">Digital Marketing</option><option value="Troubleshooting">Troubleshooting</option><option value="Advertising">Advertising</option><option value="Branding">Branding</option></select></div><div class="invalid-feedback">Input paket bosz!' + counter + '</div></div>';
        cols2 = '<div class="form-group addOrder'+ counter +'"><label>Quantity </label><input type="number" id="quantityInput'+ counter +'" class="form-control col-md-5" onkeyup="sendQuantity($(this), '+ counter +')"><div class="invalid-feedback">Input Quantity!' + counter + '</div></div>';
        cols3 = '<div class="form-group addOrder'+ counter +'"><label>Biaya </label><input type="text" id="quantityInput'+ counter +'" class="form-control col-md-5" onkeyup="convertToRupiah(this);sendHarga($(this), '+ counter +')"><div class="invalid-feedback">Input Biaya' + counter + '</div></div>';
        cols4 = '<div style="margin-top: 65px;" class="form-group addOrder'+ counter +'"><button type="button" class="login100-form-btn" name="add" data-id="'+ counter +'" id="hapusRow" style="background-color: red;"><font color="white"><i class="fas fa-minus-circle"></i>&nbsp;Delete Row</font></button></div>';
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
                url:'{{ route('addOrder') }}',
                method:"POST",
                data:dataToSend,
                type:'json',
                success:function(data)
                {
                    window.location.href = '{{route('listOrder')}}'
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

<script src="{{ asset('assets/modules/cleave-js/dist/cleave.min.js') }}"></script>
<script src="{{ asset('assets/modules/cleave-js/dist/addons/cleave-phone.us.js') }}"></script>
<script src="{{ asset('assets/modules/jquery-pwstrength/jquery.pwstrength.min.js') }}"></script>
<script src="{{ asset('assets/modules/bootstrap-daterangepicker/daterangepicker.js') }}"></script>
<script src="{{ asset('assets/modules/bootstrap-colorpicker/dist/js/bootstrap-colorpicker.min.js') }}"></script>
<script src="{{ asset('assets/modules/bootstrap-timepicker/js/bootstrap-timepicker.min.js') }}"></script>
<script src="{{ asset('assets/modules/bootstrap-tagsinput/dist/bootstrap-tagsinput.min.js') }}"></script>
<script src="{{ asset('assets/modules/select2/dist/js/select2.full.min.js') }}"></script>
<script src="{{ asset('assets/modules/jquery-selectric/jquery.selectric.min.js') }}"></script>
<script src="{{ asset('assets/modules/summernote/summernote-bs4.js') }}"></script>
<script>
    $(".colorpickerinput").colorpicker({
        format: 'hex',
        component: '.input-group-append',
    });
</script>
<script src="https://cdn.tiny.cloud/1/ubaylt88d66o8ewdhmw9upizv7g1fbhcunbyhvdfoc5hcnek/tinymce/5/tinymce.min.js"></script>
<script src="{{ asset('js/tinyce.js') }}"></script>
@endsection

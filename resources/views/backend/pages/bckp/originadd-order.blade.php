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

@endsection

@extends('backend.master')

@section('content')
<div class="section-header">
    <h1>Add Order</h1>
    <div class="section-header-breadcrumb">
        <div class="breadcrumb-item"><a href="#">Orders</a></div>
        <div class="breadcrumb-item active"><a href="#">Add Order</a></div>
    </div>
</div>
<div class="section-body">
    <h2 class="section-title">Add Order</h2>
    <p class="section-lead">This page is just an example for you to create your own page.</p>
    <form method="post" action="{{ route('addOrder') }}" class="needs-validation" novalidate="">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    @csrf
                    <div class="col-6">
                        <div class="form-group">
                            <label>Nama Order</label>
                            <input type="text" class="form-control" name="nama_order">
                            <div class="invalid-feedback">
                                Input Nama bosz!
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Paket</label>
                            <select class="form-control select2" name="nama_paket" required>
                                <option value="">None</option>
                                <option value="Ekonomis">Ekonomis</option>
                                <option value="Basic">Basic</option>
                                <option value="Premium">Premium</option>
                                <option value="Business">Business</option>
                                <option value="Luxury">Luxury</option>
                            </select>
                            <div class="invalid-feedback">
                                Input paketnya bosz
                            </div>
                        </div>
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
                        <div class="form-group">
                            <label>Domain</label>
                            <input type="text" class="form-control" name="domain">
                            <div class="invalid-feedback">
                                Input Domain bosz!
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Due Date</label>
                            <input type="text" class="form-control datepicker" placeholder="YYYY-MM-DD" name="duedate"
                                required>
                            <div class="invalid-feedback">
                                Input tanggal dengan benar
                            </div>
                        </div>
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
                    <div class="col-6">
                        <div class="form-group">
                            <label>Username Akun WordPress</label>
                            <input type="text" class="form-control" name="akun_username">
                        </div>
                        <div class="form-group">
                            <label>Email Akun</label>
                            <input type="text" class="form-control" name="akun_email">
                        </div>
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
                        <div class="form-group">
                            <label>Deadline</label>
                            <input type="text" class="form-control datepicker" placeholder="YYYY-MM-DD" name="deadline"
                                required>
                            <div class="invalid-feedback">
                                Input tanggal dengan benar
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Request</label>
                            <textarea class="form-control summernote-simple" name="request"></textarea>
                            <!-- <textarea class="form-control" name="request"></textarea> -->
                        </div>
                        <div class="form-group">
                            <label>Web Pesaing</label>
                            <textarea class="form-control summernote-simple" name="web_pesaing"></textarea>
                            <!-- <textarea class="form-control" name="web_pesaing"></textarea> -->
                        </div>
                        <div class="text-right">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </form>
</div>
@endsection

@section('jslibraries')
@parent

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
@endsection

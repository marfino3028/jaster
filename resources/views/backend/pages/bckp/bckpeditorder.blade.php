@section('title', 'Edit Order')

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
    <h1>Edit Order</h1>
    <div class="section-header-breadcrumb">
        <div class="breadcrumb-item"><a href="#">Orders</a></div>
        <div class="breadcrumb-item active"><a href="#">Edit Order</a></div>
    </div>
</div>
<div class="section-body">
    <h2 class="section-title">Edit Order</h2>
    <p class="section-lead">This page is just an example for you to create your own page.</p>
    <form method="post" action="{{ route('updateOrder', ['id' => request()->route('id')]) }}" class="needs-validation" novalidate="">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    @method('PATCH')
                    @csrf
                    <div class="col-6">
                        <div class="form-group">
                            <label>Nama Order</label>
                            <input type="text" class="form-control" name="nama_order" value="{{ $edit->nama_order }}">
                            <div class="invalid-feedback">
                                Input Nama bosz!
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Paket</label>
                            <select class="form-control select2" name="nama_paket" required>
                                <option value="">None</option>
                                <option value="Ekonomis" @if ($edit->nama_paket == "Ekonomis") {{ 'selected' }} @endif>Ekonomis</option>
                                <option value="Basic" @if ($edit->nama_paket == "Basic") {{ 'selected' }} @endif>Basic</option>
                                <option value="Premium" @if ($edit->nama_paket == "Premium") {{ 'selected' }} @endif>Premium</option>
                                <option value="Business" @if ($edit->nama_paket == "Business") {{ 'selected' }} @endif>Business</option>
                                <option value="Luxury" @if ($edit->nama_paket == "Luxury") {{ 'selected' }} @endif>Luxury</option>
                            </select>
                            <div class="invalid-feedback">
                                Input paketnya bosz
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Logo</label>
                            <select class="form-control select2" name="data_logo" required>
                                <option value="">None</option>
                                <option value="Dibuatkan" @if ($edit->data_logo == "Dibuatkan") {{ 'selected' }} @endif>Dibuatkan</option>
                                <option value="Email" @if ($edit->data_logo == "Email") {{ 'selected' }} @endif>Email</option>
                            </select>
                            <div class="invalid-feedback">
                                Logonya darimana bosz?
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Data</label>
                            <select class="form-control select2" name="data_website" required>
                                <option value="">None</option>
                                <option value="Full Kita" @if ($edit->data_website == "Full Kita") {{ 'selected' }} @endif>Full dari Kita</option>
                                <option value="Full Client" @if ($edit->data_website == "Full Client") {{ 'selected' }} @endif>Full Client</option>
                                <option value="Kita Bantu" @if ($edit->data_website == "Kita Bantu") {{ 'selected' }} @endif>Kita Bantu</option>
                            </select>
                            <div class="invalid-feedback">
                                Datanya?
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Tipe Post</label>
                            <select class="form-control select2" name="tipe_post" required>
                                <option value="">None</option>
                                <option value="Artikel" @if ($edit->tipe_post == "Artikel") {{ 'selected' }} @endif>Artikel</option>
                                <option value="Produk" @if ($edit->tipe_post == "Produk") {{ 'selected' }} @endif>Produk</option>
                                <option value="Service" @if ($edit->tipe_post == "Service") {{ 'selected' }} @endif>Service</option>
                                <option value="Gallery" @if ($edit->tipe_post == "Gallery") {{ 'selected' }} @endif>Gallery</option>
                                <option value="Elementor" @if ($edit->tipe_post == "Elementor") {{ 'selected' }} @endif>Elementor</option>
                                <option value="Landing" @if ($edit->tipe_post == "Landing") {{ 'selected' }} @endif>Landing</option>
                            </select>
                            <div class="invalid-feedback">
                                Post nya tentang apa?
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Target</label>
                            <select class="form-control select2" name="target" required>
                                <option value="">None</option>
                                <option value="WA atau Telepon" @if ($edit->target == "WA atau Telepon") {{ 'selected' }} @endif>WA atau Telepon</option>
                                <option value="Email" @if ($edit->target == "Email") {{ 'selected' }} @endif>Email</option>
                                <option value="Checkout" @if ($edit->target == "Checkout") {{ 'selected' }} @endif>Checkout</option>
                            </select>
                            <div class="invalid-feedback">
                                Target action nya?
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Domain</label>
                            <input type="text" class="form-control" name="domain" value="{{ $edit->domain }}">
                            <div class="invalid-feedback">
                                Input Domain bosz!
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Due Date</label>
                            <input type="text" class="form-control datepicker" placeholder="YYYY-MM-DD" name="duedate"
                                required value={{ $edit->duedate }}>
                            <div class="invalid-feedback">
                                Input tanggal dengan benar
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Pick Your Color</label>
                            <div class="input-group colorpickerinput">
                                <input type="text" class="form-control" name="warna" value="{{ $edit->warna }}">
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
                            <input type="text" class="form-control" name="akun_username" value="{{ $edit->akun_username }}">
                        </div>
                        <div class="form-group">
                            <label>Email Akun</label>
                            <input type="text" class="form-control" name="akun_email" value="{{ $edit->akun_email }}">
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
                                    name="akun_password" value="{{ $edit->akun_password }}">
                            </div>
                            <div id="pwindicator" class="pwindicator">
                                <div class="bar"></div>
                                <div class="label"></div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Deadline</label>
                            <input type="text" value={{ $edit->deadline }} class="form-control datepicker" placeholder="YYYY-MM-DD" name="deadline"
                                required>
                            <div class="invalid-feedback">
                                Input tanggal dengan benar
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Request</label>
                            <textarea class="form-control summernote-simple" name="request">{{ $edit->request }}</textarea>
                        </div>
                        <div class="form-group">
                            <label>Web Pesaing</label>
                            <textarea class="form-control summernote-simple" name="web_pesaing">{{ $edit->web_pesaing }}</textarea>
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

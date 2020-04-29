@section('title', 'List Antrian Transfer')

@section('csslibraries')
@parent
<link rel="stylesheet" href="{{ asset('assets/css/custom.css') }}">
@endsection

@extends('backend.master')

@section('content')
<div class="section-header">
    <h1>Password</h1>
    <div class="section-header-breadcrumb">
        <div class="breadcrumb-item active"><a href="#">Password</a></div>
    </div>
</div>

@if (session()->has('success'))
    <div class="alert alert-success">{{ session('success') }}</div>
@endif

<div class="section-body">
    <h2 class="section-title">Edit Password</h2>
    <p class="section-lead">This page is just an example for you to create your own page.</p>
    <div class="col-12 col-md-12 col-lg-3">
                <div class="card">
                  <form method="post" class="needs-validation" novalidate="" action="{{ route('updatePassword') }}">
                      
                    {{ csrf_field() }}
                    {{ method_field('put') }}

                    <div class="card-header">
                      <h4>Edit Password</h4>
                    </div>
                    <div class="card-body">
                        <div class="row">                               
                          <div class="form-group col-12">
                            <label>Password Lama</label>
                            <input type="password" class="form-control" name="current_password">
                            <span class="help-block">{{ $errors->first('current_password') }}</span>
                            <div class="invalid-feedback">
                              Masukkan password lama
                            </div>
                          </div>
                          <div class="form-group col-12">
                            <label>Password Baru</label>
                            <input type="password" class="form-control" name="password">
                            <span class="help-block">{{ $errors->first('password') }}</span>
                            <div class="invalid-feedback">
                              Masukkan password baru
                            </div>
                          </div>
                          <div class="form-group col-12">
                            <label>Konfirmasi Password Baru</label>
                            <input type="password" class="form-control" name="password_confirmation">
                            <span class="help-block">{{ $errors->first('password_confirmation') }}</span>
                            <div class="invalid-feedback">
                              Masukkan verifikasi password baru
                            </div>
                          </div>
                        </div>
                    </div>
                    <div class="card-footer text-right">
                      <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                  </form>
                </div>
              </div>
@endsection

@section('jslibraries')
@parent
<script src="{{ asset('assets/modules/jquery-ui/jquery-ui.min.js') }}"></script>
<script src="{{ asset('assets/js/custom.js') }}"></script>
@endsection
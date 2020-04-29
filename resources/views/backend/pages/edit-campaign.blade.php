@section('title', 'Tambah Campaign')

@section('csslibraries')
@parent
<link rel="stylesheet" href="{{ asset('assets/modules/bootstrap-daterangepicker/daterangepicker.css') }}">
<link rel="stylesheet" href="{{ asset('assets/modules/bootstrap-timepicker/css/bootstrap-timepicker.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/modules/select2/dist/css/select2.min.css') }}">
@endsection

@extends('backend.master')

@section('content')
<div class="section-header">
    <h1>Tambah Campaign</h1>
    <div class="section-header-breadcrumb">
        <div class="breadcrumb-item"><a href="#">Ringkasan</a></div>
        <div class="breadcrumb-item active"><a href="#">Tambah Campaign</a></div>
    </div>
</div>
<div class="section-body">
    <h2 class="section-title">Tambah Campaign</h2>
    <p class="section-lead">This page is just an example for you to create your own page.</p>
    <form method="post" action="{{ route('updateCampaign', ['id' => request()->route('id')]) }}" class="needs-validation" novalidate="">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    @method('PATCH')
                    @csrf
                    <div class="col-6">
                        <div class="form-group">
                            <label>Nama</label>
                            <input type="text" class="form-control" name="nama" value="{{ $edit->nama_customer }}">
                            <div class="invalid-feedback">
                                Input Nama bosz!
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Akun Adwords</label>
                            <select class="form-control select2" name="akun_adwords" required>
                                <option value="">None</option>
                                @foreach ($listAkun as $list)
                                <option value="{{ $list->adsakun_id }}" @if ($list->adsakun_id == $edit->adsakun_id) {{ 'selected' }} @endif>{{ $list->nama_akun }}</option>
                                @endforeach
                            </select>
                            <div class="invalid-feedback">
                                Input akunnya bosz
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Saldo</label>
                            <input type="text" class="form-control" name="saldo" value="{{ $edit->saldo_adwords }}">
                            <div class="invalid-feedback">
                                Input Saldo bosz!
                            </div>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                            <label>Tanggal Mulai</label>
                            <input type="text" value="{{ $edit->tanggal_mulai }}" class="form-control datepicker" placeholder="YYYY-MM-DD" name="tanggal_mulai"
                                required>
                            <div class="invalid-feedback">
                                Input tanggal dengan benar
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Tanggal Akhir</label>
                            <input type="text" value="{{ $edit->tanggal_akhir }}" class="form-control datepicker" placeholder="YYYY-MM-DD" name="tanggal_akhir"
                                required>
                            <div class="invalid-feedback">
                                Input tanggal dengan benar
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Catatan</label>
                            <textarea name="catatan" id="notes">{{ $edit->notes }}</textarea>
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
<script src="{{ asset('assets/modules/bootstrap-daterangepicker/daterangepicker.js') }}"></script>
<script src="{{ asset('assets/modules/bootstrap-timepicker/js/bootstrap-timepicker.min.js') }}"></script>
<script src="{{ asset('assets/modules/select2/dist/js/select2.full.min.js') }}"></script>
<script src="https://cdn.tiny.cloud/1/ubaylt88d66o8ewdhmw9upizv7g1fbhcunbyhvdfoc5hcnek/tinymce/5/tinymce.min.js"></script>
<script src="{{ asset('js/tinyce.js') }}"></script>
@endsection
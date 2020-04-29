@section('title', 'Add Campaign')

@section('csslibraries')
@parent
<link rel="stylesheet" href="{{ asset('assets/modules/bootstrap-daterangepicker/daterangepicker.css') }}">
<link rel="stylesheet" href="{{ asset('assets/modules/bootstrap-timepicker/css/bootstrap-timepicker.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/modules/select2/dist/css/select2.min.css') }}">
@endsection

@extends('backend.master')

@section('content')
<div class="section-header">
    <h1>Tambah Antrian</h1>
    <div class="section-header-breadcrumb">
        <div class="breadcrumb-item"><a href="#">Antri TF</a></div>
        <div class="breadcrumb-item active"><a href="#">Tambah Antrian</a></div>
    </div>
</div>
<div class="section-body">
    <h2 class="section-title">Tambah Antrian</h2>
    <p class="section-lead">This page is just an example for you to create your own page.</p>
    <form method="post" action="{{ route('storeTransfer') }}" class="needs-validation" novalidate="">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    @csrf
                    <div class="col-6">
                        <div class="form-group">
                            <label>Nama Campaign</label>
                            <select class="form-control select2" name="nama_campaign" required>
                                <option value="">None</option>
                                @foreach ($listCampaign as $list)
                                <option value="{{ $list->adscampaign_id }}">{{ $list->nama_customer }}</option>
                                @endforeach
                            </select>
                            <div class="invalid-feedback">
                                Input Namanya bosz
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Tanggal Transfer</label>
                            <input type="text" class="form-control datepicker" placeholder="YYYY-MM-DD" name="tanggal_tf"
                                required>
                            <div class="invalid-feedback">
                                Input tanggal dengan benar
                            </div>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                            <label>Saldo</label>
                            <input type="text" class="form-control" name="saldo">
                            <div class="invalid-feedback">
                                Input Saldo bosz!
                            </div>
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
@endsection
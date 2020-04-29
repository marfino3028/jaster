@section('title', 'Add Task')

@section('csslibraries')
@parent
<link rel="stylesheet" href="{{ asset('assets/modules/bootstrap-daterangepicker/daterangepicker.css') }}">
<link rel="stylesheet" href="{{ asset('assets/modules/bootstrap-colorpicker/dist/css/bootstrap-colorpicker.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/modules/select2/dist/css/select2.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/modules/jquery-selectric/selectric.css') }}">
<link rel="stylesheet" href="{{ asset('assets/modules/bootstrap-timepicker/css/bootstrap-timepicker.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/modules/bootstrap-tagsinput/dist/bootstrap-tagsinput.css') }}">

@endsection

@extends('backend.master')

@section('content')
<div class="section-header">
    <h1>Add Task</h1>
    <div class="section-header-breadcrumb">
        <div class="breadcrumb-item"><a href="#">Tasks</a></div>
        <div class="breadcrumb-item active"><a href="#">Add Tasks</a></div>
    </div>
</div>
<div class="section-body">
    <h2 class="section-title">Add Task</h2>
    <p class="section-lead">This page is just an example for you to create your own page.</p>
    <form method="post" action="{{ route('updateCategory', ['id' => request()->route('id')]) }}" class="needs-validation" novalidate="">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    @method('PATCH')
                    @csrf
                    <div class="col-6">
                        <div class="form-group">
                            <label>Nama Task</label>
                            <input type="text" class="form-control" value="{{ $edit->nama_kategori }}" required="" name="nama_kategori">
                            <div class="invalid-feedback">
                                Input nama Task dengan benar!
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Nilai</label>
                            <select class="form-control select2" name="nilai" id="nilai" disabled>
                                    <option value="" @if($edit->nilai == '') {{ 'selected' }} @else {{ '' }} @endif>None</option>
                                    <option value="10" @if($edit->nilai == 10) {{ 'selected' }} @else {{ '' }} @endif>10</option>
                                    <option value="15" @if($edit->nilai == 15) {{ 'selected' }} @else {{ '' }} @endif>15</option>
                                    <option value="18" @if($edit->nilai == 18) {{ 'selected' }} @else {{ '' }} @endif>18</option>
                                    <option value="21" @if($edit->nilai == 21) {{ 'selected' }} @else {{ '' }} @endif>21</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                          <label>Parent Task</label>
                          <select class="form-control select2" name="parent_id" id="parent_id">
                          <option value="">None</option>
                            @foreach($showCategory as $list => $value)
                                <option value="{{ $list }}" @if($edit->parent_id == $list) {{ 'selected' }} @else {{ '' }} @endif >{{ $value }}</option>
                            @endforeach
                          </select>
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

<script>
    $(document).ready(function() {
        $('#parent_id').on('change', function() {
            if($('#parent_id').val() == '') {
                $('#nilai').attr('disabled', true);
            } else {
                $('#nilai').attr('disabled', false);
            }
        });
    });
</script>
@endsection

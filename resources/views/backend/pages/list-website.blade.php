@section('title', 'Website')

@section('csslibraries')
@parent
<link rel="stylesheet" href="{{ asset('assets/modules/datatables/datatables.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/modules/datatables/DataTables-1.10.16/css/dataTables.bootstrap4.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/modules/bootstrap-daterangepicker/daterangepicker.css') }}">
<link rel="stylesheet" href="{{ asset('assets/modules/datatables/Select-1.2.4/css/select.bootstrap4.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/modules/select2/dist/css/select2.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/css/custom.css') }}">
@endsection

@extends('backend.master')

@section('content')
<div class="section-header">
    <h1>List Hosting</h1>
    <div class="section-header-breadcrumb">
        <div class="breadcrumb-item"><a href="#">Website</a></div>
        <div class="breadcrumb-item active"><a href="#">List Website</a></div>
    </div>
</div>
<div class="section-body">
    <h2 class="section-title">List Website</h2>
    <p class="section-lead">This page is just an example for you to create your own page.</p>
    <div class="row">
    <div class="col-xl-8 col-12">
    @if(!empty($listwebnoHost))
        <div class="card">
            <div class="card-header">
                    <h4 class="mt-0">Belum masuk Hosting</h4>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Nama Domain</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php $no = 1; @endphp
                                @forelse ($listwebnoHost as $row)
                                @if (is_array($row))
                                <tr>
                                    <td>{{ $no++ }}</td>
                                    <td>{{ $row['domain'] }}</td>
                                    <td>
                                        <div class="form-inline">
                                            <div class="form-group">
                                                <button onclick="show({{ $row['websiteId'] }})" class="btn btn-outline-primary button-list-order">Edit</a>
                                            </div>
                                            <div class="form-group">
                                                <button type="button"
                                                    class="btn btn-outline-danger button-list-order" onclick="deleteDomain({{ $row['websiteId'] }})" data-target="#deleteHostingConfirm" data-toggle="modal">Delete</button>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                @endif
                                @empty
                                <tr>
                                    <td>Tidak ada data</td>
                                    <td>Tidak ada data</td>
                                    <td>Tidak ada data</td>
                                </tr>
                                @endforelse
                            </tbody>
                        </table>
                </div>
            </div>
        </div>
    @endif
    @foreach ($listweb as $data)
        <div class="card">
            @php
                foreach ($arrayHosting as $a) {
                    if($a['hostingId'] == $data[0]['hostingId']) {
                        $nama_hosting = $a['nama_hosting'];
                    }
                }
            @endphp
            <div class="card-header">
                    <h4 class="mt-0">{{ $nama_hosting }}</h4>
                    <div class="card-header-action">
                        <span><span class="badge badge-primary mr-2">{{ count($data) }}</span> Website didalamnya</span>
                    </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Nama Domain</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php $no = 1; @endphp
                                @forelse ($data as $row)
                                @if (is_array($row))
                                <tr>
                                    <td>{{ $no++ }}</td>
                                    <td><a href="{{ $row['domain'] }}" target="_blank">{{ $row['domain'] }}</a></td>
                                    <td>
                                        <div class="form-inline">
                                            <div class="form-group">
                                                <button onclick="show({{ $row['websiteId'] }})" class="btn btn-outline-primary button-list-order">Edit</a>
                                            </div>
                                            <div class="form-group">
                                                <button type="button"
                                                    class="btn btn-outline-danger button-list-order" onclick="deleteDomain({{ $row['websiteId'] }})" data-target="#deleteHostingConfirm" data-toggle="modal">Delete</button>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                @endif
                                @empty
                                <tr>
                                    <td>Tidak ada data</td>
                                    <td>Tidak ada data</td>
                                    <td>Tidak ada data</td>
                                </tr>
                                @endforelse
                            </tbody>
                        </table>
                </div>
            </div>
        </div>
    @endforeach
        </div>
        <div class="col-xl-4 col-12">
            <div id="formDomain" class="card position-sticky sticky-top">
                <div class="card-header">
                    <h4>Tambah Website</h4>
                </div>
                <div class="card-body">
                    <form id="kirimDomain" action="{{route('addDomain')}}" method="post">
                    @csrf
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group">
                                    <label>Input Domain</label>
                                    <input type="text" class="form-control" name="nama_domain" id="nama_domain">
                                    <div class="invalid-feedback">
                                        Input Nama bosz!
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Hosting</label>
                                    <select class="form-control select2" name="nama_hosting" id="nama_hosting">
                                        <option value="">None</option>
                                        @foreach($listHosting as $h)
                                        <option value="{{ $h->hostingId }}">{{ $h->nama_hosting }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Nama Order</label>
                                    <select class="form-control select2" name="brand" id="brand">
                                        <option value="">None</option>
                                        @foreach($listOrder as $or)
                                        <option value="{{ $or->order_id }}">{{ $or->brand }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Tanggal Order</label>
                                    <input type="text" class="form-control datepicker" placeholder="YYYY-MM-DD" name="tanggal_order" id="tanggal_order">
                                    <div class="invalid-feedback">
                                        Input tanggal dengan benar
                                    </div>
                                </div>
                                <div class="text-right">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('jslibraries')
@parent
<div class="modal fade" tabindex="-1" role="dialog" id="deleteHostingConfirm">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Delete Website</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>Apakah anda yakin ingin menghapus Web ini?</p>
            </div>
            <div class="">
            <form class="modal-footer bg-whitesmoke br" action="" id="deleteForm" method="post">
                @csrf
                @method('DELETE')
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                <button type="submit" class="btn btn-danger" onclick="deleteSubmit()">Yes</button>
            </form>
            </div>
        </div>
    </div>
</div>
<script src="{{ asset('assets/modules/datatables/datatables.min.js') }}"></script>
<script src="{{ asset('assets/modules/datatables/DataTables-1.10.16/js/dataTables.bootstrap4.min.js') }}"></script>
<script src="{{ asset('assets/modules/datatables/Select-1.2.4/js/dataTables.select.min.js') }}"></script>
<script src="{{ asset('assets/modules/jquery-ui/jquery-ui.min.js') }}"></script>
<script src="{{ asset('assets/modules/bootstrap-daterangepicker/daterangepicker.js') }}"></script>
<script src="{{ asset('assets/modules/bootstrap-colorpicker/dist/js/bootstrap-colorpicker.min.js') }}"></script>
<script src="{{ asset('assets/modules/bootstrap-timepicker/js/bootstrap-timepicker.min.js') }}"></script>
<script src="{{ asset('assets/modules/select2/dist/js/select2.full.min.js') }}"></script>
<script src="{{ asset('assets/modules/jquery-selectric/jquery.selectric.min.js') }}"></script>
<script>
    $("table").dataTable({
        pageLength : 5,
        lengthMenu: [[5, 10, 20, -1], [5, 10, 20, 'All']]
    });
</script>
<script>
    function show(webId) {
        var urlShow = '{{ route("showDomain", ":id") }}';
        var urlUpdate = '{{ route("updateDomain", ":id") }}';


        urlShow = urlShow.replace(':id', webId);
        urlUpdate = urlUpdate.replace(':id', webId);


        $.ajax({
            url: urlShow,
            type: 'GET',
            dataType: 'JSON',
            success: function(response) {
                if(response.code == 200) {
                    $('#formDomain h4').text('Edit Website');
                    $('#nama_domain').val(response.result.domain);
                    $('#nama_hosting').val(response.result.hostingId);
                    $('#nama_hosting').select2().trigger('change');
                    $('#brand').val(response.result.order_id);
                    $('#brand').select2().trigger('change');
                    $('#tanggal_order').val(response.result.tanggal_order);
                    $('#kirimDomain').attr('action', urlUpdate);
                }
            }
        });
    }

    function deleteDomain(webId) {
        console.log(webId)
        var id = webId;
        var url = '{{ route("deleteDomain", ":id") }}';
        url = url.replace(':id', id);
        $("#deleteForm").attr('action', url);
    }

    function deleteSubmit() {
         $("#deleteForm").submit();
    }
</script>
@endsection

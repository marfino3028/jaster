@section('title', 'List Progress')

@section('csslibraries')
@parent
<link rel="stylesheet" href="{{ asset('assets/modules/datatables/datatables.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/modules/datatables/DataTables-1.10.16/css/dataTables.bootstrap4.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/modules/datatables/Select-1.2.4/css/select.bootstrap4.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/css/custom.css') }}">
@endsection

@extends('backend.master')

@section('content')
<div class="section-header">
    <h1>List Progress</h1>
    <div class="section-header-breadcrumb">
        <div class="breadcrumb-item"><a href="#">Progress</a></div>
        <div class="breadcrumb-item active"><a href="#">List Progress</a></div>
    </div>
</div>
<div class="section-body">
    <h2 class="section-title">List Progress</h2>
    <p class="section-lead">This page is just an example for you to create your own page.</p>
    <div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="card-body">
                    <div class="table-responsive">
                      <table id="ordertable" class="table table-striped">
                        <thead>
                          <tr>
                            <th>#</th>
                            <th>Nama Order</th>
                            <th>Terakhir update</th>
                            <th>Presentase</th>
                            <th>Action</th>
                          </tr>
                        </thead>
                        <tbody>
                            @php $no = 1; @endphp
                            @forelse ($hasil as $row)
                          <tr>
                            <td>{{ $no++ }}</td>
                            <td>{{ $row['brand'] }}</td>
                            <td>@if (($row['last_edit']) == null) not updated yet @else {{ date('l, d F Y h:i A', strtotime($row['last_edit'])) }} @endif</td>
                            <td>{{ $row['presentase'] }}%</td>
                            <td>
                                <div class="form-inline">
                                    <div class="form-group">
                                        <a href="{{ $row['domain'] }}"
                                            target="_blank"
                                            class="btn btn-primary button-list-order">Cek Website</a>
                                    </div>
                                    <div class="form-group">
                                        <a href="{{ route('addProgress', ['id' => $row['order_id']]) }}"
                                            class="btn btn-outline-primary button-list-order">Ganti Progress</a>
                                    </div>
                                </div>
                            </td>
                          </tr>
                          @empty
                          <tr>
                              <td>Tidak ada data</td>
                              <td>Tidak ada data</td>
                              <td>tidak ada data</td>
                              <td>tidak ada data</td>
                              <td>Tidak ada data</td>
                          </tr>
                          @endforelse
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
</div>
@endsection

@section('jslibraries')
@parent
<script src="{{ asset('assets/modules/datatables/datatables.min.js') }}"></script>
<script src="{{ asset('assets/modules/datatables/DataTables-1.10.16/js/dataTables.bootstrap4.min.js') }}"></script>
<script src="{{ asset('assets/modules/datatables/Select-1.2.4/js/dataTables.select.min.js') }}"></script>
<script src="{{ asset('assets/modules/jquery-ui/jquery-ui.min.js') }}"></script>
<script>
    $("#ordertable").dataTable({
      "lengthMenu": [[25, 50, -1], [25, 50, "All"]]
    });
</script>
@endsection

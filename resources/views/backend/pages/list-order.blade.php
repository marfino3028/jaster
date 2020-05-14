@section('title', 'List Order')

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
    <h1>List Orders</h1>
    <div class="section-header-breadcrumb">
        <div class="breadcrumb-item"><a href="#">Orders</a></div>
        <div class="breadcrumb-item active"><a href="#">List Orders</a></div>
    </div>
</div>
<div class="section-body">
    <h2 class="section-title">List Orders</h2>
    <p class="section-lead">This page is just an example for you to create your own page.</p>
    <div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="card-body">
                    <div class="table-responsive">
                      <table id="ordertable" class="table table-striped">
                        <thead>
                          <tr>
                            <th>No</th>
                            <th>Order</th>
                            <th>Project</th>
                            <th>Tanggal Order</th>
                            <th>Deadline</th>
                            <th>Action</th>
                          </tr>
                        </thead>
                        <tbody>
                            @php $no = 1; @endphp
                            @forelse ($order as $row)
                          <tr>
                            <td align="center">{{ $no++ }}</td>
                            <td align="center">JW-{{ $row->order_id }}</td>
                            <td align="center">{{ $row->brand }}</td>
                            <td align="center">{{ $row->tanggal_order }}</td>
                            <td align="center">{{ $row->deadline }}</td>
                            <td align="center">
                                <a href="{{route('editOrder', ['id' => $row->order_id])}}" class="btn btn-outline-primary button-list-order">Edit</a>

                            </td>
                          </tr>
                          @empty
                          <tr>
                              <td>Tidak ada data</td>
                              <td>Tidak ada data</td>
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
    $("#ordertable").dataTable();
</script>
@endsection

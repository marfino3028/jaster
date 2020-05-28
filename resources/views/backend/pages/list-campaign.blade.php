@section('title', 'Ringkasan Campaign')

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
    <h1>Ringkasan Campaign</h1>
    <div class="section-header-breadcrumb">
        <div class="breadcrumb-item"><a href="#">Ringkasan</a></div>
        <div class="breadcrumb-item active"><a href="#">Ringkasan Campaign</a></div>
    </div>
</div>
<div class="section-body">
  <h2 class="section-title">List Campaign</h2>
  <p class="section-lead">This page is just an example for you to create your own page.</p>

    <div class="col-12">
      @foreach ($listCampaign as $akun => $data)
      <div class="card">
        <div class="card-body">

          <div class="table-responsive" style="overflow-y: hidden; overflow-x: hidden;">
                      <table id="ordertable" class="table table-striped">
                        <thead>
                          <tr>
                            <th>#</th>
                            <th>Nama</th>
                            <th>Akun</th>
                            <th>Tanggal Mulai</th>
                            <th>Tanggal Akhir</th>
                            <th>Saldo</th>
                            <th>Action</th>
                          </tr>
                        </thead>
                        <tbody>
                            @php $no = 1; @endphp
                            @forelse ($data as $row)
                          <tr>

                            <td>{{ $no++ }}</td>
                            <td>{{ $row->nama_customer }}</td>
                            <td>{{ $row->akun->nama_akun }}</td>
                            <td>{{ $row->tanggal_mulai }}</td>
                            <td>{{ $row->tanggal_akhir }}</td>
                            <td>Rp. {{ number_format($row->saldo_adwords, '0', ',', '.') }}</td>
                            <td>
                                <div class="form-inline">
                                    <div class="form-group">
                                        <a href="{{route('editCampaign', ['id' => $row->adscampaign_id])}}"
                                            class="btn btn-outline-primary button-list-order">Edit</a>
                                    </div>
                                    <div class="form-group">
                                        <button type="button"
                                            class="btn btn-outline-info button-list-order"
                                            data-toggle="modal"
                                            id="nota"
                                            data-note="{{ $row->notes }}"
                                            data-target="#viewNotes">View Notes</button>
                                            <button type="button"
                                                    class="btn btn-outline-danger button-list-order" onclick="deleteCampaign({{ $row->adscampaign_id }})" data-target="#deleteCampaignConfirm" data-toggle="modal">Delete</button>
                                    </div>
                                </div>
                            </td>
                          </tr>
                          @empty
                          <tr>
                              <td>Tidak ada data</td>
                              <td>Tidak ada data</td>
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
                @endforeach
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
<script src="{{ asset('assets/js/custom.js') }}"></script>

<!-- modal untuk delete campaign -->
<div class="modal fade" tabindex="-1" role="dialog" id="deleteCampaignConfirm">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Delete Campaign</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>Apakah anda yakin ingin menghapus Campaign ini?</p>
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

<!-- modal untuk melihat notes -->
<div class="modal fade" tabindex="-1" role="dialog" id="viewNotes">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">View Notes</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-6">
                        <div class="form-group" id="detailNotes">

                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer bg-whitesmoke br">
                <button type="button" class="btn btn-outline-primary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<script>
    $(document).ready(function() {
    $('.table').DataTable( {
        'paging' : false,
        'lengthChange' : false,
        'searching' : false,
        'ordering' : [[ 1, "asc" ]],
        'order': [[ 1, "asc" ]],
        'autoWidth' : false,
        'info' : false,
        'scrollx' : false

    } );
} );
</script>
<script>
    $("table").dataTable();

    function deleteCampaign(idCampaign) {
        var id = idCampaign;
        var url = '{{ route("deleteCampaign", ":id") }}';
        url = url.replace(':id', id);
        $("#deleteForm").attr('action', url);
    }

    function deleteSubmit() {
         $("#deleteForm").submit();
    }
</script>

@endsection

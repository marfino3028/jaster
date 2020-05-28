@section('title', 'List Antrian Transfer')

@section('csslibraries')
@php
 $totalsaldoA = DB::table('ads_campaigns')->leftjoin('ads_transfers', 'ads_campaigns.adscampaign_id', 'ads_transfers.adscampaign_id')->where('transfered', 0)->where('adsakun_id','=', 1)->sum('saldo_transfer');
                    $totalsaldoB = DB::table('ads_campaigns')->leftjoin('ads_transfers', 'ads_campaigns.adscampaign_id', 'ads_transfers.adscampaign_id')->where('transfered', 0)->where('adsakun_id','=', 2)->sum('saldo_transfer');
                    $rumusa = $totalsaldoA * 10/100;
                    $totalfixsaldoA = $totalsaldoA + $rumusa;
                    $rumusb = $totalsaldoB * 10/100;
                    $totalfixsaldoB = $totalsaldoB + $rumusb;
@endphp
@parent
<link rel="stylesheet" href="{{ asset('assets/modules/datatables/datatables.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/modules/datatables/DataTables-1.10.16/css/dataTables.bootstrap4.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/modules/datatables/Select-1.2.4/css/select.bootstrap4.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/css/custom.css') }}">
@endsection

@extends('backend.master')

@section('content')
<div class="section-header">
    <h1>List Antrian</h1>
    <div class="section-header-breadcrumb">
        <div class="breadcrumb-item"><a href="#">Antri TF</a></div>
        <div class="breadcrumb-item active"><a href="#">List Antrian</a></div>
    </div>
</div>
<div class="section-body">
    <h2 class="section-title">List Antrian Transfer</h2>
    <p class="section-lead">This page is just an example for you to create your own page.</p>
    <div class="row">
        <div class="col-12">
              <div class="totals">
                  <span class="akuns">
                      Akun A
                  </span>
                  <br>
                  <span class="digit">
                      Rp. {{ number_format($totalfixsaldoA,0,',','.') }}-,
                  </span>
                  <br>
                  <p class="rumus"> Rp. {{ number_format($totalsaldoA,0,',','.') }}-, x 10%</p>
              </div>

              <div class="totals">
                  <span class="akuns">
                      Akun B
                  </span><br>
                  <span class="digit">
                      Rp. {{ number_format($totalfixsaldoB,0,',','.') }}-,
                  </span><br>
                  <p class="rumus">Rp. {{ number_format($totalsaldoB,0,',','.') }}-, x 10%</p>
              </div>
        </div>
          </div>
              <div class="col-12">
                <div class="card">
                  <div class="card-body">
                    <div class="table-responsive">
                      <table id="ordertable" class="table table-striped">
                        <thead>
                          <tr>
                            <th>#</th>
                            <th>Nama</th>
                            <th>Akun</th>
                            <th>Saldo</th>
                            <th>Tanggal Transfer</th>
                            <th>Action</th>
                          </tr>
                        </thead>
                        <tbody>
                            @php $no = 1; @endphp
                            @forelse ($listTransfer as $row)
                          <tr>
                            <td>{{ $no++ }}</td>
                            <td>{{ $row->nama_customer }}</td>
                            <td>{{ $row->nama_akun }}</td>
                            <td>Rp. {{ number_format($row->saldo_transfer, '0', ',', '.') }}</td>
                            <td>{{ $row->tanggal_transfer }}</td>
                            <td>
                                <div class="form-inline">
                                    <div class="form-group">
                                        <a href="{{route('editTransfer', ['id' => $row->adstransfer_id])}}"
                                            class="btn btn-outline-primary button-list-order">Edit</a>
                                    </div>
                                    <div class="form-group">
                                        <button type="button"
                                            id="deleteTf" class="btn btn-outline-info button-list-order"
                                            data-toggle="modal"
                                            data-target="#transfered"
                                            data-id="{{ $row->adstransfer_id }}"
                                            data-cpid="{{ $row->adscampaign_id }}"
                                            data-saldo="{{ $row->saldo_transfer }}">Transfered</button>
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
<script src="{{ asset('assets/js/custom.js') }}"></script>
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

<!-- modal untuk delete transfered -->
<div class="modal fade" tabindex="-1" role="dialog" id="transfered">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Transfered</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>Apakah anda yakin sudah di transfer ke Google?</p>
            </div>
            <div class="modal-footer bg-whitesmoke br">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-danger" onclick="deleteTransfered('{{ url('/') }}')" data-dismiss="modal">Yes</button>
            </div>
        </div>
    </div>
</div>
@endsection

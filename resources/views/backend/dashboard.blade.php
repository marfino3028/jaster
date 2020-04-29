@extends('backend.master')
@section('title', 'Dashboard')
@section('content')
<div class="section-header">
    <h1>Dashboard</h1>
    <div class="section-header-breadcrumb">
        <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
    </div>
</div>

<div class="section-body">
    <h2 class="section-title">Selamat Datang di Dashboard JasterMedia!</h2>
    <p class="section-lead">This page is just an example for you to create your own page.</p>
    <div class="row">
        <div class="col-6">
        <div class="card">
                  <div class="card-header">
                    <h4>Catatan</h4>
                  </div>
                  <div class="card-body">
                    <div id="accordion">
                    @foreach ($listNotes as $catat)
                      <div class="accordion">
                        <div class="accordion-header" role="button" data-toggle="collapse" data-target="#panel-body-{{ $catat->id }}" aria-expanded="false">
                          <span>Dari <b>{{ $catat->name }}</b></span>
                        </div>
                        <div class="accordion-body collapse" id="panel-body-{{ $catat->id }}" data-parent="#accordion">
                        @php echo($catat->catatan) @endphp
                        </div>
                      </div>
                    @endforeach
                    </div>
                  </div>
                </div>
        </div>
    </div>
</div>
@endsection

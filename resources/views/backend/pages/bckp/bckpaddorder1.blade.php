@section('title', 'Add Order')

@section('csslibraries')
@parent
<link rel="stylesheet" href="{{ asset('assets/modules/bootstrap-daterangepicker/daterangepicker.css') }}">
<link rel="stylesheet" href="{{ asset('assets/modules/bootstrap-colorpicker/dist/css/bootstrap-colorpicker.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/modules/select2/dist/css/select2.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/modules/jquery-selectric/selectric.css') }}">
<link rel="stylesheet" href="{{ asset('assets/modules/bootstrap-timepicker/css/bootstrap-timepicker.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/modules/bootstrap-tagsinput/dist/bootstrap-tagsinput.css') }}">
<link rel="stylesheet" href="{{ asset('assets/modules/summernote/summernote-bs4.css') }}">

@endsection

@extends('backend.master')

@section('content')
<div class="section-header"> <!-- done -->
        <h1>Add Order</h1>
        <div class="section-header-breadcrumb">
            <div class="breadcrumb-item"><a href="#">Orders</a></div>
          <div class="breadcrumb-item active"><a href="#">Add Order</a></div>
        </div>
      </div>

      <div class="section-body">
        <h2 class="section-title">Add Order</h2>
        <p class="section-lead">Tambahkan Ordernya dibawah</p>
        <form method="post" action="{{ route('addOrder') }}" class="needs-validation" novalidate="">


            <!-- table kiri atas -->
        <div class="row">
          <div class="col-8 col-md-5 col-lg-5">
            <div class="card">
              <div class="card-header">
                <font color="white" weight="bold"><h3>Personal Company</h3> </font>
              </div>
              <div class="card-body col-md-12">
                @csrf
                <div class="table-responsive-lg ">
                  <table class="table table-md">
                    <tr >
                      <td>
                        <div class="form-group ">
                        <label>Nama </label>
                        <input type="text" class="form-control col-md-8" name="nama_order">
                        <div class="invalid-feedback">
                            Input Nama bosz!
                        </div>
                    </div>
                </td>
                <td>
                    <div class="form-group">
                        <label>Brand / Nama Usaha </label>
                        <input type="text" class="form-control col-md-8" name="nama_order">
                        <div class="invalid-feedback">
                            Input Nama usaha!
                        </div>
                    </td>
                    </tr>
                    <tr>
                      <td>
                        <div class="form-group">
                            <label>Nomer WA </label>
                            <input type="number" class="form-control col-md-8" name="no_wa">
                            <div class="invalid-feedback">
                               Input Nomer WA
                            </div>
                        </div>
                      </td>
                      <td>
                        <div class="form-group">
                            <label>Email </label>
                            <input type="email" class="form-control col-md-8" name="email">
                            <div class="invalid-feedback">
                                Input Email
                            </div>
                        </div>
                      </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="form-group">
                                <label>Jabatan </label>
                                <input type="text" class="form-control col-md-8" name="jabatan">
                                <div class="invalid-feedback">
                                   Input jabatan
                                </div>
                            </div>
                          </td>
                          <td>
                            <div class="form-group">
                                <label>alamat </label>
                                <input type="text" class="form-control col-md-8" name="alamat">
                                <div class="invalid-feedback">
                                    Input alamat
                                </div>
                            </div>
                          </td>
                    </tr>

                  </table>
                </div>
              </div>

            </div>
          </div>


    <!-- tabel kanan atas -->
          <div class="col-12 col-md-6 col-lg-6">
            <div class="card">
              <div class="card-header">
                <h4>Full Width</h4>
              </div>
            <div class="card-body col-md-12">
                @csrf
                <div class="table-responsive">
                  <table class="table table-md">
                    <tr rowspan="8">
                      <td>
                        <div class="form-group">
                        <label>Domain </label>
                        <input type="text" class="form-control col-md-8" name="domain">
                        <div class="invalid-feedback">
                            Input Domain!
                        </div>
                    </div>
                </td>
                <td>
                    <div class="form-group">
                        <label>Data </label>
                        <input type="text" class="form-control col-md-8" name="nama_order">
                        <div class="invalid-feedback">
                            Input Data!
                        </div>
                    </td>
                    <td>
                        <div class="form-group">
                            <label>Data </label>
                            <input type="text" class="form-control col-md-8" name="nama_order">
                            <div class="invalid-feedback">
                                Input Data!
                            </div>
                        </td>
                    </tr>

                    <tr>
                      <td>
                        <div class="form-group">
                            <label>Color </label>
                            <input type="number" class="form-control col-md-8" name="color">
                            <div class="invalid-feedback">
                               Input Color
                            </div>
                        </div>
                      </td>
                      <td>
                        <div class="form-group">
                            <label>Tipe Post </label>
                            <input type="email" class="form-control col-md-8" name="tipe">
                            <div class="invalid-feedback">
                                Input Tipe Post
                            </div>
                        </div>
                      </td>
                      <td>
                        <div class="form-group">
                            <label>Password </label>
                            <input type="email" class="form-control col-md-8" name="password">
                            <div class="invalid-feedback">
                                Input Password
                            </div>
                        </div>
                      </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="form-group">
                                <label>Logo </label>
                                <input type="text" class="form-control col-md-8" name="jabatan">
                                <div class="invalid-feedback">
                                   Input logo
                                </div>
                            </div>
                          </td>
                          <td>
                            <div class="form-group">
                                <label>Target </label>
                                <input type="text" class="form-control col-md-8" name="alamat">
                                <div class="invalid-feedback">
                                    Input target
                                </div>
                            </div>
                          </td>
                          <td>
                            <div class="form-group">
                                <label>Request </label>
                                <input type="text" class="form-control col-md-8" name="alamat">
                                <div class="invalid-feedback">
                                    Input request
                                </div>
                            </div>
                          </td>
                    </tr>

                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
<!-- table bawah -->
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h4>Advanced Table</h4>
                <div class="card-header-form">
                  <form>
                    <div class="input-group">
                      <input type="text" class="form-control" placeholder="Search">
                      <div class="input-group-btn">
                        <button class="btn btn-primary"><i class="fas fa-search"></i></button>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
              <div class="card-body p-0">
                <div class="table-responsive table-bordered">
                  <table class="table table-striped">
                    <tr>
                      <th>
                        <div class="custom-checkbox custom-control">
                          <input type="checkbox" data-checkboxes="mygroup" data-checkbox-role="dad" class="custom-control-input" id="checkbox-all">
                          <label for="checkbox-all" class="custom-control-label">&nbsp;</label>
                        </div>
                      </th>
                      <th>Task Name</th>
                      <th>Progress</th>
                      <th>Members</th>
                      <th>Due Date</th>
                      <th>Status</th>
                      <th>Action</th>
                    </tr>
                    <tr>
                      <td class="p-0 text-center">
                        <div class="custom-checkbox custom-control">
                          <input type="checkbox" data-checkboxes="mygroup" class="custom-control-input" id="checkbox-1">
                          <label for="checkbox-1" class="custom-control-label">&nbsp;</label>
                        </div>
                      </td>
                      <td>Create a mobile app</td>
                      <td class="align-middle">
                        <div class="progress" data-height="4" data-toggle="tooltip" title="100%">
                          <div class="progress-bar bg-success" data-width="100"></div>
                        </div>
                      </td>
                      <td>
                        <img alt="image" src="../assets/img/avatar/avatar-5.png" class="rounded-circle" width="35" data-toggle="tooltip" title="Wildan Ahdian">
                      </td>
                      <td>2018-01-20</td>
                      <td><div class="badge badge-success">Completed</div></td>
                      <td><a href="#" class="btn btn-secondary">Detail</a></td>
                    </tr>
                    <tr>
                      <td class="p-0 text-center">
                        <div class="custom-checkbox custom-control">
                          <input type="checkbox" data-checkboxes="mygroup" class="custom-control-input" id="checkbox-2">
                          <label for="checkbox-2" class="custom-control-label">&nbsp;</label>
                        </div>
                      </td>
                      <td>Redesign homepage</td>
                      <td class="align-middle">
                        <div class="progress" data-height="4" data-toggle="tooltip" title="0%">
                          <div class="progress-bar" data-width="0"></div>
                        </div>
                      </td>
                      <td>
                        <img alt="image" src="../assets/img/avatar/avatar-1.png" class="rounded-circle" width="35" data-toggle="tooltip" title="Nur Alpiana">
                        <img alt="image" src="../assets/img/avatar/avatar-3.png" class="rounded-circle" width="35" data-toggle="tooltip" title="Hariono Yusup">
                        <img alt="image" src="../assets/img/avatar/avatar-4.png" class="rounded-circle" width="35" data-toggle="tooltip" title="Bagus Dwi Cahya">
                      </td>
                      <td>2018-04-10</td>
                      <td><div class="badge badge-info">Todo</div></td>
                      <td><a href="#" class="btn btn-secondary">Detail</a></td>
                    </tr>
                    <tr>
                      <td class="p-0 text-center">
                        <div class="custom-checkbox custom-control">
                          <input type="checkbox" data-checkboxes="mygroup" class="custom-control-input" id="checkbox-3">
                          <label for="checkbox-3" class="custom-control-label">&nbsp;</label>
                        </div>
                      </td>
                      <td>Backup database</td>
                      <td class="align-middle">
                        <div class="progress" data-height="4" data-toggle="tooltip" title="70%">
                          <div class="progress-bar bg-warning" data-width="70"></div>
                        </div>
                      </td>
                      <td>
                        <img alt="image" src="../assets/img/avatar/avatar-1.png" class="rounded-circle" width="35" data-toggle="tooltip" title="Rizal Fakhri">
                        <img alt="image" src="../assets/img/avatar/avatar-2.png" class="rounded-circle" width="35" data-toggle="tooltip" title="Hasan Basri">
                      </td>
                      <td>2018-01-29</td>
                      <td><div class="badge badge-warning">In Progress</div></td>
                      <td><a href="#" class="btn btn-secondary">Detail</a></td>
                    </tr>
                    <tr>
                      <td class="p-0 text-center">
                        <div class="custom-checkbox custom-control">
                          <input type="checkbox" data-checkboxes="mygroup" class="custom-control-input" id="checkbox-4">
                          <label for="checkbox-4" class="custom-control-label">&nbsp;</label>
                        </div>
                      </td>
                      <td>Input data</td>
                      <td class="align-middle">
                        <div class="progress" data-height="4" data-toggle="tooltip" title="100%">
                          <div class="progress-bar bg-success" data-width="100"></div>
                        </div>
                      </td>
                      <td>
                        <img alt="image" src="../assets/img/avatar/avatar-2.png" class="rounded-circle" width="35" data-toggle="tooltip" title="Rizal Fakhri">
                        <img alt="image" src="../assets/img/avatar/avatar-5.png" class="rounded-circle" width="35" data-toggle="tooltip" title="Isnap Kiswandi">
                        <img alt="image" src="../assets/img/avatar/avatar-4.png" class="rounded-circle" width="35" data-toggle="tooltip" title="Yudi Nawawi">
                        <img alt="image" src="../assets/img/avatar/avatar-1.png" class="rounded-circle" width="35" data-toggle="tooltip" title="Khaerul Anwar">
                      </td>
                      <td>2018-01-16</td>
                      <td><div class="badge badge-success">Completed</div></td>
                      <td><a href="#" class="btn btn-secondary">Detail</a></td>
                    </tr>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
        </form>
      </div>
    </section>
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
<script src="{{ asset('assets/modules/summernote/summernote-bs4.js') }}"></script>
<script>

    $(".colorpickerinput").colorpicker({
        format: 'hex',
        component: '.input-group-append',
    });

</script>
@endsection

@extends('backend.master')

@section('title', 'Deadline')

@section('csslibraries')
@parent
<link rel="stylesheet" href="{{ asset('assets/modules/fullcalendar/fullcalendar.min.css') }}">
@endsection

@section('content')

<div class="section-header">
            <h1>Deadline</h1>
            <div class="section-header-breadcrumb">
              <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
              <div class="breadcrumb-item">Deadline</div>
            </div>
          </div>

          <div class="section-body">
            <h2 class="section-title">Deadline</h2>
            <p class="section-lead">
              List deadline semua order yang aktif</a>.
            </p>

            <div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="card-header">
                    <h4>Calendar</h4>
                  </div>
                  <div class="card-body">
                    <div class="fc-overflow">                            
                      <div id="myEvent"></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

@endsection

@section('jslibraries')
@parent
<script src="{{ asset('assets/modules/fullcalendar/fullcalendar.min.js') }}"></script>
<script>
  var data = $.parseJSON($.ajax({
        url:  '{{ route('listDeadline') }}',
        dataType: "json",
        async: false
    }).responseText);

    $("#myEvent").fullCalendar({
  height: 'auto',
  header: {
    left: 'prev,next today',
    center: 'title',
    right: 'month,agendaWeek,agendaDay,listWeek'
  },
  editable: false,
  events: data

});
</script>
@endsection
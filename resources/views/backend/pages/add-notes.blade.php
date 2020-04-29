@section('title', 'Add Notes')

@section('csslibraries')
@parent

@endsection

@extends('backend.master')

@section('content')
<div class="section-header">
    <h1>Add Notes</h1>
    <div class="section-header-breadcrumb">
        <div class="breadcrumb-item"><a href="#">Notes</a></div>
        <div class="breadcrumb-item active"><a href="#">Add Notes</a></div>
    </div>
</div>
<div class="section-body">
    <h2 class="section-title">Add Notes to User</h2>
    <p class="section-lead">This page is just an example for you to create your own page.</p>
    <form method="post" action="{{ route('storeUserNotes') }}" class="needs-validation" novalidate="">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    @csrf
                    <div class="col-12">
                        <div class="form-group">
                            <label>Kirim ke</label>
                            <select id="nerima" class="form-control" name="penerima">
                                <option value="">None</option>
                                @foreach ($listUser as $key)
                                <option value="{{ $key->id }}">{{ $key->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Catatan</label>
                            <textarea name="catatan" id="notes"></textarea>
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
<script src="https://cdn.tiny.cloud/1/ubaylt88d66o8ewdhmw9upizv7g1fbhcunbyhvdfoc5hcnek/tinymce/5/tinymce.min.js"></script>
<script src="{{ asset('js/tinyce.js') }}"></script>
<script>
    
    // console.log(lihatNote)
    $('document').ready(function () {
    
    $('#nerima').on('change', function () {
        var selectedUserSend = $(this).children("option:selected").val();
        var lihatNote = [@php for($i = 0; $i < count($listNotes); $i++) { echo $listNotes[$i]->toJson(); if ($i + 1 < count($listNotes)) { echo ','; } } @endphp]
        var editor = tinymce.get('notes');
        var content = editor.getContent();
        editor.setContent("");
        
        lihatNote.forEach(function (item, index) {
            if (selectedUserSend == item.receiver_id && {{ Auth::user()->id }} == item.user_id ) {
                editor.setContent(item.catatan)
            }
        })
    })
    
    })
</script>
@endsection

@extends('backend.master')
@section('title', 'Dashboard')
@section('content')
<div class="section-body">
    <widgetbot
        server="603694438274957458"
        channel="603694438287540231"
        width="1050"
        height="500"
        shard="https://disweb.deploys.io">
    </widgetbot>
</div>
@endsection

@section('jslibraries')
@parent
<script src="https://cdn.jsdelivr.net/npm/@widgetbot/html-embed"></script>
@endsection
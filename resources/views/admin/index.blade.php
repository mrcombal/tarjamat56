@extends('admin.master')

@section('title', 'Tarjamat')
@section('title2', 'Tarjamat Admin Panel')

@section('style')
    <link rel="stylesheet" type="text/css" href="{{asset('plugins/toastr/toastr.min.css')}}">
@stop

@section('breadcrumps')
    <p class="text-muted mb-0">{{date("l, d F Y")}}</p>
@stop

@section('content')

@stop

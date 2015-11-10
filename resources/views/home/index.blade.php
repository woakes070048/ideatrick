@extends('themes.main')

@section('banner')
    @include('home._banner')
@stop

@section('navbar')
    @include('home._topbar')
@stop

@section('content')
@include('dashboard.admin._logoutmodal')
@stop

@extends('themes.main')

@section('navbar')
    @include('home._topbar')
@stop

@section('content')
<h1>So This is the content?</h1>
@include('dashboard.admin._logoutmodal')
@stop

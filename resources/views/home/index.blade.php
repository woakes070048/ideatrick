@extends('themes.main')

@section('banner')
    @include('home._banner')
@stop

@section('navbar')
    @include('home._topbar')
@stop

@section('content')
<div class="uk-container">
	<div class="navbar no-radius white">
	Aloha
	</div>
	<div class="uk-grid">
	<div class="uk-width-1-3">...</div>
    <div class="uk-width-1-3">...</div>
    <div class="uk-width-1-3">...</div>
    </div>
</div>
@include('dashboard.admin._logoutmodal')
@stop

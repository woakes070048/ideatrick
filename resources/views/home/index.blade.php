@extends('themes.main')

@section('content')
    @include('home._topbar')
	@include('home._banner')
	@include('home._content')
	@include('home._community')
	@include('home._connect')
	@include('home._partner')
	@include('home._modallogin')
	@include('home._nearevent')
@stop

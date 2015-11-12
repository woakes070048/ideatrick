@extends('themes.backstage')
@section('menu')
    @include('dashboard.admin._menuaside')
@endsection

@section('navbar')
    @include('dashboard.admin._navbar')
@endsection

@section('content')
    <h3 class="no-margin">Content</h3>
@endsection

@section('chatmodal')
    @include('dashboard.admin._userchatmodal')
    @include('dashboard.admin._chatdetailmodal')
    @include('dashboard.admin._logoutmodal')
@endsection

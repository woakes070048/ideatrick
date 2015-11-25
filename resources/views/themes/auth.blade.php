<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <title></title>
  <meta name="description" content="app, web app, responsive, responsive layout, admin, admin panel, admin dashboard, flat, flat ui, ui kit, AngularJS, ui route, charts, widgets, components" />
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />

  
  <link rel="stylesheet" href="{{ asset('assets/css/font.css') }}" type="text/css">
  <link rel="stylesheet" href="{{ asset('assets/bower_components/animate.css/animate.css') }}" type="text/css">
  <link rel="stylesheet" href="{{ asset('assets/bower_components/Waves/dist/waves.css') }}" type="text/css">
  <link rel="stylesheet" href="{{ asset('assets/bower_components/uikit/css/uikits.css') }}" type="text/css">

  <link rel="stylesheet" href="{{ asset('assets/css/material-design-icons.css') }}" type="text/css">
  <link rel="stylesheet" href="{{ asset('assets/bower_components/bootstrap/dist/css/bootstrap.css') }}" type="text/css">
  <link rel="stylesheet" href="{{ asset('assets/css/app.css') }}" type="text/css">

</head>
<body>

<div class="app uk-modal-page">
  <div class="center-block w-xxl w-auto-xs p-v-md">
    <div class="navbar">
      <div class="navbar-brand m-t-lg text-center">
        <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 100 100" enable-background="new 0 0 100 100" xml:space="preserve" style="width: 24px; height: 24px;">
          <path d="M 50 0 L 100 14 L 92 80 Z" fill="rgba(139, 195, 74, 0.5)"></path>
          <path d="M 92 80 L 50 0 L 50 100 Z" fill="rgba(139, 195, 74, 0.8)"></path>
          <path d="M 8 80 L 50 0 L 50 100 Z" fill="#fff"></path>
          <path d="M 50 0 L 8 80 L 0 14 Z" fill="rgba(255, 255, 255, 0.6)"></path>
        </svg>
        <a href="/"><span class="m-l inline">{{Lang::get('titles.app')}}</span></a>
      </div>
    </div>

    @yield('content')

</div>

<script src="{{ asset('assets/bower_components/jquery/dist/jquery.js') }}"></script>
<script src="{{ asset('assets/bower_components/bootstrap/dist/js/bootstrap.js') }}"></script>
<script src="{{ asset('assets/bower_components/Waves/dist/waves.js') }}"></script>
<script src="{{ asset('assets/bower_components/uikit/js/uikit.js') }}"></script>

<script src="{{ asset('assets/js/function.js') }}"></script>
<script src="{{ asset('assets/js/vendor.js') }}"></script>

</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <title>{{Lang::get('titles.app')}}</title>
    <meta name="description" content="The biggest event portal in the world, find everything you need to kick up and trick your idea." />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0" />

    <link rel="stylesheet" href="{{ asset('assets/bower_components/animate.css/animate.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('assets/bower_components/Waves/dist/waves.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('assets/bower_components/font-awesome/css/font-awesome.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('assets/backstage/css/material-design-icons.css') }}" type="text/css">

    <link rel="stylesheet" href="{{ asset('assets/bower_components/bootstrap/dist/css/bootstrap.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('assets/backstage/css/font.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('assets/backstage/css/app.css') }}" type="text/css">

</head>
<body>
<div class="app">
    @yield('menu')
    <div id="content" class="app-content" role="main">
    <div class="box">
        @yield('navbar')
    <div class="box-row">
        <div class="box-cell">
            <div class="box-inner padding">
                @yield('content')
                vex.dialog.alert 'Thanks for checking out Vex!'
            </div>
        </div>
    </div>

    </div>
    </div>
    @yield('chatmodal')
</div>

<script src="{{ asset('assets/bower_components/jquery/dist/jquery.js') }}"></script>
<script src="{{ asset('assets/bower_components/bootstrap/dist/js/bootstrap.js') }}"></script>
<script src="{{ asset('assets/bower_components/Waves/dist/waves.js') }}"></script>

<script src="{{ asset('assets/backstage/js/function.js') }}"></script>
<script src="{{ asset('assets/backstage/js/ui-load.js') }}"></script>
<script src="{{ asset('assets/backstage/js/ui-jp.config.js') }}"></script>
<script src="{{ asset('assets/backstage/js/ui-jp.js') }}"></script>
<script src="{{ asset('assets/backstage/js/ui-nav.js') }}"></script>
<script src="{{ asset('assets/backstage/js/ui-toggle.js') }}"></script>
<script src="{{ asset('assets/backstage/js/ui-form.js') }}"></script>
<script src="{{ asset('assets/backstage/js/ui-waves.js') }}"></script>
<script src="{{ asset('assets/backstage/js/ui-client.js') }}"></script>

</body>
</html>

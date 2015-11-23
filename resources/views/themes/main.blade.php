<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0"> 

<title>{!! $title !!}</title>

<meta name="google-site-verification" content="l0arpiu9mpG8i0WoGvaLhovtZAjQmQNal7CGL8ToAN0" />

<!-- Open Graph data -->
<meta property="og:url" content='https://ideatrick.com' />
<meta property="og:title" content="The Biggest Event Portal" />
<meta property="og:image" content='' />
<meta property="og:description" content="The biggest event portal in the world, find everything you need to kick up and trick your idea." />

<meta name="description" content="The biggest event portal in the world, find everything you need to kick up and trick your idea.">
<meta name="author" content="PT Rayakan Niaga Global">
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- Twitter Card data -->
<meta name="twitter:title" content="The Biggest Event Portal">
<meta name="twitter:description" content="The biggest event portal in the world, find everything you need to kick up and trick your idea.">
<meta name="twitter:image" content=''>

<script src="{{ asset('assets/bower_components/modernizr/modernizr.js') }}"></script>
<link rel="stylesheet" href="{{ asset('assets/general/css/font.css') }}" type="text/css">
<link rel="stylesheet" href="{{ asset('assets/bower_components/uikit/css/uikit.css') }}">
<link rel="stylesheet" href="{{ asset('assets/bower_components/animate.css/animate.css') }}" type="text/css">
<link rel="stylesheet" href="{{ asset('assets/bower_components/Waves/dist/waves.css') }}" type="text/css">
<link rel="stylesheet" href="{{ asset('assets/bower_components/font-awesome/css/font-awesome.css') }}" type="text/css">
<link rel="stylesheet" href="{{ asset('assets/general/css/material-design-icons.css') }}" type="text/css">
<link rel="stylesheet" href="{{ asset('assets/bower_components/bootstrap/dist/css/bootstrap.css') }}" type="text/css">
<link rel="stylesheet" href="{{ asset('assets/bower_components/slick-carousel/slick/slick.css') }}" type="text/css">
<link rel="stylesheet" href="{{ asset('assets/bower_components/slick-carousel/slick/slick-theme.css') }}" type="text/css">
<link rel="stylesheet" href="{{ asset('assets/general/css/app.css') }}" type="text/css">
<link rel="stylesheet" href="{{ asset('assets/general/css/home.css') }}" type="text/css">

<link rel="icon" type="image/png" href="{{ asset('favicon.ico') }}">

</head>
<body>

<div class="app">

    	<div class="box ng-scope">
                @yield('content')
    	</div>
</div>

<script src="{{ asset('assets/bower_components/jquery/dist/jquery.js') }}"></script>
<script src="{{ asset('assets/bower_components/bootstrap/dist/js/bootstrap.js') }}"></script>
<script src="{{ asset('assets/bower_components/Waves/dist/waves.js') }}"></script>
<script src="{{ asset('assets/bower_components/uikit/js/uikit.js') }}"></script>
<script src="{{ asset('assets/bower_components/slick-carousel/slick/slick.js') }}"></script>

<script src="{{ asset('assets/general/js/function.js') }}"></script>
<script src="{{ asset('assets/general/js/ui-load.js') }}"></script>
<script src="{{ asset('assets/general/js/ui-jp.config.js') }}"></script>
<script src="{{ asset('assets/general/js/ui-jp.js') }}"></script>
<script src="{{ asset('assets/general/js/ui-nav.js') }}"></script>
<script src="{{ asset('assets/general/js/ui-toggle.js') }}"></script>
<script src="{{ asset('assets/general/js/ui-form.js') }}"></script>
<script src="{{ asset('assets/general/js/ui-waves.js') }}"></script>
<script src="{{ asset('assets/general/js/ui-client.js') }}"></script>

</body>
</html>
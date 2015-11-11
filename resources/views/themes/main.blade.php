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

<link rel="stylesheet" href="{{ asset('assets/general/css/font.css') }}" type="text/css">
<link rel="stylesheet" href="{{ asset('assets/bower_components/uikit/css/uikit.css') }}">
<link rel="stylesheet" href="{{ asset('assets/bower_components/animate.css/animate.css') }}" type="text/css">
<link rel="stylesheet" href="{{ asset('assets/bower_components/Waves/dist/waves.css') }}" type="text/css">
<link rel="stylesheet" href="{{ asset('assets/bower_components/font-awesome/css/font-awesome.css') }}" type="text/css">
<link rel="stylesheet" href="{{ asset('assets/general/css/material-design-icons.css') }}" type="text/css">
<link rel="stylesheet" href="{{ asset('assets/bower_components/bootstrap/dist/css/bootstrap.css') }}" type="text/css">
<link rel="stylesheet" href="{{ asset('assets/general/css/app.css') }}" type="text/css">
<link rel="stylesheet" href="{{ asset('/assets/general/css/home.css') }}" type="text/css">
<link rel="icon" type="image/png" href="{{ asset('favicon.ico') }}">

</head>

<body>
<div class="app">

    	<div class="box">
    		
            @yield('navbar')
            @yield('banner')
            <div class="uk-container-center">
            <div class="md-whiteframe-z0 bg-white">
                <ul class="nav nav-lines nav-tabs nav-justified">
                    <li class="active">
                        <a href="" data-toggle="tab" data-target="#menu1" aria-expanded="true">Pages</a>
                    </li>
                    <li class="">
                        <a href="" data-toggle="tab" data-target="#menu2" aria-expanded="false">Components <span class="badge bg-info badge-xs">5</span></a>
                    </li>
                    <li class="">
                        <a href="" data-toggle="tab" data-target="#menu3" aria-expanded="false">UI Kits</a>
                    </li>
                </ul>
            
                <div class="tab-content p m-b-md clear b-t b-t-2x">
                    <div role="tabpanel" class="tab-pane animated fadeInDown active" id="tab_7">
                        Reprehenderit butcher retro keffiyeh dreamcatcher synth. Cosby sweater eu banh mi, qui irure terry richardson ex squid. Aliquip placeat salvia cillum iphone. Seitan aliquip quis cardigan american apparel, butcher voluptate nisi qui.
                    </div>

                    <div role="tabpanel" class="tab-pane animated fadeInDown" id="tab_8">
                         Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica. Reprehenderit butcher retro keffiyeh dreamcatcher synth. Cosby sweater eu banh mi, qui irure terry richardson ex squid. Aliquip placeat salvia cillum iphone. Seitan aliquip quis cardigan american apparel, butcher voluptate nisi qui.
                    </div>

                    <div role="tabpanel" class="tab-pane animated fadeInDown" id="tab_9">
                        Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica. Reprehenderit butcher.
                    </div>
                </div>
            </div>
            </div>

            @yield('content')

    	</div>

</div>

<script src="{{ asset('assets/bower_components/jquery/dist/jquery.js') }}"></script>
<script src="{{ asset('assets/bower_components/bootstrap/dist/js/bootstrap.js') }}"></script>
<script src="{{ asset('assets/bower_components/Waves/dist/waves.js') }}"></script>
<script src="{{ asset('assets/bower_components/uikit/js/uikit.js') }}"></script>

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

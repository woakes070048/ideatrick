<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>{!! $title !!}</title>

<meta name="google-site-verification" content="l0arpiu9mpG8i0WoGvaLhovtZAjQmQNal7CGL8ToAN0" />

<!-- Open Graph data -->
<meta property="og:url" content='https://marketindie.com' />
<meta property="og:title" content="Marketplace Produk Lokal Indonesia Berkualitas Dunia" />
<meta property="og:image" content='' />
<meta property="og:description" content="Situs jual beli online untuk produk lokal Indonesia berkualitas seperti fashion, aksesoris, makanan, minuman, musik, interior dan produk lokal berkualitas lainnya." />

<meta name="description" content="Situs jual beli online untuk produk lokal Indonesia berkualitas seperti fashion, aksesoris, makanan, minuman, musik, interior dan produk lokal berkualitas lainnya.">
<meta name="author" content="PT Rayakan Niaga Global">
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- Twitter Card data -->
<meta name="twitter:title" content="Marketplace Produk Lokal Indonesia Berkualitas Dunia">
<meta name="twitter:description" content="Situs jual beli online untuk produk lokal Indonesia berkualitas seperti fashion, aksesoris, makanan, minuman, musik, interior dan produk lokal berkualitas lainnya.">
<meta name="twitter:image" content=''>

<link href='//fonts.googleapis.com/css?family=Varela+Round' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="{{ asset('assets/bower_components/uikit/css/uikit.css') }}">

<link rel="icon" type="image/png" href="{{ asset('favicon.ico') }}">

</head>

<body>
    <div class="uk-container">
            @yield('content')

        @yield('footer')
    </div>

<script src="{{ asset('assets/bower_components/jquery/dist/jquery.js') }}"></script>
<script src="{{ asset('assets/bower_components/uikit/js/uikit.js') }}"></script>
</body>
</html>

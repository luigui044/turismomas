<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" type="image/png" href="{{ asset('/img/favicon.png') }}" />
    <link rel="shortcut icon" sizes="192x192" href="{{ asset('/img/favicon.png') }}">
    <title>Turismo Más – Buscador mundial de Turismo</title>
    @include('layouts.styles')
    @yield('blog-custom-css')
</head>

<body>
    <div class="container">
        @yield('content')
    </div>
    @yield('footer')

    @include('layouts.scripts')
</body>

</html>

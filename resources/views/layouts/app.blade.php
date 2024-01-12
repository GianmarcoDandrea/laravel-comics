<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="icon" type="image/svg+xml" href="{{ Vite::asset('resources/img/favicon.ico')}}" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>DC Comics</title>

    {{-- Importare la parte di js e sass tramite vite --}}
    @vite('resources/js/app.js')

    <link rel="stylesheet" href="{{ asset("fontawesome-free-6.5.1-web/css/all.min.css")}}">
</head>
<body>

    {{-- HEADER --}}
    @include('partials.header')

    <main>
        @yield('content')
    </main>

    {{-- FOOTER --}}
    @include('partials.footer')
    
</body>
</html>
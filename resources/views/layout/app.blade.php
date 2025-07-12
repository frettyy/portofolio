<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Fretty S. | @yield('title', 'Portfolio')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{ asset('css/about.css') }}">
    <link rel="stylesheet" href="{{ asset('css/service.css') }}">
    
    <!-- Preload Lucide untuk memastikan dimuat lebih awal -->
    <link rel="preload" href="https://unpkg.com/lucide@0.441.0/dist/umd/lucide.min.js" as="script">
</head>

<body>
    @include('navbar')
    @yield('content')
    <!-- Pastikan Lucide dimuat sebelum script kustom -->
    <script src="https://unpkg.com/lucide@0.441.0/dist/umd/lucide.min.js"></script>
    <script src="{{ asset('js/service.js') }}"></script>
    <script src="{{ asset('js/about.js') }}"></script>
</body>

</html>

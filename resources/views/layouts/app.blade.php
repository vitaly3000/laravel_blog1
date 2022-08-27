<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <link rel="stylesheet" href="{{ asset('build/css/index.css') }}">
</head>
<body>
    <div id="app">
        <main class="container">
            @yield('content')
        </main>
    </div>

    <script src="{{ asset('build/js/index.js') }}"></script>
</body>
</html>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'Experiencia Digital'}}</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="shortcut icon" href="{{asset('favicon.ico')}}" type="image/x-icon">
    @vite('resources/css/app.css')
    @stack('scriptsHead')
</head>
<body>
    <main>
        {{$slot}}
    </main>
    @vite('resources/js/app.js')
    @stack('scriptsBody')
</body>
</html>

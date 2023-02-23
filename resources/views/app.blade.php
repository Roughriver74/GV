<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title inertia>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap">

    <!-- Scripts -->
    <link href="https://unpkg.com/tailwindcss@0.6.6/dist/tailwind.min.css" rel="stylesheet">
    @routes
    @vite(['resources/js/app.js', "resources/js/Pages/{$page['component']}.vue", 'resources/scss/app.scss'])
    @inertiaHead
</head>

<body class="font-sans antialiased">
    @inertia
</body>

</html>

<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Personal Energy Growth</title>
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
    @fluxStyles
</head>

<body class="min-h-screen bg-white bg-zinc-100">
    @include('components.layouts.admin-header')

    <flux:main class="p-3">
        {{ $slot }}
    </flux:main>

    @fluxScripts
</body>

</html>

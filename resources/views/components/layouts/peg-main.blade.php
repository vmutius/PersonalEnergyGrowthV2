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

<body class="min-h-screen bg-white bg-neutral-100">
    @include('components.layouts.main-header')
    <flux:main container class="max-w-full">
        {{ $slot }}
    </flux:main>
    @fluxScripts
</body>

</html>

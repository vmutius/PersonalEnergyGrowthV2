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

<body class="min-h-screen bg-white">
    @include('components.layouts.main-header')

    <flux:main container>

        @include('components.layouts.hero')
        <flux:heading size="xl" level="1">Test</flux:heading>

        <flux:subheading size="lg" class="mb-6">Here's what's new today</flux:subheading>

        <flux:separator variant="subtle" />
    </flux:main>

    @fluxScripts
</body>

</html>

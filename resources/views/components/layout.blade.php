<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Cardify || {{ $title ?? 'Welcome' }}</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="d-flex flex-column min-vh-100 bg-light-blue">
    <x-header></x-header>

    <main class="flex-grow-1 pt-5">
        {{ $slot }}
    </main>

    <x-footer></x-footer>
</body>

</html>

@props(['title'])

<!DOCTYPE html>
<html lang="id" data-theme="kartini">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title }} | R.A. Kartini</title>
    @vite('resources/css/app.css')
</head>
<body class="min-h-screen flex flex-col bg-base-100 text-base-content font-sans antialiased">

    <x-navbar />

    <main class="flex-1">
        {{ $slot }}
    </main>

    <x-footer />

</body>
</html>

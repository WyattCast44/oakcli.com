<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Oak - Python CLI Framework</title>

    <!-- Styles -->
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Fraunces:wght@400;500;600;700&display=swap" rel="stylesheet">
    <livewire:styles />

    <!-- Scripts -->
    <script src="{{ mix('js/app.js') }}" defer></script>
    <livewire:scripts />
</head>
<body class="font-sans antialiased leading-none bg-yellow-100">
    @yield('body')
</body>
</html>
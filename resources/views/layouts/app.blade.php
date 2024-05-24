<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Styles -->
    @vite('resources/js/app.js')
    <title>Document</title>
</head>
<body>
    
    <!-- main -->

    @yield('content')

    <!-- footer -->

</body>
</html>
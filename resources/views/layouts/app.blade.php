<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel template</title>
    @vite ('/resources/js/app.js')
</head>
<body>
    @include('layouts.shared.header')
    
    @yield('content')
    
    @include('layouts.shared.footer')

    
    
</body>
</html>
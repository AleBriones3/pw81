<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/js/app.js'])
    <title>Práctica de Repaso 7</title>
    <style>
         body {
                background-image: url('https://wallpapertag.com/wallpaper/full/b/7/4/369315-book-background-1999x1233-computer.jpg');
                
                justify-content: space-between;
            }
    </style>
</head>
<body>
    @include('partials.nav')
    @yield('contenido')
</body>
@include('partials.footer')
</html>
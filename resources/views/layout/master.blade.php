<!doctype html>
<html lang="es">
    <head>
        <meta charset="utf-8" />
        <title>Titulo - @yield('titulo')</title>
    </head>
    <body>
        @section('header')
            Cabecera de la Web (master)
        @show
        
        <div class="container">
            @yield('content')
        </div>
        
        @section('footer')
            Pie de la web
        @show
    </body>
</html>
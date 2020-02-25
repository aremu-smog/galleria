<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="/css/app.css">
        <title>galleria</title>
        
    </head>
    <body>
        <header class="main-header row row-spread-items row-center-y">
            <div><a href="/"><img src="/img/galleria logo.svg" alt="galleria" class="logo"></a></div>
            <div>Menu Icon</div>
        </header>
        <nav class="main-navigation text-right text-white">
            <p >
                <a href="/" class="text-white">Home</a> <br>
                <a href="/gallery" class="text-white">All Galleries</a> <br>
                <a href="/gallery/create" class="text-white">Create Gallery</a> <br>
            </p>
        </nav>
            @yield('content')


        <footer class="main-footer row row-center-xy text-center  ">
            <div>&copy; Copyright {{date("Y")}}. All rights reserved <br>
                </div>
            
        </footer>
    </body>
</html>

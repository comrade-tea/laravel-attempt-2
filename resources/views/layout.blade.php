<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

        <title>@yield('title')</title>
    </head>
    <body class="pt-5">
    <div class="container">
        <nav>
            <div><a href="/">welcome</a></div>
            <div><a href="/contact">contact</a></div>
            <div><a href="/projects">projects</a></div>
            <div><a href="/projects/create">create new project</a></div>
        </nav>

        <div class="content">
            @yield('content')
        </div>
    </div>
    </body>
</html>

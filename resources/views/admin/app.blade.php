<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>
    @vite('resources/js/app.js')
</head>
<body>
    <div id="app-admin">

        <h1 style="color: black">Administração Casamento Merda Bet</h1>

        <header>
            @include('admin.layouts.header')
        </header>

        <main>
            @yield('content')
        </main>

        <footer>
            @include('admin.layouts.footer')
        </footer>
    </div>
</body>
</html>

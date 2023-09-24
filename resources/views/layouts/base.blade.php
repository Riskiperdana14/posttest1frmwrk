<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Sastream</title>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css?family=Montserrat:400,700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <link rel="stylesheet" href="css/style.css">
    </head>

    <body>
        <header>
            <div class="logo">
                <h1>Sastream</h1>
            </div>
            <nav>
                <ul class="nav-list">
                    <li><a href="/">Home</a></li>
                    <li><a href="/movies">Movies</a></li>
                    <li><a href="/series">Series</a></li>
                    <li><a href="/about">About</a></li>
                    <li><a href="/profil">Profile</a></li>
                </ul>
            </nav>
        </header>

        <main class="container">
            @yield('content')
        </main>

    </body>

</html>
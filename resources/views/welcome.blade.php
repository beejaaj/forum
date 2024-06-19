<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Inicio</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    <style>
        /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */
        html {
            line-height: 1.15;
            -webkit-text-size-adjust: 100%;
        }

        body {
            margin: 0;
            font-family: 'Nunito', sans-serif;
        }

        .container {
            max-width: 6xl;
            margin: 0 auto;
            padding: 0 20px;
        }
        

        .navbar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 20px 0;
            border-bottom: 1px solid #ddd;
        }

        .navbar ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
            display: flex;
        }

        .navbar ul li {
            margin-right: 15px;
        }

        .navbar ul li a {
            text-decoration: none;
            color: #333;
            font-size: 16px;
            font-weight: 600;
        }

        .navbar ul li a:hover {
            color: #007bff;
        }
    </style>
</head>
<body class="antialiased">
    <div class="container">
        <div class="navbar">
            <div>
                <a href="{{ url('/') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Pagina Inicial</a>
            </div>
            <div>
                <ul>
                    @auth
                        <li><a href="{{ route('ListUser', ['uid' => Auth::user()->id]) }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Perfil</a></li>
                        <li style="margin-left: 15px;"><a href="{{ route('logout') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Logout</a></li>
                        @else
                        <li><a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Login</a></li>

                        @if (Route::has('register'))
                            <li><a href="{{ route('register') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Cadastrar</a></li>
                        @endif
                    @endauth
                </ul>
            </div>
        </div>

        <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
        @auth
                <h3>Seja Bem-vindo(a), {{ Auth::user()->name }}!</h3>
            @else
                <h3>Seja Bem-vindo(a)!</h3>
            @endauth
        </div>
    </div>
</body>
</html>

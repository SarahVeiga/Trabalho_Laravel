<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Aula Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />

    <style>
        :root {
            --rosa-claro: #f6a0b5;
            --lilas: #b3a3d9;
            --verde-agua: #93b3ff;
            --amarelo-claro: #f9f6a3;
            --azul-bebe: #d8f4e0;
        }

        body {
            background-color: var(--azul-bebe);
            font-family: 'Instrument Sans', sans-serif;
            color: #4a4a4a;
            text-align: center;
            padding: 40px;
            margin: 0;
        }

        h1 {
            color: var(--rosa-claro);
            font-size: 36px;
        }

        .container {
            background-color: #ffffff;
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0px 4px 12px rgba(0, 0, 0, 0.1);
            width: 400px;
            margin: 0 auto;
        }

        a {
            display: block;
            padding: 12px;
            margin: 20px 0;
            background-color: var(--verde-agua);
            color: white;
            text-decoration: none;
            text-align: center;
            border-radius: 5px;
            font-size: 18px;
        }

        a:hover {
            background-color: var(--amarelo-claro);
        }

        .btn-container {
            display: flex;
            justify-content: space-between;
            gap: 10px;
        }
    </style>
</head>
<body>

    <h1>Aula de Laravel com a Anny 💕</h1>

    <div class="container">
        <div class="btn-container">
            <a href="{{ route('login') }}">Entrar</a>
            <a href="{{ route('register') }}">Cadastrar</a>
        </div>
    </div>

</body>
</html>







<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bem-vindo!</title>
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
            font-family: Arial, sans-serif;
            color: #4a4a4a;
            text-align: center;
            margin: 0;
            padding: 20px;
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

        p {
            font-size: 18px;
            color: var(--lilas);
        }

        .btn-logout {
            display: inline-block;
            width: 100%;
            padding: 12px;
            background-color: var(--verde-agua);
            color: white;
            text-align: center;
            text-decoration: none;
            border-radius: 5px;
            font-size: 16px;
            margin-top: 20px;
        }

        .btn-logout:hover {
            background-color: var(--amarelo-claro);
        }
    </style>
</head>
<body>

    <div class="container">
        <h1>Estou Logado</h1>
        <p>Bem-vindo, {{ Auth::user()->name }}!</p>
        <a href="{{ route('logout') }}" class="btn-logout">Sair</a>
    </div>

</body>
</html>




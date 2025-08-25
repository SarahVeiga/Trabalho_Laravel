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
            padding: 20px;
            color: #4a4a4a;
        }

        h1 {
            text-align: center;
            color: var(--rosa-claro);
        }

        p {
            text-align: center;
            font-size: 18px;
            color: var(--lilas);
        }

        .container {
            background-color: #ffffff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 4px 12px rgba(0, 0, 0, 0.1);
            width: 400px;
            margin: 0 auto;
        }

        .btn-logout {
            display: block;
            width: 100%;
            padding: 12px;
            background-color: var(--verde-agua);
            color: white;
            text-align: center;
            text-decoration: none;
            border-radius: 5px;
            font-size: 16px;
        }

        .btn-logout:hover {
            background-color: var(--amarelo-claro);
        }
    </style>
</head>
<body>

    <div class="container">
        <h1>Você está logado, {{ $user->name }}!</h1>
        <p>Bem-vindo à sua área de usuário.</p>
        <a href="{{ route('logout') }}" class="btn-logout">Sair</a>
    </div>

</body>
</html>


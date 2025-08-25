<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Sucesso</title>
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
            padding: 20px;
            text-align: center;
            margin: 0;
        }

        h1 {
            color: var(--rosa-claro);
        }

        p {
            font-size: 18px;
            color: var(--lilas);
        }

        .container {
            background-color: #ffffff;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0px 4px 12px rgba(0, 0, 0, 0.1);
            width: 400px;
            margin: 0 auto;
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

        form {
            margin-top: 20px;
        }

        button {
            padding: 10px;
            width: 100%;
            background-color: var(--rosa-claro);
            border: none;
            color: white;
            border-radius: 5px;
            font-size: 16px;
        }

        button:hover {
            background-color: var(--lilas);
        }
    </style>
</head>
<body>

    <div class="container">
        <h1>Estou logado!</h1>
        <p>Bem-vindo, {{ Auth::user()->name }}.</p>
        
        <!-- Logout Button -->
        <a href="{{ route('logout') }}" class="btn-logout">Sair</a>

        <!-- Logout Form for POST method -->
        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button type="submit">Sair</button>
        </form>
    </div>

</body>
</html>


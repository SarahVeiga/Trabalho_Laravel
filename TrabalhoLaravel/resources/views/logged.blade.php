<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bem-vindo!</title>
    <style>
        :root {
            --rosa-claro: #f6a0b5;
            --rosa-medio: #d16e8f; /* Tom de rosa médio */
            --rosa-escuro: #d0637a; /* Tom de rosa escuro */
            --cinza-claro: #f1f1f1;
            --cinza-escuro: #333;
            --borda-arredondada: 12px;
        }

        body {
            background-color: var(--cinza-claro);
            font-family: Arial, sans-serif;
            color: #4a4a4a;
            text-align: center;
            margin: 0;
            padding: 20px;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            background: linear-gradient(135deg, var(--rosa-claro) 0%, var(--rosa-medio) 100%); /* Gradiente suave de rosa */
        }

        h1 {
            color: var(--rosa-claro);
            font-size: 36px;
            font-weight: bold;
            margin-bottom: 20px;
        }

        p {
            font-size: 18px;
            color: var(--rosa-medio);
        }

        .container {
            background-color: rgba(255, 255, 255, 0.9); /* Fundo branco translúcido */
            padding: 40px;
            border-radius: var(--borda-arredondada);
            box-shadow: 0px 4px 12px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 400px;
            text-align: center;
        }

        .btn-logout {
            display: inline-block;
            width: 100%;
            padding: 12px;
            background-color: var(--rosa-medio); /* Tom de rosa médio */
            color: white;
            text-align: center;
            text-decoration: none;
            border-radius: var(--borda-arredondada);
            font-size: 16px;
            margin-top: 20px;
            transition: background-color 0.3s;
        }

        .btn-logout:hover {
            background-color: var(--rosa-escuro); /* Tom de rosa escuro no hover */
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

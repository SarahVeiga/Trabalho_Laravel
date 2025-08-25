<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Sucesso</title>
    <style>
        :root {
            --rosa-claro: #f6a0b5;
            --rosa-medio: #d16e8f; /* Tom de rosa médio */
            --rosa-escuro: #d0637a; /* Tom de rosa escuro */
            --cinza-claro: #f1f1f1;
            --cinza-escuro: #333;
            --borda-arredondada: 15px;
        }

        body {
            background-color: var(--cinza-claro);
            font-family: Arial, sans-serif;
            color: #4a4a4a;
            padding: 20px;
            text-align: center;
            margin: 0;
            background: linear-gradient(135deg, var(--rosa-claro) 0%, var(--rosa-medio) 100%); /* Gradiente rosa */
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        h1 {
            color: var(--cinza-escuro);
            font-size: 36px;
            margin-bottom: 10px;
            font-weight: 600;
        }

        p {
            font-size: 18px;
            color: var(--rosa-medio);
            margin-bottom: 30px;
        }

        .container {
            background-color: rgba(255, 255, 255, 0.9); /* Fundo branco translúcido */
            padding: 40px;
            border-radius: var(--borda-arredondada);
            box-shadow: 0px 4px 20px rgba(0, 0, 0, 0.1);
            width: 350px;
            text-align: center;
        }

        .btn-logout {
            display: inline-block;
            width: 100%;
            padding: 12px;
            background-color: var(--rosa-medio); /* Cor do botão "Sair" em rosa médio */
            color: white;
            text-align: center;
            text-decoration: none;
            border-radius: var(--borda-arredondada);
            font-size: 16px;
            margin-top: 20px;
            transition: background-color 0.3s, transform 0.3s;
        }

        .btn-logout:hover {
            background-color: var(--rosa-escuro); /* Tom de rosa escuro no hover */
            transform: translateY(-3px);
        }

        .btn-logout:active {
            background-color: var(--rosa-escuro); /* Tom de rosa escuro no clique */
            transform: translateY(1px);
        }

        form {
            margin-top: 20px;
        }

        button {
            padding: 10px;
            width: 100%;
            background-color: var(--rosa-claro); /* Cor do botão de logout em rosa claro */
            border: none;
            color: white;
            border-radius: var(--borda-arredondada);
            font-size: 16px;
            transition: background-color 0.3s;
        }

        button:hover {
            background-color: var(--rosa-medio); /* Tom de rosa médio no hover */
        }
    </style>
</head>
<body>

    <div class="container">
        <h1>Estou logado!</h1>
        <p>Bem-vindo, {{ Auth::user()->name }}.</p>
        
        <!-- Botão de Logout -->
        <a href="{{ route('logout') }}" class="btn-logout">Sair</a>

        <!-- Formulário de Logout -->
        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button type="submit">Sair</button>
        </form>
    </div>

</body>
</html>

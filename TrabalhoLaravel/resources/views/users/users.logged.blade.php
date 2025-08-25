<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bem-vindo</title>
    <style>
        :root {
            --rosa-claro: #f6a0b5;
            --rosa-medio: #d16e8f; /* Tom de rosa mais forte */
            --rosa-escuro: #d0637a; /* Tom de rosa mais escuro */
            --cinza-claro: #f1f1f1;
            --cinza-escuro: #333;
            --borda-arredondada: 15px;
        }

        body {
            background-color: var(--cinza-claro);
            font-family: Arial, sans-serif;
            padding: 0;
            margin: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background: linear-gradient(135deg, var(--rosa-claro) 0%, var(--rosa-medio) 100%); /* Gradiente de rosa */
            overflow: hidden;
        }

        h1 {
            color: var(--cinza-escuro);
            font-size: 36px;
            margin-bottom: 10px;
            text-align: center;
            font-weight: 600;
        }

        p {
            font-size: 18px;
            color: var(--rosa-medio);
            margin-bottom: 30px;
        }

        .container {
            background-color: rgba(255, 255, 255, 0.9); /* Fundo branco com transparência */
            padding: 40px;
            border-radius: var(--borda-arredondada);
            box-shadow: 0px 4px 20px rgba(0, 0, 0, 0.1);
            width: 350px;
            text-align: center;
            position: relative;
            z-index: 2;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }

        .btn-logout {
            display: block;
            width: 100%;
            padding: 20px;
            background-color: var(--rosa-medio); /* Usando o rosa médio no botão */
            color: white;
            text-align: center;
            text-decoration: none;
            border-radius: var(--borda-arredondada);
            font-size: 16px;
            margin-top: 30px;
            transition: background-color 0.3s, transform 0.3s;
            box-shadow: 0px 6px 15px rgba(0, 0, 0, 0.1);
        }

        .btn-logout:hover {
            background-color: var(--rosa-escuro); /* No hover, fica mais escuro */
            transform: translateY(-5px);
        }

        .btn-logout:active {
            background-color: var(--rosa-escuro); /* Cor mais escura no clique */
            transform: translateY(2px);
        }

        /* Responsividade para telas menores */
        @media (max-width: 480px) {
            .container {
                width: 90%;
                padding: 20px;
            }

            h1 {
                font-size: 28px;
            }

            .btn-logout {
                font-size: 16px;
                padding: 15px;
            }
        }
    </style>
</head>
<body>

    <div class="container">
        <h1>Bem-vindo, {{ $user->name }}!</h1>
        <p>Você está logado com sucesso.</p>
        <a href="{{ route('logout') }}" class="btn-logout">Sair</a> <!-- Rota de logout -->
    </div>

</body>
</html>

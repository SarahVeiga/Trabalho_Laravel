<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bem-vindo!</title>
    <style>
        :root {
            --rosa-claro: #f6a0b5;
            --rosa-medio: #d16e8f;
            --rosa-escuro: #d0637a;
            --azul-claro: #4d93d7; /* Azul para o botão Sair */
            --cinza-claro: #f1f1f1;
            --cinza-escuro: #333;
            --borda-arredondada: 15px;
            --rosa-intenso: #9b2d47;
            --vermelho-erro: #e60000;
        }

        body {
            background-color: var(--cinza-claro);
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background: linear-gradient(135deg, #f9c1d9 0%, var(--rosa-medio) 100%);
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
            text-align: center;
            font-size: 18px;
            color: var(--lilas);
            margin-bottom: 30px;
        }

        .waves {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 700px; /* Aumentei o tamanho do círculo */
            height: 700px; /* Aumentei o tamanho do círculo */
            background: radial-gradient(circle, rgba(214, 104, 126, 0.5) 50%, transparent 51%);
            border-radius: 50%;
            opacity: 0.3;
            animation: waveAnimation 4s infinite ease-in-out;
        }

        .waves:nth-child(2) {
            animation-duration: 5s;
            opacity: 0.2;
        }

        @keyframes waveAnimation {
            0% {
                transform: translate(-50%, -50%) scale(1);
            }
            50% {
                transform: translate(-50%, -50%) scale(1.2);
            }
            100% {
                transform: translate(-50%, -50%) scale(1);
            }
        }

        .container {
            background-color: rgba(255, 255, 255, 0.9);
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

        .btn-container {
            display: flex;
            flex-direction: column;
            gap: 20px;
            align-items: center;
            margin-top: 20px;
            width: 100%; /* Garantir que os botões ocupem toda a largura */
        }

        .btn-container a {
            display: block;
            width: 100%;
            padding: 20px;
            background-color: var(--rosa-escuro);
            color: white;
            text-align: center;
            text-decoration: none;
            border-radius: var(--borda-arredondada);
            font-size: 18px;
            transition: background-color 0.3s, transform 0.2s;
            margin-top: 10px;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
        }

        .btn-container a:hover {
            background-color: var(--rosa-claro);
            transform: translateY(-5px);
        }

        .btn-logout {
            display: block;
            width: 100%;
            padding: 20px;
            background-color: var(--azul-claro); /* Botão "Sair" com azul claro */
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
            background-color: var(--vermelho-erro);
            transform: translateY(-5px);
        }

        .btn-logout:active {
            background-color: var(--vermelho-erro);
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

            .btn-container a {
                font-size: 16px;
                padding: 15px;
            }
        }
    </style>
</head>
<body>

    <div class="waves"></div>
    <div class="waves" style="animation-duration: 5s;"></div>

    <div class="container">
        <h1>Você está logado!</h1>
        <p>Bem-vindo à sua área de usuário.</p>

        <div class="btn-container">
            <a href="{{ route('login') }}">Entrar</a>
            <a href="{{ route('register') }}">Cadastrar</a>
        </div>

        <!-- Botão "Sair" centralizado -->
        <a href="{{ route('logout') }}" class="btn-logout">Sair</a>
    </div>

</body>
</html>

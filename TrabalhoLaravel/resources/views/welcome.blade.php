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
            --rosa-bebe: rgba(249, 193, 217, 0.7); /* Rosa bebê com transparência */
            --rosa-escuro: #f2889a; /* Rosa escuro */
            --rosa-claro: #f6a0b5;
            --rosa-escuro-botao: #d16e8f; /* Tom mais escuro para os botões */
            --primary-bg: #f4e1d2; /* Fundo suave */
            --border-radius: 12px; /* Bordas arredondadas */
        }

        body {
            font-family: 'Instrument Sans', sans-serif;
            color: #000000;
            margin: 0;
            padding: 0;
            background: linear-gradient(135deg, #f9c1d9 0%, #f6a0b5 100%); /* Gradiente de fundo */
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            overflow: hidden;
            position: relative;
        }

        .circle {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 500px;
            height: 500px;
            background-color: var(--rosa-escuro); /* Rosa mais escuro */
            opacity: 0.6; /* Transparência no círculo */
            border-radius: 50%;
            z-index: -1;
            animation: pulse 2s infinite ease-in-out; /* Efeito de pulsação */
        }

        @keyframes pulse {
            0% {
                transform: translate(-50%, -50%) scale(1);
            }
            50% {
                transform: translate(-50%, -50%) scale(1.1); /* Expande o círculo */
            }
            100% {
                transform: translate(-50%, -50%) scale(1); /* Retorna ao tamanho original */
            }
        }

        h1 {
            color: #000000;
            font-size: 36px;
            margin-bottom: 30px;
            text-align: center;
            font-weight: 600;
            z-index: 1;
        }

        .container {
            background-color: #ffffff;
            padding: 40px;
            border-radius: var(--border-radius);
            box-shadow: 0px 4px 20px rgba(0, 0, 0, 0.2);
            width: 350px;
            text-align: center;
            position: relative;
        }

        .btn-container {
            display: flex;
            flex-direction: column;
            gap: 15px;
            margin-top: 20px;
        }

        .btn-container a {
            display: block;
            padding: 20px; /* Tamanho dos botões ajustado */
            background-color: var(--rosa-escuro-botao);
            color: white;
            text-decoration: none;
            text-align: center;
            border-radius: var(--border-radius);
            font-size: 18px;
            width: 80%; /* Largura dos botões ajustada */
            max-width: 350px;
            margin-left: auto;
            margin-right: auto;
            transition: background-color 0.3s;
        }

        .btn-container a:hover {
            background-color: var(--rosa-escuro); /* Cor mais escura no hover */
        }
    </style>
</head>
<body>
    <div class="circle"></div> <!-- Círculo pulsante -->
    <div class="container">
        <h1>Aula de Laravel com a Anny 💕</h1>
        <div class="btn-container">
            <a href="{{ route('login') }}">Entrar</a>
            <a href="{{ route('register') }}">Cadastrar</a>
        </div>
    </div>
</body>
</html>

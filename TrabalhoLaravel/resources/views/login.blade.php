<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        :root {
            --rosa-bebe: #f9c1d9;
            --rosa-claro: #f6a0b5;
            --rosa-escuro: #f2889a;
            --rosa-escuro-botao: #d16e8f; /* Cor mais escura para o botão */
            --rosa-escuro-link: #9f4d7b; /* Cor mais escura para o link */
        }

        body {
            background: linear-gradient(135deg, #d34f7bff 0%, #e8a7eeff 100%); /* Gradiente de fundo */
            font-family: Arial, sans-serif;
            color: #4a4a4a;
            padding: 0;
            margin: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-size: cover;
            overflow: hidden;
        }

        h1 {
            color: #000000; /* Cor preta para o título */
            font-size: 36px;
            margin-bottom: 20px;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.4);
        }

        .container {
            background-color: rgba(255, 255, 255, 0.8); /* Fundo branco translúcido */
            padding: 40px;
            border-radius: 30px;
            box-shadow: 0px 4px 12px rgba(0, 0, 0, 0.1);
            width: 400px;
            text-align: center;
        }

        input {
            width: 100%;
            padding: 15px;
            margin: 12px 0;
            border: 1px solid #ccc;
            border-radius: 30px;
            font-size: 16px;
            background-color: #f9f9f9;
        }

        button {
            width: 100%;
            padding: 15px;
            background-color: var(--rosa-escuro-botao); /* Cor do botão mais escura */
            color: white;
            border: none;
            border-radius: 30px;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        button:hover {
            background-color: var(--rosa-escuro); /* Efeito de hover */
        }

        a {
            display: block;
            margin-top: 15px;
            color: var(--rosa-escuro-link); /* Cor mais escura para o link */
            text-decoration: none;
            font-size: 14px;
        }

        a:hover {
            color: var(--rosa-claro); /* Cor mais clara no hover */
        }

        /* Efeito de ondas no fundo */
        .waves {
            position: absolute;
            bottom: 0;
            width: 100%;
            height: 200px;
            background: url('https://www.transparenttextures.com/patterns/diagonal-stripes.png') repeat;
            background-color: rgba(255, 255, 255, 0.4);
            clip-path: polygon(0 50%, 100% 0, 100% 100%, 0 100%);
        }
    </style>
</head>
<body>

    <div class="container">
        <h1>Faça o seu Login</h1>
        <form method="POST" action="{{ route('login.attempt') }}">
            @csrf
            <input name="email" type="email" placeholder="Email" required>
            <input name="password" type="password" placeholder="Senha" required>
            <button type="submit">Entrar</button>
        </form>

        <a href="{{ route('edit', 1) }}">Esqueceu a senha?</a>
    </div>

    <!-- Efeito de ondas no fundo -->
    <div class="waves"></div>

</body>
</html>

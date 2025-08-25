<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
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
            margin: 0;
            text-align: center;
        }

        h1 {
            color: var(--rosa-claro);
            font-size: 36px;
            margin-bottom: 20px;
        }

        .container {
            background-color: #ffffff;
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0px 4px 12px rgba(0, 0, 0, 0.1);
            width: 400px;
            margin: 0 auto;
        }

        input {
            width: 100%;
            padding: 12px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 16px;
            background-color: #f9f9f9;
        }

        button {
            width: 100%;
            padding: 12px;
            background-color: var(--rosa-claro);
            color: white;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
        }

        button:hover {
            background-color: var(--lilas);
        }

        a {
            display: block;
            margin-top: 15px;
            color: var(--verde-agua);
            text-decoration: none;
        }

        a:hover {
            color: var(--amarelo-claro);
        }

        .form-group {
            margin-bottom: 20px;
        }
    </style>
</head>
<body>

    <div class="container">
        <h1>Faça o seu Login</h1>

        <form method="POST" action="{{ route('login.attempt') }}">
            @csrf
            <div class="form-group">
                <input name="email" type="email" placeholder="Email" required>
            </div>

            <div class="form-group">
                <input name="password" type="password" placeholder="Senha" required>
            </div>

            <button type="submit">Entrar</button>
        </form>

        <a href="{{ route('edit', 1) }}">Esqueceu a senha?</a>
    </div>

</body>
</html>



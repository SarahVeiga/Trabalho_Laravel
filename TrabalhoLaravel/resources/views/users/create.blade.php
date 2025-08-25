<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <style>
        :root {
            --rosa-claro: #f6a0b5;
            --rosa-medio: #d16e8f; /* Tom de rosa mais forte */
            --lilas: #b3a3d9;
            --verde-agua: #93b3ff;
            --amarelo-claro: #f9f6a3;
            --azul-bebe: #d8f4e0;
            --cinza-claro: #f1f1f1;
            --cinza-escuro: #333;
            --borda-arredondada: 12px;
        }

        body {
            background-color: var(--cinza-claro);
            font-family: Arial, sans-serif;
            padding: 0;
            margin: 0;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            background: linear-gradient(135deg, var(--rosa-claro) 0%, var(--rosa-medio) 100%);
        }

        h1 {
            color: var(--rosa-medio);
            font-size: 32px;
            margin-bottom: 20px;
            text-align: center;
            font-weight: bold;
        }

        .form-container {
            background-color: rgba(255, 255, 255, 0.9); /* Fundo translúcido */
            padding: 40px;
            border-radius: var(--borda-arredondada);
            box-shadow: 0px 4px 20px rgba(0, 0, 0, 0.15);
            width: 100%;
            max-width: 450px;
            text-align: center;
        }

        label {
            display: block;
            margin-bottom: 8px;
            color: var(--cinza-escuro);
            font-size: 16px;
        }

        input {
            width: 100%;
            padding: 12px;
            margin-bottom: 18px;
            border: 1px solid #ccc;
            border-radius: var(--borda-arredondada);
            font-size: 16px;
            background-color: rgba(255, 255, 255, 0.8); /* Transparência nos campos */
            transition: all 0.3s ease;
        }

        input:focus {
            border-color: var(--rosa-medio);
            box-shadow: 0 0 8px rgba(209, 110, 143, 0.6);
        }

        button {
            width: 100%;
            padding: 14px;
            background-color: var(--rosa-medio);
            color: white;
            border: none;
            border-radius: var(--borda-arredondada);
            font-size: 16px;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        button:hover {
            background-color: var(--lilas);
            transform: translateY(-3px);
        }

        button:active {
            transform: translateY(1px);
        }

        .error-list {
            color: red;
            margin-bottom: 20px;
            font-size: 14px;
        }

        .link-container {
            margin-top: 20px;
        }

        .link-container a {
            color: var(--rosa-medio);
            text-decoration: none;
            font-weight: bold;
            transition: color 0.3s;
        }

        .link-container a:hover {
            color: var(--lilas);
        }

        /* Responsividade para telas menores */
        @media (max-width: 480px) {
            .form-container {
                padding: 25px;
                width: 90%;
            }

            h1 {
                font-size: 28px;
            }
        }
    </style>
</head>
<body>

    <div class="form-container">
        <h1>Cadastro de Usuário</h1>

        @if($errors->any())
            <div class="error-list">
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('register.store') }}" method="POST">
            @csrf

            <label for="name">Nome:</label>
            <input type="text" name="name" value="{{ old('name') }}" required><br>

            <label for="email">Email:</label>
            <input type="email" name="email" value="{{ old('email') }}" required><br>

            <label for="password">Senha:</label>
            <input type="password" name="password" required><br>

            <label for="password_confirmation">Confirmar Senha:</label>
            <input type="password" name="password_confirmation" required><br>

            <button type="submit">Cadastrar</button>
        </form>

        <div class="link-container">
            <p>Já tem uma conta?</p>
            <a href="{{ route('login') }}">Entrar</a>
        </div>
    </div>

</body>
</html>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
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

        .form-container {
            background-color: #ffffff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 4px 12px rgba(0, 0, 0, 0.1);
            width: 400px;
            margin: 0 auto;
        }

        label {
            display: block;
            margin-bottom: 8px;
            color: var(--lilas);
        }

        input {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
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

        .error-list {
            color: red;
            margin-bottom: 15px;
        }

        .link-container {
            text-align: center;
            margin-top: 20px;
        }

        .link-container a {
            background-color: var(--verde-agua);
            color: white;
            padding: 10px 20px;
            text-decoration: none;
            border-radius: 5px;
        }

        .link-container a:hover {
            background-color: var(--amarelo-claro);
        }
    </style>
</head>
<body>

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

    <div class="form-container">
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
    </div>

    <div class="link-container">
        <p>Já tem uma conta?</p>
        <a href="{{ route('login') }}">Entrar</a>
    </div>

</body>
</html>


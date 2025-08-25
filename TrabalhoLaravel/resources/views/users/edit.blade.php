<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Editar Usuário</title>
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
    </style>
</head>
<body>

    <h1>Editar Usuário</h1>

    @if ($errors->any())
        <div class="error-list">
            <ul>
                @foreach($errors->all() as $erro)
                    <li>{{ $erro }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class="form-container">
        <form method="POST" action="{{ route('update', $user->id) }}">
            @csrf

            <label for="name">Nome:</label>
            <input type="text" name="name" value="{{ $user->name }}" required><br>

            <label for="email">Email:</label>
            <input type="email" name="email" value="{{ $user->email }}" required><br>

            <label for="password">Nova Senha:</label>
            <input type="password" name="password" placeholder="Deixe em branco para não alterar"><br>

            <label for="password_confirmation">Confirmar Nova Senha:</label>
            <input type="password" name="password_confirmation" placeholder="Confirme a nova senha"><br>

            <button type="submit">Salvar Alterações</button>
        </form>
    </div>

</body>
</html>


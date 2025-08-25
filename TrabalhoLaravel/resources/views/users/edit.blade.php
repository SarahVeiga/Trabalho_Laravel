<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Editar Usuário</title>
    <style>
        :root {
            --rosa-claro: #f6a0b5;
            --rosa-medio: #d16e8f;
            --rosa-escuro: #d0637a;
            --branco: #ffffff;
        }

        body {
            background-color: var(--rosa-claro); /* Alterando o fundo para rosa claro */
            font-family: 'Arial', sans-serif;
            padding: 20px;
            color: #4a4a4a;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        h1 {
            color: var(--rosa-medio);
            font-size: 2rem;
            margin-bottom: 20px;
        }

        .form-container {
            background-color: var(--branco); /* Mantém o formulário com fundo branco */
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0px 4px 20px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 500px;
            transition: transform 0.3s ease-in-out;
        }

        .form-container:hover {
            transform: scale(1.02); /* Leve aumento no hover */
        }

        label {
            display: block;
            margin-bottom: 8px;
            color: var(--rosa-medio);
            font-weight: bold;
        }

        input {
            width: 100%;
            padding: 12px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 8px;
            font-size: 16px;
            background-color: #f9f9f9;
            transition: background-color 0.3s ease;
        }

        input:focus {
            outline: none;
            border-color: var(--rosa-claro);
            background-color: #f1e6e8;
        }

        button {
            width: 100%;
            padding: 14px;
            background-color: var(--rosa-claro);
            color: var(--branco);
            border: none;
            border-radius: 8px;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        button:hover {
            background-color: var(--rosa-medio);
        }

        .error-list {
            color: red;
            margin-bottom: 20px;
            font-size: 14px;
        }

        .error-list ul {
            list-style: none;
            padding-left: 0;
        }

        .error-list li {
            margin-bottom: 5px;
        }
    </style>
</head>
<body>

    <div class="form-container">
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

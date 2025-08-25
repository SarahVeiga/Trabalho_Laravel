<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Esqueceu a Senha</title>
</head>
<body>
    <h1>Redefinir Senha</h1>

    @if(session('status'))
        <p style="color: green">{{ session('status') }}</p>
    @endif

    <form method="POST" action="{{ route('password.email') }}">
        @csrf
        <input type="email" name="email" placeholder="Digite seu e-mail" required>
        <button type="submit">Enviar link de redefinição</button>
    </form>
</body>
</html>

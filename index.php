<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Controle de clientes - Login</title>

    <link rel="stylesheet" href="/css/style.css">

</head>
<body>
    <main>
        <div class="container">
            <h1>Controle de clientes</h1>
            <form action="login.php" method="post">
                <label for="email">E-mail:</label>
                <input type="email" name="email" id="email" required>
                <label for="senha">Senha:</label>
                <input type="password" name="senha" id="senha" required>
                <button type="submit">Entrar</button>
            </form>
        </div>
    </main>
</body>
</html>
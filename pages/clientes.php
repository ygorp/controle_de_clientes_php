<!DOCTYPE html>
<html lang="ptbr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de clientes</title>
    
    <link rel="stylesheet" href="../css/cad_clientes.css">
</head>
<body>
    <header>
        <nav>
            <div class="logo">
                <a href="dashboard.html">Controle de clientes</a>
            </div>
            <ul>
                <li><a href="dashboard.php">Dashboard</a></li>
                <li><a href="clientes.php">Clientes</a></li>
                <li><a href="produtos.php">Produtos</a></li>
                <li><a href="pedidos.php">Pedidos</a></li>
                <li><a href="logout.php">Sair</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <div class="container_form_clientes">
            <h1>Cadastre seu cliente aqui!</h1>
            <div class="cad_clientes_form">
                <form action="cad_clientes.php" method="post">
                    <label for="nome">Nome do cliente:</label>
                    <input type="text" name="nome" id="nome" required>
                    
                    <label for="produto">Produto adquirido:</label>
                    <input type="text" name="produto" id="produto" required>
                    
                    <label for="status">Status do pagamento:</label>
                    <select name="status" id="status" required>
                        <option value="Pago">Pago</option>
                        <option value="Pendente">Pendente</option>
                    </select>
                    
                    <label for="valor">Valor pago:</label>
                    <input type="text" name="valor" id="valor" required>
                    
                    <button type="submit">Cadastrar cliente</button>
                </form>
            </div>
        </div>
    </main>
    
</body>
</html>
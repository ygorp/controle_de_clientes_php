<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Controle de clientes - Dashboard</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="../css/dashboard.css">

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
        <section class="infos">
            <div class="container_dash">
                <h1>Dashboard</h1>
                <p>Seja bem-vindo!</p>
                <div class="btn_cad_clientes">
                    <a href="clientes.php"><i class="bi bi-person-plus-fill"></i></a>
                </div>
            </div>
        </section>

        <section class="content_dash">
            <div class="container_dash">
                <table>
                    <thead>
                        <tr>
                            <th>Nome do Cliente</th>
                            <th>Tipo do Produto</th>
                            <th>Status</th>
                            <th>Valor Pago</th>
                            <th>Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            $clientes = array(
                                array("nome" => "Cliente 1", "produto" => "Produto A", "status" => "Pago", "valor" => "100,00"),
                                array("nome" => "Cliente 2", "produto" => "Produto B", "status" => "Pendente", "valor" => "80,00")
                                // Adicione mais arrays conforme necessário para mais clientes
                            );

                            // Loop para percorrer os clientes e gerar as linhas da tabela
                            foreach ($clientes as $cliente) {
                                echo "<tr>";
                                echo "<td>" . $cliente['nome'] . "</td>";
                                echo "<td>" . $cliente['produto'] . "</td>";
                                echo "<td>" . $cliente['status'] . "</td>";
                                echo "<td>R$ " . $cliente['valor'] . "</td>";
                                echo "<td class='action-buttons'>";
                                echo "<button>Editar</button>";
                                echo "<button>Excluir</button>";
                                echo "</td>";
                                echo "</tr>";
                            }
                        ?>
                    </tbody>
                </table>
            </div>
        </section>
    </main>
</body>
</html>
<?php
// Configurações do banco de dados
$host = "localhost"; // ou o endereço do servidor do banco de dados
$nome_bd = "agrotec"; // nome do banco de dados
$usuario_bd = "root"; // usuário do banco de dados
$senha_bd = ""; // senha do banco de dados

// Conexão com o banco de dados
$conn = new mysqli($host, $usuario_bd, $senha_bd, $nome_bd);
if ($conn->connect_error) {
    die("Erro na conexão com o banco de dados: " . $conn->connect_error);
}

// Verificar se foi enviado um ID válido
if (isset($_GET['id']) && is_numeric($_GET['id'])) {
    $id = $_GET['id'];

    // Verificar se o formulário foi enviado
    if (isset($_POST['submit'])) {
        $nome = $_POST['nome'];
        $cpf = $_POST['cpf'];
        $email = $_POST['email'];

        // Atualizar os dados do usuário no banco de dados
        $sql = "UPDATE usuarios SET nome='$nome', CPF='$cpf', email='$email' WHERE id='$id'";
        if ($conn->query($sql) === TRUE) {
            echo "Dados do usuário atualizados com sucesso!";
            echo "<br>";
            echo "<a href='admin.php'>Voltar para a lista de usuários</a>";
        } else {
            echo "Erro ao atualizar os dados do usuário: " . $conn->error;
        }
    } else {
        // Recuperar os dados do usuário do banco de dados
        $sql = "SELECT * FROM usuarios WHERE id='$id'";
        $result = $conn->query($sql);

        if ($result->num_rows == 1) {
            $row = $result->fetch_assoc();
            $nome = $row['nome'];
            $cpf = $row['CPF'];
            $email = $row['email'];

            // Exibir o formulário de edição preenchido com os dados existentes
            ?>

            <!DOCTYPE html>
            <html>
            <head>
                <title>Editar Usuário</title>
            </head>
            <body>
                <h1>Editar Usuário</h1>

                <form method="post" action="edit.php?id=<?php echo $id; ?>">
                    <label for="nome">Nome:</label>
                    <input type="text" name="nome" id="nome" value="<?php echo $nome; ?>" required>
                    <br><br>
                    <label for="cpf">CPF:</label>
                    <input type="text" name="cpf" id="cpf" value="<?php echo $cpf; ?>" required>
                    <br><br>
                    <label for="email">Email:</label>
                    <input type="email" name="email" id="email" value="<?php echo $email; ?>">
                    <br><br>
                    <input type="submit" name="submit" value="Salvar">
                </form>
            </body>
            </html>

            <?php
        } else {
            echo "Usuário não encontrado.";
        }
    }
} else {
    echo "ID de usuário inválido.";
}

// Fechar conexão com o banco de dados
$conn->close();
?>

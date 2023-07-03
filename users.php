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

// Excluir usuário
if (isset($_GET["delete"])) {
    $id = $_GET["delete"];

    $sql = "DELETE FROM usuarios WHERE id='$id'";
    if ($conn->query($sql) === TRUE) {
        echo "Usuário excluído com sucesso!";
    } else {
        echo "Erro ao excluir usuário: " . $conn->error;
    }
}

// Consultar usuários
$sql = "SELECT id, nome, CPF, email, foto FROM usuarios";
$result = $conn->query($sql);

?>

<!DOCTYPE html>
<html>
<head>
    <title>Administração de Usuários</title>
</head>
<body>
    <h1>Administração de Usuários</h1>

    <h2>Lista de Usuários</h2>
    <table>
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>CPF</th>
            <th>Email</th>
            <th>Foto</th>
            <th>Ação</th>
        </tr>
        <?php
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $row["id"] . "</td>";
                echo "<td>" . $row["nome"] . "</td>";
                echo "<td>" . $row["CPF"] . "</td>";
                echo "<td>" . $row["email"] . "</td>";
                echo "<td><img src='" . $row["foto"] . "' alt='Foto do Usuário'></td>";
                echo "<td>";
                echo "<a href='edit.php?id=" . $row["id"] . "'>Editar</a> | ";
                echo "<a href='?delete=" . $row["id"] . "' onclick='return confirm(\"Tem certeza que deseja excluir este usuário?\")'>Excluir</a>";
                echo "</td>";
                echo "</tr>";
            }
        }
        ?>
    </table>

    <h2>Adicionar Novo Usuário</h2>
    <form method="post" action="add.php" enctype="multipart/form-data">
        <label for="nome">Nome:</label>
        <input type="text" name="nome" id="nome" required>
        <br><br>
        <label for="CPF">CPF:</label>
        <input type="text" name="CPF" id="CPF" required>
        <br><br>
        <label for="email">Email:</label>
        <input type="email" name="email" id="email">
        <br><br>
        <label for="foto">Foto:</label>
        <input type="file" name="foto" id="foto">
        <br><br>
        <input type="submit" name="submit" value="Adicionar">
    </form>

</body>
</html>

<?php
// Fechar conexão com o banco de dados
$conn->close();
?>

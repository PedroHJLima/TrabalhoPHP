<?php
// Iniciar a sessão
session_start();

// Definir $_SESSION['ativa'] como false
if($_SESSION['ativa'] == TRUE){

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

// Adicionar administrador
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["adicionar"])) {
    $usuario = $_POST["usuario"];
    $senha = $_POST["senha"];

    $sql = "INSERT INTO administradores (usuario, senha) VALUES ('$usuario', '$senha')";
    if ($conn->query($sql) === TRUE) {
        echo "Novo administrador adicionado com sucesso!";
    } else {
        echo "Erro ao adicionar administrador: " . $conn->error;
    }
}

// Excluir administrador
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["excluir"])) {
    $usuario = $_POST["usuario"];

    $sql = "DELETE FROM administradores WHERE usuario='$usuario'";
    if ($conn->query($sql) === TRUE) {
        echo "Administrador excluído com sucesso!";
    } else {
        echo "Erro ao excluir administrador: " . $conn->error;
    }
}

// Consultar administradores
$sql = "SELECT usuario FROM administradores";
$result = $conn->query($sql);

?>

<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="styleAdmin.css">
    <title>Gerenciar Administradores</title>
</head>
<body>
	<?php include('./view/headerAdmin.php'); ?>
    <h1>Gerenciar Administradores</h1>

    <h2>Adicionar Administrador</h2>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <label for="usuario">Usuário:</label>
        <input type="text" name="usuario" id="usuario" required>
        <br><br>
        <label for="senha">Senha:</label>
        <input type="password" name="senha" id="senha" required>
        <br><br>
        <input type="submit" name="adicionar" value="Adicionar">
    </form>

    <h2>Excluir Administrador</h2>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <label for="usuario">Usuário:</label>
        <select name="usuario" id="usuario">
            <?php
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo "<option value='" . $row["usuario"] . "'>" . $row["usuario"] . "</option>";
                }
            }
            ?>
        </select>
        <br><br>
        <input type="submit" name="excluir" value="Excluir">
    </form>

	<br><br>
    <form action="deslogar.php" method="post">
    <input type="submit" value="Logout">
    </form>

    <?php
    // Fechar conexão com o banco de dados
    $conn->close();
		}else{
			echo "Página indisponível";
		}
    ?>
</body>
</html>

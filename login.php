<?php
// Conexão com o banco de dados
$host = "localhost"; // ou o endereço do servidor do banco de dados
$nome_bd = "agrotec"; // nome do banco de dados
$usuario_bd = "root"; // usuário do banco de dados
$senha_bd = ""; // senha do banco de dados


// Estabelecer a conexão
$conexao = new mysqli($host, $usuario_bd, $senha_bd, $nome_bd);

// Verificar se a conexão foi estabelecida com sucesso
if (!$conexao) {
    die("Erro na conexão com o banco de dados: " . mysqli_connect_error());
}

// Verificar se o formulário foi enviado
if(isset($_POST['logar'])){
    // Obter os valores do formulário
    $usuario = $_POST['usuario'];
    $senha = $_POST['senha'];

    // Consultar o banco de dados para verificar se os dados existem e pertencem ao mesmo usuário
    $query = "SELECT * FROM administradores WHERE usuario = '$usuario' AND senha = '$senha'";
    $resultado = mysqli_query($conexao, $query);

    // Verificar se a consulta retornou algum resultado
    if(mysqli_num_rows($resultado) == 1){
        // Os dados de login são válidos
        session_start();
        $_SESSION['ativa'] = TRUE;

        header("Location: admin.php");



        exit(); // Certifique-se de sair do script após o redirecionamento
        // Redirecionar para a página inicial do usuário ou executar outras ações
    } else {
        // Os dados de login são inválidos
        echo "Usuário ou senha incorretos.";
    }

    // Liberar recursos
    mysqli_free_result($resultado);
}

// Fechar a conexão com o banco de dados
mysqli_close($conexao);
?>
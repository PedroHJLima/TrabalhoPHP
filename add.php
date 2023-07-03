<?php
// Configurações do banco de dados
$host = "localhost"; // ou o endereço do servidor do banco de dados
$nome_bd = "agrotec"; // nome do banco de dados
$usuario_bd = "root"; // usuário do banco de dados
$senha_bd = ""; // senha do banco de dados

// Conexão com o banco de dados
$conn = new mysqli($host, $usuario_bd, $senha_bd, $nome_bd);

// Verificar se o formulário foi enviado
if (isset($_POST['submit'])) {
    // Obter os dados do formulário
    $nome = $_POST['nome'];
    $CPF = $_POST['CPF'];
    $email = $_POST['email'];

    // Verificar se um arquivo de foto foi require_once 'dbConfig.php';
    if (isset($_FILES['foto']) && $_FILES['foto']['error'] === UPLOAD_ERR_OK) {
        // Diretório para onde o arquivo será enviado
        $diretorioDestino = "fotos/";

        // Nome do arquivo
        $nomeArquivo = $_FILES['foto']['name'];

        // Caminho completo do arquivo no servidor
        $caminhoArquivo = $diretorioDestino . $nomeArquivo;

        // Mover o arquivo para o diretório de destino
        if (move_uploaded_file($_FILES['foto']['tmp_name'], $caminhoArquivo)) {
            echo "Foto enviada com sucesso!";
        } else {
            echo "Erro ao enviar a foto.";
        }
    } else {
        echo "Nenhuma foto foi enviada.";
    }

    // Inserir novo usuário no banco de dados
    $sql = "INSERT INTO usuarios (nome, CPF, email, foto) VALUES ('$nome', '$CPF', '$email', '$caminhoArquivo')";
    if ($conn->query($sql) === TRUE) {
        echo "Novo usuário adicionado com sucesso!";
    } else {
        echo "Erro ao adicionar novo usuário: " . $conn->error;
    }
}
    // Fechar
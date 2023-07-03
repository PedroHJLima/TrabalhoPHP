<?php
// Configurações do banco de dados
$host = "localhost"; // ou o endereço do servidor do banco de dados
$nome_bd = "agrotec"; // nome do banco de dados
$usuario_bd = "root"; // usuário do banco de dados
$senha_bd = ""; // senha do banco de dados

// Função para conexão com o banco de dados
function conectarBanco() {
    global $host, $usuario_bd, $senha_bd, $nome_bd;
    
    $conn = new mysqli($host, $usuario_bd, $senha_bd, $nome_bd);
    if ($conn->connect_error) {
        die("Erro na conexão com o banco de dados: " . $conn->connect_error);
    }
    
    return $conn;
}
?>
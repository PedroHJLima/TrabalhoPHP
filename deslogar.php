<?php
// Iniciar a sessão
session_start();

// Definir $_SESSION['ativa'] como false
$_SESSION['ativa'] = false;

// Redirecionar para a página de login
header("Location: loginIndex.php");
exit;
?>
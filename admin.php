<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Painel admin</title>
</head>
<body>
	<?php if ( isset($_SESSION['ativa'])){ ?>
	<h1>
		Bem vindo ao painel administrativo</h1>
	<h2>
		Conteúdo exclusivo para quem está logado
	</h2>
	<p>
		<a href="deslogar.php">Deslogar</a>
	</p>
	<?php } else { 
		echo "Sem acesso a página";		
	} ?>
</body>
</html>
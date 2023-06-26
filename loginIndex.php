<!DOCTYPE html>
<html>
<head>
	<title>Formulário de Login</title>
</head>
<body>
	<h1>Preencha seu Login e senha:</h1>
	<form action="login.php" method="post">
		<div>
			<input type="text" name="usuario" placeholder="Seu usuário" required>
		</div>
		<div>
			<input type="password" name="senha" placeholder="Sua senha" required>
		</div>
		<input type="submit" name="logar" value="logar">
	</form>

</body>
</html>
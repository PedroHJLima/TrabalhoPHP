<?php require_once "conecta.php"; ?>
<!DOCTYPE html>
<html>
<head>
	<title>Select Banco de dados</title>
</head>
<body>
<?php 
	$usuarios = buscar($conecta, "usuarios", "nome DESC");
?>
<table border="1">
	<tr>
		<td>id</td>
		<td>Nome</td>
		<td>E-mail</td>
		<td>Senha</td>
	</tr>
<?php foreach ($usuarios as $usuario) { ?>
		<tr>
			<td><?php echo $usuario['id']; ?></td>
			<td><?php echo $usuario['nome']; ?></td>
			<td><?php echo $usuario['email']; ?></td>
			<td><?php echo $usuario['senha']; ?></td>
		</tr>
<?php } ?>
</table>
<?php 
//Criptografias 
echo $senha = "teste";
echo "<hr>";
echo $cripto = base64_encode($senha);
echo "<hr>";
echo base64_decode($cripto);
echo "<hr>";
echo md5($senha);
echo "<hr>";
echo sha1($senha);
echo "<hr>";
echo password_hash($senha, PASSWORD_DEFAULT);

?>

</body>
</html>
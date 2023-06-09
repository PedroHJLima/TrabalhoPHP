<!DOCTYPE html>
<html>
<head>
	<title>Formulários</title>
	<link rel="icon" type="image/x-icon" href="imagens/folha.png">
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<?php include('./view/header.php'); ?>
	<h1 class="bnr" > Trabalhe conosco</h1>
	
	
	<main id="conteudo">
	<p>Somo uma empresa que presamos pelo meio ambiente e que foca em técnologia para o campo, ajudando a ter menos impactos negativos em nosso meio ambiente e focando na economia do agricultor. </p>


	
	
	<form action="" method="post">
		<label>Seu Nome:</label>
		<input type="text" name="nome" placeholder="Seu Nome" maxlength="12" minlength="3" required>

		<label>Seu E-mail:</label>
		<input type="email" name="email" placeholder="Seu E-mail" required>
		
		<label>Sua idade</label>
		<input type="number" name="idade" max="9" min="1" step="2">

		<label>Seu telefone</label>
		<input type="tel" name="telefone" placeholder="Seu Telefone">

		<label>Seu perfil do Linkedin</label>
		<input type="url" name="site" placeholder="url Linkedin">

		<fieldset>			
			<legend>Seu Gênero</legend>		
			<label>
				<input value="Masculino" type="radio" name="genero">
				Masculino
			</label>
			<label>
				<input value="Feminino" type="radio" name="genero">
				Feminino
			</label>
			<label>
				<input value="Não Binário" type="radio" name="genero">
				Não Binário
			</label>
		</fieldset>


		<label> Qual sua expência profissional</label>
		
		<label>Período que atuou </label>
		<input type="date" name="data">
		
		<label>Nome da empresa</label>
		<input type="text" name="Nome da empresa">

		<label>Informe sobre as suas tarefas que desenvolvia </label>

		<textarea name="tarefas" placeholder="tarefas"></textarea>


		
		<h2>Escolha qual área de atuação  </h2>
		<label>
			<input checked type="checkbox" value="servico1" name="servico1">
			Engenheiro Agrônomo
		</label>
		<label>
			<input type="checkbox" value="servico2" name="servico2">
			Zootecnista
		</label>
		<label>
			<input type="checkbox" value="servico3" name="servico3">
			Profissional da Tecnologia da informação
		</label>
		

		<button>Cadastrar Usuário</button>
		
		<input type="reset" value="Limpar" name="limpar">
		
	</form>
	     <h3>Seu Linkedin ou seu site</h3>
		<input type="url" name="site" placeholder="Site da sua empresa">
	</main>
		
		<nav class="menu">
			<ul>
				<li> <a href="index.html">voltar</a></li>
			</ul>
		  
	<aside class="lateral">
		<h3>Você sabia ?</h3>
		<p>
			A agricultura de precisão, de acordo com a Embrapa, é um conjunto de técnicas de apoio à agricultura. Esta se dá por tecnologias de informação, sensores, mapas, geoprocessamento e se baseia em práticas agrícolas, clima e na variabilidade da planta em relação ao solo. Ou seja, são técnicas que visam melhorar a produtividade e o solo se baseando em estudos cartográficos, climatológicos e ambientais.
			A preservação e otimização do uso da água está diretamente ligada à importância que é dada a este recurso. Se o observamos como algo imprescindível, insubstituível e finito, damos muito mais valor e tendemos a usá-lo com mais sabedoria.
		</p>

 	</aside>
	
	<?php include('./view/footer.php') ?>
</body>


</html>


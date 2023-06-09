<!DOCTYPE html>
<html>
<head>
	<title>Formulários</title>
	<link rel="icon" type="image/x-icon" href="imagens/folha.png">
	<link rel="stylesheet" type="text/css" href="./style.css">
</head>
<body>
	<?php include('./view/header.php'); ?>

	<section id="banner">
		<h2>Solicitar Serviços</h2>
	</section>

   
	<div class="corpo">
		<main id="conteudo">
			<h2>Plantio</h2>
			<p>Os agrossistemas modernos são aqueles em que há o emprego de uma tecnologia mais avançada, com uma menor média de empregabilidade, haja vista que a maior parte da produção é mecanizada, com instrumentos capazes de substituir dezenas ou até centenas de trabalhadores. Esse tipo de agrossistema popularizou-se a partir da década de 1960, com a inauguração da chamada “Revolução Verde”, que se pautou na ampliação da produção através de técnicas avançadas na área da biotecnologia e da produção de equipamentos.
				Em geral, os agrossistemas modernos utilizam-se, além das técnicas acima mencionadas, de ampla gama de fertilizantes, defensivos agrícolas, técnicas de correção do solo e, em alguns casos, de produtos modificados geneticamente, conhecidos como transgênicos.
				Há sistemas produtivos que empregam uma avançada tecnologia, tanto na previsão de oscilações meteorológicas ou climáticas quanto, até mesmo, na implantação de controle sobre as espécies com a utilização dos Sistemas de Informações Geográficas (SIGs).
				A grande questão dos agrossistemas modernos é o elevado custo de seus equipamentos e o processo de concentração de terras deles resultante. Afinal, são necessários amplos investimentos para uma produção modernizada, que também elevam os lucros e diminuem a quantidade de trabalhadores, que passam a residir nas cidades.
				Outro fator é o ambiental, pois as áreas agricultáveis são ampliadas em detrimento da conservação das vegetações naturais, além da poluição dos rios e dos solos pelos agrotóxicos que escoam superficialmente com a irrigação e também em tempos de chuva. Um exemplo dessa dinâmica é o Cerrado brasileiro, que foi quase totalmente devastado em função da expansão do agronegócio que, graças às novas técnicas, passou a produzir em larga escala onde antes não havia solos propícios para tal."

			</p>
			<h2>Ànalise de Solo </h2>
			<p>Por que analisar o solo de plantio?A influência da ciência e tecnologia na agricultura é recente, de certa forma. Além disso, os pequenos produtores ainda seguem céticos sobre o tema, devido aos custos e à incerteza de resultados.

			
				No entanto, as amostras trazidas por quem implementou a análise de solo fazem essa tendência mudar aos poucos. Isso porque a análise permite ao agricultor melhores resultados no plantio. Bem como a safra, a terra também se torna mais rentável, pois a análise demonstra pontos fracos que podem ser corrigidos da forma certa.
			</p>

			<h2>Bioadubo </h2>
			<p>composto orgânico que contém nutrientes que aumentam o crescimento, enraizamento e dão mais vigor para as plantas. Apresenta um feito imediato. Elaborado a partir de tratamento biológico de materiais orgânicos e vegetais, através de uma ação de macro e microrganismos específicos do solo.

			</p>


			<h2>Para mais dúvidas entre em contato via whatsapp </h2>
			<a href="https://web.whatsapp.com.br/send?phone=559991111222222"  target="_blank">whatsapp</a>
		</main>



		<h1> Orçamento de serviço</h1>
		
		<form action="" method="post">
			<label>Seu Nome:</label>
			<input type="text" name="nome" placeholder="Seu Nome" maxlength="12" minlength="3" required>

			<input type="email" name="email" placeholder="Seu E-mail" required>

			<input type="number" name="idade" max="9" min="1" step="2">

			<input type="tel" name="telefone" placeholder="Seu Telefone">

			<input type="url" name="site" placeholder="Seu site">

			<input type="hidden" name="oculto">

				
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


			<label> Seleciona quando será efetuado</label>
			<input type="date" name="data">
			
			<h2>Escolha qual serviço sera aplicado para um orçamento </h2>
			<label>
				<input checked type="checkbox" value="serviço1" name="serviço1">
				Plantio
			</label>
			<label>
				<input type="checkbox" value="serviço2" name="serviço2">
				Análise de Solo
			</label>
			<label>
				<input type="checkbox" value="serviço3" name="serviço3">
				Bioadubo
			</label>
			<input type="url" name="site" placeholder="Site da sua empresa">

			<input type="submit" name="enviar" value="Enviar">

			<input type="reset" value="Limpar" name="limpar">
	
	</form>
	</div>
		<?php include('./view/footer.php') ?>
</body>


</html>



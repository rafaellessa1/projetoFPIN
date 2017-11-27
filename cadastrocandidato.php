<?php
include 'sessao.php';
?>
<html>
<head>
	<title>Cadastro/Atualização de Perfil de Candidato</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<meta charset="utf-8">
</head>
<body>
		<div class="t4"><h1 class="center">Povo no Poder</h1></div>

			<div class="flex-centralizado">
			<p class="botao"><a class="novap" href="sistema.php" target="_self">Início</a></p>
			<p class="botao"><a class="novap" href="buscar.php" target="_self">Buscar Informações</a></p>
			<p class="botao"><a class="novap" href="atualizar.php" target="_self">Atualizar Informações</a></p>
			<p class="botao"><a class="novap" href="cadastroeleitor.php" target="_self">Cadastrar Eleitor</a></p>
			<p class="botao"><a class="novap" href="cadastrocandidato.php" target="_self">Cadastrar Candidato</a></p>
			<p class="botao"><a class="novap" href="sobre.php" target="_self">Sobre</a></p>
			</div>


		<p style="clear: left" id="center"><img class="tam" src="logo.jpg"></p>
<div class="t1"><h1 class="center">Cadastro de Perfil do Candidato</h1></div>

<div class="t4">
<form method="POST" action="cadastrarcandidato.php">

<h3>Selecionar o partido:</h3>

<p>
<select name="partido">
<option>Partidos Brasileiros</option>
<option>PMDB – Partido do Movimento Democrático Brasileiro</option>
<option>PTB – Partido Trabalhista Brasileiro</option>
<option>PDT – Partido Democrático Trabalhista</option>
<option>PT – Partido dos Trabalhadores</option>
<option>DEM – Democratas</option>
<option>PCdoB – Partido Comunista do Brasil</option>
<option>PSB – Partido Socialista Brasileiro</option>
<option>PMDB – Partido da Social Democracia Brasileira</option>
<option>PTC – Partido Trabalhista Cristão</option>
<option>PSC – Partido Social Cristão</option>
<option>PMN – Partido da Mobilização Nacional</option>
<option>PRP – Partido Republicano Progressista</option>
<option>PPS – Partido Popular Socialista</option>
<option>PV – Partido Verde</option>
<option>PTdoB – Partido Trabalhista do Brasil</option>
<option>PP – Partido Progressista</option>
<option>PSTU – Partido Socialista dos Trabalhadores Unificado</option>
<option>PCB – Partido Comunista Brasileiro</option>
<option>PRTB – Partido Renovador Trabalhista Brasileiro</option>
<option>PHS – Partido Humanista da Solidariedade</option>
<option>PSDC – Partido Social Democrata Cristão</option>
<option>PCO – Partido da Causa Operária</option>
<option>PTN – Partido Trabalhista Nacional</option>
<option>PSL – Partido Social Liberal</option>
<option>PRB – Partido Republicano Brasileiro</option>
<option>PSOL – Partido Socialismo e Liberdade</option>
<option>PR – Partido da República</option>
<option>PSD – Partido Social Democrático</option>
<option>PPL – Partido Pátria Livre</option>
<option>PEN – partido Ecológico Nacional</option>
<option>PROS – Partido Republicano da Ordem Social</option>
<option>SDD – Solidariedade</option>
</select>
</p>

<p>
Nome do candidato:
<input type="text" name="nome"></p>
</p>
<p>
Sexo:<br><br>
<input type="radio" name="sexo" value="Masculino">
				Masculino<br><br>
				<input type="radio" name="sexo" value="Feminino">
				Feminino
</p>
<p>
Idade:
<input type="text" name="idade">
</p>
<p>
Profissão:
<input type="text" name="profissao">
</p>

<p>
Realizações em sua vida pública ou profissional:
<input type="text" name="realizacoes">
</p>

<p><button clatype="submit" name="voltar">Enviar</button></p>
</form>
</div>
		<footer id="footer">
		  <p>Luelldo Lopes / Rafael Gerbase<br>
		  Bacharelado em Sistemas de Informação - IFAL Campus Maceió</p>
		</footer>
</body>
</html>
<?php
include 'sessao.php';
?>

<html>
<head>
	<title>Buscar Dados do Candidato</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="img/favicon.png">
	<link rel="stylesheet" type="text/css" href="style.css">
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

	<form method= "POST" action="buscar.php">
		<div class="t1"><h3 class="center">Preencha as Informações</h3></div>
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
		
			<p>Nome do candidato:
				<input class="tf" type="text" name="nome">
			</p>
			<p colspan="2" align="center"><input class="pes3" type="submit" value="Pesquisar"></p>
		</div>
		</form>
	</div>
	
	<div class="container">
		<!-- PHP que procura o registro e exibe campos para alterações-->
		<?php
		error_reporting(0);
		ini_set('display_errors', 0);
		include 'conecta_mysql.inc';

		$nome = $_POST['nome'];
		$partido = utf8_decode($_POST['partido']);
        //comando sql
		$reso = mysqli_query($conexao, "select * from candidatos WHERE nome = '$nome' and partido = '$partido' ");
        //retorno do comando sql no registro procurado
		//$row = mysqli_fetch_array($reso);
		while ($row = mysqli_fetch_array($reso)) {
        //form criadoo em php que envia os dados para o atualizacao.php processar a atualização


			echo"<br/>	

			<form method='POST'>
			<p>
			
		<div>
				<p>
Nome do candidato: 
".utf8_encode($row['nome'])."</p>
</p>
<p>
Sexo: 
".utf8_encode($row['sexo'])."
				
</p>
<p>
Idade: 
".utf8_encode($row['idade'])."
</p>
<p>
Profissão: 
".utf8_encode($row['profissao'])."
</p>

<p>
Partido: 
".utf8_encode($row['partido'])."</p>
</p>

<p>
Filiações Anteriores: 
".utf8_encode($row['filiacoes'])."
</p>

<p>
Cargos Anteriores: 
".utf8_encode($row['cargos'])."
</p>

<p>
Realizações em sua vida pública ou profissional: 
".utf8_encode($row['realizacoes'])."
</p>

<p>
Idéias e Propostas: 
".utf8_encode($row['ideias'])."
</p>
		</div>
<div class='wrapper3'>
		<p colspan='2' align='center'><input class='pes' type='submit' value='Enviar'></p>
</div>
	</form>

		<div class='wrapper3'>
	
	<form method= 'POST' action='index.html'>
		

		<p colspan='2' align='center'><input class='pes' type='submit' value='Voltar'></p>

	</form>
			";
		}
		?>
	</div>
			<footer id="footer">
		  <p>Luelldo Lopes / Rafael Gerbase<br>
		  Bacharelado em Sistemas de Informação - IFAL Campus Maceió</p>
		</footer>
</body>
</html>

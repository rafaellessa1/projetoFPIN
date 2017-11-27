

<html>
	<head>
		<link rel="stylesheet" type="text/css" href="style.css">
		<title>Cadastro de Eleitor </title>
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
		<div class="t1"><h3 class="center">Cadastro de Eleitor</h3></div>
		<div class="t2">
		<form method="POST" action="cadastrareleitor.php">

			<p>Nome:
				<input class="tf2" type="text" name="nome">
			</p>

			<p>CPF:
				<input type="number" required="required" name="cpf">
			</p>

			<p>Email:

				<input class="tf2" type="email" name="email">
			</p>

			<p>Data de nascimento:

				<input type="date" name="nascimento">
			</p>

			<p>
			
			Sexo:<br><br>
			<input type="radio" name="sexo" value="Masculino">
			Masculino<br><br>
			<input type="radio" name="sexo" value="Feminino">
			Feminino
			</p>

			<p>
				Endereço:
			</p>
			<p>
				Rua:
				<input class="tf2" type="text" name="rua">
				Numero:
				<input type="number" name="numero">
			</p>
			<p>
				Bairro:
				<input type="text" name="bairro">
			</p>
			<p>
				Complemento:
				<input type="text" name="complemento">
			</p>

			<p>Telefone
				<input type="tel" maxlength="15" name="telefone">
			</p>

			</p>
			<p>Estado:
			</p>

			<p>
				<select name="Estado"> 
					<option value="estado">Selecione o Estado</option> 
					<option value="ac">Acre</option> 
					<option value="al">Alagoas</option> 
					<option value="am">Amazonas</option> 
					<option value="ap">Amapá</option> 
					<option value="ba">Bahia</option> 
					<option value="ce">Ceará</option> 
					<option value="df">Distrito Federal</option> 
					<option value="es">Espírito Santo</option> 
					<option value="go">Goiás</option> 
					<option value="ma">Maranhão</option> 
					<option value="mt">Mato Grosso</option> 
					<option value="ms">Mato Grosso do Sul</option> 
					<option value="mg">Minas Gerais</option> 
					<option value="pa">Pará</option> 
					<option value="pb">Paraíba</option> 
					<option value="pr">Paraná</option> 
					<option value="pe">Pernambuco</option> 
					<option value="pi">Piauí</option> 
					<option value="rj">Rio de Janeiro</option> 
					<option value="rn">Rio Grande do Norte</option> 
					<option value="ro">Rondônia</option> 
					<option value="rs">Rio Grande do Sul</option> 
					<option value="rr">Roraima</option> 
					<option value="sc">Santa Catarina</option> 
					<option value="se">Sergipe</option> 
					<option value="sp">São Paulo</option> 
					<option value="to">Tocantins</option> 
				</select>
			</p>
			<p>Cidade:</p>
			<p>
				<select name="Cidade">
					<option value="cidade">Selecione a Cidade</option> 
					<option>Abadia de Goiás (GO)</option> 
					<option>Abadia dos Dourados (MG)</option> 
					<option>Abadiânia (GO)</option> 
					<option>Abaeté (MG)</option> 
					<option>Abaetetuba (PA)</option> 
					<option>Abaiara (CE)</option> 
					<option>Abaíra (BA)</option> 
					<option>Abaré (BA)</option> 
					<option>Abatiá (PR)</option> 
					<option>Abdon Batista (SC)</option> 
					<option>Abelardo Luz (SC)</option> 
					<option>Abel Figueiredo (PA)</option> 
					<option>Abre-Campo (MG)</option> 
					<option>Abreu e Lima (PE)</option> 
					<option>Acaiaca (MG)</option> 
					<option>Acajutiba (BA)</option> 
					<option>Acará (PA)</option> 
					<option>Acarape (CE)</option> 
					<option>Acaraú (CE)</option> 
					<option>Acari (RN)</option> 
					<option>Acauã (PI)</option> 
					<option>Aceguá (RS)</option> 
					<option>Acopiara (CE)</option> 
					<option>Acorizal (MT)</option> 
					<option>Acrelândia (AC)</option> 
					<option>Acreúna (GO)</option> 
					<option>Açu (RN)</option> 
					<option>Açucena (MG)</option> 
				</select>
			</p>

			<p>Senha:
				<input type="password" required="required" name="senha"></p>


			<p>Confirme a Senha:
				<input type="password" required="required" name="confirmasenha">
			</p>
			<p>
				<input type="reset" name="limpar" value="Limpar">
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
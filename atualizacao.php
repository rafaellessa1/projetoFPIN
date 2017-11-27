<?php
include 'sessao.php';
include 'conecta_mysql.inc';
ini_set('default_charset', 'UTF-8');
  
  $nome = utf8_decode($_POST['nome']);
  $sexo = isset($_POST['sexo']) ? $_POST['sexo'] : '';
  $idade = utf8_decode($_POST['idade']);
  $profissao = utf8_decode($_POST['profissao']);
  $realizacoes = utf8_decode($_POST['realizacoes']);
  $partido = utf8_decode($_POST['partido']);
  $ideias = utf8_decode($_POST['ideias']);
  $filiacoes = utf8_decode($_POST['filiacoes']);
  $cargos = utf8_decode($_POST['cargos']);

//verifica se o ID esta vazio
if (isset($_POST['nome'])) {

    //atualização e script para voltar ao index
    mysqli_query($conexao,"UPDATE `candidatos` SET `nome` = '$nome', `sexo` = '$sexo', `idade` = '$idade', `profissao` = '$profissao', `realizacoes` = '$realizacoes', `partido` = '$partido', `ideias` = '$ideias', `filiacoes` = '$filiacoes', `cargos` = '$cargos' WHERE `candidatos`.`nome` = '$nome'");
    echo"
	<script>
	alert('Atualizado com sucesso'); 
	window.location='index.html'; 
	</script>
	";
    echo "$nome";
} else {

    //erro e script para voltar ao index
    echo"
	<script>
	alert('ERRO DURANTE ATUALIZAÇÃO');
	window.location='index.html';
	</script>
	";
}

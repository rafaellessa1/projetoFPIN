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
  


//verifica se campos estao vazios
if ($nome!="" && $partido!="") {
    //cadastro em sql
    $sql = mysqli_query($conexao,"INSERT INTO `candidatos` (`nome`, `sexo`, `idade`, `profissao`, `realizacoes`, `partido`) VALUES ('$nome', '$sexo', '$idade', '$profissao', '$realizacoes', '$partido')");
    if($sql){
    	include 'sucesso.php';	
    }else{
      include 'erro.php';
    }
    
} else {
    //erro
      include 'preencha.php';
}

?>
<!-- voltar ao index -->
<div class="wrapper2">
  <form method= "POST" action="index.html">
  	<button id="pes" clatype="submit" name="voltar">Voltar</button>
  </form>
</div>
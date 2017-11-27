<?php


include 'conecta_mysql.inc';
ini_set('default_charset', 'UTF-8');
  
  $nome = utf8_decode($_POST['nome']);
  $cpf = utf8_decode($_POST['cpf']);
  $email = utf8_decode($_POST['email']);
  $nascimento = utf8_decode($_POST['nascimento']);
  $sexo = isset($_POST['sexo']) ? $_POST['sexo'] : '';
  $rua = utf8_decode($_POST['rua']);
  $numero = utf8_decode($_POST['numero']);
  $bairro = utf8_decode($_POST['bairro']);
  $complemento = utf8_decode($_POST['complemento']);
  $telefone = utf8_decode($_POST['telefone']);
  $estado = isset($_POST['estado']) ? $_POST['estado'] : '';
  $cidade = isset($_POST['cidade']) ? $_POST['cidade'] : '';
  $senha = $_POST['senha'];
  $confirmasenha = $_POST['confirmasenha'];
  
  


//verifica se campos estao vazios
if ($cpf!="" && $nome!="" && $senha==$confirmasenha) {
    //cadastro em sql
    $sql = mysqli_query($conexao,"INSERT INTO `eleitores` (`nome`, `cpf`, `email`, `nascimento`, `sexo`, `rua`, `numero`, `bairro`, `complemento`, `telefone`, `estado`, `cidade`, `senha`) VALUES ('$nome', '$cpf', '$email', '$nascimento', '$sexo', '$rua', '$numero', '$bairro', '$complemento', '$telefone', '$estado', '$cidade', md5('$senha'))");
    if($sql){
    	include 'sucesso2.php';	
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
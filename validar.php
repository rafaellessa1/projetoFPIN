<?php 
// session_start inicia a sessão
session_start();
// as variáveis email e senha recebem os dados digitados na página anterior
$cpf = $_POST['cpf'];
$senha = $_POST['senha'];

// conectar com o bando de dados.
include 'conecta_mysql.inc';

// A variavel $result pega as varias $email e $senha, faz uma pesquisa na tabela de usuarios
$result = mysqli_query($conexao,"SELECT `cpf`, `senha` FROM `eleitores` WHERE `cpf` = '$cpf' AND `senha`= md5('$senha')");
/* Logo abaixo temos um bloco com if e else, verificando se a variável $result foi bem sucedida, ou seja se ela estiver encontrado algum registro idêntico o seu valor será igual a 1, se não, se não tiver registros seu valor será 0. Dependendo do resultado ele redirecionará para a pagina site.php ou retornara  para a pagina do formulário inicial para que se possa tentar novamente realizar o login */
if(mysqli_num_rows ($result) > 0 )
{
$_SESSION['cpf'] = $cpf;
$_SESSION['senha'] = $senha;
		
		

header('location:sistema.php');
}
else{
	unset ($_SESSION['email']);
	unset ($_SESSION['senha']);

	header('location:index.php');
	
	}

?>
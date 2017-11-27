<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    
<link rel="stylesheet" type="text/css" href="style.css">


    <title>Login</title>

    <!-- Custom styles for this template -->
    <link href="css2/login.css" rel="stylesheet">
  </head>

  <body>

    <div class="flex-centralizado">

      <form class="form-signin" action="validar.php" method="post">
        <h2 class="form-signin-heading">Login</h2>
        <label for="inputEmail" class="sr-only">CPF</label>
        <input type="text" name="cpf" id="inputEmail" class="form-control" placeholder="CPF" required autofocus>
        <label for="inputPassword" class="sr-only">Senha</label>
        <input type="password" name="senha" id="inputPassword" class="form-control" placeholder="Senha" required>
        <div class="checkbox">
          <label>
            <!--<input type="checkbox" value="Lembre-me"> Lembre-me-->
          </label>
        <br>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Entrar</button>
        
      </form>

      <form action='cadastroeleitor.php'>
    

    <p colspan='2' align='center'><input class='pes' type='submit' value='Cadastrar Eleitor'></p>

  </form>
      </div>

    </div> <!-- /container -->
  </body>
</html>

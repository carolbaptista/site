<!DOCTYPE html>
<html lang="pt-br">
<head>

<meta charset="utf-8" />
<meta name="viewport" content="width=device-width" />
  <title>Biblioteca</title>
  
  <link rel="stylesheet" href="css/bootstrap.min.css" />
  <link rel="stylesheet" href="estilo/estilo.css" />
  <link rel="icon" type="image/jpg" href="campo/icone.jpg">
  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
  <script src="js/bootstrap.min.js"></script>

</head>
<body class="container">
<header>
<p></p>
  <h2>Biblioteca</h2>
  <p></p>
  </br>
</header>




  <h3 style="font-family: arial;">Login</h3>
  <hr/>


<form method="POST" action="logado.php">
  <div class="form-group">
    <label for="exampleInputEmail1">Email</label>
    <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Digite o seu email">
    <small id="emailHelp" class="form-text text-muted">Nós nunca compartilhamos as suas informações com ninguém.</small>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Senha</label>
    <input type="password" name="senha" class="form-control" id="exampleInputPassword1" placeholder="Digite a sua senha">
  </div>
  Se deseja se cadastrar, <a href="cadastro.php">clique aqui!</a>
  
  <p></p>
 <button type="submit" class="btn btn-danger">Entrar</button>
  
</form>



</body>
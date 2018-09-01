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
<p></p>
<header>
	<h2>Biblioteca</h2>
	<p></p>
	</br>

</header>
<nav>
	<h3 style="font-family: arial;">Cadastro</h3>
	<hr/>
	

</nav>
<form method="POST" action="cadastrofeito.php">
  <div class="form-group">
    <label for="exampleInputEmail1"> Email</label>
    <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Digite o seu email">
  
  </div>
 
  <label for="exampleInputnome1">Nome</label>
    <input type="text" class="form-control" name="nomeu" id="exampleInputNome1" aria-describedby="nomeHelp" placeholder="Digite o seu nome">
   
<p></p>
    <label for="exampleInputTelefone1">Telefone</label>
    <input type="text" name="telefone" class="form-control" id="exampleInputTelefone1" aria-describedby="telefoneHelp" placeholder="Digite o seu telefone">
    <p></p>
    <label for="exampleInputEndereco1">Endereço</label>
    <input type="text" name="endereco" class="form-control" id="exampleInputEndereco1" aria-describedby="enderecoHelp" placeholder="Digite o seu endereço">
   <p></p>
    <label for="exampleInputcpf1">CPF</label>
    <input type="cpf" name="cpf" class="form-control" id="exampleInputcpf1" aria-describedby="cpfHelp" placeholder="Digite o seu CPF">
  <p></p>
  <div class="form-group">
    <label for="exampleInputPassword1">Senha</label>
    <input type="password" name="senha" class="form-control" id="exampleInputPassword1" placeholder="Digite a sua senha">
  	<small id="passwordHelp" class="form-text text-muted">Nós nunca compartilhamos as suas informações com ninguém.</small>
   </div>
  <button type="submit" class="btn btn-primary">Enviar</button>
</form>



</body>
</html>
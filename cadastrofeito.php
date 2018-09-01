<meta charset="utf-8" />
<meta name="viewport" content="width=device-width" />
	<title>Biblioteca</title>
	
  <link rel="stylesheet" href="css/bootstrap.min.css" />
	<link rel="stylesheet" href="estilo/estilo.css" />
  <link rel="icon" type="image/jpg" href="campo/icone.jpg">
	
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
	<script src="js/bootstrap.min.js"></script>
<body class="container">
<?php
include "conexao.php";

$nomeu=$_POST['nomeu'];
$telefone=$_POST['telefone'];
$endereco=$_POST['endereco'];
$cpf=$_POST['cpf'];
$email=$_POST['email'];
$senha=$_POST['senha'];

$sql= "INSERT INTO cadastrousu (nomeu, telefone, endereco, cpf, email, senha ) VALUES ('$nomeu', '$telefone', '$endereco', '$cpf', '$email', '$senha')";

if($conn->query($sql) ===TRUE){
	echo "<h3 class='container text-center ' >Usuário inserido com sucesso</h3>";
} else{
	echo "Error: ".$sql. "<br>".$conn->error;
}
$conn->close();

?>
<button type="submit" class="btn btn-danger"><a href="login.php" style="text-decoration: none; color: #fff;">Fazer login</a></button>
</body>
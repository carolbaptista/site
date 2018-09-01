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

<h3 style="font-family: arial;"> O que deseja fazer?</h3>
<hr/>

 <button type="submit" class="btn btn-danger"><a style="text-decoration: none; color: #fff;" href="alterar.php">Inserir um livro</a></button>
  <p></p>
  
  <button type="submit" class="btn btn-danger">Alterar um livro</button>
  <p></p>
  <button type="submit" class="btn btn-danger">Excluir um livro</button>
<p></p>

<?php
include "conexao.php";
$email = $_POST['email'];
$senha = $_POST['senha'];

$sql = "SELECT nome FROM cadastrousu WHERE senha='$senha' AND  email='$email'";
$result = $conn->query($sql);

if($result->num_rows>0){
	while($row = $result->fetch_assoc()){
		echo $row['nomeu']."<br/>";
		
	}
}
else{
	echo "oi, deu errado";
	
}
$conn->close();
?>

</body>
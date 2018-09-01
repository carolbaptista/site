<!DOCTYPE html>
<html lang="p t-br">
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
   <button type="submit" class="btn btn-danger"><a style="text-decoration: none; color: #fff;" href="login.php">Login</a></button>

 
 <button type="submit" class="btn btn-danger"><a style="text-decoration: none; color: #fff;" href="Cadastro.php">Cadastro</a> </button>
<p></p>
<br/>
</header>
<nav>
	<h3 style="font-family: arial;">Livros</h3>
  <hr/>
  <p></p>
  </br>
</nav>
 

<table class="table" >
  <thead>
    <tr>
      <th scope="col">Nome</th>
      <th scope="col">Editora</th>
      <th scope="col">Autor</th>
      <th scope="col">Ano</th>
      <th scope="col">Genero</th>
    </tr>
  </thead>
  <tbody>

<?php

include"conexao.php";



$sql= "SELECT * FROM livros";
$result= $conn->query($sql);

if ($result->num_rows > 0) {

 //output data of each row
 while($row = $result->fetch_assoc()) 
{
  
  echo" <tr>
      <td>".$row['nomel']."</td>
      <td>".$row['editora']."</td>
      <td>".$row['autor']."</td>
      <td>".$row['ano']."</td>
      <td> ".$row['genero']."</td>
    </tr> ";


}
} 
else{
  echo "0 resultados";
}
$conn->close();


 ?>
 </tbody>
</table>



<p></p>
 


 </body>
<?php 

include "conexao.php";

$nomel=$_POST['nomel'];
$editora=$_POST['editora'];
$autor=$_POST['autor'];
$ano=$_POST['ano'];
$genero=$_POST['genero'];


$sql= "INSERT INTO livros (nomel, editora, autor, ano, genero) VALUES ('$nomel', '$editora', '$autor', '$ano', '$genero')";

if($conn->query($sql) ===TRUE){
  echo "<h3 class='container text-center ' >Livro inserido com sucesso</h3>";
} else{
  echo "Error: ".$sql. "<br>".$conn->error;
}
$conn->close();




 ?>
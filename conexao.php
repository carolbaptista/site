<?php
$servername= "localhost";
$username= "root";
$password= "";
$dbname= "biblioteca";

//Cria a conexão
$conn= new mysqli($servername, $username, $password, $dbname);
//Checa a conexão
if($conn->connect_error)
{
 die("Connection failed: ".$conn->connect_error);
}


?>
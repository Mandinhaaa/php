<?php 
$servername = "localhost";
$username = "root";
$password = "";
$databasename = "cafebistro";

// criacao de conexao
$conn = new mysqli($servername, $username, $password, $databasename);

// verificando a conexao 
if (!$conn){
    die ("conexao falhou".mysql_connect_error());
}



?>

<?php
$host = "localhost";
$dbname = "doacoesagasalhos";
$username = "root";
$password = "Mixolidio#9";

$conexao = new mysqli($host, $username, $password, $dbname); 
if ($conexao->connect_error) { 
    die("Connection failed: " . $conexao->connect_error); 
}  
?>

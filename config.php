<?php 
// configurações de conexão com o banco de dados

$servername = 'localhost';
$port = '3307'; // Porta específica para o MySQL
$username = "root";
$password = ""; // Senha do usuário root, se houver
$database = "formulario";

// Criar a conexão
$conn = new mysqli($servername, $username, $password, $database, $port);

// Verificar a conexão
if ($conn->connect_error) {
    die("Falha na conexão: " . $conn->connect_error);
}

?>

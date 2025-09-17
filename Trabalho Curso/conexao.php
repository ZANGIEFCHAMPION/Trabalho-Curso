<?php
$servername = "localhost";
$username = "root";
$password = "";  // ou sua senha, se tiver
$database = "quiz_final";

// Cria conexão
$conn = new mysqli($servername, $username, $password, $database);

// Verifica
if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}
?>

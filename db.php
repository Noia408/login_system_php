<?php
$host = 'localhost';
$user = 'noah';
$pass = '1234'; // coloque sua senha do MySQL aqui
$db = 'login_system';

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}
?>

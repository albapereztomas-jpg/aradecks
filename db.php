<?php
$host = "localhost";
$user = "root";
$password = ""; // En XAMPP por defecto viene vacío
$dbname = "aradecks";

// Crear la conexión
$conn = new mysqli($host, $user, $password, $dbname);

// Comprobar si hay algún error
if ($conn->connect_error) {
    die("Error crítico de conexión: " . $conn->connect_error);
}

// Configurar caracteres en UTF-8 para evitar problemas con tildes o la Ñ
$conn->set_charset("utf8");
?>
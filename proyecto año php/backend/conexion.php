<?php
$host = "localhost";
$user = "RecetasDeLaCasaDeOlivo";        // tu usuario de MySQL
$pass = "Lukitas279797";            // tu contraseña de MySQL (si tienes)
$db   = "db_RecetasDeLaCasaDeOlivo";  // el nombre de la base

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die("❌ Error de conexión: " . $conn->connect_error);
}
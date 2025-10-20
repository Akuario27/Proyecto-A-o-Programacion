<?php
session_start();
include "conexion.php";

if (!isset($_SESSION['usuario_id'])) {
    die("❌ Debes iniciar sesión para publicar un consejo");
}

$usuario_id = $_SESSION['usuario_id'];
$nombre = $_SESSION['nombre'];
$consejo = $_POST['consejo'];

$sql = "INSERT INTO consejos (usuario_id, nombre_usuario, consejo)
        VALUES (?, ?, ?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param("iss", $usuario_id, $nombre, $consejo);

if ($stmt->execute()) {
    echo "✅ Consejo publicado correctamente";
} else {
    echo "❌ Error al publicar el consejo: " . $conn->error;
}
?>

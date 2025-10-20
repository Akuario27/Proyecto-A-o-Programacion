<?php
include "conexion.php";

$sql = "SELECT nombre_usuario, consejo, fecha_publicacion FROM consejos ORDER BY fecha_publicacion DESC";
$result = $conn->query($sql);

$consejos = [];
while ($row = $result->fetch_assoc()) {
    $consejos[] = $row;
}

header('Content-Type: application/json');
echo json_encode($consejos);
?>

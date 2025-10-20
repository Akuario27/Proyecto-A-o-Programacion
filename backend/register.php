<?php
include "conexion.php";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $correo = $_POST['correo'];
    $pass = password_hash($_POST['contraseña'], PASSWORD_DEFAULT);

    $sql = "INSERT INTO registro (nombre, apellido, correo, contraseña)
            VALUES (?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssss", $nombre, $apellido, $correo, $pass);

    if ($stmt->execute()) {
        echo "✅ Usuario registrado correctamente";
    } else {
        echo "❌ Error: " . $conn->error;
    }
}
?>

<?php
$_serv = "Localhost";
$user = "root";
$psw = "";
$bd = "escuela";
// Conexión a la base de datos (reemplaza los valores con los de tu servidor)
$conexion = new mysqli("localhost", "root", "", "escuela");

// Verificar conexión
if ($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
}

// Recibir el ID del usuario a eliminar
$nom = $_POST['nom'];

// Eliminar usuario de la tabla usuarios
$sql = "DELETE FROM estudiante WHERE nombre ='$nom'";

if ($conexion->query($sql) === TRUE) {
    echo "Usuario eliminado correctamente :)";
} else {
    echo "Error al eliminar :( " . $conexion->error;
}

// Cerrar conexión
$conexion->close();
?>

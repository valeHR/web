<?php
$_serv = "Localhost";
$user = "root";
$psw = "";
$bd = "escuela";
$conexion = new mysqli("localhost", "root", "", "escuela");

// Verificar conexión
if ($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
}

// Recibir datos del formulario
      $nom = $_POST['nom'];
      $mat = $_POST['mat'];
      $pas = $_POST['pas'];
      $cu = $_POST['cu'];

// Actualizar datos en la tabla usuarios
$sql = //"UPDATE estudiante SET nombre='$nom', matricula='$mat', password='$pas', cuatrimestre='$cu',  WHERE nombre ='$nom'";
"UPDATE estudiante
SET nombre = '$nom'
WHERE id = '$nom'";

if ($conexion->query($sql) === TRUE) {
    echo "Datos actualizados con exito :) ";
} else {
    echo "Error al actualizar usuario: " . $conexion->error;
}

// Cerrar conexión
$conexion->close();
?>
"UPDATE usuarios SET nombre='$nombre', email='$email' WHERE id='$id'";
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

// Recibir datos del formulario
      $nom = $_POST['nom'];
      $mat = $_POST['mat'];
      $pas = $_POST['pas'];
      $cu = $_POST['cu'];

// Insertar datos en la tabla usuarios
$sql = ("INSERT INTO estudiante (nombre, matricula, password, cuatrimestre)values('$nom', '$mat', '$pas', '$cu')");

if ($conexion->query($sql) === TRUE) {
    echo "Usuario creado exitosamente";
} else {
    echo "Error al crear usuario: " . $conexion->error;
}

#---------------------------------------Cerrar conexión abajo-------------------------------------------------
$conexion->close();
?>

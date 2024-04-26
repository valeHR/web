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

// Consulta SQL para obtener todos los usuarios
#$sql="SELECT id, nombre, matricula, password, cuatrimestre FROM estudiante"; 
 
$nom = $_POST['nom'];
$sql = "SELECT * FROM estudiante WHERE nombre ='$nom'"; 

$resultado = $conexion->query($sql);
// Mostrar los usuarios en la tabla
if ($resultado->num_rows > 0) {
    while($fila = $resultado->fetch_assoc()) {
        echo "<tr>
                <td>".$fila["id"]."</td>
                <td>".$fila["nombre"]."</td>
                <td>".$fila["matricula"]."</td>
                <td>".$fila["password"]."</td>
                <td>".$fila["cuatrimestre"]."</td>
                <td>
                    <button>Editar</button>
                    <button>Eliminar</button>
                </td>
              </tr>";
    }
} else {
    echo "<tr><td colspan='4'>No se encontraron usuarios</td></tr>";
}

#---------------------------------------Cerrar conexión abajo-------------------------------------------------
$conexion->close();
?>
<?php
// Conectamos a la base de datos
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "andres_bello_db";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Query para obtener los datos de la tabla estudiantes
$sql = "SELECT nombre, apellido, rut, direccion, carrera, fecha_periodo FROM estudiantes";
$result = $conn->query($sql);

// Creamos un string para almacenar los datos
$datos = "";

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $datos .= $row["nombre"] . "," . $row["apellido"] . "," . $row["rut"] . "," . $row["direccion"] . "," . $row["carrera"] . "," . $row["fecha_periodo"] . "\n";
    }
}

// Devolvemos los datos
echo $datos;

$conn->close();
?>
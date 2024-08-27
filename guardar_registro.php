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

// Obtenemos los datos del formulario
$nombre = $_POST["nombre"];
$apellido = $_POST["apellido"];
$rut = $_POST["rut"];
$direccion = $_POST["direccion"];
$carrera = $_POST["carrera"];
$fecha_periodo = $_POST["fecha_periodo"];

// Query para insertar los datos en la tabla estudiantes
$sql = "INSERT INTO estudiantes (nombre, apellido, rut, direccion, carrera, fecha_periodo) VALUES ('$nombre', '$apellido', '$rut', '$direccion', '$carrera', '$fecha_periodo')";
$result = $conn->query($sql);

// Si se insertaron los datos correctamente, redirigimos al usuario a la página de resultados
if ($result) {
    header("Location: resultados.php");
    exit;
} else {
    echo "Error al insertar los datos";
}

$conn->close();
?>
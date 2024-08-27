
<html>
    
<head>
    <link rel="stylesheet" type="text/css" href="estilos.css">
</head>

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
$sql = "SELECT * FROM estudiantes";
$result = $conn->query($sql);

// Mostramos los datos en una tabla
echo "<h1>Resultados</h1>";
echo "<table border='1'>";
echo "<tr><th>Nombre</th><th>Apellido</th><th>Rut</th><th>Dirección</th><th>Carrera</th><th>Fecha del período académico</th></tr>";
while ($row = $result->fetch_assoc()) {
    echo "<tr><td>" . $row["nombre"] . "</td><td>" . $row["apellido"] . "</td><td>" . $row["rut"] . "</td><td>" . $row["direccion"] . "</td><td>" . $row["carrera"] . "</td><td>" . $row["fecha_periodo"] . "</td></tr>";
}
echo "</table>";

// Agregamos un enlace para volver al index.php
echo "<p><a href='index.php'>Volver al registro estudiantil</a></p>";

$conn->close();
?>
</html>
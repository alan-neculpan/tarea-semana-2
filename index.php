<!DOCTYPE html>
<html lang="es">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Registro Estudiantil</title>
   <link rel="stylesheet" href="estilos.css">
</head>

<body>
   <h1>Registro Estudiantil</h1>
   <form action="guardar_registro.php" method="post">
      <label for="nombre">Nombre:</label>
      <input type="text" id="nombre" name="nombre" required><br><br>
      <label for="apellido">Apellido:</label>
      <input type="text" id="apellido" name="apellido" required><br><br>
      <label for="rut">Rut:</label>
      <input type="text" id="rut" name="rut" required><br><br>
      <label for="direccion">Dirección:</label>
      <input type="text" id="direccion" name="direccion" required><br><br>
      <label for="carrera">Carrera a cursar:</label>
      <select id="carrera" name="carrera" required>
         <option value="">Seleccione una carrera</option>
         <option value="Ingeniería en Informática">Ingeniería en Informática</option>
         <option value="Ingeniería en Electrónica">Ingeniería en Electrónica</option>
         <option value="Ingeniería en Mecánica">Ingeniería en Mecánica</option>
         <option value="Ingeniería en Civil">Ingeniería en Civil</option>
      </select><br><br>
      <label for="fecha_periodo">Fecha del período académico:</label>
      <input type="date" id="fecha_periodo" name="fecha_periodo" required><br><br>
      <input type="submit" value="Guardar Registro">
   </form>
</body>

</html>
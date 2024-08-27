// Función para actualizar la tabla
function actualizarTabla() {
    var xhr = new XMLHttpRequest();

    // Abrimos la conexión con el archivo PHP que devuelve los datos
    xhr.open("GET", "obtener_datos.php", true);

    // Enviamos la solicitud
    xhr.send();

    // Procesamos la respuesta
    xhr.onreadystatechange = function() {
        if (xhr.readyState === 4 && xhr.status === 200) {
            // Obtenemos la respuesta en formato texto
            var respuesta = xhr.responseText;

            // Creamos un elemento tabla
            var tabla = document.getElementById("tabla-estudiantes");

            // Limpiamos la tabla anterior
            tabla.innerHTML = "";

            // Creamos la cabecera de la tabla
            var cabecera = document.createElement("tr");
            cabecera.innerHTML = `
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Rut</th>
                <th>Dirección</th>
                <th>Carrera</th>
                <th>Fecha del período académico</th>
            `;
            tabla.appendChild(cabecera);

            // Procesamos la respuesta y creamos las filas de la tabla
            var filas = respuesta.split("\n");
            for (var i = 0; i < filas.length; i++) {
                var fila = document.createElement("tr");
                var celdas = filas[i].split(",");
                for (var j = 0; j < celdas.length; j++) {
                    var celda = document.createElement("td");
                    celda.innerHTML = celdas[j];
                    fila.appendChild(celda);
                }
                tabla.appendChild(fila);
            }
        }
    };
}

// Llamamos a la función para actualizar la tabla cada 5 segundos
setInterval(actualizarTabla, 5000);
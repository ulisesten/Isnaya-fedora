<?php
    // Datos de la base de datos
    $host = "localhost";
    $usuario = "root";
    $password = "admin@123";
    $nombre_de_la_db = "peliculas";

    // Conexión a la base de datos
    $conexion = new mysqli($host, $usuario, $password, $nombre_de_la_db);

    // Verificar si hay errores de conexión
    if ($conexion->connect_error) {
        die("Error de conexión: " . $conexion->connect_error);
    } else {
        echo 'Todo bien';
    }

    // Consulta a la base de datos
    $sql = "SELECT nombre, autor, duracion FROM peliculas";
    $resultado = $conexion->query($sql);

    // Crear una tabla HTML para mostrar los datos de la tabla peliculas
    echo "<table border='1'>";
    echo "<tr><th>Nombre</th><th>Autor</th><th>Duración</th></tr>";

    // Mostrar los datos de la tabla peliculas
    while ($fila = $resultado->fetch_assoc()) {
        echo "<tr>";
        echo "<td>".$fila['nombre']."</td>";
        echo "<td>".$fila['autor']."</td>";
        echo "<td>".$fila['duracion']."</td>";
        echo "</tr>";
    }

    echo "</table>";

    //Cerrar la conexión a la base de datos
    $conexion->close();
?>
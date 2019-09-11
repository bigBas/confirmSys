<?php

    try {
        $conexion = new PDO('mysql:host=localhost;dbname=vistaPrueba', 'root', '123');
        return $conexion;
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }

function limpiarDatos($datos) {
    $datos = trim($datos);
    $datos = stripcslashes($datos);
    $datos = htmlspecialchars($datos);
    return $datos;
}

conexion($db_config);

?>

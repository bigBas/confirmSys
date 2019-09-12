<?php

    try {
        $conexion = new PDO('mysql:host=132.248.80.194;dbname=sat', 'vista_sat', 'vista');
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

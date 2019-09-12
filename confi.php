<?php

if(isset($_POST['sub'])){

    $cuenta = $_POST['accountNum'];  
    limpiarDatos($cuenta);
    //echo $cuenta;
    
    $statement = $conexion->prepare('SELECT id_cuenta, nombre FROM vw_alumnos_inscritos WHERE id_cuenta = :cuenta && semestre = "2020-1"');
    
    $statement->execute(array(
        ':cuenta'=>$cuenta
    ));
    
    $results = $statement->fetch();
}

?>
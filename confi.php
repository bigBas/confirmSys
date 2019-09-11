<?php

if(isset($_POST['sub'])){

    $cuenta = $_POST['accountNum'];  
    limpiarDatos($cuenta);
    //echo $cuenta;
    
    $statement = $conexion->prepare('SELECT accNum, name FROM alInsc WHERE accNum = :cuenta && period = "2020-I"');
    
    $statement->execute(array(
        ':cuenta'=>$cuenta
    ));
    
    $results = $statement->fetch();
}

?>
<?php

$conexion = new mysqli("localhost", "id20310678_final", "Lhtdocs2024@", "id20310678_lasj")
    if($conexion){
        echo "la gestion fue exitosa";
    }else{
        echo "Fallo la gestion";
    }

?>
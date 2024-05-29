<?php
    include("abre.php");
    $Nombre = $_POST['Nombre'];
    $Pais   = $_POST['Pais'];
    $Comentario = $_POST['Comentario'];

    $consulta = "INSERT INTO comentario(Nombre, Pais, Comentario)  VALUES
    ('$Nombre','$Pais','$Comentario')";

    if($conexion->query($consulta) === TRUE){
        header("Location: formulario.html");
    }else{
        echo "Error: " . $consulta . "<br>" .$conexion->error;
    }
    $conexion->close();
?>
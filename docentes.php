<?php

include("conexion.php");

$sql = "SELECT * FROM docentes";

$resultado = mysqli_query($conexion, $sql);

while($fila = mysqli_fetch_assoc($resultado))
{
    echo $fila['nombre'] . "<br>";
}

?>
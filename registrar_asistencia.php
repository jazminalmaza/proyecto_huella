<?php
include("conexion.php");
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Registrar Asistencia</title>

    <style>
        body{
            font-family: Arial, sans-serif;
            text-align:center;
            margin-top:50px;
        }

        form{
            width:400px;
            margin:auto;
        }

        select, button{
            width:100%;
            padding:10px;
            margin-top:10px;
        }

        .resultado{
            margin-top:20px;
            font-size:18px;
        }
    </style>

</head>

<body>

<h1>Registrar Asistencia</h1>

<form method="POST">

    <label>Seleccionar docente:</label>

    <select name="docente_id" required>

        <?php

        $consulta = mysqli_query($conexion, "SELECT * FROM docente");

        while($fila = mysqli_fetch_assoc($consulta)){
        ?>

        <option value="<?php echo $fila['id']; ?>">
            <?php echo $fila['nombre']." ".$fila['apellido']; ?>
        </option>

        <?php
        }
        ?>

    </select>

    <button type="submit">
        Registrar Asistencia
    </button>

</form>

<?php

if($_SERVER["REQUEST_METHOD"] == "POST"){

    $docente_id = $_POST['docente_id'];

    $fecha = date("Y-m-d");
    $hora = date("H:i:s");

    // Hora de tolerancia para la demo
    $hora_tolerancia = "08:15:00";

    if($hora > $hora_tolerancia){
        $estado = "Tarde";
    }else{
        $estado = "Presente";
    }

    $sql = "INSERT INTO asistencias
    (docente_id, fecha, hora_registro, estado)
    VALUES
    ('$docente_id', '$fecha', '$hora', '$estado')";

    if(mysqli_query($conexion, $sql)){

        echo "<div class='resultado'>";

        echo "<h3>Asistencia registrada correctamente</h3>";

        echo "Fecha: ".$fecha."<br><br>";

        echo "Hora registrada: ".$hora."<br><br>";

        echo "Estado: ".$estado;

        echo "</div>";

    }else{

        echo "Error: ".mysqli_error($conexion);

    }
}

?>

</body>
</html>
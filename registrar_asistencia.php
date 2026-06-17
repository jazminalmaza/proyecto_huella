<?php
include("conexion.php");
?>

<!DOCTYPE html>
<html>

<head>
    <title>Registrar Asistencia</title>
    <link rel="stylesheet" href="estilo.css">
</head>

<body>

<h1>Registrar Asistencia</h1>

<form method="POST">

    <label>Seleccionar docente:</label>

    <select name="docente_id" required>

        <?php

        $consulta = mysqli_query(
            $conexion,
            "SELECT * FROM docentes"
        );

        while($fila = mysqli_fetch_assoc($consulta))
        {
        ?>

            <option value="<?php echo $fila['id']; ?>">
                <?php echo $fila['nombre']; ?>
            </option>

        <?php
        }
        ?>

    </select>

    <button type="submit">
        Registrar
    </button>

</form>

<?php

if($_SERVER["REQUEST_METHOD"] == "POST")
{
    $docente_id = $_POST['docente_id'];

    $fecha = date("Y-m-d");

    $hora = date("H:i:s");

    $estado = "Presente";

    $sql = "
    INSERT INTO asistencias
    (
        docente_id,
        fecha,
        hora_registro,
        estado
    )
    VALUES
    (
        '$docente_id',
        '$fecha',
        '$hora',
        '$estado'
    )";

    mysqli_query($conexion,$sql);

    echo "<h3>Asistencia registrada correctamente</h3>";
}

?>

</body>
</html>
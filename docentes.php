<form method="POST">

    <input type="text"
           name="legajo"
           placeholder="Legajo">

    <input type="text"
           name="nombre"
           placeholder="Nombre">

    <input type="text"
           name="apellido"
           placeholder="Apellido">

    <input type="number"
           name="huella"
           placeholder="ID Huella">

    <button>
        Guardar
    </button>

</form>

<?php

if($_SERVER["REQUEST_METHOD"] == "POST")
{
    $id_huella = $_POST['id_huella'];
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $legajo = $_POST['legajo'];

    $sql = "
    INSERT INTO docentes
    (id_huella, nombre, apellido, legajo)
    VALUES
    ('$id_huella', '$nombre', '$apellido', '$legajo')
    ";

    mysqli_query($conexion, $sql);

    echo "Docente guardado correctamente";
}

?>
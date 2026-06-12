<!DOCTYPE html>
<html>

<head>

    <title>Registrar Docente</title>

    <link rel="stylesheet" href="estilo.css">

</head>

<body>

<h2>Registrar Docente</h2>

<form action="guardar_docente.php" method="POST">

    <input
        type="text"
        name="legajo"
        placeholder="Legajo"
        required>

    <br><br>

    <input
        type="text"
        name="nombre"
        placeholder="Nombre"
        required>

    <br><br>

    <input
        type="text"
        name="apellido"
        placeholder="Apellido"
        required>

    <br><br>

    <input
        type="text"
        name="cargo"
        placeholder="Cargo"
        required>

    <br><br>

    <input
        type="text"
        name="materia"
        placeholder="Materia">

    <br><br>

    <input
        type="number"
        name="huella"
        placeholder="ID Huella">

    <br><br>

    <button type="submit">

        Guardar

    </button>

</form>

</body>

</html>
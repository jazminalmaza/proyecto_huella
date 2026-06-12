<!DOCTYPE html>
<html>

<head>
    <title>Registrar Asistencia</title>
    <link rel="stylesheet" href="estilo.css">
</head>

<body>

<div class="container">

    <div class="card">

        <h2>Registrar Asistencia</h2>

        <form action="guardar_asistencia.php" method="POST">

            <input
                type="number"
                name="huella"
                placeholder="Ingrese ID de Huella"
                required>

            <button type="submit">
                Registrar
            </button>

        </form>

    </div>

</div>

</body>

</html>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Alumnos</title>
</head>

<body>

    <h1>Lista de alumnos</h1>

    <table border="1">

        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Carrera</th>
        </tr>

        <?php foreach ($alumnos as $alumno): ?>

            <tr>
                <td><?php echo $alumno->id; ?></td>
                <td><?php echo $alumno->nombre; ?></td>
                <td><?php echo $alumno->carrera; ?></td>
            </tr>

        <?php endforeach; ?>

    </table>

</body>
</html>
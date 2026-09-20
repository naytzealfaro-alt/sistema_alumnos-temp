<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="<?php echo base_url('assets/css/estilo.css'); ?>">
    <meta charset="UTF-8">
    <title>Formulario de alumnos</title>
</head>

<body>

    <div class="contenedor">

        <h1>Registro de alumno</h1>

        <form method="post">

            <label>Nombre:</label>
            <input type="text" name="nombre" required>

            <label>Apellido:</label>
            <input type="text" name="apellido" required>

            <label>Correo:</label>
            <input type="email" name="correo" required>

            <label>Edad:</label>
            <input type="number" name="edad" required>

            <button type="submit">Guardar</button>

        </form>

    </div>

</body>
</html>
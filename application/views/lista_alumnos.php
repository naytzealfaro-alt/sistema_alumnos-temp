<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Lista de Alumnos</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

    <div class="container mt-5">

        <h1 class="text-center mb-4">Lista de Alumnos</h1>

        <div class="table-responsive">

            <table class="table table-bordered table-striped table-hover">

                <thead class="table-dark">
                    <tr>
                        <th>ID</th>
                        <th>Nombre</th>
                        <th>Apellido paterno</th>
                        <th>Apellido materno</th>
                        <th>Matrícula</th>
                        <th>Teléfono</th>
                        <th>Domicilio</th>
                        <th>Estatus</th>
                    </tr>
                </thead>

                <tbody>

                    <?php foreach ($alumnos as $alumno): ?>

                        <tr>
                            <td><?= $alumno->id_alumn ?></td>
                            <td><?= $alumno->nombre_al ?></td>
                            <td><?= $alumno->apaterno_al ?></td>
                            <td><?= $alumno->amaterno_al ?></td>
                            <td><?= $alumno->matricula_al ?></td>
                            <td><?= $alumno->tel_al ?></td>
                            <td><?= $alumno->dom_al ?></td>

                            <td>
                                <?php if ($alumno->estatus_al == 1): ?>
                                    <span class="badge bg-success">Activo</span>
                                <?php else: ?>
                                    <span class="badge bg-danger">Inactivo</span>
                                <?php endif; ?>
                            </td>
                        </tr>

                    <?php endforeach; ?>

                </tbody>

            </table>

        </div>

        <div class="mt-3">
            <a href="<?= site_url('alumnos') ?>" class="btn btn-primary">
                Regresar al formulario
            </a>
        </div>

    </div>

</body>

</html>
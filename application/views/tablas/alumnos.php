<?php $this->load->view('partials/hero'); ?>

<main class="table-container">
    <section class="table-card">

        <h1 class="form-title">
            <i class="bi bi-people"></i>
            Lista de alumnos
        </h1>

        <p class="form-subtitle">
            Consulta de los alumnos registrados en SAES.
        </p>

        <div class="table-responsive">
            <table class="table table-saes table-hover align-middle">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Nombre</th>
                        <th>Apellido paterno</th>
                        <th>Apellido materno</th>
                        <th>Matrícula</th>
                        <th>Teléfono</th>
                        <th>Estatus</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if (!empty($alumnos)): ?>
                        <?php foreach ($alumnos as $i => $alumno): ?>
                            <tr>
                                <th><?= $i + 1 ?></th>
                                <td><?= htmlspecialchars($alumno->nombre_al) ?></td>
                                <td><?= htmlspecialchars($alumno->apaterno_al) ?></td>
                                <td><?= htmlspecialchars($alumno->amaterno_al) ?></td>
                                <td><?= htmlspecialchars($alumno->matricula_al) ?></td>
                                <td><?= htmlspecialchars($alumno->tel_al) ?></td>
                                <td><?= htmlspecialchars($alumno->estatus_al) ?></td>
                            </tr>
                        <?php endforeach; ?>
                    <?php else: ?>
                        <tr>
                            <td colspan="7" class="text-center text-secondary">
                                No hay alumnos registrados.
                            </td>
                        </tr>
                    <?php endif; ?>
                </tbody>
            </table>
        </div>

    </section>
</main>
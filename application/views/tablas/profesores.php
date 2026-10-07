<?php $this->load->view('partials/hero'); ?>

<main class="table-container">
    <section class="table-card">

        <h1 class="form-title">
            <i class="bi bi-person-badge"></i>
            Lista de profesores
        </h1>

        <p class="form-subtitle">
            Consulta de los profesores registrados en SAES.
        </p>

        <div class="table-responsive">
            <table class="table table-saes table-hover align-middle">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>No. control</th>
                        <th>Nombre</th>
                        <th>Apellido paterno</th>
                        <th>Apellido materno</th>
                        <th>Teléfono</th>
                        <th>Estatus</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if (!empty($profesores)): ?>
                        <?php foreach ($profesores as $i => $profesor): ?>
                            <tr>
                                <th><?= $i + 1 ?></th>
                                <td><?= htmlspecialchars($profesor->nocontrol_prof) ?></td>
                                <td><?= htmlspecialchars($profesor->nombre_prof) ?></td>
                                <td><?= htmlspecialchars($profesor->apellidop_prof) ?></td>
                                <td><?= htmlspecialchars($profesor->apellidom_prof) ?></td>
                                <td><?= htmlspecialchars($profesor->tel_prof) ?></td>
                                <td><?= htmlspecialchars($profesor->estatus_prof) ?></td>
                            </tr>
                        <?php endforeach; ?>
                    <?php else: ?>
                        <tr>
                            <td colspan="7" class="text-center text-secondary">
                                No hay profesores registrados.
                            </td>
                        </tr>
                    <?php endif; ?>
                </tbody>
            </table>
        </div>

    </section>
</main>
<?php $this->load->view('partials/hero'); ?>

<main class="table-container">
    <div class="table-card">

        <h2 class="titulo-seccion">Materias</h2>

        <div class="table-responsive">
            <table class="table table-saes table-hover align-middle">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Materia</th>
                        <th scope="col">Docente</th>
                        <th scope="col">Grupo</th>
                        <th scope="col">Día</th>
                        <th scope="col">Inicio</th>
                        <th scope="col">Fin</th>
                    </tr>
                </thead>
                <tbody class="table-group-divider">
                    <?php if (!empty($horarios)): ?>
                        <?php foreach ($horarios as $i => $h): ?>
                            <tr>
                                <th scope="row"><?= $i + 1 ?></th>
                                <td><?= htmlspecialchars($h['materia']) ?></td>
                                <td><?= htmlspecialchars($h['docente']) ?></td>
                                <td><?= htmlspecialchars($h['grupo']) ?></td>
                                <td><?= htmlspecialchars($h['dia']) ?></td>
                                <td><?= date('H:i', strtotime($h['hora_inicio'])) ?></td>
                                <td><?= date('H:i', strtotime($h['hora_fin'])) ?></td>
                            </tr>
                        <?php endforeach; ?>
                    <?php else: ?>
                        <tr>
                            <td colspan="7" class="text-center text-secondary">
                                No hay horarios registrados.
                            </td>
                        </tr>
                    <?php endif; ?>
                </tbody>
            </table>
        </div>

    </div>
</main>
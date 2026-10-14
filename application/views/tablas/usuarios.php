<?php $this->load->view('partials/hero'); ?>

<main class="table-container">
    <section class="table-card">

        <h1 class="form-title">
            <i class="bi bi-person-gear"></i>
            Lista de usuarios
        </h1>

        <p class="form-subtitle">
            Consulta de usuarios registrados. La contraseña nunca se muestra en esta vista.
        </p>

        <div class="table-responsive">
            <table class="table table-saes table-hover align-middle">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>ID usuario</th>
                        <th>Descripción</th>
                        <th>Estatus</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if (!empty($usuarios)): ?>
                        <?php foreach ($usuarios as $i => $usuario): ?>
                            <tr>
                                <th><?= $i + 1 ?></th>
                                <td><?= htmlspecialchars($usuario->id_usuario) ?></td>
                                <td><?= htmlspecialchars($usuario->descricpion_usua) ?></td>
                                <td><?= htmlspecialchars($usuario->estatus_usua) ?></td>
                            </tr>
                        <?php endforeach; ?>
                    <?php else: ?>
                        <tr>
                            <td colspan="4" class="text-center text-secondary">
                                No hay usuarios registrados.
                            </td>
                        </tr>
                    <?php endif; ?>
                </tbody>
            </table>
        </div>

    </section>
</main>
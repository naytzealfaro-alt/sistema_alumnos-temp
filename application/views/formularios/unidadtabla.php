
<?php $this->load->view('partials/hero'); ?>

<main class="form-container">
    <div class="form-card">

        <h1 class="form-title">
            Lista de Unidades
        </h1>

        <p class="form-subtitle">
            Consulta de las unidades registradas en el sistema SAES.
        </p>

        <div class="table-responsive">
            <table class="table table-dark table-hover align-middle">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Descripción de la unidad</th>
                    </tr>
                </thead>

                <tbody>
                    <?php if (!empty($unidades)): ?>
                        <?php foreach ($unidades as $unidad): ?>
                            <tr>
                                <td>
                                    <?= html_escape($unidad->id_unidad); ?>
                                </td>

                                <td>
                                    <?= html_escape($unidad->descripcion_uni); ?>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    <?php else: ?>
                        <tr>
                            <td colspan="2" class="text-center">
                                No hay unidades registradas.
                            </td>
                        </tr>
                    <?php endif; ?>
                </tbody>
            </table>
        </div>

        <a
            href="<?= site_url('unidad_controll'); ?>"
            class="btn btn-primary"
        >
            <i class="bi bi-plus-circle"></i>
            Registrar unidad
        </a>

    </div>
</main>

<?php $this->load->view('partials/hero'); ?>

<main class="form-container">
    <section class="form-card">
        <h1 class="form-title">Editar unidad</h1>
        <p class="form-subtitle">Actualiza la descripción de la unidad académica.</p>

        <?php if (!empty($unidad)): ?>
            <form action="<?= site_url('unidad_controll/actualizar/' . rawurlencode($unidad->id_unidad)); ?>" method="POST">
                <input type="hidden" name="<?= $this->security->get_csrf_token_name(); ?>" value="<?= $this->security->get_csrf_hash(); ?>">

                <div class="mb-3">
                    <label for="descripcion_uni" class="form-label">Descripción de la unidad</label>
                    <input
                        type="text"
                        class="form-control"
                        id="descripcion_uni"
                        name="descripcion_uni"
                        value="<?= html_escape($unidad->descripcion_uni); ?>"
                        maxlength="150"
                        required
                    >
                </div>

                <div class="d-flex flex-wrap gap-2 justify-content-end">
                    <a class="btn-outline-darkmode text-decoration-none" href="<?= site_url('unidad_controll/lista'); ?>">Cancelar</a>
                    <button type="submit" class="btn-purple">Guardar cambios</button>
                </div>
            </form>
        <?php else: ?>
            <div class="alert alert-warning" role="alert">No se encontró la unidad solicitada.</div>
        <?php endif; ?>
    </section>
</main>

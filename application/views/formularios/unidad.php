<?php $this->load->view('partials/hero'); ?>

<main class="form-container">
    <div class="form-card">
        <h1 class="form-title">Registro de unidades</h1>
        <p class="form-subtitle">Registra y consulta las unidades académicas del sistema SAES.</p>

        <?php if (!empty($mensaje)): ?>
            <div class="alert alert-info"><?= html_escape($mensaje); ?></div>
        <?php endif; ?>
        <?php if ($this->session->flashdata('success')): ?>
            <div class="alert alert-success"><?= html_escape($this->session->flashdata('success')); ?></div>
        <?php endif; ?>
        <?php if ($this->session->flashdata('error')): ?>
            <div class="alert alert-danger"><?= html_escape($this->session->flashdata('error')); ?></div>
        <?php endif; ?>

        <div class="section-title"><i class="bi bi-journal-text"></i> Información de la unidad</div>
        <form action="<?= site_url('Unidad_controll/guardar'); ?>" method="post">
            <input type="hidden" name="<?= $this->security->get_csrf_token_name(); ?>" value="<?= $this->security->get_csrf_hash(); ?>">
            <div class="mb-3">
                <label for="descripcion_uni" class="form-label">Descripción de la unidad</label>
                <input type="text" class="form-control" id="descripcion_uni" name="descripcion_uni"
                       maxlength="100" placeholder="Escribe la descripción de la unidad" required>
            </div>
            <div class="d-flex gap-2 flex-wrap">
                <button type="submit" class="btn btn-purple"><i class="bi bi-save"></i> Guardar unidad</button>
                <a href="<?= site_url('Unidad_controll/lista'); ?>" class="btn btn-outline-darkmode">
                    <i class="bi bi-list-ul"></i> Ver unidades
                </a>
            </div>
        </form>
    </div>
</main>

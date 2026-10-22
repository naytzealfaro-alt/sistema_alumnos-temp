
<?php $this->load->view('partials/hero'); ?>

<main class="form-container">
    <div class="form-card">

        <div class="text-center mb-4">
            <h2 class="form-title">
                <i class="bi bi-journal-check"></i>
                Captura de calificaciones
            </h2>

            <p class="form-subtitle">
                Registra y consulta los datos de captura de calificaciones.
            </p>
        </div>

        <!-- Mensajes del sistema -->
        <?php if ($this->session->flashdata('success')): ?>
            <div class="alert alert-success">
                <?= html_escape($this->session->flashdata('success')); ?>
            </div>
        <?php endif; ?>

        <?php if ($this->session->flashdata('error')): ?>
            <div class="alert alert-danger">
                <?= html_escape($this->session->flashdata('error')); ?>
            </div>
        <?php endif; ?>

        <!-- Formulario -->
        <h5 class="mb-3">
            <i class="bi bi-pencil-square"></i>
            Registrar captura
        </h5>

        <form action="<?= site_url('Captcal_controll/guardar'); ?>" method="post">
            <input type="hidden" name="<?= $this->security->get_csrf_token_name(); ?>" value="<?= $this->security->get_csrf_hash(); ?>">

            <div class="mb-3">
                <label for="id_alumn" class="form-label">
                    ID del alumno
                </label>
                <input
                    type="number"
                    class="form-control"
                    id="id_alumn"
                    name="id_alumn"
                    min="1"
                    required
                    placeholder="Ingresa el ID del alumno">
            </div>

            <div class="mb-3">
                <label for="id_mat" class="form-label">
                    ID de la materia
                </label>
                <input
                    type="number"
                    class="form-control"
                    id="id_mat"
                    name="id_mat"
                    min="1"
                    required
                    placeholder="Ingresa el ID de la materia">
            </div>

            <div class="mb-3">
                <label for="id_unidad" class="form-label">
                    ID de la unidad
                </label>
                <input
                    type="number"
                    class="form-control"
                    id="id_unidad"
                    name="id_unidad"
                    min="1"
                    required
                    placeholder="Ingresa el ID de la unidad">
            </div>

            <div class="mb-4">
                <label for="id_prof" class="form-label">
                    ID del profesor
                </label>
                <input
                    type="number"
                    class="form-control"
                    id="id_prof"
                    name="id_prof"
                    min="1"
                    required
                    placeholder="Ingresa el ID del profesor">
            </div>

            <div class="d-flex flex-wrap gap-2">
                <button type="submit" class="btn btn-purple">
                    <i class="bi bi-save"></i>
                    Guardar captura
                </button>

                <button type="reset"
                        class="btn btn-outline-darkmode">
                    <i class="bi bi-eraser"></i>
                    Limpiar
                </button>
            </div>

        </form>

        <hr class="my-4">

        <!-- Tabla de registros -->
        <h5 class="mb-3">
            <i class="bi bi-list-ul"></i>
            Capturas registradas
        </h5>

        <div class="table-responsive">
            <table class="table table-dark table-hover align-middle">
                <thead>
                    <tr>
                        <th>ID captura</th>
                        <th>ID alumno</th>
                        <th>ID materia</th>
                        <th>ID unidad</th>
                        <th>ID profesor</th>
                    </tr>
                </thead>

                <tbody>
                    <?php if (!empty($capturas)): ?>

                        <?php foreach ($capturas as $captura): ?>
                            <tr>
                                <td>
                                    <?= html_escape($captura->id_captcal); ?>
                                </td>
                                <td>
                                    <?= html_escape($captura->id_alumn); ?>
                                </td>
                                <td>
                                    <?= html_escape($captura->id_mat); ?>
                                </td>
                                <td>
                                    <?= html_escape($captura->id_unidad); ?>
                                </td>
                                <td>
                                    <?= html_escape($captura->id_prof); ?>
                                </td>
                            </tr>
                        <?php endforeach; ?>

                    <?php else: ?>

                        <tr>
                            <td colspan="5" class="text-center py-4">
                                <i class="bi bi-inbox"></i>
                                No hay capturas registradas.
                            </td>
                        </tr>

                    <?php endif; ?>
                </tbody>
            </table>
        </div>

    </div>
</main>


<?php $this->load->view('partials/hero'); ?>

<main class="form-container">
    <div class="form-card">

        <!-- Encabezado -->
        <div class="text-center mb-4">
            <h2 class="form-title">
                <i class="bi bi-person-vcard-fill"></i>
                Inscripción a grupos
            </h2>

            <p class="form-subtitle">
                Registra y consulta las inscripciones de los alumnos.
            </p>
        </div>

        <!-- Mensajes -->
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
            Registrar inscripción
        </h5>

        <form action="<?= site_url('Inscripciongrup_controll/guardar'); ?>" method="post">
            <input type="hidden" name="<?= $this->security->get_csrf_token_name(); ?>" value="<?= $this->security->get_csrf_hash(); ?>">

            <div class="mb-3">
                <label for="id_grup" class="form-label">
                    ID del grupo
                </label>

                <input
                    type="number"
                    class="form-control"
                    id="id_grup"
                    name="id_grup"
                    min="1"
                    required
                    placeholder="Ingresa el ID del grupo">
            </div>

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

            <div class="mb-4">
                <label for="estatus_insg" class="form-label">
                    Estatus de la inscripción
                </label>

                <select
                    class="form-select"
                    id="estatus_insg"
                    name="estatus_insg"
                    required>

                    <option value="">Selecciona un estatus</option>
                    <option value="Activa">Activa</option>
                    <option value="Inactiva">Inactiva</option>

                </select>
            </div>

            <div class="d-flex flex-wrap gap-2">
                <button type="submit" class="btn btn-purple">
                    <i class="bi bi-save"></i>
                    Guardar inscripción
                </button>

                <button type="reset"
                        class="btn btn-outline-darkmode">
                    <i class="bi bi-eraser"></i>
                    Limpiar
                </button>
            </div>

        </form>

        <hr class="my-4">

        <!-- Tabla de inscripciones -->
        <h5 class="mb-3">
            <i class="bi bi-list-ul"></i>
            Inscripciones registradas
        </h5>

        <div class="table-responsive">
            <table class="table table-dark table-hover align-middle">
                <thead>
                    <tr>
                        <th>ID inscripción</th>
                        <th>ID grupo</th>
                        <th>ID alumno</th>
                        <th>Estatus</th>
                    </tr>
                </thead>

                <tbody>
                    <?php if (!empty($inscripciones)): ?>

                        <?php foreach ($inscripciones as $inscripcion): ?>
                            <tr>
                                <td>
                                    <?= html_escape($inscripcion->id_insg); ?>
                                </td>

                                <td>
                                    <?= html_escape($inscripcion->id_grup); ?>
                                </td>

                                <td>
                                    <?= html_escape($inscripcion->id_alumn); ?>
                                </td>

                                <td>
                                    <?= html_escape($inscripcion->estatus_insg); ?>
                                </td>
                            </tr>
                        <?php endforeach; ?>

                    <?php else: ?>

                        <tr>
                            <td colspan="4" class="text-center py-4">
                                <i class="bi bi-inbox"></i>
                                No hay inscripciones registradas.
                            </td>
                        </tr>

                    <?php endif; ?>
                </tbody>
            </table>
        </div>

    </div>
</main>

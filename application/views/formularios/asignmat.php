
<?php $this->load->view('partials/hero'); ?>

<main class="form-container">
    <div class="form-card">

        <!-- Título -->
        <div class="text-center mb-4">
            <h2 class="form-title">
                <i class="bi bi-journal-plus"></i>
                Asignación de materias
            </h2>

            <p class="form-subtitle">
                Registra y consulta las materias asignadas a los alumnos y profesores.
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

        <!-- Formulario de registro -->
        <h5 class="mb-3">
            <i class="bi bi-pencil-square"></i>
            Registrar asignación
        </h5>

        <form action="<?= site_url('asignmat_controll/guardar'); ?>"
              method="post">

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
                    Guardar asignación
                </button>

                <button type="reset"
                        class="btn btn-outline-darkmode">
                    <i class="bi bi-eraser"></i>
                    Limpiar
                </button>
            </div>

        </form>

        <hr class="my-4">

        <!-- Tabla de asignaciones -->
        <h5 class="mb-3">
            <i class="bi bi-list-ul"></i>
            Asignaciones registradas
        </h5>

        <div class="table-responsive">
            <table class="table table-dark table-hover align-middle">
                <thead>
                    <tr>
                        <th>ID asignación</th>
                        <th>ID materia</th>
                        <th>ID alumno</th>
                        <th>ID profesor</th>
                    </tr>
                </thead>

                <tbody>
                    <?php if (!empty($asignaciones)): ?>

                        <?php foreach ($asignaciones as $asignacion): ?>
                            <tr>
                                <td>
                                    <?= html_escape($asignacion->id_asignmat); ?>
                                </td>

                                <td>
                                    <?= html_escape($asignacion->id_mat); ?>
                                </td>

                                <td>
                                    <?= html_escape($asignacion->id_alumn); ?>
                                </td>

                                <td>
                                    <?= html_escape($asignacion->id_prof); ?>
                                </td>
                            </tr>
                        <?php endforeach; ?>

                    <?php else: ?>

                        <tr>
                            <td colspan="4" class="text-center py-4">
                                <i class="bi bi-inbox"></i>
                                No hay asignaciones registradas.
                            </td>
                        </tr>

                    <?php endif; ?>
                </tbody>
            </table>
        </div>

    </div>
</main>

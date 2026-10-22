
<?php $this->load->view('partials/hero'); ?>

<main class="form-container">
    <div class="form-card">

        <!-- Encabezado -->
        <div class="text-center mb-4">
            <h2 class="form-title">
                <i class="bi bi-book-half"></i>
                Gestión de materias
            </h2>

            <p class="form-subtitle">
                Registra y consulta las materias del sistema SAES.
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
            <i class="bi bi-plus-circle"></i>
            Registrar materia
        </h5>

        <form action="<?= site_url('Materias/guardar'); ?>"
              method="post">

            <div class="mb-3">
                <label for="descripcion_mat" class="form-label">
                    Nombre de la materia
                </label>

                <input
                    type="text"
                    class="form-control"
                    id="descripcion_mat"
                    name="descripcion_mat"
                    maxlength="40"
                    required
                    placeholder="Ejemplo: Bases de datos">
            </div>

            <div class="mb-4">
                <label for="estatus_mat" class="form-label">
                    Estatus de la materia
                </label>

                <select
                    class="form-select"
                    id="estatus_mat"
                    name="estatus_mat"
                    required>

                    <option value="">Selecciona un estatus</option>
                    <option value="Activa">Activa</option>
                    <option value="Inactiva">Inactiva</option>

                </select>
            </div>

            <div class="d-flex flex-wrap gap-2">
                <button type="submit" class="btn btn-purple">
                    <i class="bi bi-save"></i>
                    Guardar materia
                </button>

                <button type="reset"
                        class="btn btn-outline-darkmode">
                    <i class="bi bi-eraser"></i>
                    Limpiar
                </button>
            </div>

        </form>

        <hr class="my-4">

        <!-- Tabla de materias -->
        <h5 class="mb-3">
            <i class="bi bi-list-ul"></i>
            Materias registradas
        </h5>

        <div class="table-responsive">
            <table class="table table-dark table-hover align-middle">
                <thead>
                    <tr>
                        <th>ID materia</th>
                        <th>Descripción</th>
                        <th>Estatus</th>
                    </tr>
                </thead>

                <tbody>
                    <?php if (!empty($materias)): ?>

                        <?php foreach ($materias as $materia): ?>
                            <tr>
                                <td>
                                    <?= html_escape($materia->id_mat); ?>
                                </td>

                                <td>
                                    <?= html_escape($materia->descripcion_mat); ?>
                                </td>

                                <td>
                                    <?= html_escape($materia->estatus_mat); ?>
                                </td>
                            </tr>
                        <?php endforeach; ?>

                    <?php else: ?>

                        <tr>
                            <td colspan="3" class="text-center py-4">
                                <i class="bi bi-inbox"></i>
                                No hay materias registradas.
                            </td>
                        </tr>

                    <?php endif; ?>
                </tbody>
            </table>
        </div>

    </div>
</main>


<?php $this->load->view('partials/hero'); ?>

<main class="form-container">
    <div class="form-card">

        <!-- Encabezado -->
        <div class="text-center mb-4">
            <h2 class="form-title">
                <i class="bi bi-people-fill"></i>
                Gestión de grupos
            </h2>

            <p class="form-subtitle">
                Registra y consulta los grupos del sistema SAES.
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
            <i class="bi bi-person-plus-fill"></i>
            Registrar grupo
        </h5>

        <form action="<?= site_url('Grupos_controll/guardar'); ?>" method="post">
              method="post">

            <div class="mb-3">
                <label for="descripcion_grup" class="form-label">
                    Descripción del grupo
                </label>

                <input
                    type="text"
                    class="form-control"
                    id="descripcion_grup"
                    name="descripcion_grup"
                    maxlength="40"
                    required
                    placeholder="Ejemplo: 5A-TICs">
            </div>

            <div class="mb-4">
                <label for="estatus_grup" class="form-label">
                    Estatus del grupo
                </label>

                <select
                    class="form-select"
                    id="estatus_grup"
                    name="estatus_grup"
                    required>

                    <option value="">Selecciona un estatus</option>
                    <option value="Activo">Activo</option>
                    <option value="Inactivo">Inactivo</option>

                </select>
            </div>

            <div class="d-flex flex-wrap gap-2">
                <button type="submit" class="btn btn-purple">
                    <i class="bi bi-save"></i>
                    Guardar grupo
                </button>

                <button type="reset"
                        class="btn btn-outline-darkmode">
                    <i class="bi bi-eraser"></i>
                    Limpiar
                </button>
            </div>

        </form>

        <hr class="my-4">

        <!-- Tabla de grupos -->
        <h5 class="mb-3">
            <i class="bi bi-list-ul"></i>
            Grupos registrados
        </h5>

        <div class="table-responsive">
            <table class="table table-dark table-hover align-middle">
                <thead>
                    <tr>
                        <th>ID grupo</th>
                        <th>Descripción</th>
                        <th>Estatus</th>
                    </tr>
                </thead>

                <tbody>
                    <?php if (!empty($grupos)): ?>

                        <?php foreach ($grupos as $grupo): ?>
                            <tr>
                                <td>
                                    <?= html_escape($grupo->id_grup); ?>
                                </td>

                                <td>
                                    <?= html_escape($grupo->descripcion_grup); ?>
                                </td>

                                <td>
                                    <?= html_escape($grupo->estatus_grup); ?>
                                </td>
                            </tr>
                        <?php endforeach; ?>

                    <?php else: ?>

                        <tr>
                            <td colspan="3" class="text-center py-4">
                                <i class="bi bi-inbox"></i>
                                No hay grupos registrados.
                            </td>
                        </tr>

                    <?php endif; ?>
                </tbody>
            </table>
        </div>

    </div>
</main>

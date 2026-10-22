<?php $this->load->view('partials/hero'); ?>

<main class="form-container">

    <div class="form-card">

        <h1 class="form-title text-center">
            <i class="bi bi-person-plus"></i>
            Registro de Usuarios
        </h1>

        <p class="form-subtitle text-center">
            Registro de información del usuario del sistema SAES.
        </p>

        <form
            action="<?= base_url('index.php/usuarios_froms/guardar'); ?>"
            method="POST"
        >

            <!-- ID USUARIO -->
            <div class="mb-3">

                <label for="id_usuario" class="form-label">
                    ID Usuario
                </label>

                <div class="input-group">

                    <span class="input-group-text">
                        <i class="bi bi-person-badge"></i>
                    </span>

                    <input
                        type="text"
                        class="form-control"
                        id="id_usuario"
                        name="id_usuario"
                        placeholder="ID del usuario"
                        required
                    >

                </div>

            </div>


            <!-- CONTRASEÑA -->
            <div class="mb-3">

                <label for="contraseña_usua" class="form-label">
                    Contraseña
                </label>

                <div class="input-group">

                    <span class="input-group-text">
                        <i class="bi bi-lock"></i>
                    </span>

                    <input
                        type="password"
                        class="form-control"
                        id="contraseña_usua"
                        name="contraseña_usua"
                        placeholder="Contraseña"
                        required
                    >

                </div>

            </div>


            <!-- DESCRIPCIÓN -->
            <div class="mb-3">

                <label for="descricpion_usua" class="form-label">
                    Descripción
                </label>

                <div class="input-group">

                    <span class="input-group-text">
                        <i class="bi bi-card-text"></i>
                    </span>

                    <input
                        type="text"
                        class="form-control"
                        id="descricpion_usua"
                        name="descricpion_usua"
                        placeholder="Descripción del usuario"
                        required
                    >

                </div>

            </div>


            <!-- ESTATUS -->
            <div class="mb-3">

                <label for="estatus_usua" class="form-label">
                    Estatus
                </label>

                <div class="input-group">

                    <span class="input-group-text">
                        <i class="bi bi-toggle-on"></i>
                    </span>

                    <select
                        class="form-select"
                        id="estatus_usua"
                        name="estatus_usua"
                        required
                    >

                        <option
                            value=""
                            selected
                            disabled
                        >
                            Selecciona el estatus
                        </option>

                        <option value="Activo">
                            Activo
                        </option>

                        <option value="Inactivo">
                            Inactivo
                        </option>

                    </select>

                </div>

            </div>


            <!-- ESTADO -->
            <div class="status-box">

                <span class="status-dot"></span>

                <span class="status-text">
                    Listo para registrar usuario
                </span>

            </div>


            <!-- BOTONES -->
            <div class="d-flex flex-wrap gap-2 justify-content-end mt-4">

                <button
                    type="reset"
                    class="btn-outline-darkmode"
                >
                    <i class="bi bi-arrow-counterclockwise"></i>
                    Limpiar
                </button>

                <button
                    type="submit"
                    class="btn-purple"
                >
                    <i class="bi bi-person-plus"></i>
                    Registrar usuario
                </button>

            </div>

        </form>

    </div>

</main>
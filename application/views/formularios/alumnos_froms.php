<?php $this->load->view('partials/hero'); ?>

<main class="form-container">

    <div class="form-card">

        <h1 class="form-title">
            Formulario de Alumnos
        </h1>

        <p class="form-subtitle">
            Registro de información académica y personal del alumno.
        </p>

        <form
            action="<?= base_url('index.php/alumnos_froms/guardar'); ?>"
            method="POST"
        >

            <div class="section-title">
                <i class="bi bi-person"></i>
                Datos personales
            </div>

            <div class="row">

                <div class="col-md-4 mb-3">

                    <label for="nombre_al" class="form-label">
                        Nombre del alumno
                    </label>

                    <div class="input-group">

                        <span class="input-group-text">
                            <i class="bi bi-person"></i>
                        </span>

                        <input
                            type="text"
                            class="form-control"
                            id="nombre_al"
                            name="nombre_al"
                            placeholder="Nombre"
                            required
                        >

                    </div>

                </div>

                <div class="col-md-4 mb-3">

                    <label for="apaterno_al" class="form-label">
                        Apellido paterno
                    </label>

                    <div class="input-group">

                        <span class="input-group-text">
                            <i class="bi bi-person"></i>
                        </span>

                        <input
                            type="text"
                            class="form-control"
                            id="apaterno_al"
                            name="apaterno_al"
                            placeholder="Apellido paterno"
                            required
                        >

                    </div>

                </div>

                <div class="col-md-4 mb-3">

                    <label for="amaterno_al" class="form-label">
                        Apellido materno
                    </label>

                    <div class="input-group">

                        <span class="input-group-text">
                            <i class="bi bi-person"></i>
                        </span>

                        <input
                            type="text"
                            class="form-control"
                            id="amaterno_al"
                            name="amaterno_al"
                            placeholder="Apellido materno"
                            required
                        >

                    </div>

                </div>

            </div>

            <div class="section-title">
                <i class="bi bi-mortarboard"></i>
                Información escolar
            </div>

            <div class="row">

                <div class="col-md-6 mb-3">

                    <label for="matricula_al" class="form-label">
                        Matrícula
                    </label>

                    <div class="input-group">

                        <span class="input-group-text">
                            <i class="bi bi-card-text"></i>
                        </span>

                        <input
                            type="text"
                            class="form-control"
                            id="matricula_al"
                            name="matricula_al"
                            placeholder="Matrícula"
                            required
                        >

                    </div>

                </div>

                <div class="col-md-6 mb-3">

                    <label for="estatus_al" class="form-label">
                        Estado
                    </label>

                    <div class="input-group">

                        <span class="input-group-text">
                            <i class="bi bi-toggle-on"></i>
                        </span>

                        <select
                            class="form-select"
                            id="estatus_al"
                            name="estatus_al"
                            required
                        >

                            <option value="">
                                Selecciona un estado
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

            </div>

            <div class="section-title">
                <i class="bi bi-telephone"></i>
                Información de contacto
            </div>

            <div class="row">

                <div class="col-md-6 mb-3">

                    <label for="tel_al" class="form-label">
                        Teléfono
                    </label>

                    <div class="input-group">

                        <span class="input-group-text">
                            <i class="bi bi-telephone"></i>
                        </span>

                        <input
                            type="tel"
                            class="form-control"
                            id="tel_al"
                            name="tel_al"
                            placeholder="Número telefónico"
                            required
                        >

                    </div>

                </div>

                <div class="col-md-6 mb-3">

                    <label for="dom_al" class="form-label">
                        Domicilio
                    </label>

                    <div class="input-group">

                        <span class="input-group-text">
                            <i class="bi bi-house"></i>
                        </span>

                        <input
                            type="text"
                            class="form-control"
                            id="dom_al"
                            name="dom_al"
                            placeholder="Domicilio"
                            required
                        >

                    </div>

                </div>

            </div>

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
                    Guardar alumno
                </button>

            </div>

        </form>

    </div>

</main>
<?php $this->load->view('partials/hero'); ?>

<main class="form-container">

    <div class="form-card">

        <h1 class="form-title">
            Formulario de Profesores
        </h1>

        <p class="form-subtitle">
            Registro de información personal y laboral del profesor.
        </p>

        <form
            action="<?= base_url('index.php/profesores_froms/guardar'); ?>"
            method="POST"
        >

            <!-- DATOS DEL PROFESOR -->
            <div class="section-title">
                <i class="bi bi-person-vcard"></i>
                Datos del profesor
            </div>

            <div class="row">

                <!-- NÚMERO DE CONTROL -->
                <div class="col-md-6 mb-3">

                    <label
                        for="nocontrol_prof"
                        class="form-label"
                    >
                        Número de control
                    </label>

                    <div class="input-group">

                        <span class="input-group-text">
                            <i class="bi bi-card-text"></i>
                        </span>

                        <input
                            type="text"
                            class="form-control"
                            id="nocontrol_prof"
                            name="nocontrol_prof"
                            maxlength="15"
                            placeholder="Número de control"
                            required
                        >

                    </div>

                </div>


                <!-- NOMBRE -->
                <div class="col-md-6 mb-3">

                    <label
                        for="nombre_prof"
                        class="form-label"
                    >
                        Nombre
                    </label>

                    <div class="input-group">

                        <span class="input-group-text">
                            <i class="bi bi-person"></i>
                        </span>

                        <input
                            type="text"
                            class="form-control"
                            id="nombre_prof"
                            name="nombre_prof"
                            maxlength="15"
                            placeholder="Nombre del profesor"
                            required
                        >

                    </div>

                </div>

            </div>


            <div class="row">

                <!-- APELLIDO PATERNO -->
                <div class="col-md-6 mb-3">

                    <label
                        for="apellidop_prof"
                        class="form-label"
                    >
                        Apellido paterno
                    </label>

                    <div class="input-group">

                        <span class="input-group-text">
                            <i class="bi bi-person"></i>
                        </span>

                        <input
                            type="text"
                            class="form-control"
                            id="apellidop_prof"
                            name="apellidop_prof"
                            maxlength="15"
                            placeholder="Apellido paterno"
                            required
                        >

                    </div>

                </div>


                <!-- APELLIDO MATERNO -->
                <div class="col-md-6 mb-3">

                    <label
                        for="apellidom_prof"
                        class="form-label"
                    >
                        Apellido materno
                    </label>

                    <div class="input-group">

                        <span class="input-group-text">
                            <i class="bi bi-person"></i>
                        </span>

                        <input
                            type="text"
                            class="form-control"
                            id="apellidom_prof"
                            name="apellidom_prof"
                            maxlength="15"
                            placeholder="Apellido materno"
                            required
                        >

                    </div>

                </div>

            </div>


            <!-- INFORMACIÓN DE CONTACTO -->
            <div class="section-title">
                <i class="bi bi-telephone"></i>
                Información de contacto
            </div>


            <!-- TELÉFONO -->
            <div class="mb-3">

                <label
                    for="tel_prof"
                    class="form-label"
                >
                    Teléfono
                </label>

                <div class="input-group">

                    <span class="input-group-text">
                        <i class="bi bi-telephone"></i>
                    </span>

                    <input
                        type="tel"
                        class="form-control"
                        id="tel_prof"
                        name="tel_prof"
                        maxlength="35"
                        placeholder="Número telefónico"
                        required
                    >

                </div>

            </div>


            <!-- DOMICILIO -->
            <div class="mb-3">

                <label
                    for="dom_prof"
                    class="form-label"
                >
                    Domicilio
                </label>

                <div class="input-group">

                    <span class="input-group-text align-items-start pt-3">
                        <i class="bi bi-house"></i>
                    </span>

                    <textarea
                        class="form-control"
                        id="dom_prof"
                        name="dom_prof"
                        maxlength="80"
                        placeholder="Domicilio completo"
                        rows="4"
                        required
                    ></textarea>

                </div>

            </div>


            <!-- ESTADO DEL PROFESOR -->
            <div class="section-title">
                <i class="bi bi-toggle-on"></i>
                Estado del profesor
            </div>


            <!-- ESTATUS -->
            <div class="mb-3">

                <label
                    for="estatus_prof"
                    class="form-label"
                >
                    Estatus
                </label>

                <div class="input-group">

                    <span class="input-group-text">
                        <i class="bi bi-person-check"></i>
                    </span>

                    <select
                        class="form-select"
                        id="estatus_prof"
                        name="estatus_prof"
                        required
                    >

                        <option
                            value=""
                            selected
                            disabled
                        >
                            Selecciona el estatus
                        </option>

                        <option value="alta">
                            Alta
                        </option>

                        <option value="baja">
                            Baja
                        </option>

                    </select>

                </div>

            </div>


            <!-- ESTADO -->
            <div class="status-box">

                <span class="status-dot"></span>

                <span class="status-text">
                    Listo para registrar profesor
                </span>

            </div>


            <!-- BOTONES -->
            <div class="d-flex flex-wrap gap-2 justify-content-end mt-4">

                <!-- LIMPIAR -->
                <button
                    type="reset"
                    class="btn-outline-darkmode"
                >
                    <i class="bi bi-arrow-counterclockwise"></i>
                    Limpiar
                </button>


                <!-- GUARDAR -->
                <button
                    type="submit"
                    class="btn-purple"
                >
                    <i class="bi bi-person-plus"></i>
                    Guardar profesor
                </button>

            </div>

        </form>

    </div>

</main>
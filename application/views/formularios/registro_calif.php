<?php $this->load->view('partials/hero'); ?>

<main class="form-container">

    <div class="form-card">

        <h1 class="form-title text-center">
            <i class="bi bi-pencil-square"></i>
            Registro de Calificaciones
        </h1>

        <p class="form-subtitle text-center">
            Registro de la calificación correspondiente al alumno, profesor, materia y grupo.
        </p>

        <form
            action="<?= base_url('index.php/registro_calif/guardar'); ?>"
            method="POST"
        >

            <!-- PROFESOR -->
            <div class="mb-3">

                <label
                    for="id_profesor"
                    class="form-label"
                >
                    ID Profesor
                </label>

                <div class="input-group">

                    <span class="input-group-text">
                        <i class="bi bi-person-badge"></i>
                    </span>

                    <input
                        type="text"
                        class="form-control"
                        id="id_profesor"
                        name="id_profesor"
                        placeholder="ID del profesor"
                        required
                    >

                </div>

            </div>


            <!-- ALUMNO -->
            <div class="mb-3">

                <label
                    for="id_alumno"
                    class="form-label"
                >
                    ID Alumno
                </label>

                <div class="input-group">

                    <span class="input-group-text">
                        <i class="bi bi-person"></i>
                    </span>

                    <input
                        type="text"
                        class="form-control"
                        id="id_alumno"
                        name="id_alumno"
                        placeholder="ID del alumno"
                        required
                    >

                </div>

            </div>


            <!-- MATERIA -->
            <div class="mb-3">

                <label
                    for="id_materia"
                    class="form-label"
                >
                    ID Materia
                </label>

                <div class="input-group">

                    <span class="input-group-text">
                        <i class="bi bi-book"></i>
                    </span>

                    <input
                        type="text"
                        class="form-control"
                        id="id_materia"
                        name="id_materia"
                        placeholder="ID de la materia"
                        required
                    >

                </div>

            </div>


            <!-- GRUPO -->
            <div class="mb-3">

                <label
                    for="id_grupo"
                    class="form-label"
                >
                    ID Grupo
                </label>

                <div class="input-group">

                    <span class="input-group-text">
                        <i class="bi bi-people"></i>
                    </span>

                    <input
                        type="text"
                        class="form-control"
                        id="id_grupo"
                        name="id_grupo"
                        placeholder="ID del grupo"
                        required
                    >

                </div>

            </div>


            <!-- CALIFICACIÓN -->
            <div class="mb-3">

                <label
                    for="calificacion"
                    class="form-label"
                >
                    Calificación
                </label>

                <div class="input-group">

                    <span class="input-group-text">
                        <i class="bi bi-star"></i>
                    </span>

                    <input
                        type="number"
                        class="form-control"
                        id="calificacion"
                        name="calificacion"
                        min="0"
                        max="100"
                        step="0.1"
                        placeholder="Ej. 85"
                        required
                    >

                </div>

            </div>


            <!-- ESTADO -->
            <div class="status-box">

                <span class="status-dot"></span>

                <span class="status-text">
                    Listo para registrar calificación
                </span>

            </div>


            <!-- BOTÓN -->
            <div class="text-center mt-4">

                <button
                    type="submit"
                    class="btn-purple"
                >
                    <i class="bi bi-save"></i>
                    Guardar Calificación
                </button>

            </div>

        </form>

    </div>

</main>
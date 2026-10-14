<?php $this->load->view('partials/hero'); ?>

<main class="table-container">
    <section class="table-card">

        <h1 class="form-title">
            <i class="bi bi-calendar3"></i>
            Horarios
        </h1>

        <p class="form-subtitle">
            Vista de horarios del sistema SAES.
        </p>

        <div class="table-responsive">
            <table class="table table-saes table-hover align-middle">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Materia</th>
                        <th>Docente</th>
                        <th>Grupo</th>
                        <th>Día</th>
                        <th>Inicio</th>
                        <th>Fin</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td colspan="7" class="text-center text-secondary">
                            La vista de horarios está lista. Falta conectar el modelo de horarios
                            para cargar los registros desde MariaDB.
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

    </section>
</main>
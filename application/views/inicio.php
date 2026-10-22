<?php $this->load->view('partials/hero'); ?>

<main class="container py-5">
    <section class="form-card text-center mx-auto mb-5" style="max-width: 900px;">
        <p class="text-uppercase small mb-2" style="letter-spacing: .18em; color: #9b5cff;">Sistema escolar</p>
        <h1 class="form-title">SAES</h1>
        <p class="form-subtitle">
            Sistema de Administración Escolar del ITGAMII.
        </p>
        <p class="mb-0">
            Accede a los módulos para registrar y administrar la información académica.
        </p>
    </section>

    <section class="mb-5">
        <h2 class="form-title text-center mb-4">Registros escolares</h2>
        <div class="row g-4">
            <div class="col-12 col-sm-6 col-lg-4">
                <article class="form-card h-100">
                    <div class="d-flex align-items-center gap-3 mb-3">
                        <i class="bi bi-people fs-2" style="color: #9b5cff;"></i>
                        <h3 class="h5 mb-0">Alumnos</h3>
                    </div>
                    <p>Registra alumnos y consulta sus datos escolares.</p>
                    <a class="btn-purple text-decoration-none" href="<?= site_url('Alumnos_froms'); ?>">Abrir registro</a>
                    <a class="d-block mt-3" href="<?= site_url('Alumnos_froms/lista'); ?>">Ver lista de alumnos</a>
                </article>
            </div>

            <div class="col-12 col-sm-6 col-lg-4">
                <article class="form-card h-100">
                    <div class="d-flex align-items-center gap-3 mb-3">
                        <i class="bi bi-person-badge fs-2" style="color: #9b5cff;"></i>
                        <h3 class="h5 mb-0">Profesores</h3>
                    </div>
                    <p>Administra los datos del personal docente.</p>
                    <a class="btn-purple text-decoration-none" href="<?= site_url('Profesores_froms'); ?>">Abrir registro</a>
                    <a class="d-block mt-3" href="<?= site_url('Profesores_froms/lista'); ?>">Ver lista de profesores</a>
                </article>
            </div>

            <div class="col-12 col-sm-6 col-lg-4">
                <article class="form-card h-100">
                    <div class="d-flex align-items-center gap-3 mb-3">
                        <i class="bi bi-person-gear fs-2" style="color: #9b5cff;"></i>
                        <h3 class="h5 mb-0">Usuarios</h3>
                    </div>
                    <p>Gestiona las cuentas de acceso al sistema.</p>
                    <a class="btn-purple text-decoration-none" href="<?= site_url('Usuarios_froms'); ?>">Registrar usuario</a>
                    <a class="d-block mt-3" href="<?= site_url('Usuarios_froms/lista'); ?>">Ver lista de usuarios</a>
                </article>
            </div>

            <div class="col-12 col-sm-6 col-lg-4">
                <article class="form-card h-100">
                    <div class="d-flex align-items-center gap-3 mb-3">
                        <i class="bi bi-book fs-2" style="color: #9b5cff;"></i>
                        <h3 class="h5 mb-0">Materias</h3>
                    </div>
                    <p>Registra y consulta las materias del plan académico.</p>
                    <a class="btn-purple text-decoration-none" href="<?= site_url('Materias'); ?>">Abrir materias</a>
                </article>
            </div>

            <div class="col-12 col-sm-6 col-lg-4">
                <article class="form-card h-100">
                    <div class="d-flex align-items-center gap-3 mb-3">
                        <i class="bi bi-people-fill fs-2" style="color: #9b5cff;"></i>
                        <h3 class="h5 mb-0">Grupos</h3>
                    </div>
                    <p>Administra los grupos escolares.</p>
                    <a class="btn-purple text-decoration-none" href="<?= site_url('Grupos_controll'); ?>">Abrir grupos</a>
                </article>
            </div>

            <div class="col-12 col-sm-6 col-lg-4">
                <article class="form-card h-100">
                    <div class="d-flex align-items-center gap-3 mb-3">
                        <i class="bi bi-diagram-3 fs-2" style="color: #9b5cff;"></i>
                        <h3 class="h5 mb-0">Unidades</h3>
                    </div>
                    <p>Registra y consulta unidades académicas.</p>
                    <a class="btn-purple text-decoration-none" href="<?= site_url('Unidad_controll'); ?>">Abrir unidades</a>
                    <a class="d-block mt-3" href="<?= site_url('Unidad_controll/lista'); ?>">Ver lista de unidades</a>
                </article>
            </div>

            <div class="col-12 col-sm-6 col-lg-4">
                <article class="form-card h-100">
                    <div class="d-flex align-items-center gap-3 mb-3">
                        <i class="bi bi-person-vcard fs-2" style="color: #9b5cff;"></i>
                        <h3 class="h5 mb-0">Inscripción a grupos</h3>
                    </div>
                    <p>Inscribe alumnos en los grupos correspondientes.</p>
                    <a class="btn-purple text-decoration-none" href="<?= site_url('Inscripciongrup_controll'); ?>">Abrir inscripciones</a>
                </article>
            </div>

            <div class="col-12 col-sm-6 col-lg-4">
                <article class="form-card h-100">
                    <div class="d-flex align-items-center gap-3 mb-3">
                        <i class="bi bi-journal-plus fs-2" style="color: #9b5cff;"></i>
                        <h3 class="h5 mb-0">Asignación de materias</h3>
                    </div>
                    <p>Relaciona materias con alumnos y profesores.</p>
                    <a class="btn-purple text-decoration-none" href="<?= site_url('Asignmat_controll'); ?>">Abrir asignaciones</a>
                </article>
            </div>

            <div class="col-12 col-sm-6 col-lg-4">
                <article class="form-card h-100">
                    <div class="d-flex align-items-center gap-3 mb-3">
                        <i class="bi bi-journal-check fs-2" style="color: #9b5cff;"></i>
                        <h3 class="h5 mb-0">Calificaciones</h3>
                    </div>
                    <p>Captura y consulta las calificaciones registradas.</p>
                    <a class="btn-purple text-decoration-none" href="<?= site_url('Registro_calif'); ?>">Capturar calificación</a>
                    <a class="d-block mt-3" href="<?= site_url('Lista_calif'); ?>">Ver calificaciones</a>
                </article>
            </div>

            <div class="col-12 col-sm-6 col-lg-4">
                <article class="form-card h-100">
                    <div class="d-flex align-items-center gap-3 mb-3">
                        <i class="bi bi-calendar3 fs-2" style="color: #9b5cff;"></i>
                        <h3 class="h5 mb-0">Horarios</h3>
                    </div>
                    <p>Consulta la sección de horarios escolares.</p>
                    <a class="btn-purple text-decoration-none" href="<?= site_url('Tabla_horarios'); ?>">Ver horarios</a>
                </article>
            </div>
        </div>
    </section>

    <div class="text-center">
        <a class="btn-outline-darkmode text-decoration-none" href="<?= site_url('Usuarios_froms/login'); ?>">
            <i class="bi bi-box-arrow-in-right"></i> Iniciar sesión
        </a>
    </div>
</main>

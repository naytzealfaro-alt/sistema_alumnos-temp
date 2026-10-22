<nav class="navbar-saes">
    <!-- Bloque Superior: Únicamente SAES y system.online -->
    <div class="navbar-header-top py-3 border-bottom border-secondary border-opacity-25">
        <div class="container d-flex justify-content-between align-items-center">
            <a href="<?= site_url(); ?>" class="brand text-decoration-none fs-3 fw-bold text-white d-flex align-items-center gap-2">
                <i class="bi bi-mortarboard-fill"></i>
                <span>SAES</span>
            </a>
            <span class="system-status text-muted small d-flex align-items-center gap-2">
                <span class="terminal-dot text-success">●</span> system.online
            </span>
        </div>
    </div>

    <!-- Bloque Inferior: Menú centrado con el estilo morado oscuro -->
    <div class="navbar-menu-bottom py-2 border-bottom border-secondary border-opacity-25">
        <div class="container d-flex justify-content-center">
            <div class="nav-links d-flex align-items-center gap-3">

                <a href="<?= site_url(); ?>" class="<?= ($this->uri->segment(1) == '') ? 'active' : '' ?>">
                    <i class="bi bi-house"></i>
                    <span>Inicio</span>
                </a>

                <!-- Menú de Registro -->
                <div class="dropdown nav-dropdown">
                    <a href="#" class="dropdown-toggle nav-dropdown-toggle <?= in_array($this->uri->segment(1), array('Alumnos_froms', 'Profesores_froms')) ? 'active' : '' ?>" data-bs-toggle="dropdown">
                        <i class="bi bi-ui-checks"></i>
                        <span>Registro</span>
                    </a>
                    <ul class="dropdown-menu">
                        <li>
                            <a class="dropdown-item" href="<?= site_url('Alumnos_froms'); ?>">
                                <i class="bi bi-people"></i> Alumnos
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="<?= site_url('Profesores_froms'); ?>">
                                <i class="bi bi-person-badge"></i> Profesores
                            </a>
                        </li>
                    </ul>
                </div>

                <!-- Menú de Proceso -->
                <div class="dropdown nav-dropdown">
                    <a href="#" class="dropdown-toggle nav-dropdown-toggle <?= ($this->uri->segment(1) == 'Usuarios_froms') ? 'active' : '' ?>" data-bs-toggle="dropdown">
                        <i class="bi bi-person-gear"></i>
                        <span>Proceso</span>
                    </a>
                    <ul class="dropdown-menu">
                        <li>
                            <a class="dropdown-item" href="<?= site_url('Usuarios_froms/login'); ?>">
                                <i class="bi bi-box-arrow-in-right"></i> Login
                            </a>
                        </li>
                    </ul>
                </div>

                <!-- Menú de Reportes -->
                <div class="dropdown nav-dropdown">
                    <a href="#" class="dropdown-toggle nav-dropdown-toggle <?= in_array($this->uri->segment(1), array('Materias', 'Registro_calif', 'Lista_calif', 'Tabla_horarios')) ? 'active' : '' ?>" data-bs-toggle="dropdown">
                        <i class="bi bi-grid"></i>
                        <span>Reportes</span>
                    </a>
                    <ul class="dropdown-menu">
                        <li>
                            <a class="dropdown-item" href="<?= site_url('Materias'); ?>">
                                <i class="bi bi-book"></i> Materias
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="<?= site_url('Registro_calif'); ?>">
                                <i class="bi bi-journal-check"></i> Registrar calificación
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="<?= site_url('Lista_calif'); ?>">
                                <i class="bi bi-list-check"></i> Lista de calificaciones
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="<?= site_url('Tabla_horarios'); ?>">
                                <i class="bi bi-calendar3"></i> Horarios
                            </a>
                        </li>
                        <li><hr class="dropdown-divider"></li>
                        <li>
                            <a class="dropdown-item" href="<?= site_url('Alumnos_froms/lista'); ?>">
                                <i class="bi bi-table"></i> Lista de alumnos
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="<?= site_url('Profesores_froms/lista'); ?>">
                                <i class="bi bi-table"></i> Lista de profesores
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="<?= site_url('Usuarios_froms/lista'); ?>">
                                <i class="bi bi-table"></i> Lista de usuarios
                            </a>
                        </li>
                    </ul>
                </div>

            </div>
        </div>
    </div>
</nav>
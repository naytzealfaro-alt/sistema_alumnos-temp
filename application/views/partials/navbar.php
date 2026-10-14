<nav class="navbar-saes">
    <div class="navbar-container">

        <a href="<?= site_url(); ?>" class="brand">
            <span class="terminal-dot"></span>
            SAES
        </a>

        <span class="system-status">system.online</span>

        <div class="nav-links">

            <a href="<?= site_url(); ?>" class="<?= ($this->uri->segment(1) == '') ? 'active' : '' ?>">
                <i class="bi bi-house"></i>
                <span>Inicio</span>
            </a>

            <div class="dropdown nav-dropdown">
                <a href="#" class="dropdown-toggle nav-dropdown-toggle <?= in_array($this->uri->segment(1), array('Alumnos_froms', 'Profesores_froms')) ? 'active' : '' ?>">
                    <i class="bi bi-ui-checks"></i>
                    <span>Formularios</span>
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

            <div class="dropdown nav-dropdown">
                <a href="#" class="dropdown-toggle nav-dropdown-toggle <?= ($this->uri->segment(1) == 'Usuarios_froms') ? 'active' : '' ?>">
                    <i class="bi bi-person-gear"></i>
                    <span>Usuarios</span>
                </a>
                <ul class="dropdown-menu">
                    <li>
                        <a class="dropdown-item" href="<?= site_url('Usuarios_froms/login'); ?>">
                            <i class="bi bi-box-arrow-in-right"></i> Login
                        </a>
                    </li>
                </ul>
            </div>

            <div class="dropdown nav-dropdown">
                <a href="#" class="dropdown-toggle nav-dropdown-toggle <?= in_array($this->uri->segment(1), array('Materias', 'Registro_calif', 'Lista_calif', 'Tabla_horarios')) ? 'active' : '' ?>">
                    <i class="bi bi-grid"></i>
                    <span>Vistas</span>
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
</nav>
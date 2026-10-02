<!DOCTYPE html>
<html lang="es">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Lista de Alumnos | SAES</title>

    <!-- Bootstrap -->
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
        rel="stylesheet"
    >

    <!-- Bootstrap Icons -->
    <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css"
    >

    <style>

        :root {
            --bg: #09070f;
            --card: #110d1b;
            --card-2: #171022;
            --purple: #9b5cff;
            --purple-light: #c084fc;
            --border: rgba(155, 92, 255, 0.25);
            --text: #f5f3ff;
            --muted: #9f96b2;
        }

        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            min-height: 100vh;
            color: var(--text);

            background:
                radial-gradient(
                    circle at 20% 20%,
                    rgba(126, 34, 206, .18),
                    transparent 30%
                ),
                radial-gradient(
                    circle at 80% 80%,
                    rgba(168, 85, 247, .12),
                    transparent 30%
                ),
                var(--bg);

            font-family: Arial, Helvetica, sans-serif;
        }

        /* NAVBAR */

        .navbar {
            background: rgba(9, 7, 15, .82);
            border-bottom: 1px solid var(--border);
            backdrop-filter: blur(12px);
        }

        .navbar-brand {
            color: var(--text) !important;
            font-weight: 700;
            letter-spacing: 1px;
        }

        .terminal-dot {
            display: inline-block;
            width: 9px;
            height: 9px;
            margin-right: 7px;

            background: var(--purple);
            border-radius: 50%;

            box-shadow:
                0 0 8px var(--purple),
                0 0 18px rgba(155, 92, 255, .7);
        }

        .system-online {
            color: var(--muted);
            font-size: .75rem;
            margin-left: 5px;
        }

        .navbar .nav-link {
            color: var(--muted);
            transition: .2s;
        }

        .navbar .nav-link:hover,
        .navbar .nav-link.active {
            color: var(--purple-light);
        }

        /* HEADER */

        .page-header {
            text-align: center;
            margin-top: 55px;
            margin-bottom: 30px;
        }

        .saes-title {
            font-size: 2.5rem;
            font-weight: 800;
            letter-spacing: 3px;
        }

        .saes-title .terminal-dot {
            width: 12px;
            height: 12px;
            margin-right: 10px;
            vertical-align: middle;
        }

        .institution {
            margin-top: 5px;
            color: var(--muted);
            font-size: .95rem;
            letter-spacing: 4px;
        }

        .title-line {
            width: 80px;
            height: 3px;
            margin: 15px auto 0;

            background: linear-gradient(
                90deg,
                #7c3aed,
                #c084fc
            );

            border-radius: 10px;

            box-shadow:
                0 0 15px rgba(155, 92, 255, .6);
        }

        /* TABLA */

        .table-card {
            max-width: 1200px;
            margin: 0 auto 50px;

            padding: 30px;

            background:
                linear-gradient(
                    145deg,
                    rgba(23, 16, 34, .96),
                    rgba(17, 13, 27, .96)
                );

            border: 1px solid var(--border);
            border-radius: 22px;

            box-shadow:
                0 20px 60px rgba(0, 0, 0, .35),
                0 0 30px rgba(126, 34, 206, .08);
        }

        .section-title {
            display: flex;
            align-items: center;
            gap: 10px;

            margin-bottom: 20px;

            color: var(--purple-light);
            font-size: 1.1rem;
            font-weight: 700;
        }

        .section-title i {
            color: var(--purple);
        }

        /* TABLA */

        .table-responsive {
            border-radius: 14px;
            overflow-x: auto;
        }

        .table {
            margin-bottom: 0;
            color: var(--text);
            vertical-align: middle;
        }

        .table thead th {
            background: #0d0915;
            color: var(--purple-light);
            border-color: var(--border);
            white-space: nowrap;
        }

        .table tbody td {
            background: rgba(13, 9, 21, .75);
            color: var(--text);
            border-color: var(--border);
        }

        .table-hover tbody tr:hover td {
            background: rgba(155, 92, 255, .08);
            color: var(--text);
        }

        /* BADGES */

        .badge {
            padding: 7px 10px;
            font-size: .8rem;
        }

        /* BOTÓN */

        .btn-primary {
            border: none;

            background: linear-gradient(
                135deg,
                #7c3aed,
                #a855f7
            );

            box-shadow:
                0 8px 20px rgba(124, 58, 237, .25);
        }

        .btn-primary:hover {
            background: linear-gradient(
                135deg,
                #8b5cf6,
                #c084fc
            );
        }

        /* FOOTER */

        footer {
            text-align: center;
            padding: 25px;

            color: var(--muted);
            font-size: .85rem;

            border-top: 1px solid rgba(155, 92, 255, .12);
        }

        /* RESPONSIVE */

        @media (max-width: 768px) {

            .table-card {
                margin: 0 15px 40px;
                padding: 20px 15px;
            }

            .saes-title {
                font-size: 2rem;
            }

            .page-header {
                margin-top: 35px;
            }

        }

    </style>

</head>

<body>

    <!-- NAVBAR -->

    <nav class="navbar navbar-expand-lg">

        <div class="container">

            <a class="navbar-brand" href="<?= base_url(); ?>">

                <span class="terminal-dot"></span>

                SAES

                <span class="system-online">
                    system.online
                </span>

            </a>

            <button
                class="navbar-toggler"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#navbarNav"
            >
                <span class="navbar-toggler-icon"></span>
            </button>

            <div
                class="collapse navbar-collapse"
                id="navbarNav"
            >

                <ul class="navbar-nav ms-auto">

                    <li class="nav-item">

                        <a
                            class="nav-link"
                            href="<?= base_url(); ?>"
                        >
                            <i class="bi bi-house"></i>
                            Inicio
                        </a>

                    </li>

                    <li class="nav-item">

                        <a
                            class="nav-link active"
                            href="<?= base_url('alumnos'); ?>"
                        >
                            <i class="bi bi-mortarboard"></i>
                            Alumnos
                        </a>

                    </li>

                    <li class="nav-item">

                        <a
                            class="nav-link"
                            href="<?= base_url('profesores'); ?>"
                        >
                            <i class="bi bi-person-badge"></i>
                            Profesores
                        </a>

                    </li>

                    <li class="nav-item">

                        <a
                            class="nav-link"
                            href="<?= base_url('usuarios'); ?>"
                        >
                            <i class="bi bi-people"></i>
                            Usuarios
                        </a>

                    </li>

                </ul>

            </div>

        </div>

    </nav>


    <!-- HEADER -->

    <header class="page-header">

        <div class="saes-title">

            <span class="terminal-dot"></span>

            SAES

        </div>

        <div class="institution">
            ITGAMII
        </div>

        <div class="title-line"></div>

    </header>


    <!-- CONTENIDO -->

    <main class="container">

        <div class="table-card">

            <div class="section-title">

                <i class="bi bi-mortarboard"></i>

                Lista de alumnos

            </div>


            <div class="table-responsive">

                <table class="table table-bordered table-hover">

                    <thead>

                        <tr>

                            <th>ID</th>
                            <th>Nombre</th>
                            <th>Apellido paterno</th>
                            <th>Apellido materno</th>
                            <th>Matrícula</th>
                            <th>Teléfono</th>
                            <th>Domicilio</th>
                            <th>Estatus</th>

                        </tr>

                    </thead>


                    <tbody>

                        <?php foreach ($alumnos as $alumno): ?>

                            <tr>

                                <td>
                                    <?= $alumno->id_alumn ?>
                                </td>

                                <td>
                                    <?= $alumno->nombre_al ?>
                                </td>

                                <td>
                                    <?= $alumno->apaterno_al ?>
                                </td>

                                <td>
                                    <?= $alumno->amaterno_al ?>
                                </td>

                                <td>
                                    <?= $alumno->matricula_al ?>
                                </td>

                                <td>
                                    <?= $alumno->tel_al ?>
                                </td>

                                <td>
                                    <?= $alumno->dom_al ?>
                                </td>

                                <td>

                                    <?php if ($alumno->estatus_al == 1): ?>

                                        <span class="badge bg-success">
                                            Activo
                                        </span>

                                    <?php else: ?>

                                        <span class="badge bg-danger">
                                            Inactivo
                                        </span>

                                    <?php endif; ?>

                                </td>

                            </tr>

                        <?php endforeach; ?>

                    </tbody>

                </table>

            </div>


            <!-- BOTÓN REGRESAR -->

            <div class="mt-4">

                <a
                    href="<?= site_url('alumnos') ?>"
                    class="btn btn-primary px-4"
                >

                    <i class="bi bi-arrow-left"></i>

                    Regresar al formulario

                </a>

            </div>

        </div>

    </main>


    <!-- FOOTER -->

    <footer>

        SAES · Sistema de Administración Escolar · ITGAMII

    </footer>


    <!-- Bootstrap JS -->

    <script
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    ></script>

</body>

</html>
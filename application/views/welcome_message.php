
<!DOCTYPE html>
<html lang="es">
<head>
    <?php $this->load->view('partials/head'); ?>
    <?php $this->load->view('partials/styles'); ?>
</head>
<body>
    <?php $this->load->view('partials/navbar'); ?>
    <?php $this->load->view('partials/hero'); ?>

    <main class="contenido">
        <section class="tarjeta">
            <img src="<?= base_url('assets/img/alum.jpg'); ?>"
                 class="imagen-alumno"
                 alt="Estudiantes del ITGAMII">

            <h1>Sistema de Administración Escolar</h1>

            <p>Plataforma de gestión académica del ITGAMII</p>

            <p class="descripcion">
                Consulta y administra información escolar
                de manera sencilla desde un solo lugar.
            </p>

            <a href="<?= site_url('Usuarios_froms'); ?>" class="btn-saes">
                <i class="bi bi-arrow-right-circle"></i>
                Comenzar
            </a>
        </section>
    </main>

    <?php $this->load->view('partials/footer'); ?>
    <?php $this->load->view('partials/scripts'); ?>
</body>
</html>
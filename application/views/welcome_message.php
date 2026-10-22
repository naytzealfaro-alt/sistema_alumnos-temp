<!DOCTYPE html>
<html lang="es">
<head>
    <?php $this->load->view('partials/head'); ?>
    <?php $this->load->view('partials/styles'); ?>
</head>
<body style="background-color: #f8f5ff !important;">
    <?php $this->load->view('partials/navbar'); ?>

    <!-- Contenedor alineado verticalmente al centro -->
    <main style="display: flex; flex-direction: column; align-items: center; justify-content: center; width: 100%; padding: 40px 20px; text-align: center;">
        
        <!-- Título principal en morado visible para fondo claro -->
        <h1 style="color: #6b21a8; font-size: 2.5rem; font-weight: bold; margin-bottom: 10px; letter-spacing: 1px;">
            BIENVENIDO AL SISTEMA SAES
        </h1>
        
        <h4 style="color: #581c87; font-size: 1.25rem; font-weight: bold; margin-bottom: 30px;">
            ITGAMII
        </h4>

        <!-- Tarjeta contenedora blanca con texto oscuro y legible -->
        <section class="tarjeta" style="background-color: #ffffff; border: 1px solid #d8b4fe; box-shadow: 0 10px 25px rgba(168, 85, 247, 0.15); max-width: 650px; width: 100%; margin: 0 auto; text-align: center; padding: 30px; border-radius: 12px;">
            <h2 style="color: #4c1d95; font-size: 1.25rem; font-weight: 600; margin-bottom: 15px;">
                Sistema de Administración Escolar
            </h2>

            <p class="descripcion" style="color: #475569; font-size: 0.95rem; line-height: 1.6; margin: 0;">
                Esta plataforma le permite gestionar y consultar información académica del ITGAMII de manera eficiente, optimizando los procesos escolares de su institución desde un solo lugar.
            </p>
        </section>

    </main>

    <?php $this->load->view('partials/footer'); ?>
    <?php $this->load->view('partials/scripts'); ?>
</body>
</html>
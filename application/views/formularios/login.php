<?php $this->load->view('partials/hero'); ?>

<main class="form-container">

    <section class="form-card login-card">

        <h1 class="form-title">
            <i class="bi bi-box-arrow-in-right"></i>
            Iniciar sesión
        </h1>

        <p class="form-subtitle">
            Accede al sistema de administración escolar SAES.
        </p>

        <?php if (!empty($error)): ?>
            <div class="alert alert-danger bg-transparent border-danger text-danger" role="alert">
                <i class="bi bi-exclamation-triangle"></i>
                <?= htmlspecialchars($error) ?>
            </div>
        <?php endif; ?>

        <form action="<?= base_url('Usuarios_froms/entrar'); ?>" method="POST">

            <div class="mb-3">
                <label for="id_usuario" class="form-label">ID de usuario</label>
                <div class="input-group">
                    <span class="input-group-text"><i class="bi bi-person-badge"></i></span>
                    <input type="text" class="form-control" id="id_usuario" name="id_usuario"
                           placeholder="Escribe tu ID" required>
                </div>
            </div>

            <div class="mb-3">
                <label for="contraseña_usua" class="form-label">Contraseña</label>
                <div class="input-group">
                    <span class="input-group-text"><i class="bi bi-lock"></i></span>
                    <input type="password" class="form-control" id="contraseña_usua"
                           name="contraseña_usua" placeholder="Escribe tu contraseña" required>
                </div>
            </div>

            <div class="text-center mt-4">
                <button type="submit" class="btn-purple">
                    <i class="bi bi-box-arrow-in-right"></i>
                    Iniciar sesión
                </button>
            </div>

        </form>

    </section>

</main>
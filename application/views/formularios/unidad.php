
<?php $this->load->view('partials/hero'); ?>

<main class="form-container">
    <div class="form-card">

        <h1 class="form-title">
            Registro de Unidades
        </h1>

        <p class="form-subtitle">
            Registro de información de las unidades académicas.
        </p>

        <form
            href="<?= site_url('unidad_controll/lista'); ?>"
            method="POST"
        >

            <div class="section-title">
                <i class="bi bi-journal-text"></i>
                Información de la unidad
            </div>

            <div class="mb-3">
                <label for="descripcion_uni" class="form-label">
                    Descripción de la unidad
                </label>

                <div class="input-group">
                    <span class="input-group-text">
                        <i class="bi bi-card-text"></i>
                    </span>

                    <input
                        type="text"
                        class="form-control"
                        id="descripcion_uni"
                        name="descripcion_uni"
                        placeholder="Escribe la descripción de la unidad"
                        required
                    >
                </div>
            </div>

            <div class="d-flex gap-2 flex-wrap">
                <button type="submit" class="btn btn-primary">
                    <i class="bi bi-save"></i>
                    Guardar unidad
                </button>

                <a
                    href="<?= site_url('unidad/lista'); ?>"
                    class="btn btn-outline-light"
                >
                    <i class="bi bi-list-ul"></i>
                    Ver unidades
                </a>
            </div>

        </form>

    </div>
</main>

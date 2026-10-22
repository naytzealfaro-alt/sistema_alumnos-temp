<!DOCTYPE html>
<html lang="es">
<head>
    <?php $this->load->view('partials/head'); ?>
    <?php $this->load->view('partials/styles'); ?>
    <?= isset($css) ? $css : '' ?>
</head>
<body>

    <?php $this->load->view('partials/navbar'); ?>

    <?php $this->load->view($contenido); ?>

    <?php $this->load->view('partials/footer'); ?>

    <?php $this->load->view('partials/scripts'); ?>
    <?= isset($js) ? $js : '' ?>

</body>
</html>
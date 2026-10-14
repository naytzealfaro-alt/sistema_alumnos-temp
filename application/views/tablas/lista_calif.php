<?php $this->load->view('partials/hero'); ?>

<main class="table-container">

    <section class="table-card">

        <h1 class="form-title text-center">
            <i class="bi bi-list-check"></i>
            Lista de Calificaciones
        </h1>

        <p class="form-subtitle text-center">
            Consulta de las calificaciones registradas en el sistema.
        </p>

        <div class="table-responsive">

            <table class="table table-saes table-hover">

                <thead>
                    <tr>
                        <th>ID Profesor</th>
                        <th>ID Alumno</th>
                        <th>ID Materia</th>
                        <th>ID Grupo</th>
                        <th>Calificación</th>
                    </tr>
                </thead>

                <tbody>

                    <tr>
                        <td>1</td>
                        <td>101</td>
                        <td>10</td>
                        <td>2</td>
                        <td>9</td>
                    </tr>

                    <tr>
                        <td>2</td>
                        <td>102</td>
                        <td>11</td>
                        <td>2</td>
                        <td>8</td>
                    </tr>

                    <tr>
                        <td>3</td>
                        <td>103</td>
                        <td>12</td>
                        <td>1</td>
                        <td>10</td>
                    </tr>

                </tbody>

            </table>

        </div>

    </section>

</main>
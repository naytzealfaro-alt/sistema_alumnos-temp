<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Formulario de Alumnos</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

    <div class="container mt-5">

        <h1 class="text-center mb-4">Formulario de Alumnos</h1>

        <form action="<?= site_url('alumnos/guardar') ?>" method="post">

            <div class="form-floating mb-3">

                <input
                    type="text"
                    class="form-control"
                    id="nombre_al"
                    name="nombre_al"
                    placeholder="Nombre del alumno"
                    required
                >

                <label for="nombre_al">
                    Nombre del alumno
                </label>

            </div>


            <div class="form-floating mb-3">

                <input
                    type="text"
                    class="form-control"
                    id="apaterno_al"
                    name="apaterno_al"
                    placeholder="Apellido paterno"
                    required
                >

                <label for="apaterno_al">
                    Apellido paterno
                </label>

            </div>


            <div class="form-floating mb-3">

                <input
                    type="text"
                    class="form-control"
                    id="amaterno_al"
                    name="amaterno_al"
                    placeholder="Apellido materno"
                    required
                >

                <label for="amaterno_al">
                    Apellido materno
                </label>

            </div>


            <div class="form-floating mb-3">

                <input
                    type="text"
                    class="form-control"
                    id="matricula_al"
                    name="matricula_al"
                    placeholder="Matrícula"
                    required
                >

                <label for="matricula_al">
                    Matrícula
                </label>

            </div>


            <div class="form-floating mb-3">

                <input
                    type="tel"
                    class="form-control"
                    id="tel_al"
                    name="tel_al"
                    placeholder="Teléfono"
                    required
                >

                <label for="tel_al">
                    Teléfono
                </label>

            </div>


            <div class="form-floating mb-3">

                <textarea
                    class="form-control"
                    id="dom_al"
                    name="dom_al"
                    placeholder="Domicilio"
                    style="height: 100px"
                    required
                ></textarea>

                <label for="dom_al">
                    Domicilio
                </label>

            </div>


            <div class="form-floating mb-3">

                <select
                    class="form-select"
                    id="estatus_al"
                    name="estatus_al"
                    required
                >

                    <option value="" selected disabled>
                        Selecciona el estatus
                    </option>

                    <option value="1">
                        Activo
                    </option>

                    <option value="2">
                        Inactivo
                    </option>

                </select>

                <label for="estatus_al">
                    Estatus del alumno
                </label>

            </div>


            <button
                type="submit"
                class="btn btn-primary"
            >
                Guardar
            </button>

            <button
                type="reset"
                class="btn btn-secondary"
            >
                Limpiar
            </button>

        </form>

    </div>

</body>
</html>
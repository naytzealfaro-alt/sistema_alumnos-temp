
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Unidad_controll extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();

        // Cargar el modelo
        $this->load->model('Unidad_model');
    }

    // Mostrar el formulario de registro
    public function index()
    {
        $this->load->view('unidad');
    }

    // Guardar una nueva unidad
    public function guardar()
    {
        $datos = array(
            'descripcion_uni' => $this->input->post('descripcion_uni')
        );

        // Validar el campo
        if (empty(trim($datos['descripcion_uni'] ?? ''))) {
            show_error('La descripción de la unidad es obligatoria.');
            return;
        }

        // Guardar mediante el modelo
        if ($this->Unidad_model->guardar_unidad($datos)) {
            echo "<script>
                alert('Unidad registrada correctamente');
                window.location.href='" .
                site_url('unidad_controll/lista') . "';
            </script>";
        } else {
            show_error('Error al registrar la unidad.');
        }
    }

    // Mostrar todas las unidades
    public function lista()
    {
        $datos['unidades'] =
            $this->Unidad_model->obtener_unidades();

        $this->load->view('lista_unidades', $datos);
    }

    // Consultar una unidad por su ID
    public function consultar($id_unidad)
    {
        $datos['unidad'] =
            $this->Unidad_model->obtener_unidad($id_unidad);

        if (!$datos['unidad']) {
            show_404();
            return;
        }

        $this->load->view('editar_unidad', $datos);
    }

    // Actualizar una unidad
    public function actualizar($id_unidad)
    {
        $descripcion = trim(
            $this->input->post('descripcion_uni') ?? ''
        );

        if ($descripcion === '') {
            show_error('La descripción de la unidad es obligatoria.');
            return;
        }

        $datos = array(
            'descripcion_uni' => $descripcion
        );

        if ($this->Unidad_model->actualizar_unidad(
            $id_unidad,
            $datos
        )) {
            redirect('unidad_controll/lista');
        } else {
            show_error('Error al actualizar la unidad.');
        }
    }

    // Eliminar una unidad
    public function eliminar($id_unidad)
    {
        if ($this->Unidad_model->eliminar_unidad($id_unidad)) {
            redirect('unidad_controll/lista');
        } else {
            show_error('Error al eliminar la unidad.');
        }
    }
}


<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Registro_calif_controll extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();

        // Cargar el modelo de calificaciones
        $this->load->model('Calificaciones_model');
    }

    // Mostrar el formulario de registro
    public function index()
    {
        $this->load->view('registro_calif');
    }

    // Guardar una calificación
    public function guardar()
    {
        $datos = array(
            'id_profesor' => $this->input->post('id_profesor'),
            'id_alumno'   => $this->input->post('id_alumno'),
            'id_materia'  => $this->input->post('id_materia'),
            'id_grupo'    => $this->input->post('id_grupo'),
            'calificacion'=> $this->input->post('calificacion')
        );

        // Validar que los campos no estén vacíos
        foreach ($datos as $valor) {
            if ($valor === NULL || $valor === '') {
                show_error('Todos los campos son obligatorios.');
                return;
            }
        }

        // Guardar mediante el modelo
        if ($this->Calificaciones_model->guardar_calificacion($datos)) {
            echo "<script>
                    alert('Calificación registrada correctamente');
                    window.location.href='" . base_url('index.php/registro_calif_controll') . "';
                  </script>";
        } else {
            show_error('Error al registrar la calificación.');
        }
    }

    // Consultar todas las calificaciones
    public function lista()
    {
        $datos['calificaciones'] =
            $this->Calificaciones_model->obtener_calificaciones();

        $this->load->view('lista_calificaciones', $datos);
    }
}

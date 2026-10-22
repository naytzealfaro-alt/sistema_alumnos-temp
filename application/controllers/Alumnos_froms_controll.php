
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Alumnos_froms_controll extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();

        // Cargar el modelo de alumnos
        $this->load->model('Alumno_model');
    }

    // Mostrar el formulario de alumnos
    public function index()
    {
        $this->load->view('alumnos_froms');
    }

    // Guardar un alumno
    public function guardar()
    {
        $datos = array(
            'nombre_al'    => $this->input->post('nombre_al'),
            'apaterno_al'  => $this->input->post('apaterno_al'),
            'amaterno_al'  => $this->input->post('amaterno_al'),
            'matricula_al' => $this->input->post('matricula_al'),
            'tel_al'       => $this->input->post('tel_al'),
            'dom_al'       => $this->input->post('dom_al'),
            'estatus_al'   => $this->input->post('estatus_al')
        );

        // Validar que todos los campos estén completos
        foreach ($datos as $valor) {
            if ($valor === NULL || trim($valor) === '') {
                show_error('Todos los campos son obligatorios.');
                return;
            }
        }

        // Insertar el alumno mediante el modelo
        if ($this->Alumno_model->insertar_alumno($datos)) {
            echo "<script>
                alert('Alumno registrado correctamente');
                window.location.href='" .
                site_url('alumnos_froms_controll') . "';
            </script>";
        } else {
            show_error('Error al registrar el alumno.');
        }
    }

    // Mostrar la lista de alumnos
    public function lista()
    {
        $datos['alumnos'] =
            $this->Alumno_model->obtener_alumnos();

        $this->load->view('lista_alumnos', $datos);
    }

    // Consultar un alumno por su ID
    public function consultar($id_alumn)
    {
        $datos['alumno'] =
            $this->Alumno_model->obtener_alumno($id_alumn);

        if (!$datos['alumno']) {
            show_404();
            return;
        }

        $this->load->view('editar_alumno', $datos);
    }

    // Actualizar un alumno
    public function actualizar($id_alumn)
    {
        $datos = array(
            'nombre_al'    => $this->input->post('nombre_al'),
            'apaterno_al'  => $this->input->post('apaterno_al'),
            'amaterno_al'  => $this->input->post('amaterno_al'),
            'matricula_al' => $this->input->post('matricula_al'),
            'tel_al'       => $this->input->post('tel_al'),
            'dom_al'       => $this->input->post('dom_al'),
            'estatus_al'   => $this->input->post('estatus_al')
        );

        foreach ($datos as $valor) {
            if ($valor === NULL || trim($valor) === '') {
                show_error('Todos los campos son obligatorios.');
                return;
            }
        }

        if ($this->Alumno_model->actualizar_alumno(
            $id_alumn,
            $datos
        )) {
            redirect('alumnos_froms_controll/lista');
        } else {
            show_error('Error al actualizar el alumno.');
        }
    }

    // Eliminar un alumno
    public function eliminar($id_alumn)
    {
        if ($this->Alumno_model->eliminar_alumno($id_alumn)) {
            redirect('alumnos_froms_controll/lista');
        } else {
            show_error('Error al eliminar el alumno.');
        }
    }
}

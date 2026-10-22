
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Asignmat_controll extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();

        // Cargar el modelo
        $this->load->model('Asignmat_model');
    }

    // Mostrar el formulario y la lista de asignaciones
    public function index()
    {
        $datos['asignaciones'] =
            $this->Asignmat_model->obtener_asignaciones();

        $this->load->view('asignmat', $datos);
    }

    // Guardar una asignación
    public function guardar()
    {
        $datos = array(
            'id_mat'   => $this->input->post('id_mat'),
            'id_alumn' => $this->input->post('id_alumn'),
            'id_prof'  => $this->input->post('id_prof')
        );

        // Validar los campos obligatorios
        foreach ($datos as $valor) {
            if ($valor === NULL || $valor === '' || !is_numeric($valor)
                || (int) $valor < 1) {
                $this->session->set_flashdata(
                    'error',
                    'Ingresa IDs válidos para la materia, el alumno y el profesor.'
                );

                redirect('asignmat_controll');
                return;
            }
        }

        // Guardar mediante el modelo
        if ($this->Asignmat_model->guardar_asignacion($datos)) {
            $this->session->set_flashdata(
                'success',
                'Asignación registrada correctamente.'
            );
        } else {
            $this->session->set_flashdata(
                'error',
                'Error al registrar la asignación.'
            );
        }

        redirect('asignmat_controll');
    }

    // Consultar una asignación por su ID
    public function consultar($id_asignmat)
    {
        $datos['asignacion'] =
            $this->Asignmat_model->obtener_asignacion($id_asignmat);

        if (!$datos['asignacion']) {
            show_404();
            return;
        }

        $this->load->view('editar_asignmat', $datos);
    }

    // Actualizar una asignación
    public function actualizar($id_asignmat)
    {
        $datos = array(
            'id_mat'   => $this->input->post('id_mat'),
            'id_alumn' => $this->input->post('id_alumn'),
            'id_prof'  => $this->input->post('id_prof')
        );

        foreach ($datos as $valor) {
            if ($valor === NULL || $valor === '' || !is_numeric($valor)
                || (int) $valor < 1) {
                show_error('Debes ingresar IDs válidos.');
                return;
            }
        }

        if ($this->Asignmat_model->actualizar_asignacion(
            $id_asignmat,
            $datos
        )) {
            $this->session->set_flashdata(
                'success',
                'Asignación actualizada correctamente.'
            );
        } else {
            $this->session->set_flashdata(
                'error',
                'Error al actualizar la asignación.'
            );
        }

        redirect('asignmat_controll');
    }

    // Eliminar una asignación
    public function eliminar($id_asignmat)
    {
        if ($this->Asignmat_model->eliminar_asignacion($id_asignmat)) {
            $this->session->set_flashdata(
                'success',
                'Asignación eliminada correctamente.'
            );
        } else {
            $this->session->set_flashdata(
                'error',
                'Error al eliminar la asignación.'
            );
        }

        redirect('asignmat_controll');
    }
}

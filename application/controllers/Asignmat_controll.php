<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Asignmat_controll extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Asignmat_model');
        $this->load->library('session');
        $this->load->helper(array('url', 'form'));
    }

    // Mostrar el formulario y la lista de asignaciones dentro del layout común.
    public function index()
    {
        $data['titulo'] = 'SAES | Asignación de materias';
        $data['contenido'] = 'formularios/asignmat';
        $data['asignaciones'] = $this->Asignmat_model->obtener_asignaciones();

        $this->load->view('layouts/main', $data);
    }

    public function guardar()
    {
        if ($this->input->method(TRUE) !== 'POST') {
            show_error('Método no permitido.', 405);
            return;
        }

        $datos = array(
            'id_mat' => $this->input->post('id_mat'),
            'id_alumn' => $this->input->post('id_alumn'),
            'id_prof' => $this->input->post('id_prof')
        );

        foreach ($datos as $valor) {
            if ($valor === NULL || $valor === '' || !is_numeric($valor) || (int) $valor < 1) {
                $this->session->set_flashdata('error', 'Ingresa IDs válidos para la materia, el alumno y el profesor.');
                redirect('Asignmat_controll');
                return;
            }
        }

        if ($this->Asignmat_model->guardar_asignacion($datos)) {
            $this->session->set_flashdata('success', 'Asignación registrada correctamente.');
        } else {
            $this->session->set_flashdata('error', 'Error al registrar la asignación. Verifica que los IDs existan en la base de datos.');
        }

        redirect('Asignmat_controll');
    }

    public function consultar($id_asignmat)
    {
        $data['asignacion'] = $this->Asignmat_model->obtener_asignacion($id_asignmat);
        if (!$data['asignacion']) {
            show_404();
            return;
        }

        $this->load->view('editar_asignmat', $data);
    }

    public function actualizar($id_asignmat)
    {
        $datos = array(
            'id_mat' => $this->input->post('id_mat'),
            'id_alumn' => $this->input->post('id_alumn'),
            'id_prof' => $this->input->post('id_prof')
        );

        foreach ($datos as $valor) {
            if ($valor === NULL || $valor === '' || !is_numeric($valor) || (int) $valor < 1) {
                $this->session->set_flashdata('error', 'Debes ingresar IDs válidos.');
                redirect('Asignmat_controll');
                return;
            }
        }

        if ($this->Asignmat_model->actualizar_asignacion($id_asignmat, $datos)) {
            $this->session->set_flashdata('success', 'Asignación actualizada correctamente.');
        } else {
            $this->session->set_flashdata('error', 'Error al actualizar la asignación.');
        }

        redirect('Asignmat_controll');
    }

    public function eliminar($id_asignmat)
    {
        if ($this->Asignmat_model->eliminar_asignacion($id_asignmat)) {
            $this->session->set_flashdata('success', 'Asignación eliminada correctamente.');
        } else {
            $this->session->set_flashdata('error', 'Error al eliminar la asignación.');
        }

        redirect('Asignmat_controll');
    }
}

<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Materias extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Materia_model');
        $this->load->library('session');
        $this->load->helper(array('url', 'form'));
    }

    public function index()
    {
        $data['materias'] = $this->Materia_model->obtener_todas();
        $data['titulo'] = 'Materias | SAES';
        $data['contenido'] = 'formularios/materias';
        $this->load->view('layouts/main', $data);
    }

    public function guardar()
    {
        if ($this->input->method(TRUE) !== 'POST') {
            show_error('Método no permitido.', 405);
            return;
        }

        $descripcion = trim((string) $this->input->post('descripcion_mat', TRUE));
        $estatus = $this->input->post('estatus_mat', TRUE);

        if ($descripcion === '' || strlen($descripcion) > 40 ||
            !in_array($estatus, array('Activa', 'Inactiva'), TRUE)) {
            $this->session->set_flashdata('error', 'Escribe una descripción válida y selecciona el estatus.');
            redirect('Materias');
            return;
        }

        $guardada = $this->Materia_model->insertar_materia(array(
            'descripcion_mat' => $descripcion,
            'estatus_mat' => $estatus
        ));

        if ($guardada) {
            $this->session->set_flashdata('success', 'La materia se registró correctamente.');
        } else {
            log_message('error', 'No se pudo registrar una materia en SAES.');
            $this->session->set_flashdata('error', 'No se pudo registrar la materia. Verifica la base de datos.');
        }

        redirect('Materias');
    }
}

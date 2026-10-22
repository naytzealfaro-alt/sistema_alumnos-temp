<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Unidad_controll extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Unidad_model');
        $this->load->library('session');
    }

    public function index()
    {
        $data['titulo'] = 'Unidades | SAES';
        $data['contenido'] = 'formularios/unidad';
        $data['mensaje'] = $this->session->flashdata('unidad_mensaje');
        $this->load->view('layouts/main', $data);
    }

    public function guardar()
    {
        if ($this->input->method(TRUE) !== 'POST') {
            show_error('Método no permitido.', 405);
            return;
        }

        $descripcion = trim((string) $this->input->post('descripcion_uni', TRUE));
        if ($descripcion === '') {
            $this->session->set_flashdata('unidad_mensaje', 'La descripción de la unidad es obligatoria.');
            redirect('Unidad_controll');
            return;
        }

        if (!$this->Unidad_model->guardar_unidad(array('descripcion_uni' => $descripcion))) {
            log_message('error', 'No se pudo registrar una unidad académica.');
            $this->session->set_flashdata('unidad_mensaje', 'No se pudo registrar la unidad.');
            redirect('Unidad_controll');
            return;
        }

        $this->session->set_flashdata('unidad_mensaje', 'Unidad registrada correctamente.');
        redirect('Unidad_controll/lista');
    }

    public function lista()
    {
        $data['unidades'] = $this->Unidad_model->obtener_unidades();
        $data['titulo'] = 'Lista de unidades | SAES';
        $data['contenido'] = 'formularios/unidadtabla';
        $this->load->view('layouts/main', $data);
    }

    public function consultar($id_unidad)
    {
        $data['unidad'] = $this->Unidad_model->obtener_unidad($id_unidad);
        if (!$data['unidad']) {
            show_404();
            return;
        }

        $data['titulo'] = 'Editar unidad | SAES';
        $data['contenido'] = 'formularios/editar_unidad';
        $this->load->view('layouts/main', $data);
    }

    public function actualizar($id_unidad)
    {
        if ($this->input->method(TRUE) !== 'POST') {
            show_error('Método no permitido.', 405);
            return;
        }

        $descripcion = trim((string) $this->input->post('descripcion_uni', TRUE));
        if ($descripcion === '') {
            show_error('La descripción de la unidad es obligatoria.');
            return;
        }

        if ($this->Unidad_model->actualizar_unidad($id_unidad, array('descripcion_uni' => $descripcion))) {
            redirect('Unidad_controll/lista');
            return;
        }

        show_error('Error al actualizar la unidad.');
    }

    public function eliminar($id_unidad)
    {
        if ($this->input->method(TRUE) !== 'POST') {
            show_error('Método no permitido.', 405);
            return;
        }

        if ($this->Unidad_model->eliminar_unidad($id_unidad)) {
            redirect('Unidad_controll/lista');
            return;
        }

        show_error('Error al eliminar la unidad.');
    }
}

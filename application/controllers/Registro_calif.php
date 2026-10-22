<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Registro_calif extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Calificaciones_model');
        $this->load->library('session');
    }

    public function index()
    {
        $data['titulo'] = 'Registro de calificaciones | SAES';
        $data['contenido'] = 'formularios/registro_calif';
        $data['mensaje'] = $this->session->flashdata('calificacion_mensaje');

        $this->load->view('layouts/main', $data);
    }

    public function guardar()
    {
        if ($this->input->method(TRUE) !== 'POST') {
            show_error('Método no permitido.', 405);
            return;
        }

        $datos = array(
            'id_profesor'  => trim((string) $this->input->post('id_profesor', TRUE)),
            'id_alumno'    => trim((string) $this->input->post('id_alumno', TRUE)),
            'id_materia'   => trim((string) $this->input->post('id_materia', TRUE)),
            'id_grupo'     => trim((string) $this->input->post('id_grupo', TRUE)),
            'calificacion' => trim((string) $this->input->post('calificacion', TRUE))
        );

        foreach ($datos as $valor) {
            if ($valor === '') {
                $this->session->set_flashdata('calificacion_mensaje', 'Todos los campos son obligatorios.');
                redirect('Registro_calif');
                return;
            }
        }

        if (!is_numeric($datos['calificacion']) || (float) $datos['calificacion'] < 0 || (float) $datos['calificacion'] > 100) {
            $this->session->set_flashdata('calificacion_mensaje', 'La calificación debe ser un número entre 0 y 100.');
            redirect('Registro_calif');
            return;
        }

        if (!$this->Calificaciones_model->guardar_calificacion($datos)) {
            log_message('error', 'Error al guardar una calificación en la tabla calificaciones.');
            $this->session->set_flashdata('calificacion_mensaje', 'No se pudo registrar la calificación. Verifica los IDs y la estructura de la base de datos.');
            redirect('Registro_calif');
            return;
        }

        $this->session->set_flashdata('calificacion_mensaje', 'Calificación registrada correctamente.');
        redirect('Registro_calif');
    }
}
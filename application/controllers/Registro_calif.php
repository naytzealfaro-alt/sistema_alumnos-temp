<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Registro_calif extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();

        $this->load->model('Registro_calificaciones_model');
    }

    public function index()
    {
        $data['titulo'] = 'Registro de calificaciones | SAES';
        $data['contenido'] = 'formularios/registro_calif';

        $this->load->view('layouts/main', $data);
    }

    public function guardar()
    {
        $datos = array(
            'id_profesor'  => $this->input->post('id_profesor'),
            'id_alumno'    => $this->input->post('id_alumno'),
            'id_materia'   => $this->input->post('id_materia'),
            'id_grupo'     => $this->input->post('id_grupo'),
            'calificacion' => $this->input->post('calificacion')
        );

        $this->Registro_calificaciones_model->insertar_calificacion($datos);

        redirect('registro_calif');
    }
}
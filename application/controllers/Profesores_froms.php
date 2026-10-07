<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Profesores_froms extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();

        $this->load->model('Profesores_model');
    }

    public function index()
    {
        $data['titulo'] = 'Profesores | SAES';
        $data['contenido'] = 'formularios/profesores_froms';

        $this->load->view('layouts/main', $data);
    }

    public function guardar()
    {
        $datos = array(
            'nocontrol_prof' => $this->input->post('nocontrol_prof'),
            'nombre_prof'    => $this->input->post('nombre_prof'),
            'apellidop_prof' => $this->input->post('apellidop_prof'),
            'apellidom_prof' => $this->input->post('apellidom_prof'),
            'tel_prof'       => $this->input->post('tel_prof'),
            'dom_prof'       => $this->input->post('dom_prof'),
            'estatus_prof'   => $this->input->post('estatus_prof')
        );

        $this->Profesores_model->insertar_profesor($datos);

        redirect('profesores_froms');
    }

    public function lista()
    {
        $data['profesores'] = $this->Profesores_model->obtener_profesores();

        $data['titulo'] = 'Lista de profesores | SAES';
        $data['contenido'] = 'tablas/profesores';

        $this->load->view('layouts/main', $data);
    }

    public function ver($id_prof)
    {
        $data['profesor'] = $this->Profesores_model->obtener_profesor($id_prof);

        $data['titulo'] = 'Profesor | SAES';
        $data['contenido'] = 'tablas/profesor';

        $this->load->view('layouts/main', $data);
    }
}
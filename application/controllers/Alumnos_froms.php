<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Alumnos_froms extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();

        $this->load->model('Alumno_model');
    }

    public function index()
    {
        $data['titulo'] = 'Alumnos | SAES';
        $data['contenido'] = 'formularios/alumnos_froms';

        $this->load->view('layouts/main', $data);
    }

    public function lista()
    {
        $data['alumnos'] = $this->Alumno_model->obtener_alumnos();
        $data['titulo'] = 'Lista de alumnos | SAES';
        $data['contenido'] = 'tablas/alumnos';

        $this->load->view('layouts/main', $data);
    }

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

        $this->Alumno_model->insertar_alumno($datos);

        redirect('alumnos_froms');
    }
}
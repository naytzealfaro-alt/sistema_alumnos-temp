<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Lista_calif extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();

        $this->load->model('Calificaciones_model');
    }

    public function index()
    {
        $data['calificaciones'] =
            $this->Calificaciones_model->obtener_calificaciones();

        $data['titulo'] = 'Lista de calificaciones | SAES';
        $data['contenido'] = 'tablas/lista_calif';

        $this->load->view('layouts/main', $data);
    }
}
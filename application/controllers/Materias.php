<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Materias extends CI_Controller 
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Materia_model');
    }
    public function index()
    {
        $data['materias'] = $this->Materia_model->obtener_todas();
        $data['titulo']    = 'Materias | SAES';
        $data['contenido'] = 'tablas/materias';
		$this->load->view('layouts/main', $data);
        // $this->load->view('materias/lista', $data);
    }
}
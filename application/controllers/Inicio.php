<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Inicio extends CI_Controller {

    public function index()
    {
        $this->load->database();

        $this->load->model('Alumno_model');

        $data['alumnos'] = $this->Alumno_model->obtener_alumnos();

        $this->load->view('inicio', $data);
    }

}
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller
{
    public function index()
    {
        $data['titulo'] = 'SAES | Sistema de Administración Escolar';
        $data['contenido'] = 'inicio';

        $this->load->view('layouts/main', $data);
    }
}

<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Formulario extends CI_Controller {

    public function index()
    {
        $this->load->helper('url');
        $this->load->view('formulario');
    }
}
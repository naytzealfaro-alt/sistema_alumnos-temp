<?php

class Alumnos extends CI_Controller
{
    public function index()
    {
        $this->load->view('formulario_alumnos');
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

        $this->db->insert('alumnos', $datos);

        redirect('alumnos');
    }
}
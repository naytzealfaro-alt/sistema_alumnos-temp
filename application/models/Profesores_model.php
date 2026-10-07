<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Profesores_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    // Obtener todos los profesores
    public function obtener_profesores()
    {
        $query = $this->db->get('profesores');

        return $query->result();
    }

    // Obtener un profesor por su ID
    public function obtener_profesor($id_prof)
    {
        $this->db->where('id_prof', $id_prof);

        $query = $this->db->get('profesores');

        return $query->row();
    }

    // Registrar un nuevo profesor
    public function insertar_profesor($datos)
    {
        return $this->db->insert('profesores', $datos);
    }
}
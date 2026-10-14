<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Alumno_model extends CI_Model
{
    public function obtener_alumnos()
    {
        $query = $this->db->get('alumnos');

        return $query->result();
    }

    public function insertar_alumno($datos)
    {
        return $this->db->insert('alumnos', $datos);
    }
}
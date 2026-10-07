<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Registro_calificaciones_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    // Registrar una calificación
    public function insertar_calificacion($datos)
    {
        return $this->db->insert('calificaciones', $datos);
    }
}
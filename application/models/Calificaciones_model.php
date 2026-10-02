<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Calificaciones_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    // Obtener todas las calificaciones
    public function obtener_calificaciones()
    {
        $query = $this->db->get('calificaciones');

        return $query->result();
    }
}

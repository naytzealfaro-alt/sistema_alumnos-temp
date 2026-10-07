<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Materia_model extends CI_Model
{ 
    public function obtener_todas()
    {
        $this->db->order_by('descripcion_mat', 'ASC');
        return $this->db->get('materias')->result_array();
    }
} 
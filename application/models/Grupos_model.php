<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Grupos_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    // Obtener todos los grupos registrados
    public function obtener_grupos()
    {
        $query = $this->db->get('grupos');

        return $query->result();
    }

    // Guardar un nuevo grupo
    public function guardar_grupo($datos)
    {
        return $this->db->insert('grupos', $datos);
    }

    // Obtener un grupo por su ID
    public function obtener_grupo($id_grup)
    {
        $this->db->where('id_grup', $id_grup);

        return $this->db->get('grupos')->row();
    }

    // Actualizar un grupo existente
    public function actualizar_grupo($id_grup, $datos)
    {
        $this->db->where('id_grup', $id_grup);

        return $this->db->update('grupos', $datos);
    }

    // Eliminar un grupo por su ID
    public function eliminar_grupo($id_grup)
    {
        $this->db->where('id_grup', $id_grup);

        return $this->db->delete('grupos');
    }
}
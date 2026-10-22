<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Asignmat_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    // Obtener todas las asignaciones registradas
    public function obtener_asignaciones()
    {
        $query = $this->db->get('asignmat');

        return $query->result();
    }

    // Guardar una nueva asignación
    public function guardar_asignacion($datos)
    {
        return $this->db->insert('asignmat', $datos);
    }

    // Obtener una asignación por su ID
    public function obtener_asignacion($id_asignmat)
    {
        $this->db->where('id_asignmat', $id_asignmat);

        return $this->db->get('asignmat')->row();
    }

    // Actualizar una asignación
    public function actualizar_asignacion($id_asignmat, $datos)
    {
        $this->db->where('id_asignmat', $id_asignmat);

        return $this->db->update('asignmat', $datos);
    }

    // Eliminar una asignación
    public function eliminar_asignacion($id_asignmat)
    {
        $this->db->where('id_asignmat', $id_asignmat);

        return $this->db->delete('asignmat');
    }
}
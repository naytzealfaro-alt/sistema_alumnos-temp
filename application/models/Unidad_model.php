<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Unidad_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    // Obtener todas las unidades registradas
    public function obtener_unidades()
    {
        $query = $this->db->get('unidad');

        return $query->result();
    }

    // Guardar una nueva unidad
    public function guardar_unidad($datos)
    {
        return $this->db->insert('unidad', $datos);
    }

    // Obtener una unidad por su ID
    public function obtener_unidad($id_unidad)
    {
        $this->db->where('id_unidad', $id_unidad);

        return $this->db->get('unidad')->row();
    }

    // Actualizar una unidad
    public function actualizar_unidad($id_unidad, $datos)
    {
        $this->db->where('id_unidad', $id_unidad);

        return $this->db->update('unidad', $datos);
    }

    // Eliminar una unidad
    public function eliminar_unidad($id_unidad)
    {
        $this->db->where('id_unidad', $id_unidad);

        return $this->db->delete('unidad');
    }
}
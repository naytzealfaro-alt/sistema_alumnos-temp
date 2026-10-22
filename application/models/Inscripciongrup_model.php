<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Inscripciongrup_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    // Obtener todas las inscripciones registradas
    public function obtener_inscripciones()
    {
        $query = $this->db->get('inscripciongrup');

        return $query->result();
    }

    // Guardar una nueva inscripción
    public function guardar_inscripcion($datos)
    {
        return $this->db->insert('inscripciongrup', $datos);
    }

    // Obtener una inscripción por su ID
    public function obtener_inscripcion($id_insg)
    {
        $this->db->where('id_insg', $id_insg);

        return $this->db->get('inscripciongrup')->row();
    }

    // Actualizar una inscripción existente
    public function actualizar_inscripcion($id_insg, $datos)
    {
        $this->db->where('id_insg', $id_insg);

        return $this->db->update('inscripciongrup', $datos);
    }

    // Eliminar una inscripción por su ID
    public function eliminar_inscripcion($id_insg)
    {
        $this->db->where('id_insg', $id_insg);

        return $this->db->delete('inscripciongrup');
    }
}
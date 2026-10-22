<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Captcal_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    // Obtener todas las capturas registradas
    public function obtener_capturas()
    {
        $query = $this->db->get('captcal');

        return $query->result();
    }

    // Guardar una nueva captura
    public function guardar_captura($datos)
    {
        return $this->db->insert('captcal', $datos);
    }

    // Obtener una captura por su ID
    public function obtener_captura($id_captcal)
    {
        $this->db->where('id_captcal', $id_captcal);

        return $this->db->get('captcal')->row();
    }

    // Actualizar una captura existente
    public function actualizar_captura($id_captcal, $datos)
    {
        $this->db->where('id_captcal', $id_captcal);

        return $this->db->update('captcal', $datos);
    }

    // Eliminar una captura por su ID
    public function eliminar_captura($id_captcal)
    {
        $this->db->where('id_captcal', $id_captcal);

        return $this->db->delete('captcal');
    }
}

<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Calificaciones_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    // Guardar una calificación
    public function guardar_calificacion($datos)
    {
        $calificacion = array(
            'id_prof'  => $datos['id_profesor'],
            'id_alumn' => $datos['id_alumno'],
            'id_mat'   => $datos['id_materia'],
            'id_grup'  => $datos['id_grupo'],
            'calif'    => $datos['calificacion']
        );

        return $this->db->insert('calificaciones', $calificacion);
    }

    // Obtener todas las calificaciones
    public function obtener_calificaciones()
    {
        $query = $this->db->get('calificaciones');

        return $query->result();
    }

}

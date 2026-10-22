
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Materia_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    // Obtener todas las materias ordenadas alfabéticamente
    public function obtener_todas()
    {
        $this->db->order_by('descripcion_mat', 'ASC');
        return $this->db->get('materias')->result_array();
    }

    // Obtener una materia por su ID
    public function obtener_materia($id_mat)
    {
        $this->db->where('id_mat', $id_mat);
        return $this->db->get('materias')->row_array();
    }

    // Registrar una materia
    public function insertar_materia($datos)
    {
        $materia = [
            'descripcion_mat' => $datos['descripcion_mat'],
            'estatus_mat'     => $datos['estatus_mat']
        ];

        return $this->db->insert('materias', $materia);
    }

    // Actualizar una materia
    public function actualizar_materia($id_mat, $datos)
    {
        $materia = [
            'descripcion_mat' => $datos['descripcion_mat'],
            'estatus_mat'     => $datos['estatus_mat']
        ];

        $this->db->where('id_mat', $id_mat);
        return $this->db->update('materias', $materia);
    }

    // Eliminar una materia
    public function eliminar_materia($id_mat)
    {
        $this->db->where('id_mat', $id_mat);
        return $this->db->delete('materias');
    }
}


<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Profesores_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    // Obtener todos los profesores
    public function obtener_profesores()
    {
        $this->db->order_by('apellidop_prof', 'ASC');

        $query = $this->db->get('profesores');

        return $query->result();
    }

    // Obtener un profesor por su ID
    public function obtener_profesor($id_prof)
    {
        $this->db->where('id_prof', $id_prof);

        $query = $this->db->get('profesores');

        return $query->row();
    }

    // Registrar un nuevo profesor
    public function insertar_profesor($datos)
    {
        $profesor = [
            'nocontrol_prof' => $datos['nocontrol_prof'],
            'nombre_prof'    => $datos['nombre_prof'],
            'apellidop_prof' => $datos['apellidop_prof'],
            'apellidom_prof' => $datos['apellidom_prof'],
            'tel_prof'       => $datos['tel_prof'],
            'dom_prof'       => $datos['dom_prof'],
            'estatus_prof'   => $datos['estatus_prof']
        ];

        return $this->db->insert('profesores', $profesor);
    }

    // Actualizar un profesor
    public function actualizar_profesor($id_prof, $datos)
    {
        $profesor = [
            'nocontrol_prof' => $datos['nocontrol_prof'],
            'nombre_prof'    => $datos['nombre_prof'],
            'apellidop_prof' => $datos['apellidop_prof'],
            'apellidom_prof' => $datos['apellidom_prof'],
            'tel_prof'       => $datos['tel_prof'],
            'dom_prof'       => $datos['dom_prof'],
            'estatus_prof'   => $datos['estatus_prof']
        ];

        $this->db->where('id_prof', $id_prof);

        return $this->db->update('profesores', $profesor);
    }

    // Eliminar un profesor
    public function eliminar_profesor($id_prof)
    {
        $this->db->where('id_prof', $id_prof);

        return $this->db->delete('profesores');
    }
}


<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Alumno_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    // Obtener todos los alumnos
    public function obtener_alumnos()
    {
        $this->db->order_by('apaterno_al', 'ASC');

        $query = $this->db->get('alumnos');

        return $query->result();
    }

    // Obtener un alumno por su ID
    public function obtener_alumno($id_alumn)
    {
        $this->db->where('id_alumn', $id_alumn);

        $query = $this->db->get('alumnos');

        return $query->row();
    }

    // Registrar un nuevo alumno
    public function insertar_alumno($datos)
    {
        $alumno = [
            'nombre_al'    => $datos['nombre_al'],
            'apaterno_al'  => $datos['apaterno_al'],
            'amaterno_al'  => $datos['amaterno_al'],
            'matricula_al' => $datos['matricula_al'],
            'tel_al'       => $datos['tel_al'],
            'dom_al'       => $datos['dom_al'],
            'estatus_al'   => $datos['estatus_al']
        ];

        return $this->db->insert('alumnos', $alumno);
    }

    // Actualizar un alumno
    public function actualizar_alumno($id_alumn, $datos)
    {
        $alumno = [
            'nombre_al'    => $datos['nombre_al'],
            'apaterno_al'  => $datos['apaterno_al'],
            'amaterno_al'  => $datos['amaterno_al'],
            'matricula_al' => $datos['matricula_al'],
            'tel_al'       => $datos['tel_al'],
            'dom_al'       => $datos['dom_al'],
            'estatus_al'   => $datos['estatus_al']
        ];

        $this->db->where('id_alumn', $id_alumn);

        return $this->db->update('alumnos', $alumno);
    }

    // Eliminar un alumno
    public function eliminar_alumno($id_alumn)
    {
        $this->db->where('id_alumn', $id_alumn);

        return $this->db->delete('alumnos');
    }
}

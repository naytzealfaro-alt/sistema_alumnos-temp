<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuarios_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    // Obtener todos los usuarios
    public function obtener_usuarios()
    {
        $query = $this->db->get('usuarios');

        return $query->result();
    }

    // Obtener un usuario por su ID
    public function obtener_usuario($id_usuario)
    {
        $this->db->where('id_usuario', $id_usuario);

        $query = $this->db->get('usuarios');

        return $query->row();
    }

    // Registrar un nuevo usuario
    public function insertar_usuario($datos)
    {
        return $this->db->insert('usuarios', $datos);
    }
}
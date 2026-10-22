<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Usuarios_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function obtener_usuarios()
    {
        $query = $this->db->get('usuarios');

        return $query->result();
    }

    public function insertar_usuario($datos)
    {
        return $this->db->insert('usuarios', $datos);
    }
}
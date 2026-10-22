<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Usuarios_model extends CI_Model
{
    public function obtener_usuarios()
    {
        return $this->db->get('usuarios')->result();
    }

    public function obtener_usuario($id_usuario)
    {
        return $this->db->get_where('usuarios', array(
            'id_usuario' => $id_usuario
        ))->row();
    }

    public function guardar_usuario($datos)
    {
        $usuario = array(
            'id_usuario'       => $datos['id_usuario'],
            'contraseña_usua'  => password_hash($datos['contraseña_usua'], PASSWORD_DEFAULT),
            'descricpion_usua' => $datos['descricpion_usua'],
            'estatus_usua'     => $datos['estatus_usua']
        );

        return $this->db->insert('usuarios', $usuario);
    }

    public function actualizar_usuario($id_usuario, $datos)
    {
        $usuario = array(
            'descricpion_usua' => $datos['descricpion_usua'],
            'estatus_usua'     => $datos['estatus_usua']
        );

        if (!empty($datos['contraseña_usua'])) {
            $usuario['contraseña_usua'] = password_hash($datos['contraseña_usua'], PASSWORD_DEFAULT);
        }

        $this->db->where('id_usuario', $id_usuario);
        return $this->db->update('usuarios', $usuario);
    }

    public function eliminar_usuario($id_usuario)
    {
        $this->db->where('id_usuario', $id_usuario);
        return $this->db->delete('usuarios');
    }

    public function buscar_usuario_login($id_usuario)
    {
        $this->db->where('id_usuario', $id_usuario);
        $this->db->where_in('estatus_usua', array('alta', 'Activo', 'activo'));
        return $this->db->get('usuarios')->row();
    }

    public function verificar_usuario($id_usuario, $contraseña)
    {
        if ($id_usuario === '' || $contraseña === '') {
            return FALSE;
        }

        $usuario = $this->buscar_usuario_login($id_usuario);

        if (!$usuario || empty($usuario->contraseña_usua)) {
            return FALSE;
        }

        // Las contraseñas nuevas se guardan con password_hash().
        if (password_verify($contraseña, $usuario->contraseña_usua)) {
            return $usuario;
        }

        // Compatibilidad temporal: convierte contraseñas antiguas en texto plano a hash
        // solo después de comprobar que la contraseña ingresada coincide exactamente.
        if (hash_equals((string) $usuario->contraseña_usua, $contraseña)) {
            $nuevo_hash = password_hash($contraseña, PASSWORD_DEFAULT);
            $this->db->where('id_usuario', $usuario->id_usuario);
            $this->db->update('usuarios', array('contraseña_usua' => $nuevo_hash));
            $usuario->contraseña_usua = $nuevo_hash;
            return $usuario;
        }

        return FALSE;
    }
}
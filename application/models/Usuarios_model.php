
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

        return $this->db->get('usuarios')->row();
    }

    // Registrar un usuario nuevo
    public function guardar_usuario($datos)
    {
        $usuario = array(
            'id_usuario'       => $datos['id_usuario'],
            'contraseña_usua'  => password_hash(
                $datos['contraseña_usua'],
                PASSWORD_DEFAULT
            ),
            'descripcion_usua' => $datos['descricpion_usua'],
            'estatus_usua'     => $datos['estatus_usua']
        );

        return $this->db->insert('usuarios', $usuario);
    }

    // Actualizar los datos de un usuario
    public function actualizar_usuario($id_usuario, $datos)
    {
        $usuario = array(
            'descripcion_usua' => $datos['descricpion_usua'],
            'estatus_usua'     => $datos['estatus_usua']
        );

        // Cambiar la contraseña solo si se proporciona una nueva
        if (!empty($datos['contraseña_usua'])) {
            $usuario['contraseña_usua'] = password_hash(
                $datos['contraseña_usua'],
                PASSWORD_DEFAULT
            );
        }

        $this->db->where('id_usuario', $id_usuario);

        return $this->db->update('usuarios', $usuario);
    }

    // Eliminar un usuario por su ID
    public function eliminar_usuario($id_usuario)
    {
        $this->db->where('id_usuario', $id_usuario);

        return $this->db->delete('usuarios');
    }

    // Buscar un usuario activo para iniciar sesión
    public function buscar_usuario_login($id_usuario)
    {
        $this->db->where('id_usuario', $id_usuario);
        $this->db->where('estatus_usua', 'alta');

        return $this->db->get('usuarios')->row();
    }

    // Verificar las credenciales de inicio de sesión
    public function verificar_usuario($id_usuario, $contraseña)
    {
        $usuario = $this->buscar_usuario_login($id_usuario);

        if (!$usuario) {
            return false;
        }

        if (password_verify(
            $contraseña,
            $usuario->contraseña_usua
        )) {
            return $usuario;
        }

        return false;
    }
}

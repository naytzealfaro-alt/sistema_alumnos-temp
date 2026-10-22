
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuarios_froms_controll extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();

        // Cargar el modelo de usuarios
        $this->load->model('Usuarios_model');
    }

    // Mostrar el formulario de registro
    public function index()
    {
        $this->load->view('usuarios_froms');
    }

    // Registrar un usuario
    public function guardar()
    {
        $datos = array(
            'id_usuario'       => $this->input->post('id_usuario'),
            'contraseña_usua'  => $this->input->post('contraseña_usua'),
            'descricpion_usua' => $this->input->post('descricpion_usua'),
            'estatus_usua'     => $this->input->post('estatus_usua')
        );

        // Validar los campos obligatorios
        foreach ($datos as $valor) {
            if ($valor === NULL || trim($valor) === '') {
                show_error('Todos los campos son obligatorios.');
                return;
            }
        }

        // Verificar si el ID ya está registrado
        $usuario_existente =
            $this->Usuarios_model->obtener_usuario(
                $datos['id_usuario']
            );

        if ($usuario_existente) {
            show_error('El ID de usuario ya está registrado.');
            return;
        }

        // Guardar el usuario mediante el modelo
        if ($this->Usuarios_model->guardar_usuario($datos)) {
            echo "<script>
                alert('Usuario registrado correctamente');
                window.location.href='" .
                site_url('usuarios_froms_controll') . "';
            </script>";
        } else {
            show_error('Error al registrar el usuario.');
        }
    }

    // Mostrar la lista de usuarios
    public function lista()
    {
        $datos['usuarios'] =
            $this->Usuarios_model->obtener_usuarios();

        $this->load->view('lista_usuarios', $datos);
    }
}

<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Usuarios_froms extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();

        $this->load->model('Usuarios_model');
        $this->load->library('session');
    }

    public function login()
    {
        $data['titulo'] = 'Login | SAES';
        $data['contenido'] = 'formularios/login';
        $data['error'] = $this->session->flashdata('login_error');

        $this->load->view('layouts/main', $data);
    }

    public function entrar()
    {
        if ($this->input->method(TRUE) !== 'POST') {
            show_error('Método no permitido.', 405);
            return;
        }

        $id_usuario = trim((string) $this->input->post('id_usuario', TRUE));
        $contraseña = (string) $this->input->post('contraseña_usua');

        $usuario = $this->Usuarios_model->verificar_usuario($id_usuario, $contraseña);

        if ($usuario) {
            $this->session->sess_regenerate(TRUE);
            $this->session->set_userdata(array(
                'usuario_id' => $usuario->id_usuario,
                'usuario_descripcion' => $usuario->descricpion_usua,
                'autenticado' => TRUE
            ));

            redirect();
            return;
        }

        $this->session->set_flashdata('login_error', 'ID de usuario o contraseña incorrectos.');
        redirect('Usuarios_froms/login');
    }

    public function salir()
    {
        $this->session->sess_destroy();
        redirect('Usuarios_froms/login');
    }

    public function index()
    {
        $data['titulo'] = 'Usuarios | SAES';
        $data['contenido'] = 'formularios/usuarios_froms';

        $this->load->view('layouts/main', $data);
    }

    public function guardar()
    {
        if ($this->input->method(TRUE) !== 'POST') {
            show_error('Método no permitido.', 405);
            return;
        }

        $datos = array(
            'id_usuario'       => trim((string) $this->input->post('id_usuario', TRUE)),
            'contraseña_usua'  => (string) $this->input->post('contraseña_usua'),
            'descricpion_usua' => trim((string) $this->input->post('descricpion_usua', TRUE)),
            'estatus_usua'     => $this->input->post('estatus_usua', TRUE)
        );

        if ($datos['id_usuario'] === '' || $datos['contraseña_usua'] === '' || $datos['descricpion_usua'] === '') {
            $this->session->set_flashdata('usuario_error', 'Completa todos los campos obligatorios.');
            redirect('Usuarios_froms');
            return;
        }

        if (!in_array($datos['estatus_usua'], array('alta', 'baja'), TRUE)) {
            $this->session->set_flashdata('usuario_error', 'Selecciona un estatus válido.');
            redirect('Usuarios_froms');
            return;
        }

        if ($this->Usuarios_model->obtener_usuario($datos['id_usuario'])) {
            $this->session->set_flashdata('usuario_error', 'Ese ID de usuario ya existe.');
            redirect('Usuarios_froms');
            return;
        }

        if (!$this->Usuarios_model->guardar_usuario($datos)) {
            log_message('error', 'No se pudo registrar un usuario en la tabla usuarios.');
            $this->session->set_flashdata('usuario_error', 'No se pudo registrar el usuario. Verifica la configuración de la base de datos.');
            redirect('Usuarios_froms');
            return;
        }

        $this->session->set_flashdata('usuario_ok', 'Usuario registrado correctamente.');
        redirect('Usuarios_froms');
    }

    public function lista()
    {
        $data['usuarios'] = $this->Usuarios_model->obtener_usuarios();
        $data['titulo'] = 'Lista de usuarios | SAES';
        $data['contenido'] = 'tablas/usuarios';

        $this->load->view('layouts/main', $data);
    }
}
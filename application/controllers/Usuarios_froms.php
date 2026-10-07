<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Usuarios_froms extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();

        $this->load->model('Usuarios_model');
        $this->load->library('session');
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
        $id_usuario = $this->input->post('id_usuario');
        $contraseña = $this->input->post('contraseña_usua');

        $usuario = $this->Usuarios_model->validar_login($id_usuario, $contraseña);

        if ($usuario) {
            $this->load->library('session');
            $this->session->set_userdata('usuario_id', $usuario->id_usuario);
            $this->session->set_userdata('usuario_descripcion', $usuario->descricpion_usua);
            redirect();
        }

        $this->load->library('session');
        $this->session->set_flashdata('login_error', 'ID de usuario o contraseña incorrectos.');
        redirect('Usuarios_froms/login');
    }

    public function salir()
    {
        $this->load->library('session');
        $this->session->sess_destroy();
        redirect();
    }

    public function index()
    {
        $data['titulo'] = 'Usuarios | SAES';
        $data['contenido'] = 'formularios/usuarios_froms';

        $this->load->view('layouts/main', $data);
    }

    public function guardar()
    {
        $datos = array(
            'id_usuario'       => $this->input->post('id_usuario'),
            'contraseña_usua'  => $this->input->post('contraseña_usua'),
            'descricpion_usua' => $this->input->post('descricpion_usua'),
            'estatus_usua'     => $this->input->post('estatus_usua')
        );

        $this->Usuarios_model->insertar_usuario($datos);

        redirect('usuarios_froms');
    }

    public function lista()
    {
        $data['usuarios'] = $this->Usuarios_model->obtener_usuarios();

        $data['titulo'] = 'Lista de usuarios | SAES';
        $data['contenido'] = 'tablas/usuarios';

        $this->load->view('layouts/main', $data);
    }
}
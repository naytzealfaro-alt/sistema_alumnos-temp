<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Grupos_controll extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Grupos_model');
        $this->load->library('session');
        $this->load->helper(array('url', 'form'));
    }

    // Mostrar el formulario y los grupos registrados dentro del layout común.
    public function index()
    {
        $data['titulo'] = 'SAES | Gestión de grupos';
        $data['contenido'] = 'formularios/grupos';
        $data['grupos'] = $this->Grupos_model->obtener_grupos();

        $this->load->view('layouts/main', $data);
    }

    public function guardar()
    {
        if ($this->input->method(TRUE) !== 'POST') {
            show_error('Método no permitido.', 405);
            return;
        }

        $descripcion = trim((string) $this->input->post('descripcion_grup', TRUE));
        $estatus = $this->input->post('estatus_grup', TRUE);

        if ($descripcion === '' || strlen($descripcion) > 40 ||
            !in_array($estatus, array('Activo', 'Inactivo'), TRUE)) {
            $this->session->set_flashdata('error', 'Verifica la descripción y el estatus del grupo.');
            redirect('Grupos_controll');
            return;
        }

        $datos = array(
            'descripcion_grup' => $descripcion,
            'estatus_grup' => $estatus
        );

        if ($this->Grupos_model->guardar_grupo($datos)) {
            $this->session->set_flashdata('success', 'El grupo se registró correctamente.');
        } else {
            $this->session->set_flashdata('error', 'No se pudo registrar el grupo.');
        }

        redirect('Grupos_controll');
    }

    public function consultar($id_grup)
    {
        $grupo = $this->Grupos_model->obtener_grupo($id_grup);
        if (!$grupo) {
            show_404();
            return;
        }

        $data['grupo'] = $grupo;
        $this->load->view('editar_grupo', $data);
    }

    public function actualizar($id_grup)
    {
        $descripcion = trim((string) $this->input->post('descripcion_grup', TRUE));
        $estatus = $this->input->post('estatus_grup', TRUE);

        if ($descripcion === '' || strlen($descripcion) > 40 ||
            !in_array($estatus, array('Activo', 'Inactivo'), TRUE)) {
            $this->session->set_flashdata('error', 'Verifica la descripción y el estatus del grupo.');
            redirect('Grupos_controll');
            return;
        }

        $datos = array(
            'descripcion_grup' => $descripcion,
            'estatus_grup' => $estatus
        );

        if ($this->Grupos_model->actualizar_grupo($id_grup, $datos)) {
            $this->session->set_flashdata('success', 'El grupo se actualizó correctamente.');
        } else {
            $this->session->set_flashdata('error', 'No se pudo actualizar el grupo.');
        }

        redirect('Grupos_controll');
    }

    public function eliminar($id_grup)
    {
        if ($this->Grupos_model->eliminar_grupo($id_grup)) {
            $this->session->set_flashdata('success', 'El grupo se eliminó correctamente.');
        } else {
            $this->session->set_flashdata('error', 'No se pudo eliminar el grupo.');
        }

        redirect('Grupos_controll');
    }
}

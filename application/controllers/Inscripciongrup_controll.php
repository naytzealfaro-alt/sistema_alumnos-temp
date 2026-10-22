<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Inscripciongrup_controll extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Inscripciongrup_model');
        $this->load->library('session');
        $this->load->helper(array('url', 'form'));
    }

    public function index()
    {
        $data['inscripciones'] = $this->Inscripciongrup_model->obtener_inscripciones();
        $data['titulo'] = 'Inscripción a grupos | SAES';
        $data['contenido'] = 'formularios/inscripciongrup';
        $this->load->view('layouts/main', $data);
    }

    public function guardar()
    {
        if ($this->input->method(TRUE) !== 'POST') {
            show_error('Método no permitido.', 405);
            return;
        }

        $id_grup = $this->input->post('id_grup', TRUE);
        $id_alumn = $this->input->post('id_alumn', TRUE);
        $estatus = $this->input->post('estatus_insg', TRUE);

        if ($id_grup === NULL || $id_grup === '' || !ctype_digit((string)$id_grup) ||
            (int)$id_grup < 1 || $id_alumn === NULL || $id_alumn === '' ||
            !ctype_digit((string)$id_alumn) || (int)$id_alumn < 1 ||
            !in_array($estatus, array('Activa', 'Inactiva'), TRUE)) {
            $this->session->set_flashdata('error', 'Verifica los IDs de grupo y alumno, y selecciona un estatus válido.');
            redirect('Inscripciongrup_controll');
            return;
        }

        $datos = array(
            'id_grup' => (int)$id_grup,
            'id_alumn' => (int)$id_alumn,
            'estatus_insg' => $estatus
        );

        if ($this->Inscripciongrup_model->guardar_inscripcion($datos)) {
            $this->session->set_flashdata('success', 'La inscripción se registró correctamente.');
        } else {
            log_message('error', 'Error al registrar inscripción a grupo: ' . $this->db->last_query());
            $this->session->set_flashdata('error', 'No se pudo registrar la inscripción. Verifica que el grupo y el alumno existan.');
        }

        redirect('Inscripciongrup_controll');
    }
}

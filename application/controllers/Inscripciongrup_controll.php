
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

    // Mostrar formulario e inscripciones registradas
    public function index()
    {
        $datos['inscripciones'] =
            $this->Inscripciongrup_model->obtener_inscripciones();

        $this->load->view('inscripciongrup', $datos);
    }

    // Guardar una nueva inscripción
    public function guardar()
    {
        $id_grupo = $this->input->post('id_grupo', TRUE);
        $id_alumno = $this->input->post('id_alumno', TRUE);
        $estatus = $this->input->post('estatus_insg', TRUE);

        if (
            $id_grupo === NULL || $id_grupo === '' ||
            !is_numeric($id_grupo) || (int)$id_grupo < 1 ||
            $id_alumno === NULL || $id_alumno === '' ||
            !is_numeric($id_alumno) || (int)$id_alumno < 1 ||
            !in_array($estatus, array('Activa', 'Inactiva'), TRUE)
        ) {
            $this->session->set_flashdata(
                'error',
                'Verifica que los IDs sean válidos y selecciona un estatus.'
            );

            redirect('Inscripciongrup_controll');
            return;
        }

        $datos = array(
            'id_grupo' => (int)$id_grupo,
            'id_alumno' => (int)$id_alumno,
            'estatus_insg' => $estatus
        );

        if ($this->Inscripciongrup_model->guardar_inscripcion($datos)) {
            $this->session->set_flashdata(
                'success',
                'La inscripción se registró correctamente.'
            );
        } else {
            $this->session->set_flashdata(
                'error',
                'No se pudo registrar la inscripción.'
            );
        }

        redirect('Inscripciongrup_controll');
    }

    // Consultar una inscripción por su ID
    public function consultar($id_insg)
    {
        $inscripcion =
            $this->Inscripciongrup_model->obtener_inscripcion($id_insg);

        if (!$inscripcion) {
            show_404();
            return;
        }

        $datos['inscripcion'] = $inscripcion;

        $this->load->view('editar_inscripciongrup', $datos);
    }

    // Actualizar una inscripción
    public function actualizar($id_insg)
    {
        $id_grupo = $this->input->post('id_grupo', TRUE);
        $id_alumno = $this->input->post('id_alumno', TRUE);
        $estatus = $this->input->post('estatus_insg', TRUE);

        if (
            $id_grupo === NULL || $id_grupo === '' ||
            !is_numeric($id_grupo) || (int)$id_grupo < 1 ||
            $id_alumno === NULL || $id_alumno === '' ||
            !is_numeric($id_alumno) || (int)$id_alumno < 1 ||
            !in_array($estatus, array('Activa', 'Inactiva'), TRUE)
        ) {
            $this->session->set_flashdata(
                'error',
                'Verifica que los IDs sean válidos y selecciona un estatus.'
            );

            redirect('Inscripciongrup_controll');
            return;
        }

        $datos = array(
            'id_grupo' => (int)$id_grupo,
            'id_alumno' => (int)$id_alumno,
            'estatus_insg' => $estatus
        );

        if (
            $this->Inscripciongrup_model->actualizar_inscripcion(
                $id_insg,
                $datos
            )
        ) {
            $this->session->set_flashdata(
                'success',
                'La inscripción se actualizó correctamente.'
            );
        } else {
            $this->session->set_flashdata(
                'error',
                'No se pudo actualizar la inscripción.'
            );
        }

        redirect('Inscripciongrup_controll');
    }

    // Eliminar una inscripción
    public function eliminar($id_insg)
    {
        if (
            $this->Inscripciongrup_model->eliminar_inscripcion($id_insg)
        ) {
            $this->session->set_flashdata(
                'success',
                'La inscripción se eliminó correctamente.'
            );
        } else {
            $this->session->set_flashdata(
                'error',
                'No se pudo eliminar la inscripción.'
            );
        }

        redirect('Inscripciongrup_controll');
    }
}

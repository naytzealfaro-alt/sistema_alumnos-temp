
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Captcal_controll extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();

        $this->load->model('Captcal_model');
        $this->load->library('session');
        $this->load->helper(array('url', 'form'));
    }

    // Mostrar el formulario y las capturas registradas
    public function index()
    {
        $datos['capturas'] = $this->Captcal_model->obtener_capturas();

        $this->load->view('captcal', $datos);
    }

    // Guardar una nueva captura
    public function guardar()
    {
        $datos = array(
            'id_alumn'  => $this->input->post('id_alumn', TRUE),
            'id_mat'    => $this->input->post('id_mat', TRUE),
            'id_unidad' => $this->input->post('id_unidad', TRUE),
            'id_prof'   => $this->input->post('id_prof', TRUE)
        );

        // Validar que todos los campos estén completos
        foreach ($datos as $valor) {
            if ($valor === NULL || $valor === '' ||
                !is_numeric($valor) || (int)$valor < 1) {

                $this->session->set_flashdata(
                    'error',
                    'Ingresa IDs válidos en todos los campos.'
                );

                redirect('Captcal_controll');
                return;
            }
        }

        // Guardar en la base de datos
        if ($this->Captcal_model->guardar_captura($datos)) {
            $this->session->set_flashdata(
                'success',
                'La captura se registró correctamente.'
            );
        } else {
            $this->session->set_flashdata(
                'error',
                'No se pudo registrar la captura.'
            );
        }

        redirect('Captcal_controll');
    }

    // Consultar una captura por su ID
    public function consultar($id_captcal)
    {
        $captura = $this->Captcal_model->obtener_captura($id_captcal);

        if (!$captura) {
            show_404();
            return;
        }

        $datos['captura'] = $captura;

        $this->load->view('editar_captcal', $datos);
    }

    // Actualizar una captura existente
    public function actualizar($id_captcal)
    {
        $datos = array(
            'id_alumn'  => $this->input->post('id_alumn', TRUE),
            'id_mat'    => $this->input->post('id_mat', TRUE),
            'id_unidad' => $this->input->post('id_unidad', TRUE),
            'id_prof'   => $this->input->post('id_prof', TRUE)
        );

        foreach ($datos as $valor) {
            if ($valor === NULL || $valor === '' ||
                !is_numeric($valor) || (int)$valor < 1) {

                $this->session->set_flashdata(
                    'error',
                    'Ingresa IDs válidos en todos los campos.'
                );

                redirect('Captcal_controll');
                return;
            }
        }

        if ($this->Captcal_model->actualizar_captura($id_captcal, $datos)) {
            $this->session->set_flashdata(
                'success',
                'La captura se actualizó correctamente.'
            );
        } else {
            $this->session->set_flashdata(
                'error',
                'No se pudo actualizar la captura.'
            );
        }

        redirect('Captcal_controll');
    }

    // Eliminar una captura
    public function eliminar($id_captcal)
    {
        if ($this->Captcal_model->eliminar_captura($id_captcal)) {
            $this->session->set_flashdata(
                'success',
                'La captura se eliminó correctamente.'
            );
        } else {
            $this->session->set_flashdata(
                'error',
                'No se pudo eliminar la captura.'
            );
        }

        redirect('Captcal_controll');
    }
}

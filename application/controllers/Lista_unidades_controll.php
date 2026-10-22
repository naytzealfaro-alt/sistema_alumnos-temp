
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Lista_unidades_controll extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();

        // Cargar el modelo de unidades
        $this->load->model('Unidad_model');
    }

    // Mostrar la lista de unidades
    public function index()
    {
        // Obtener todas las unidades registradas
        $datos['unidades'] =
            $this->Unidad_model->obtener_unidades();

        // Cargar la vista y enviar los datos
        $this->load->view('lista_unidades', $datos);
    }
}

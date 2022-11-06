<?php

class PropiedadesC extends CI_Controller
{

    public function show(){
        $this->load->model('PropiedadesM');
        $data ['propiedades'] = $this->PropiedadesM->getPropiedades();

        $this->load->view('headers/head.php');
        $this->load->view('headers/menu.php');
        $this->load->view('vistaPropiedades/listaPropiedades.php', $data);
        $this->load->view('headers/footer.php');
    }

    public function editarPropiedad($idPropiedad){
        $this->load->model('PropiedadesM');
        $data ['propiedades'] = $this->PropiedadesM->getPropiedad($idPropiedad);

        $this->load->view('headers/head.php');
        $this->load->view('headers/menu.php');
        $this->load->view('vistaPropiedades/editarPropiedad.php', $data);
        $this->load->view('headers/footer.php');
    }

    public function eliminarPropiedad($idPropiedad){
        $this->load->model('PropiedadesM');
        if($this->PropiedadesM->deletePropiedad($idPropiedad)){
            redirect(base_url('index.php/PropiedadesC/show'), 'refresh');
        }
    }

    public function insertarPropiedad(){
        $this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');
        if ($this->form_validation->run() == FALSE)
        {
            $this->load->view('headers/head.php');
            $this->load->view('headers/menu.php');
            $this->load->view('vistaPropiedades/insertarPropiedad');
            $this->load->view('headers/footer.php');
        }
        else
        {
            //$this->load->view('formsuccess');
        }
    }

    public function getPropiedad($IdPropiedad){
        $this->load->view('headers/head.php');
        $this->load->view('headers/menu.php');
        $this->load->view('headers/footer.php');
    }
}?>


} ?>
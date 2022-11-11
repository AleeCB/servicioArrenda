<?php

class PropiedadesC extends CI_Controller
{
    public function show(){
        $this->load->model('PropiedadesM');
        $data ['propiedades'] = $this->PropiedadesM->getPropiedades();

          $this->load->helper(array('form', 'url'));
            
                $this->load->library('form_validation');

                $this->form_validation->set_rules('servicio', 'servicio', 'required');
                if ($this->form_validation->run() == FALSE)
                {
                    $this->load->view('headers/head.php');
                    $this->load->view('headers/menu.php');
<<<<<<< HEAD
                    $this->load->view('vistaReservas/insertarReserva.php', $data);
                    $this->load->view('headers/footer.php');    
=======
                    $this->load->view('vistaPropiedades/listaPropiedades.php', $data);
                    $this->load->view('headers/footer.php');
>>>>>>> 34e9e23e0ecd106bd0d99815c8785bed8696baa0
                }
                else
                {
                        $this->load->view('formsuccess');
                }
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
        $this->load->model('PropiedadesM');
        $this->load->helper(array('form', 'url'));
        
                $this->load->library('form_validation');
                $this->form_validation->set_rules('nombre', 'nombre', 'required');
                if ($this->form_validation->run() == FALSE)
                {
                        $this->load->view('headers/head.php');
                        $this->load->view('headers/menu.php');
                        $this->load->view('headers/footer.php');
                }
                else
                {
                        $this->PropiedadesM->insertarPropiedad();
                        redirect(base_url('index.php/PropiedadesC/show'), 'refresh');
                }
    }

    public function getPropiedad($IdPropiedad){
        $this->load->view('headers/head.php');
        $this->load->view('headers/menu.php');
        $this->load->view('headers/footer.php');
    }

    public function navegacionCasa(){
        $this->load->model('PropiedadesM');
        $data ['propiedades'] = $this->PropiedadesM->getPropiedades();

        $this->load->view('headers/head.php');
        $this->load->view('headers/menu.php');
        $this->load->view('vistaPropiedades/navegacionCasa.php', $data);
        $this->load->view('headers/footer.php');
    }

}?>
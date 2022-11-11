<?php

class PrincipalC extends CI_Controller
{
//hola
    public function major(){
        $this->load->model('PrincipalM');
        $data ['propiedades'] = $this->PrincipalM->getPropiedades();

          $this->load->helper(array('form', 'url'));
        
                $this->load->library('form_validation');

                $this->form_validation->set_rules('servicio', 'servicio', 'required');
                if ($this->form_validation->run() == FALSE)
                {
                    $this->load->view('headersP/head.php');
                    $this->load->view('headersP/menu.php');
                    $this->load->view('vistaPrincipal/inicio.php', $data);
                    $this->load->view('headersP/footer.php');
                }
                else
                {
                        $this->load->view('formsuccess');
                }

    } 

    

} ?>